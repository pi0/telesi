<div class="im_send_panel_wrap noselect">

    <div class="im_send_form_wrap1">

        <div class="im_send_form_wrap clearfix">

            <form class="im_send_form ng-valid im_send_form_empty ng-dirty ng-valid-parse">


                <div class="im_send_field_wrap hasselect">

                    <a class="composer_emoji_insert_btn"><i class="icon icon-emoji"></i></a>

                    <div class="composer_rich_textarea" contenteditable="true" dir="auto" @keyup.enter="sendMessage"
                         placeholder="Write a message...">{{chat.draft}}</div>

                </div>

                <div class="im_send_buttons_wrap clearfix">
                    <button type="submit" class="btn btn-md im_submit nocopy" data-content="Send"></button>
                </div>

            </form>
        </div>

    </div>

</div>
