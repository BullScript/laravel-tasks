<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/projects/create" class="btn btn-danger pull-right"> Create project </a>
                        <a href="" class="btn btn-default pull-right"><i class="fa fa-filter" aria-hidden="true"></i></a>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr class="bg-info text-uppercase">
                                    <th>#ID</th>
                                    <th>Project Name</th>
                                    <th>Key</th>
                                    <th>Url</th>
                                    <th colspan='2'>Actions</th>
                                </tr>
                                <tr>
                                    <td><input class="form-control" name="project_filter['name']" dusk="name" value=""></td>
                                    <td><input class="form-control" name="project_filter['key']" dusk="key" value=""></td>
                                    <td><input class="form-control" name="project_filter['url']" dusk="url" value=""></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                            <tr v-for="item in this.paginatedDetails.data">
                                <td>{{ item.id }}</td>
                                <td>{{ item.name }}</td>
                                <td>{{ item.key }}</td>
                                <td>{{ item.url }}</td>
                                <td><a class="btn btn-link" :href="'/projects/' + item.id"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                <td><a class="btn btn-link" :href="'/projects/' + item.id + '/edit'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        <paginate
                            :page-count="paginatedDetails.last_page"
                            :click-handler="clickCallback"
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
            },
            clickCallback(pageNum) {
                axios.get('/projects?page-click=1&page=' + pageNum).then(response => {
                    this.paginatedDetails = response.data;
                });
            }
        }
    }
</script>
