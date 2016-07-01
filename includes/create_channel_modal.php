<div class="modal fade " id="createChannelModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" v-if="current!=null">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create Channel Dialog</h4>
            </div>
            <div class="modal-body">

                <div class="panel panel-primary">
                    <div class="panel-heading">Name</div>
                    <div class="panel-body">
                        <input type="text" v-model="cgName">
                    </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading">Channel ID</div>
                    <div class="panel-body">
                        <input type="text" v-model="cgUsername">
                    </div>
                </div>

                <br>
                <button type="submit" class="btn btn-danger" @click="createChannel">Create Channel</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
