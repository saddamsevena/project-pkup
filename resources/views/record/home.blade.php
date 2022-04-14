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
<div class="container-fluid">
    <div class="card p-4">
        <div class="card-header text-center text-bold h1">
            Record berdasarkan tanggal
        </div>
        <table class="table table-responsive table-striped text-center table-hover">
            <thead>
                <tr>
                    <th class="col-1">ID</th>
                    <th class="col-1">Tanggal</th>
                    <th class="col-4">Pesan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($records as $r)
                    @if($r->user_id == Auth::user()->id)
                    <tr>
                        <td>
                            <a href="/record/read/{{$r->id}}">
                                {{$r->id}}</>
                            </a>
                        </td>
                        <td>
                            <a href="/record/read/{{$r->id}}">
                                <t>{{$r->tanggal}}</>
                            </a>
                        </td>
                        <td class="text-justify">
                            <a href="/record/read/{{$r->id}}">
                                {{$r->isi_record}}
                            </a>
                        </td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        <br>
        <a href="/record/insert" class="btn btn-secondary align-self-center" style="width: 200px;" >Tambahkan record</a>
    </div>
</div>
@endsection