<div class="tg_head_main_wrap">

    <div class="tg_head_main_peer_wrap">

        <div class="tg_head_peer_dropdown tg_head_peer_media_dropdown dropdown" >
            <a class="tg_head_btn dropdown-toggle" data-toggle="dropdown" >Edit</a>
            <ul class="dropdown-menu" id="aaa">
                <li><a>Leave</a></li>
                <li><a>Rename</a></li>
            </ul>
        </div>

        <div class="tg_head_peer_title_wrap">
            <a class="tg_head_btn" @click="chatInfo">
                <div class="tg_head_peer_info">
                    <span class="tg_head_peer_title" dir="auto">{{chat.title}}</span>
              <span class="tg_head_peer_status">
                  <span>{{chat.status}}</span>
              </span>
                </div>
            </a>
        </div>
    </div>

</div>