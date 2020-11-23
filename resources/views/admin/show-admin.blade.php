@extends('layouts.app-admin')

@section('content')
    <h1>Informações sobre {{ $admin->name }}</h1>

    <a href="{{ route('admin.listar') }}" class="btn btn-primary">Voltar</a>

    <ul>
        <li><strong>Created_at: </strong>{{ $admin->created_at }}</li>
        <li><strong>Updated_at: </strong>{{ $admin->updated_at }}</li>
    </ul>
@endsection

