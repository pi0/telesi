<div class="modal fade " id="loadProfileModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" v-if="profile!=null">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Profile Dialog</h4>
            </div>
            <div class="modal-body">
                
                <img src="" class="img-circle" width="80" height="80">
                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading">Name</div>
                    <div class="panel-body">
                        <p>{{profile.name}}</p>
                    </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading">Username</div>
                    <div class="panel-body">
                        <p>{{profile.username}}</p>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">Birthday</div>
                    <div class="panel-body">
                        <p>{{profile.birthday}}</p>
                    </div>
                </div>
                <div class="panel panel-warning">
                    <div class="panel-heading">Email</div>
                    <div class="panel-body">
                        <p>{{profile.email}}</p>
                    </div>
                </div>
                <div class="panel panel-deafult">
                    <div class="panel-heading">Biography</div>
                    <div class="panel-body">
                        <p>{{profile.biography}}</p>
                    </div>
                </div>
                <div class="panel panel-danger">
                    <div class="panel-heading">Phone number</div>
                    <div class="panel-body">
                        <p>{{profile.phone}}</p>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
