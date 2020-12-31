@extends('../layouts/app')
@section('content')
events/index
@foreach($images as $image)
  <img src="https://tennis-circle.s3.ap-northeast-1.amazonaws.com/{{ $image }}" alt="">
@endforeach
@foreach($albums as $album)
  <p>{{ $album->id }}</p>
  <p>{{ $album->title }}</p>
  <p>{{ $album->body }}</p>
@endforeach
@endsection
