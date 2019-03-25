<template>
    <div class="card card-default">
        <form id="form_project">
            <div class="card-footer">
              <button type="button" class="btn btn-danger float-right" @click="edit">Edit</button>
              <a href="/projects" type="btn btn-link" class="btn btn-link float-right">Cancel</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label class="pull-right">Name<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-md-6">
                                <span>{{ project.name }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label class="pull-right">Key<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-md-6">
                                <span>{{ project.key }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label class="pull-right">URL</label>
                            </div>
                            <div class="col-md-6">
                                <span>{{ project.url }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label class="pull-right">Project Lead</label>
                            </div>
                            <div class="col-md-6">
                                <span>{{ project.project_lead_id }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-danger float-right" @click="edit">Edit</button>
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
                this.project = (Array.isArray(this.prop_project)) ? {} : this.prop_project;
            },
            edit() {
                window.location.href = '/projects/' + this.project.id + '/edit';
            }
        }
    }
</script>