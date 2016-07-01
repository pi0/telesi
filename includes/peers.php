<div class="last-contacts" v-if="peers!=null">
    <div  v-for="peer in peers" @click="openChat(peer._id)"
         v-bind:class="['contact', (profile && peer._id==profile._id) ? 'selected' : '']">
        <div class="contact-title">
            <i class="glyphicon glyphicon-flag" v-if="peer.is_friend==null"></i>

            <i class="glyphicon glyphicon-alert" v-if="peer.is_mention!=null"></i>

            <span class="badge">{{peer.username}}</span> ({{peer.type}})
            <i class="glyphicon glyphicon-flag" v-if="peer.is_friend==null"></i>

        </div>
        <img v-bind:src="peer.avatar" class="img-circle">
    </div>
</div>
<div v-else="">
    Loading
</div>