@extends('inicio')
@section('content')
<div class="container mt-5">
  <div class="row d-flex">
    <form action="{{ route('inicio') }}" method="get">
      <select class="form-control w-50" name="filtro" id="filtro">
        @foreach ($materias as $materia)
            <option value="{{ $materia->id }}" {{ $materia->id == $filtro ? 'selected' : '' }}>{{ $materia->nome }}</option>
        @endforeach
      </select>
      <button class="btn btn-primary mt-2 mb-2" type="submit">Filtrar</button>
    </form>
  </div>
  @foreach ($publicacoes as $publicacao)
    <div class="card text-center mb-3">
      <div class="card-header">
        {{ $publicacao->materia->nome }} - {{ $publicacao->autor->nome . " " . $publicacao->autor->sobrenome}}
      </div>
      <div class="card-body">
        <h5 class="card-title">{{ $publicacao->titulo }}</h5>
        <div class="container-publicacao">
          <div class="conteudo-publicacao text-start">{!! $publicacao->conteudo !!}
          </div>
        </div>
        @if($publicacao->data_entrega)
          <p class="card-text text-start text-danger">Data de entrega: {{ date('d/m/Y',strtotime($publicacao->data_entrega)) }}</p>
        @endif
        <a href="{{ route('redirecionarPublicacao', $publicacao->id) }}" class="btn btn-primary">Ver mais</a>
      </div>
      <div class="card-footer text-muted">
        Publicado as {{ $publicacao->created_at->format('d/m/Y H:m:s') }}
      </div>
    </div>
  @endforeach

  <div class="d-flex justify-content-center">
    {{ $publicacoes->appends(['publicacoes' => $publicacoes ?? '', 'page' => isset(Request::query()['page']) ? Request::query()['page'] : 1])->render('pagination::bootstrap-4') }}
  </div>
</div>
@endsection