<div class="modal fade " id="searchUserModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Search Dialog</h4>
            </div>
            <div class="modal-body">
                <!--                            serach name-->

                <label for="usr">Insert name to find</label>
                <input type="text" class="form-control" id="usr" placeholder="Name to find" v-model="searchUser"
                       @keydown="doSearchUser">
                <br>
                <button type="submit" class="btn btn-info" @click="doSearchUser">Search</button>
                <br><br>
                <div v-if="searchUserResult!=null">
                    <label for="result">Found similar</label>
                    <ul class="searchResult">
                        <li class="well-sm" v-for="result in searchUserResult"
                            @click="selectUser(result.username,result._id)">
                            {{result.username}} ({{result.name}})
                        </li>
                    </ul>
                </div>
                <br>
                <div v-if="selectedUser!=null">
                    <div v-if="(selectedUser.type)==person">
                        <button type="submit" class="btn btn-success" @click="addFriend(selectedUser._id)">Add
                            {{selectedUser.username}}
                        </button>
                        <button type="submit" class="btn btn-warning" @click="openChat(selectedUser._id)">Send unknown
                            message to {{selectedUser.username}}
                        </button>
                    </div>
                    <div v-if="(selectedUser.type)!=person">
                        <button type="submit" class="btn btn-success" @click="addFriend(selectedUser._id)">Join
                            {{selectedUser.username}}
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>