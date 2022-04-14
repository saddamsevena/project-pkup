@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-bold h1">
                    Input record baru
                </div>
                <div class="card-body">
                <form action="/record/store" method="post">
		            {{ csrf_field() }}
                    <input type="date" name="tanggal" class="form-control" required="required"> <br/>
                    <textarea name="isi" class="form-control" placeholder="Masukkan pesan disini" required="required"></textarea><br/>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
