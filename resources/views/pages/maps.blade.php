@extends('layouts.app', [
    'namePage' => 'Maps',
    'class' => 'sidebar-mini',
    'activePage' => 'maps',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            Criar Notícia
              <form action="" method="POST">
                  {{ csrf_field() }}
                  <div class="form-group">
                      <label>Título</label>
                      <input type="text" class="form-control" name="titulo" aria-describedby="titulo" placeholder="Título da notícia">
                  </div>
                  <div class="form-group">
                      <label>Subtítulo</label>
                      <input type="text" class="form-control" name="subtitulo" aria-describedby="subtitulo" placeholder="Subtítulo">
                  </div>
                  <div class="form-group">
                      <label>Descrição</label>
                      <input type="text" class="form-control" name="descricao" aria-describedby="descricao" placeholder="Descrição da notícia">
                  </div>
                  <div class="form-group">
                      <label>Data</label>
                      <input type="datetime-local" class="form-control" name="data" aria-describedby="data">
                  </div>
                  <div class="form-group">
                      <label>Categoria</label>
                      <input type="text" class="form-control" name="categoria" aria-describedby="categoria" placeholder="Categoria da notícia">
                  </div>
                  <button type="submit" class="btn btn-success" role="button">Submit</button>
              </form>
          </div>
          <div class="card-body ">
            <div id="map" class="map"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

