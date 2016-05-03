@extends('layout')

@section('content')
    <h1>Selling your home</h1>
    <form enctype="multipart/form-data" method="POST" action="/flyers">
        @include('flyers.form')
    </form>
@stop