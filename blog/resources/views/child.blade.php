<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.homelayout')

@section('title', 'Home Page')

@section('sidebar')
    @parent

    <p>This is some sidebar text.</p>
@endsection

@section('content')
    <p>Hello {{ $name }} </p>
@endsection