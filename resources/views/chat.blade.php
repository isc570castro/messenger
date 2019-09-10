@extends('layouts.app')

@section('content')
	{{-- <messeger-component 
	:user="{{ auth()->user() }}"/> --}}
	<router-view :user="{{ auth()->user() }}"/>
@endsection
