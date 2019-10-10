<template>
        <div class="row justify-content-center">
              <div class="col-md-4">
          <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h6 class="modal-title" id="modal-title-default">Application Form</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control" v-model='fullname' placeholder="Full Name">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Send</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
</template>

<script>
    export default {
        data(){
            return{
                users: {},
              //   form: new Form({
              //     id:'',
              //     name : '',
              //     email: '',
              //     password: '',
              //     type: '',
              // })
            }
        },
        // mounted() {
        //     console.log('Component mounted.')
        // },

        methods: {
          formSubmit(){
            $('#modal-default').modal('show')
          }
        }
    }
</script>
