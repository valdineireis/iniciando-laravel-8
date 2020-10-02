@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Listagem de Tarefas</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->status ? 'Aberta' : 'Fechada'  }}</td>
                        <td>
                            <a href="{{ route('task.show', ['task' => $task->id]) }}" class="btn btn-sm btn-primary">Ver</a>
                            <a href="{{ route('task.edit', ['task' => $task->id]) }}" class="btn btn-sm btn-primary">Editar</a>
                            <form style="display: inline;" action="{{ route('task.destroy', ['task' => $task->id]) }}" method="POST">
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">deletar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
