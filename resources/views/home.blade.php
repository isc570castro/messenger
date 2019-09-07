@extends('layouts.app')

@section('content')
	<messeger-component :user-id="{{ auth()->id() }}"/>
@endsection
