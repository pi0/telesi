<div class="tg_head_logo_wrap">
    <div class="tg_head_logo_dropdown dropdown">

        <a class="tg_head_btn" data-toggle="dropdown">
            <div class="icon-hamburger-wrap">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
            <i class="icon icon-tg-title">Telesi</i>
        </a>

        <ul class="dropdown-menu">
            <li><a @click="newContact">
                    <i class="icon icon-new-group"></i><span>New Contact</span>
                </a></li>
            <li><a v-click="openContacts()">
                    <i class="icon icon-contacts"></i><span>Open Contacts</span>
                </a></li>

        </ul>

    </div>
</div>