@extends('layouts.index') @section('content')
<div class="card card-default">
	<div class="card-header">
		<h3 class="card-title">Create Project</h3>

		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-widget="collapse">
				<i class="fa fa-minus"></i>
			</button>
		</div>
	</div>
	<!-- /.card-header -->
	<form method="POST" action="/projects">
		@csrf
    	<div class="card-body">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="form-group row">
    					<div class="col-md-2">
    						<label>Name</label>
    					</div>
    					<div class="col-md-6">
        					<input class="form-control" name="name" dusk="name" value="{{ $objProject->name }}">
    					</div>
    				</div>
    				<div class="form-group row">
    					<div class="col-md-2">
    						<label>Key</label>
    					</div>
    					<div class="col-md-6">
        					<input class="form-control" name="key" dusk="key" value="{{ $objProject->key }}">
    					</div>
    				</div>
    				<div class="form-group row">
    					<div class="col-md-2">
    						<label>Url</label>
    					</div>
    					<div class="col-md-6">
        					<input class="form-control" name="url" dusk="url" value="{{ $objProject->url }}">
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
@endsection
