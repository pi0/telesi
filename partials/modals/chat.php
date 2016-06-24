<div tabindex="-1" role="dialog" class="modal fade chat_modal_window">
    <div class="modal_close_wrap" data-dismiss="modal">
        <div class="modal_close"></div>
    </div>
    <div class="modal-dialog">
        <div class="modal-content modal-content-animated">
            <div class="chat_modal_wrap md_modal_wrap">

                <div class="md_modal_head">
                    <div class="md_modal_title_wrap">
                        <div class="md_modal_actions_wrap clearfix">
                            <a class="md_modal_action md_modal_action_close" data-dismiss="modal">Close</a>
                        </div>
                        <div class="md_modal_title">
                            <span>Chat Info</span>
                        </div>
                    </div>

                    <div class="peer_modal_profile_wrap clearfix">
                        <div class="peer_modal_photo_wrap pull-left">
                            <a class="peer_modal_photo peer_photo_init">
                                <img class="peer_modal_photo" src="img/placeholders/GroupAvatar1@2x.png">
                            </a>
                        </div>
                        <div class="peer_modal_profile">
                            <div class="peer_modal_profile_name">{{chat.title}}</div>
                            <div class="peer_modal_profile_description">{{chat.status}}</div>
                        </div>
                    </div>
                </div>

                <div class="md_modal_split_actions_wrap">
                    <div class="md_modal_split_actions">
                        <a class="md_modal_split_action" href="" title="Send message">
                            <i class="md_modal_split_action_msg"></i>
                        </a>
                    </div>
                </div>

                <div class="md_modal_body">

                    <div class="md_modal_sections clearfix">

                        <div class="md_modal_iconed_section_wrap md_modal_iconed_section_link">
                            <i class="md_modal_section_icon md_modal_section_icon_more"></i>
                            <div class="md_modal_section_link_wrap">
                                <a class="md_modal_section_link">Delete</a>
                            </div>
                            <div class="md_modal_section_link_wrap">
                                <a class="md_modal_section_link">Report</a>
                            </div>
                        </div>

                    </div>

                    <div class="md_modal_section_splitter"></div>

                    <div class="md_modal_iconed_section_wrap md_modal_iconed_section_peers">
                        <i class="md_modal_section_icon md_modal_section_icon_people"></i>
                        <div class="md_modal_section_peers_wrap">

                            <div class="md_modal_list_peer_wrap clearfix">
                                <a class="md_modal_list_peer_action pull-right">Remove</a>
                                <a class="md_modal_list_peer_photo pull-left peer_photo_init">
                                    <img class="md_modal_list_peer_photo" src="img/placeholders/UserAvatar7@2x.png">
                                </a>
                                <div class="md_modal_list_peer_name">
                                    <a class="md_modal_list_peer_name">Pooya</a>
                                </div>
                                <div class="md_modal_list_peer_description">
                                    <span>last seen just now</span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>