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


<!-- array (
  '_token' => 'rkVlan6Wl9Gr8WDPDowK9pB9KxKVEPSWsJqkteY6',
  '_flash' => array ( 'old' => array (), 'new' => array (),),
  '_previous' => array ( 'url' => 'http://localhost:10080/admin/albums/9/edit',),
  'login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d' => 1,
  'message' => 'Hello!',
  'danger' => 'danger!', -->
