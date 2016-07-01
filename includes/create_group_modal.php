<div class="modal fade " id="createGroupModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" v-if="current!=null">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create Group Dialog</h4>
            </div>
            <div class="modal-body">

                <div class="panel panel-primary">
                    <div class="panel-heading">Name</div>
                    <div class="panel-body">
                        <input type="text" v-model="gpName">
                    </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading">Username</div>
                    <div class="panel-body">
                        <input type="text" v-model="gpUsername">
                    </div>
                </div>

                <br>
                <button type="submit" class="btn btn-danger" @click="createGroup">Create Group</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
