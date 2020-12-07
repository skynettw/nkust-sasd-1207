<html>
<head>
<style>
  body {
      font-family:標楷體;
  }
</style>
</head>
<body>
<h2>以下是我的播放清單</h2>
<ul>
@foreach ($data as $item)
<li>{{ $item->name }}</li>
@endforeach
</ul>
</body>
</html>