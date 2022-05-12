@extends('app')
@section('cabecalho', 'Nova Série')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
    
@endif

        <h1>Adicionar Série</h1>
        <form action="{{ route('series.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>

                <thead>
                    <th>Button</th>
                </thead>
            </div>

            
            
            <button class="btn btn-danger">Salvar</button>
        </form>
@endsection