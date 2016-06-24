<div class="modal fade md_simple_modal_window" id="new_contact_modal">
    <div class="modal_close_wrap" data-dismiss="modal">
        <div class="modal_close"></div>
    </div>
    <div class="modal-dialog">
        <div class="modal-content modal-content-animated">
            <div class="md_simple_modal_wrap">

                <div class="md_simple_modal_body">

                    <form class="modal_simple_form ng-pristine ng-valid" ng-submit="doImport()">

                        <h4 my-i18n="contact_import_modal_title">Add new contact</h4>

                        <div class="md-input-group md-input-animated" my-labeled-input="">
                            <label class="md-input-label" my-i18n="contact_import_modal_phone">Phone number</label>
                            <input class="md-input ng-pristine ng-valid ng-touched" my-focused="" type="text"
                                   ng-model="importContact.phone" my-submit-on-enter="">
                        </div>

                        <div class="md-input-group md-input-animated" my-labeled-input="">
                            <label class="md-input-label" my-i18n="contact_edit_modal_first_name">First name</label>
                            <input class="md-input ng-pristine ng-untouched ng-valid" type="text"
                                   ng-model="importContact.first_name" my-submit-on-enter="">
                        </div>

                        <div class="md-input-group md-input-animated" my-labeled-input="">
                            <label class="md-input-label" my-i18n="contact_edit_modal_last_name">Last name</label>
                            <input class="md-input ng-pristine ng-untouched ng-valid" type="text"
                                   ng-model="importContact.last_name" my-submit-on-enter="">
                        </div>

                    </form>

                </div>

                <div class="md_simple_modal_footer">
                    <button class="btn btn-md" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-md btn-md-primary">Save</button>
                </div>

            </div>
        </div>
    </div>
</div>