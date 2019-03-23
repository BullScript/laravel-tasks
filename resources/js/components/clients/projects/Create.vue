<template>
    <div class="card card-default">
        <form method="POST" action="/projects" id="form_project">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <input v-validate="'required|alpha'" v-model="project.name" class="form-control" name="name" dusk="name" placeholder="Name">
                                <span class="text-danger">{{ errors.first('name') }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>Key</label>
                            </div>
                            <div class="col-md-6">
                                <input v-validate.continues="'required|alpha|max:20'" v-model="project.key" class="form-control" name="key" dusk="key" placeholder="Project Identifire">
                                <ul>
                                  <li class="text-danger" v-for="error in errors.collect('key')">{{ error }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>Url</label>
                            </div>
                            <div class="col-md-6">
                                <input v-validate="'required|url'" v-model="project.url" class="form-control" name="url" dusk="url" placeholder="URL">
                                <span class="text-danger">{{ errors.first('url') }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>Project Lead</label>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-info float-right" @click="submit">Save</button>
              <a href="/projects" type="btn btn-link" class="btn btn-link float-right">Cancel</a>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        props: ['prop_project'],
        data () {
            return {
                project: {},
            }
        },
        computed: {
          errors: {
            get: function () {
              return this.errors
            },
            set: function () {
                // set
            }
          }
        },
        created() {
            this.setDefault();
        },
        methods: {
            setDefault() {
                this.project = this.prop_project;
            },
            submit() {
                if(this.errors.items.length > 0) {
                    this.$toasted.error("<b>*Error: The given data was invalid.</b>", {position: 'bottom-right'});
                    return false;
                }
                axios.put('/projects/'+this.project.id, this.project).then(response => {
                    this.$toasted.success("<b>*successfully.</b>", {position: 'bottom-right'});
                    window.location.href = "/projects";
                }).catch(error => {
                    if (error.response.status === 422) {
                        for (const index in error.response.data.errors){
                            this.errors.items.push({vmId:2, field: index, msg:error.response.data.errors[index][0]});
                        }
                        this.$toasted.error("<b>*Error: The given data was invalid.</b>", {position: 'bottom-right'});
                    }
                });
            }
        }
    }
</script>