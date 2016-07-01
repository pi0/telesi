<h2 style="display: inline">{{profile.username}}</h2>
<span class="label label-info" v-if="!profile.is_friend">Unknown</span>
<br>

<img v-bind:src="profile.avatar" class="img-circle">

<button class="btn btn-default btn-sm" @click="more()">More Message ({{count+5}})</button>

<span v-if="(profile.type)!='person'">
    <button v-if="profile.is_friend" class="btn btn-warning btn-sm" @click="doLeave(profile._id)">Leave</button>
    <button v-else="" class="btn btn-warning btn-sm" @click="addFriend(profile._id)">Join</button>
</span>

<span v-else="">

        <button v-if="profile.is_friend" class="btn btn-warning btn-sm" @click="unfriend(profile._id)">Unfriend</button>¬
    <button v-else="" class="btn btn-warning btn-sm" @click="addFriend(profile._id)">Friend
    <i class="glyphicon glyphicon-heart-empty"></i>
    </button>


</span>


<button v-if="!profile.is_reported" class="btn btn-danger btn-sm" @click="report(profile._id)">Report</button>
<button v-else class="btn btn-danger btn-sm">Already reported</button>

<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#loadProfileModal">
    Load Profile
</button>
<button class="btn btn-primary btn-sm">Private Chat</button>


