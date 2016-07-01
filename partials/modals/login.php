<div class="modal md_simple_modal_window in" id="auth_modal"
     v-if="user==null" style="display: block"
>

    <div class="modal-dialog">
        <div class="modal-content modal-content-animated">
            <div class="md_simple_modal_wrap">

                <div class="md_simple_modal_body">

                    <form class="modal_simple_form ng-pristine ng-valid">

                        <h4>Please login</h4>

                        <div class="md-input-group md-input-animated">
                            <input class="md-input ng-pristine ng-valid ng-touched" type="text" placeholder="Username">
                        </div>

                        <div class="md-input-group md-input-animated">
                            <input class="md-input ng-pristine ng-untouched ng-valid" type="text"
                                   placeholder="Password">
                        </div>
                    </form>

                </div>

                <div class="md_simple_modal_footer">
                    <button class="btn btn-md btn-md-primary pull-left" @click="auth('register')">Register</button>
                    <button class="btn btn-md btn-md-primary" @click="auth('login')">Login</button>
                </div>

            </div>
        </div>
    </div>
</div>