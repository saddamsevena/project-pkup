@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-bold h1">
                    Edit Record
                </div>
                <div class="card-body">
                @foreach($records as $r)
                <form action="/record/update" method="post">
		            {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $r->id }}"> <br/>
                    <input type="date" name="tanggal" class="form-control" required="required" value="{{ $r->tanggal }}"> <br/>
                    <textarea name="isi" class="form-control" required="required">{{ $r->isi_record }}</textarea><br/>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                @endforeach  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
