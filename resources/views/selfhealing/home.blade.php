@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-7">
        <p class="h1">30 Days Self Healing Program</p>
        <p class="text-justify">Membantu dirimu untuk mengendalikan ketakutan, tingkat kestressan dan kepanikan yang terjadi dengan mengikuti daily activity pada program ini. Selama 30 hari tersebut akan diberikan kegiatan - kegiatan serta video yang dapat dilakukan untuk dapa mengurangi gejala yang anda alami</p>
    </div>
    <div class="col-5 text-end">
        <img src="{{ asset('images/HomeIMG.png') }}" width=350>
    </div>
</div>

<br><br>

<div class="row justify-content-center align-items-center my-3">
    <div class="col-2 text-center">
        <i class="fas fa-tasks icon"></i>
    </div>
    <div class="col-8">
        <p class="text-justify">30 Days Modules - Modul modul yang berisi tentang "bagaimana cara" mulai dari mengurangi rasa takut, mengatasi panic attack dan dilengkapi kegiatan-kegiatan yang bisa dilakukan untuk mengurangi hal tersebut.</p>
    </div>
    <div class="w-100"></div>
    <br><br>
    <div class="w-100"></div>
    <div class="col-2 text-center">
        <i class="fas fa-film icon"></i>
    </div>
    <div class="col-8">
        <p class="text-justify">30 Days Video - video teori harian dengan informasi psikoedukatif. Teori ini membantu Anda membangun motivasi untuk melakukan kegiatan - kegiatan yang bermanfaat dan mengurangi rasa panik, takut, dan cemas.</p>
    </div>
    <div class="w-100"></div>
    <br><br>
    <div class="w-100"></div>
    <div class="col-12 text-center">
        <button type="button" class="btn btn-primary"><a href="{{ url('/selfhealing/view') }}">Join Now</a></button>
    </div>
</div>
@endsection
