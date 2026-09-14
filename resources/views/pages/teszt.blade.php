@extends('layouts.app')
@section('title', '| Teszt oldal')

@section('content')
    <div class="jumbotron">
        <h1>{{ Date('Y-m-d H:i:s') }}</h1>
        <h2>{{ $randomName }}</h2>
        <p class="lead">Ez az első demó route-unk!</p>
        <a href="https://szbi-pg.hu" class="btn btn-lg btn-primary" role="button">Iskola</a>
    </div>
@endsection

