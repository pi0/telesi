<div class="modal fade " id="profileModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" v-if="current!=null">
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
                        <input type="text" v-model="current.name">
                    </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading">Username</div>
                    <div class="panel-body">
                        <input type="text" v-model="current.username">
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">Birthday</div>
                    <div class="panel-body">
                        <input type="text" v-model="current.birthday">
                    </div>
                </div>
                <div class="panel panel-warning">
                    <div class="panel-heading">Email</div>
                    <div class="panel-body">
                        <input type="text" v-model="current.email">
                    </div>
                </div>
                <div class="panel panel-deafult">
                    <div class="panel-heading">Biography</div>
                    <div class="panel-body">
                        <input type="text" v-model="current.biography">
                    </div>
                </div>
                <div class="panel panel-danger">
                    <div class="panel-heading">Phone number</div>
                    <div class="panel-body">
                        <input type="text" v-model="current.phone">
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">Avatar</div>
                    <div class="panel-body">
                        <input type="file" @change="changeAvatar">
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">Password</div>
                    <div class="panel-body">
                        <input type="text" v-model="current.password">
                    </div>
                </div>
                
                <br>
                <button type="submit" class="btn btn-danger" @click="updateProfile">Update profile</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
