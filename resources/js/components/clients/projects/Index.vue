<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="" class="btn btn-danger btn-sm disabled pull-right"> Create project </a>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr class="bg-info text-uppercase">
                                    <th></th>
                                    <th>#ID</th>
                                    <th class="">Project Name</th>
                                    <th>Key</th>
                                    <th>Url</th>
                                    <th>Project Lead</th>
                                    <th colspan='3'>Actions</th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                        </div>
                                    </td>
                                    <td><input class="form-control" name="project_filter['name']" dusk="name" value=""></td>
                                    <td><input class="form-control" name="project_filter['key']" dusk="key" value=""></td>
                                    <td><input class="form-control" name="project_filter['url']" dusk="url" value=""></td>
                                    <td><input class="form-control" name="project_filter['project_lead']" dusk="project_lead" value=""></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                            <tr v-for="item in this.paginatedDetails.data">
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                    </div>
                                </td>
                                <td>{{ item.id }}</td>
                                <td>{{ item.name }}</td>
                                <td>{{ item.key }}</td>
                                <td>{{ item.url }}</td>
                                <td>{{ item.lead_id }}</td>
                                <td><a class="btn btn-default" href=""><span class='fas fa-eye'></span></a></td>
                                <td><a class="btn btn-default" href=""><span class="fas fa-edit"></span></a></td>
                                <td><a class="btn btn-default" href=""><span class="fas fa-trash-alt"></span></a></td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        <paginate
                            :page-count="paginatedDetails.total"
                            :click-handler="paginatedData"
                            :prev-text="'Prev'"
                            :next-text="'Next'"
                            :container-class="'pagination'"
                            :page-class="'page-item'"
                            :page-link-class="'page-link'"
                            :prev-class="'page-item'"
                            :prev-link-class="'page-link'"
                            :next-class="'page-item'"
                            :next-link-class="'page-link'">
                        </paginate>
                  </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['prop_paginate_projects'],
        data () {
            return {
                paginatedDetails: []
            }
        },
        created() {
            this.setDefault();
        },
        methods: {
            setDefault() {
                this.paginatedDetails = this.prop_paginate_projects;
                console.log(this.paginatedDetails);
            },
            paginatedData() {
                return this.paginatedDetails;
            }
        }
    }
</script>
