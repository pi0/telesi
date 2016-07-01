var app = new Vue({
    el: '#app',
    data: {
        endpoint: '/index.php',
        user: null,
        username: '',
        password: '',
        peers: null,
        dialogs: [],
        profile: null,
        draft: '',
        searchUser: '',
        searchUserResult: null,
        selectedUser: null,
        cgName: '',
        cgUsername: '',
        searchHashtag: '',
        searchHashtagResult: null,
        gpName: '',
        gpUsername: '',
        count: 5,
    },

    computed: {
        can_send: function () {
            if (!app.profile)
                return false;
            if (app.profile.type == 'channel' &&
                app.profile.admin != app.user._id)
                return false;

            if (app.profile.type == 'group' && !app.profile.is_friend)
                return false;

            return true;
        },
        modal_open:function () {
            return this.user==null;
        }
    },

    methods: {

        error: function (message) {
            alert(message);
        },

        auth: function (action) {
            app.user = null;
            console.log('Auth:' + action);
            $.ajax({
                url: app.endpoint + '/auth/' + action + '?username=' + app.username + '&password=' + app.password,
                dataType: "json"
            })
                .success(function (r) {
                    if (r.error != null) {
                        app.error(r.error);
                    } else {
                        app.user = r;
                    }
                });
        },

        refresh: function () {

            // Reload chats list
            $.ajax({url: app.endpoint + '/peers', dataType: "json"})
                .success(function (r) {
                    app.chats = r;
                });

            if (app.profile)
                $.ajax({
                    url: app.endpoint + '/messages?id=' + app.profile._id + '&count=' + app.count,
                    dataType: "json"
                }).success(
                    function (m) {
                        app.dialogs = m;
                    }
                )

        },

        openChat: function (id) {
            $('#searchUserModal').modal('hide');
            $.ajax({url: app.endpoint + '/profile?id=' + id, dataType: "json"}).success(function (t) {
                console.log('chat oppened');
                app.count = 5;
                app.profile = t;
            });
        },

        sendMessage: function () {
            // Get Input
            var text = encodeURIComponent(app.draft);

            // Send Message
            $.ajax({
                url: app.endpoint + '/send?to=' + app.profile._id + '&text=' + text,
                success: function (m) {
                    app.refresh();
                }
            });

            // Clear Input
            app.draft = "";
        },

        reopenChat: function () {
            var id = app.profile._id + "";
            app.profile = null;
            app.openChat(id);
        },

        updateProfile: function () {
            console.log("Updating profile ...");
            $.ajax({
                url: app.endpoint + '/updateProfile',
                type: "POST",
                data: {'data': app.user}
            }).success(
                function (r) {
                    alert('Profile updated!!');
                    console.log(r)
                }
            )
        },

        doSearchUser: function () {

            $.ajax({
                url: app.endpoint + '/searchUser?&q=' + app.searchUser,
                dataType: 'json',
                success: function (q) {
                    app.searchUserResult = q;
                }
            });


        },

        selectUser: function (username, _id) {
            console.log(username + ' ' + _id);
            app.selectedUser = {
                username: username,
                _id: _id,
            }
        },

        addFriend: function (_id) {
            $.ajax({url: app.endpoint + '/addFriend?id=' + _id}).success(function (t) {
                console.log('Friend Added!');
                app.reopenChat();
            });

        },

        report: function (_id) {

            console.log(_id);
            $.ajax({url: app.endpoint + '/report?id=' + _id}).success(function (t) {
                app.profile.is_reported = true;
                app.refresh();
            });
        },

        unfriend: function (_id) {
            console.log("fefef");
            $.ajax({url: app.endpoint + '/unfriend?id=' + _id}).success(function (t) {
                console.log('Unfriend');
                app.reopenChat();
            });

        },

        createChannel: function () {
            $.ajax({
                url: app.endpoint + '/createChannel?name=' + app.cgName + '&username=' + app.cgUsername,
                success: function (m) {
                    app.refresh();
                }
            });
            app.cgName = "";
            app.cgUsername = "";
        },

        createGroup: function () {
            $.ajax({
                url: app.endpoint + '/createGroup?name=' + app.gpName + '&username=' + app.gpUsername,
                success: function (m) {
                    app.refresh();
                }
            });
            app.gpName = "";
            app.gpUsername = "";

        },

        doSearchHashtag: function () {

            if (app.searchHashtag == "")
                return;

            $.ajax({
                url: app.endpoint + '/searchHashtag?q=' + app.searchHashtag,
                dataType: 'json',
                success: function (q) {
                    app.searchHashtagResult = q;
                }
            });

        },

        doLeave: function (_id) {

            // Send Message
            $.ajax({
                url: app.endpoint + '/send?to=' + _id + '&text=' + app.user.username + ' left the group',
                success: function (m) {
                    app.refresh();
                }
            });

            // leave
            $.ajax({url: app.endpoint + '/unfriend?id=' + _id}).success(function (t) {
                app.profile = null;
            });

        },

        more: function () {
            app.count += 5;
        },

        changeAvatar: function (e) {
            var file = e.target.files[0];
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function () {
                var data = reader.result;
                app.user.avatar = data;
            };
        }


    }
});


setInterval(app.refresh, 500);
app.refresh();