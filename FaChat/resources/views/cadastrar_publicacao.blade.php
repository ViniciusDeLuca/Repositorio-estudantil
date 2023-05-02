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
                <div class="row">
                    <div class="mb-3">
                        <label for="conteudo-textarea" class="form-label">Conteúdo</label>
                        <textarea hidden class="form-control" name="conteudo" id="conteudo-textarea" rows="10">
                        </textarea>
                    </div>
                </div>
                <div id="conteudo-text">
                    <p></p>
                </div>
                @error('conteudo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
 
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
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
            var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            ['blockquote', 'code-block'],

            [{ 'header': 1 }, { 'header': 2 }],               // custom button values
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
            [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
            [{ 'direction': 'rtl' }],                         // text direction

            [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

            [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
            [{ 'font': [] }],
            [{ 'align': [] }],

            ['clean']                                         // remove formatting button
        ];

        var quill = new Quill('#conteudo-text', {
        modules: {
            toolbar: toolbarOptions
        },
        theme: 'snow'
        });

        $(() => {
            $("#conteudo-text").keyup(function() {
                const valor_div_descricao = $('#conteudo-text > div').html()
                $("#conteudo-textarea").val(valor_div_descricao)
            })
        })
    </script>
    
@endsection
