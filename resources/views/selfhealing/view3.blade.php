@extends('layouts.app')

@section('css')
.icon {
  transition: 0.3s;
}
.icon:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

#myBtn {
  height: 50px;
  font-size: 18px;
  color: white;
  padding: 10px 20px;
  cursor: pointer;
  background: #585858;
  display: inline-block;
  border-radius: 10px solid #000;
  border-radius: 10px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.4);
}
  
/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
  text-align: center;
  font-family: Nunito;
  font-size: 20px;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: left;
  font-size: 28px;
  font-weight: bold;
  text-align: right;
}
.close:hover, .close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.test {
  font-size: 18px;
  color: white;
  padding: 10px 20px;
  cursor: pointer;
  background: #585858;
  display: inline-block;
  border-radius: 10px solid #000;
  border-radius: 10px;
}
.test:hover {
  opacity: 0.9;
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

<div class="row">
  <div class="col-12 text-center">
    <!-- Trigger/Open The Modal -->
    <button id="myBtn">Finish</button>
    <!-- The Modal -->
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <p>
          Hi {{ Auth::user()->name }}
          <br>
          Selamat kamu telah menyelesaikan 30 Days Self
          Healing. Terimakasih telah menggunakan fitur 30 Days self healing!
        </p>
        <a href="{{ url('/') }}">
          <button class="test">OK</button>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="row my-5">
  <div class="col-12 text-center">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="{{ url('/selfhealing/view/2') }}" tabindex="-1"><<</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="{{ url('/selfhealing/view') }}">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="{{ url('/selfhealing/view/2') }}">2</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">>></a>
      </li>
    </ul>
  </div>
</div>

<script type="text/javascript" src="{{ asset('js/viewselfhealing.js') }}"></script>
<script>
  var content = fungsi(view3)
  document.getElementById("content").innerHTML = content
</script>
<script src="{{ asset('js/modal.js') }}"></script>
@endsection