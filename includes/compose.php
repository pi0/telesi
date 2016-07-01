<div class="text-field" v-if="can_send">
    <div class="form-group">
        <input class="form-control input-lg" id="compose"

               type="text" placeholder="Message..." autofocus v-model="draft" @keyup.enter="sendMessage">
    </div>
    <button class="btn btn-info btn-lg" @click="sendMessage"
    >Send</button>
</div>