@extends('layouts.index')

@section('content')
	<project-create :prop_project="{{ $objProject }}"></project-create>
@endsection
