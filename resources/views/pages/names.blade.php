@extends('layouts.app')
@section('title', '| Nevek')

@section('content')
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Azonosító</th>
                <th></th>
                <th>Név</th>
                <th>Létrehozás</th>
            </tr>
        </thead>
        <tbody>
            @foreach($names as $name)
            <tr>
                <td>{{ $name->id }}</td>
                <td>{{ $name->name }}</td>
                <td>{{ $name->created_at }}</td>
</tr>
            @endforeach
        </tbody>
    </table>
@endsection