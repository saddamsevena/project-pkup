@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   
                </div>
                
               
                <div class="card-body">
                @foreach($records as $r)
                <form action="/record/update" method="post">
		            {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $r->id }}"> <br/>
                    tanggal <input type="date" name="tanggal" required="required" value="{{ $r->tanggal }}"> <br/>
                    isi <textarea name="isi" required="required">{{ $r->isi_record }}</textarea><br/>
                    <input type="submit" value="Simpanan">
                </form>
                @endforeach  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
