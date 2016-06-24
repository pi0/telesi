<div class="im_dialogs_col_wrap noselect">

    <div class="im_dialogs_panel">
        <div class="im_dialogs_search">
            <input class="form-control im_dialogs_search_field no_outline ng-pristine ng-valid ng-touched"
                   type="search" placeholder="Search" autocomplete="off">
            <a class="im_dialogs_search_clear tg_search_clear ng-hide">
                <i class="icon icon-search-clear"></i>
            </a>
        </div>
    </div>

    <div class="im_dialogs_col">
        <div class="im_dialogs_wrap nano">
            <div class="im_dialogs_scrollable_wrap nano-content">
                <ul class="nav nav-pills nav-stacked">

                    <li class="im_dialog_wrap active2" v-for="chat in chats">
                        <a class="im_dialog">
                            <div class="im_dialog_meta pull-right text-right">
                                <div class="im_dialog_date">{{chat.date}}</div>
                                <span class="im_dialog_badge badge" v-if="chat.unread>0">{{chat.unread}}</span>
                            </div>
                            <div class="im_dialog_photo pull-left peer_photo_init">
                                <img class="im_dialog_photo" src="img/placeholders/GroupAvatar1@2x.png">
                            </div>
                            <div class="im_dialog_message_wrap"
                            <div class="im_dialog_peer">
                                <span>{{chat.title}}</span>
                            </div>
                            <div class="im_dialog_message_notyping">
                                <div class="im_dialog_message">
                                    <span class="im_short_message_text">{{chat.subtitle}}</span>
                                </div>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</div>
