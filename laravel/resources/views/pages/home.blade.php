@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include("themes." . (new \App\Controllers\PageController())->getCurrentTheme() . ".components.home_form")
@endsection
