@extends('layouts.listagem-admin')

    @section('listagem')
        <h1 style="margin-left: 10%; margin-top: 5%">Gerentes Cadastrados</h1>

        <!-- Botão para cadastrar Gerente -->
        <a href="{{ route('admin.register') }}" class="btn btn-primary" style="margin-left: 10%">Cadastrar</a> <!-- CADASTRAR -->

        <form action="{{ route('admin.pesquisar') }}" class="form form-inline" method="post" style="margin-top: 1%">
            @csrf
            <input type="text" name="pesquisar" placeholder="Pesquisar" class="form-control" style="width: 75%; margin-left: 10%;" value="{{ $pesquisar['pesquisar'] ?? '' }}">
            <button class="btn btn-info">Pesquisar</button>
        </form>

        <table class="table table table-striped" style="width: 80%; margin-left: 10%">
            <thead>
                <th>Nome</th>
                <th>E-mail</th>
                <th>CPF</th>
                <th>Ações</th>
            </thead>

            <tbody>
                @foreach ($admins as $admin)
                    <tr>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>{{ $admin->cpf }}</td>
                        <td>
                            <form action="{{ route('admin.delete', [$admin->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Deletar</button>
                                <a class="btn btn-info" href="{{ route('admin.show', [$admin->id]) }}">Detalhes</a>
                                <a class="btn btn-warning" href="{{ route('admin.edit', [$admin->id]) }}">Editar</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if (isset($pesquisar))
            <div style="margin-left: 10%;">{!! $admins->appends($pesquisar)->links() !!}</div>
        @else
            <div style="margin-left: 10%;">{!! $admins->links() !!}</div>
        @endif


    @endsection


</body>




