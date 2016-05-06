@extends('layout')

@section('content')
    <h1>Selling your home</h1>
    <div class="row">
        <form enctype="multipart/form-data" method="POST" action="/flyers">
            @include('flyers.form')
            @include('errors')

        </form>
    </div>
@stop



