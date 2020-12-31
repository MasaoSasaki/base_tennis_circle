@extends('../layouts/app')
@section('content')
<div class="container">
  <div class="admin-album-index">
    <div class="card">
      <div class="card-header">アルバム一覧</div>
        <div class="card-body">
          <ul>
            @foreach($albums as $album)
            <li>{{ $album->title }}
              <a href="/admin/albums/{{ $album->id }}/edit"><i class="far fa-edit fa-fw"></i></a>
              <form action="/admin/albums/{{ $album->id }}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button type="submit" onClick="return deleteConfirm();"><i class="far fa-trash-alt fa-fw"></i></button>
              </form>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
