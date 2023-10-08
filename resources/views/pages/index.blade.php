@extends('layout.app')

@section('content')

<h1>
    @foreach ($users as $user)
    <tr>
    <td>{{ $user->user_id }}</td>
    </tr>
    @endforeach</h1>

@endsection