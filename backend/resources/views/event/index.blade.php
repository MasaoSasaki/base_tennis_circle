@extends('../layout')
@section('content')
events/index
@foreach($images as $image)
  <img src="https://tennis-circle.s3.ap-northeast-1.amazonaws.com/{{ $image }}" alt="">
@endforeach
@endsection