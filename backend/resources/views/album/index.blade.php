@extends('../layouts/app')
@section('content')
<div class="container album-index">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @foreach($albums as $album)
        <div class="card">
          <div class="card-header"><a href="/albums/{{ $album->id }}"><h2>{{ $album->title }}</h2></a></div>
          <div class="card-body">
            <div class="albums">
              @foreach($images as $image)
              <img src="https://tennis-circle.s3.ap-northeast-1.amazonaws.com/{{ $image }}" alt="">
              @endforeach
            </div>
            <div class="comments">
              <p>コメント：</p>
              <p>{{ nl2br($album->body) }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
