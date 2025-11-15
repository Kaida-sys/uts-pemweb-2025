@extends('layouts.app')

@section('title', 'Home')

@section('content')

@include('partials.home.hero')
@include('partials.home.feature')
@include('partials.home.about')
@include('partials.home.pricing')
@include('partials.home.contact')
@include('partials.home.script')

@endsection
