// Init vue App
var data = {
    chats: [],
    chat: {}
};

var app = new Vue({
        el: '#app',
        data: data,
        methods: {
            chatInfo: function () {
                $('.chat_modal_window').modal();
            }
            , newContact: function () {
                $('#new_contact_modal').modal();
            }
            , sendMessage: function (e) {
                var msg = e.target.innerText;
                e.target.innerHTML = "";

                //TODO
                this.chat.messages.push({
                    date: '8:41:22 PM',
                    sender: {name: 'Pooya Parsa'},
                    text: msg
                });

                scrollToLast();

            }
        }
    });

function scrollToLast() {
    $('.im_history_scrollable')[0].scrollIntoView(false);
}

function load_chats() {

    data.chats = [
        {
            id: '',
            title: 'Group A',
            subtitle: 'last message place holder',
            date: '7:15 PM',
            unread: 3
        },
        {
            id: '',
            title: 'Group B',
            subtitle: 'last message place holder',
            date: '7:15 PM',
            unread: 0
        },
        {
            id: '',
            title: 'Group C',
            subtitle: 'last message place holder',
            date: '7:15 PM',
            unread: 0
        },
        {
            id: '',
            title: 'Group D',
            subtitle: 'last message place holder',
            date: '7:15 PM',
            unread: 2
        }
    ]

}


function load_chat() {
    data.chat = {
        title: 'Group Title',
        status: '12 members',
        messages: [
            {
                date: '8:41:22 PM',
                sender: {name: 'mohammad takbiri'},
                text: 'be nazaram ajalee nabashe behtare.. ye chize doros hesabi publish she ye hafte dir tar behtar niss?'
            },
            {
                date: '8:41:22 PM',
                sender: {name: 'mohammad takbiri'},
                text: 'be nazaram ajalee nabashe behtare.. ye chize doros hesabi publish she ye hafte dir tar behtar niss?'
            },
            {
                date: '8:41:22 PM',
                sender: {name: 'mohammad takbiri'},
                text: 'be nazaram ajalee nabashe behtare.. ye chize doros hesabi publish she ye hafte dir tar behtar niss?'
            },
            {
                date: '8:41:22 PM',
                sender: {name: 'mohammad takbiri'},
                text: 'be nazaram ajalee nabashe behtare.. ye chize doros hesabi publish she ye hafte dir tar behtar niss?'
            }
        ]
    }
}


//------------------------------
load_chats();
load_chat();


//--------------------------------

// Set Size
function setSize() {
    var h = $('body').height() * .9;
    $('.im_dialogs_col, .im_page_wrap ').css('height', h);
    $('.im_history_col').css('height', (h - 50));
}

$(window).resize(setSize);
setSize();

// Nano Scroller
$(".nano").nanoScroller();
