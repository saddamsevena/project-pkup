@extends('layouts.app')

@section('css')
.highlight {
    color: #0f609f;
}
.carousel-inner  {
    zalign-items: center;
    min-width: 400px;
    min-height: 200px;
    background-color: #c5e6ff61;
    border-radius: 10px;
    box-shadow: inset 0 0 20px 0px #ccc;
    -moz-box-shadow: inset 0 0 20px 0px #ccc;;
    -webkit-box-shadow: inset 0 0 20px 0px #ccc;;
}
@endsection

@section('content')
    <h3>Record berdasarkan tanggal</h3>
        @foreach($records as $r)
            @if($r->user_id == Auth::user()->id)
            <div class="topik">
            <a href="/record/read/{{$r->id}}">
                <t class="h5">{{$r->tanggal}}</>
                </a>
            </div>
            @endif
        @endforeach
    <br>
    <a href="/record/insert">Tambahkan record</a>
@endsection