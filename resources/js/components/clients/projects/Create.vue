<template>
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Create Project</h3>
            <div class="card-tools">
            </div>
        </div>
        <!-- /.card-header -->
        <form method="POST" action="/projects">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <input v-validate="'required'" class="form-control" name="name" dusk="name" value="" placeholder="Name">
                                <span class="text-danger">{{ errors.first('name') }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>Key</label>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" name="key" dusk="key" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label>Url</label>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" name="url" dusk="url" value="">
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
              <button type="submit" class="btn btn-info float-right">Save</button>
              <button class="btn btn-link float-right">Cancel</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        props: ['prop_project'],
        data () {
            return {
                project: {}
            }
        },
        created() {
            this.setDefault();
        },
        methods: {
            setDefault() {
                this.$toasted.error("Error: Invalid key name.", {position: 'bottom-right'});
                this.project = this.prop_project;
                console.log(this.project);
            },
            submit() {
                if(this.validate()) {
                
                }
            }
        }
    }
</script>