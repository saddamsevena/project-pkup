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
  border-radius: 80px;
}
@endsection

@section('content')
@foreach($user as $users)
<div class="card">
  <img class="align-self-center p-5" src="/storage/profil/img/{{ $users->photo }}" width="150px">
  <div class="card-body">
    <h5 class="card-title">{{ $users->name }}</h5>
    <p>{{$users->email}}<br>
    <p>{{$users->jenis_kelamin}}
    <p>{{$users->phone}}<br><br>
    <a href="{{ route('profile.edit',$users->id) }}" class="btn btn-primary">Edit Profile</a>
    <a href="{{ url('/record') }}" class="btn btn-secondary">Riwayat Konseling</a>
  </div>
</div>
@endforeach
@endsection