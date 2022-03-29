@extends('layouts.app')

@section('css')
.icon {
  transition: 0.3s;
}
.icon:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}
@endsection

@section('content')

<div class="row">
  <div class="col-12 text-center">
    <p class="h2">
      Hi, {{ Auth::user()->name }}
      <br>
      Selamat Datang Di 30 Days Self-Healing Program
      <br>
      Keep Positive and Happy
    </p>
  </div>
</div>

<div id="content"></div>

<div class="row my-5">
  <div class="col-12 text-center">
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="{{ url('/selfhealing/view') }}"><<</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="{{ url('/selfhealing/view') }}">1</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="{{ url('/selfhealing/view/3') }}">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="{{ url('/selfhealing/view/3') }}">>></a>
      </li>
    </ul>
  </div>
</div>

<script type="text/javascript" src="{{ asset('js/viewselfhealing.js') }}"></script>
<script>
  var content = fungsi(view2)
  document.getElementById("content").innerHTML = content
</script>
@endsection