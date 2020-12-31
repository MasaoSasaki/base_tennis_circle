@extends('../layouts/app')
@section('content')
<div class="container">
  <div class="admin-album-create">
    <div class="card">
      <div class="card-header">アルバムの作成</div>
        <div class="card-body">
          <form action="/admin/albums" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="image">イベント画像</label>
            <input type="file" name="image">
          </div>
          <div class="form-group row">
            <label for="title">イベント名</label>
            <input class="from-control" type="text" name="title">
          </div>
          <div class="form-group row">
            <label for="body">コメント</label>
            <input class="from-control" type="text" name="body">
          </div>
          <button class="btn btn-primary" type="submit">保存</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
