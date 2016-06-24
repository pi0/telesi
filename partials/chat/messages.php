<div class="im_history_messages im_history_messages_group">


    <div class="im_history_messages_peer">

        <div class="im_history_message_wrap">
            <div class="im_message_date_split im_service_message_wrap">
                <div class="im_service_message">
                    <span class="copyonly"><br>---&nbsp;</span>
                    <span class="im_message_date_split_text">Friday, June 24, 2016</span>
                    <span class="copyonly">&nbsp;---</span>
                </div>
            </div>
        </div>

        <div class="im_history_message_wrap">
            <div v-for="message in chat.messages">
                <?php include 'message.php'; ?>
            </div>
        </div>
    </div>
</div>
