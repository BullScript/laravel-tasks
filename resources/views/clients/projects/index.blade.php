@extends('layouts.index')

@section('content')
	<project-index :prop_paginate_projects="{{ $jsonProjects }}"></project-index>
<div class="row">

<table class="table table-striped">
	<thead>
		<tr class="bg-default">
			<th colspan='11'>
				<a href="" class="btn btn-info disabled pull-right"> Create project </a>
			</th>
		</tr>
		<tr class="bg-info">
			<th class="float-centre"></th>
			<th>#ID</th>
			<th>Project Name</th>
			<th>Key</th>
			<th>Url</th>
			<th>Project Lead</th>
			<th colspan='3'>Actions</th>
		</tr>
		<tr class="bg-default">
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
		@if( 0 < count( $projects ) )
			@foreach( $projects as $project )
    		<tr>
    			<td>
					<div class="form-check">
						<input type="checkbox" class="form-check-input">
					</div>
				</td>
    			<td>{!! $project->id !!}</td>
    			<td>{!! $project->name !!}</td>
    			<td>{!! $project->key !!}</td>
    			<td>{!! $project->url !!}</td>
    			<td>{!! $project->lead_id !!}</td>
    			<td><a class="btn btn-default" href="{!! route('projects.show', $project->id) !!}"><span class='fas fa-eye'></span></a></td>
    			<td><a class="btn btn-default" href="{!! route('projects.edit', $project->id) !!}"><span class="fas fa-edit"></span></a></td>
				<td><a class="btn btn-default" href="{!! route('projects.edit', $project->id) !!}"><span class="fas fa-trash-alt"></span></a></td>
    		</tr>
    		@endforeach
    	@else
    		<tr>
    			<td colspan='7'>No Data found.</td>
    		</tr>
		@endif
	</tbody>
</table>
	{{ $projects->links() }}
</div>
@endsection