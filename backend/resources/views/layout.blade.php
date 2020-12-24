<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>テニスサークル</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
	<header><h2>テニスサークル</h2></header>
	<main>
		@yield('content')
	</main>
	<footer><small>©︎ 2020 MasaoSasaki</small></footer>
</body>
</html>
