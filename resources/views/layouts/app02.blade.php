<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Site Info -->
  @yield('title')

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.min.css">
  <link rel="stylesheet" href="/css/style.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@400;600&display=swap" rel="stylesheet">

</head>

<body class="container">
  <header id="header">
    <h1><a href="/">{{config('app.name')}}</a></h1>
    <ul id="global-menu">
      <li><a href="/about">about</a></li>
      <li><a href="/works">works</a></li>
      <li><a href="/contact">contact</a></li>
    </ul>
  </header>

  <!-- body部分 -->
  @yield('content')

  <footer id="footer">
    <small>&copy; 2022 Koichi Watanabe</small>
  </footer>

</body>

</html>