@extends('inicio')
@section('content')
    <div class="container mt-3">
        <div class="form-group">
            <form action="{{ route('cadastrarPublicacao') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" class="form-control" name="titulo" id="titulo">
                    @error('titulo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="conteudo" class="form-label">Conteudo</label>
                    <textarea rows="10" class="form-control" id="conteudo" name="conteudo" aria-describedby="conteudo">
                    </textarea>
                    @error('conteudo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Matéria</label>
                    <select class="form-control" name="materia" id="materia">
                        @foreach ($materias as $materia)
                            <option value="{{ $materia->id }}">{{ $materia->nome }}</option>
                        @endforeach
                    </select>
                    @error('materia')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="start">Data de entrega:</label>
                    <input type="date" class="form-control" id="start" name="data_entrega">
                </div>
                
                <div class="d-flex justify-content-between">
                    <a href="{{ route('inicio') }}" class="btn btn-secondary">Voltar</a>
                    <button class="btn btn-success" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
