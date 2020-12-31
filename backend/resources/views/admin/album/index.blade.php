@extends('../layouts/app')
@section('content')
<div class="container">
  <div class="admin-album-index">
    <div class="card">
      <div class="card-header">アルバム一覧</div>
        <div class="card-body">
          <ul>
            @foreach($albums as $album)
            <li>{{ $album->title }}<i class="far fa-edit fa-fw"></i><i class="far fa-trash-alt fa-fw"></i></li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
