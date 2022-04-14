@extends('layouts.app')

@section('css')
.card, .artikel {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px;
}

.card:hover, .artikel:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
@endsection

@section('content')
    @foreach($records as $r)
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-center text-bold h1">
                    Record {{$r->tanggal}}
                </div>
                <div class="card-body">
                    <p class="text-bold h4">Isi record :</p>
                    <p class="h-5">{{$r->isi_record}}</p>
                    <a href="/record/edit/{{$r->id}}" class="btn btn-secondary">Edit record</a>
                    <a href="/record/delete/{{$r->id}}" class="btn btn-secondary">Hapus record</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection