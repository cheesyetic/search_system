<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Search Your Schedule</title>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet"><link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="search-wrapper">
  <div class="input-holder">
    <form action="{{ route('search') }}" method="POST" enctype="multipart/form-data" >
    @csrf
    <input type="text" name="ID" id="ID" class="search-input" placeholder="Masukkan NIM disini" />
    <button class="search-icon" type="submit" onclick="searchToggle(this, event);"><span></span></button>
    </form>
  </div>
  <span class="close" onclick="searchToggle(this, event);"></span>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script  src="{{ asset('js/script.js') }}"></script>

</body>
</html>
