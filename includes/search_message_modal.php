<div class="modal fade " id="searchMessageModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Search Dialog</h4>
            </div>
            <div class="modal-body">
                <!--                            serach hashtag-->
                <form class="inline-form" role="form">
                    <label for="usr">Insert hashtag to find</label>
                    <input type="text" class="form-control" id="usr"  v-model="searchHashtag"
                           placeholder="Hashtag to find" @keydown="doSearchHashtag">
                    <br>
                    <button type="submit" class="btn btn-primary" @click="doSearchHashtag">Search</button>
                </form>

                <div v-if="searchHashtagResult!=null">
                    <label for="result">Found similar</label>
                    <ul class="searchResult">
                        <li class="well-sm" v-for="result in searchHashtagResult ">
                            {{result.text}}
                        </li>
                    </ul>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>