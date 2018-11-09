<template>
    <div class="conversation">
        <h1>{{ contact ? contact.title : 'Select a Contact' }}
            <!-- <span v-if="contact">
                <form method="post" action="/show/recipient">
                    <input type="hidden" name="_token" :value="csrf">
                    <input type='hidden' name="message_id" :value="contact.id">
                    <button type="submit" class="btn btn-info pull-right" style="margin:0 0 0 10px">Show Recipients</button>
                </form>
            </span> -->
            <span v-if="user.userType == 'Admin'">
                <span data-toggle="modal" data-target="#add-recipients">
                    <a href='#' class="btn btn-info pull-right">Add Recipients</a>
                </span>
            </span>
        </h1>
        <div class="modal fade" id="add-recipients" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Adding New Recipients</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" name="search" id="search" class="form-control input-rounded" placeholder="Search Customer Data" width="100%"/>
                                <br>
                                <div class="table-responsive">
                                    <h5 align="center">Total Users : <span id="total_records"></span></h5>
                                    <form method="post" action="/store/recipient">
                                    <input type="hidden" name="_token" :value="csrf">
                                    <div v-if="contact">
                                        <input type='hidden' name="message_id" :value="contact.id">
                                    </div>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID Number</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                            </tbody>
                                    </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <MessagesFeed :user="user" :contact="contact" :messages="messages"/>
        <MessageComposer @send="sendMessage"/>
    </div>
</template>

<script>
    import MessagesFeed from './MessagesFeed';
    import MessageComposer from './MessageComposer';

    export default {
        data: () => ({
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          }), 
        props: {
            contact: {
                type: Object,
                default: null
            },
            messages: {
                type: Array,
                default: []
            },
            user: {
                type: Object,
                default: []
            }
        },
        methods: {
            sendMessage(text) {
                if (!this.contact) {
                    return;
                }

                axios.post('/conversation/send', {
                    contact_id: this.contact.id,
                    text: text
                }).then((response) => {
                    this.$emit('new', response.data);
                })
            }
        },
        components: {MessagesFeed, MessageComposer}
    }
</script>

<style lang="scss" scoped>
.conversation {
    flex: 5;
    display: flex;
    flex-direction: column;
    justify-content: space-between;

    h1 {
        font-size: 20px;
        padding: 10px;
        margin: 0;
        border-bottom: 1px dashed lightgray;
    }
}
</style>
