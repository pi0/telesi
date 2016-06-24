<div class="im_message_outer_wrap">
    <div class="im_message_wrap clearfix">
        <div class="im_content_message_wrap im_message_in">

<!--            <i class="icon icon-select-tick"></i>-->

            <a class="im_message_from_photo pull-left peer_photo_init">
                <img class="im_message_from_photo" src="img/placeholders/UserAvatar7@2x.png">
            </a>

            <div class="im_message_meta pull-right text-right noselect">
                <span class="im_message_date clickable nocopy" data-content="{{message.date}}"></span>
            </div>

            <div class="im_message_body">
                <span class="im_message_author_wrap">
                  <span class="copyonly">[<span>{{message.date}}</span>] </span>
                    <a class="im_message_author user_color_4">{{message.sender.name}}</a>
                    <span class="copyonly">:</span>
                </span>
                <div class="im_message_text" dir="auto">{{message.text}}</div>
            </div>

        </div>
    </div>
</div>