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
        <div class="col-12 text-center mb-5">
            <p class="h1">{{$r->tanggal}}</p>
            <p class="h1">{{$r->isi_record}}</p>
            <a href="/record/edit/{{$r->id}}">Edit record</a>
            <a href="/record/delete/{{$r->id}}">Hapus record</a>
            
    </div>
    @endforeach
    
@endsection