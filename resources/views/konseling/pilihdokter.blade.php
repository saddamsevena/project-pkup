@extends('layouts.app')

@section('css')
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.card img {
  border-radius: 5px;
}
@endsection

@section('content')

@if(Auth::check())
  @if(Auth::user()->role == 'User')
  <div class="row">
    <div class="col-12">
      <p class="h2">Hi Kak {{Auth::user()->name}} </p>
      <p class="h5 text-justify">
        Platform I'm Okay! akan membantu kamu dalam penanganan kesehatan mental bersama para psikolog berpengalaman 
        serta menghubungkan kamu yang ingin bertumbuh dengan Konselor yang bisa memfasilitasi pertumbuhan kamu.
        <br>
        <br>
        <span class="h6">Kamu juga bisa memilih psikolog sesuai dengan keinginan kamu loh! Yuk pilih psikolog kamu dan konsultasi sekarang!</span>
      </p>
    </div>
  </div>
  @endif
@endif

@foreach ($doctor as $dok)
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-3 text-center">
          <img src="/storage/profil/img/{{ $dok->photo}}" width="150px">
        </div>
        <div class="col-9">
          <p class="h5 card-title">{{ $dok->name }}</p>
          <p class="card-text">{{$dok->email}}</p>
          <p class="card-text">{{$dok->jenis_kelamin}}</p>
        </div>
      </div>
    </div>
    <div class="card-footer text-muted text-end">
      <a href="https://wa.me/{{$dok->phone}}" class="btn btn-primary">Konsultasi Sekarang</a>
    </div>
  </div>
  <br>
  <br>
@endforeach

  <p class="h5 text-justify">
    Kesehatan mental sangat penting untuk kamu jaga, karena kesehatan mental merupakan salah satu alasan perasaan yang kamu rasakan saat ini. 
    Selain konseling kami juga menyediakan Fitur 30 Hari Self Healing yang bisa membantu kamu mengurangi rasa anxiety dan stress dari diri sendiri
    kamu bisa coba lihat lebih lanjut
    <a href="{{url('/selfhealing')}}">
      <u>disini.</u>
    </a>
  </p>
  <div>
    <!-- <img style="float: left" src="{{ asset('images/HomeIMG.png') }}" height=200> -->
    <img style="float: right" src="{{ asset('images/Pict-1.png') }}" height=200>
  </div>
@endsection