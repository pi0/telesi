<div class="im_history_col_wrap noselect im_history_loaded">
            <div class="im_history_col">
            <div class="im_history_wrap nano">
                <div class="im_history_scrollable_wrap nano-content">
                    <div class="im_history_scrollable">
                        <div class="im_history im_history_selectable">

                            <div v-if="chat.messages==null || chat.messages.lengh==0">
                            <div class="im_history_empty_wrap ng-hide2">
                                <div class="im_history_empty vertical-aligned">
                                    No messages here yet...
                                </div>
                            </div>
                            </div>
                            <div v-else="">
                            <?php include 'messages.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="im_bottom_panel_wrap">
                <?php include 'send.php'; ?>
            </div>
        </div>
</div>