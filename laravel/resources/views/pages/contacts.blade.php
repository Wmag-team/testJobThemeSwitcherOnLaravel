@extends('layouts.app')

@section('title', 'Contacts')

@section('content')
    <h1>Contact Us</h1>
    @include("themes." . (new \App\Controllers\PageController())->getCurrentTheme() . ".components.contact_text")
@endsection
