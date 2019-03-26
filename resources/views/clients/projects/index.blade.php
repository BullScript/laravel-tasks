@extends('layouts.index')

@section('content')
	<project-index :prop_paginate_projects="{{ $jsonProjects }}"></project-index>
@endsection
