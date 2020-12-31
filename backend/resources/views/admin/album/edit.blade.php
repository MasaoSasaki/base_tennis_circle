@extends('../layouts/app')
@section('content')
<div class="container">
  <div class="admin-album-edit">
    <div class="card">
      <div class="card-header">アルバムの編集</div>
        <div class="card-body">
          <form action="/admin/albums/{{ $album->id }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group row">
              <label for="title">イベント名</label>
              <input class="from-control" type="text" name="title" value="{{ $album->title }}">
            </div>
            <div class="form-group row">
              <label for="body">コメント</label>
              <input class="from-control" type="text" name="body" value="{{ $album->body }}">
            </div>
            <button class="btn btn-primary" type="submit">更新</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
