@extends('inicio')
@section('content')
<div class="container mt-5">
    <div class="card mb-3">
        <div class="card-header text-center">
          {{ $publicacao->materia->nome }} - {{ $publicacao->autor->nome . " " . $publicacao->autor->sobrenome}}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $publicacao->titulo }}</h5>
          <p class="card-text">{!! $publicacao->conteudo !!}</p>
          @if($publicacao->data_entrega)
            <p class="card-text text-start text-danger">Data de entrega: {{ date('d/m/Y',strtotime($publicacao->data_entrega)) }}</p>
          @endif
        </div>
        <div class="card-footer text-muted">
          Publicado as {{ $publicacao->created_at->format('d/m/Y H:m:s') }}
        </div>
      </div>
      <a class="btn btn-secondary" href="{{ route('inicio') }}">Voltar</a>
</div>
@endsection