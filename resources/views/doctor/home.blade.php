@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Welcome') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Hi {{Auth::user()->name}}, Terimakasih telah mendaftarkan diri sebagai psikolog kami!
                    Kami akan melanjutkan pengecekan data kamu, Sehingga kamu dapat menjadi bagian dari Im Okay!
                    dan membantu masyarakat dalam menangani kesehatan mental!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
