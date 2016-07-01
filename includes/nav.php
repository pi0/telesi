<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand">ZGram</a>
        </div>
        <br>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <div class="btn-group-sm">

                    <button class="btn btn-danger btn-md" data-toggle="modal" data-target="#profileModal">Profile</button>


                    <button class="btn btn-info btn-md" data-toggle="modal" data-target="#searchUserModal">Search User</button>


                    <button class="btn btn-warning btn-md" data-toggle="modal" data-target="#searchMessageModal">Search Message
                    </button>


                    <button class="btn btn-success btn-md" data-toggle="modal" data-target="#createChannelModal">Create channel
                    </button>


                    <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#createGroupModal">Create group</button>

                </div>

            </ul>
            <ul class="nav navbar-nav navbar-right uname">
                <li class="active">{{current.username}}<span class="sr-only">(current)</span></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>