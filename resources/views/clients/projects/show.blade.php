@extends('layouts.index')

@section('content')
	<project-show :prop_project="{{ $objProject }}"></project-show>
@endsection
