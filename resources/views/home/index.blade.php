@extends('layouts.frontend.master')

@section('title')
    Selamat Datang
@endsection

@section('content')
    <!-- slider -->
    <div class="slider">
        <ul class="slides">
            @foreach ($galery as $gl)
                <li>
                    <img src="{{ asset('galery/' . $gl->image) }}">
                    <div class="caption left-align">
                        <h3>{{ $gl->title }}</h3>
                        <h5 class="light grey-text text-lighten-3">{{ $gl->desc }}</h5>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- about -->

    <section id="about" class="about">
        <div class="container">
            <div class="row center">
                <img src="{{ asset('assets/img/Images/logo1.png') }}">
            </div>
            <hr>

            <div class="row">
                @foreach ($data as $item)
                    <div class="col m4 s12 center">
                        <div class="card">
                            <div class="card-image">
                                <img src="{{ asset('wisata/' . $item->image) }}" class="responsive-img materialboxed">
                                <span class="card-title"> PURWOKERTO</span>
                            </div>
                            <div class="card-content">
                                <p> {{ $item->title }} </p>
                            </div>
                            <div class="card-action">
                                <a href="{{ route('detail', $item->slug_url) }}"> Lihat </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- services -->

    <section id="section" class="services grey lighten-4">
        <div class="container">
            <div class="row">
                <h3 class="light center grey-text text-darken-3">Our Services</h3>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">location_on</i>
                        <h5> Location </h5>
                        <p> Memberikan lokasi tempat wisata yang recommended </p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">local_hospital</i>
                        <h5> Deskripsi </h5>
                        <p> Mememberikan informasi detail untuk Traveller </p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">camera_alt</i>
                        <h5> Spot Foto </h5>
                        <p> Memberi tahu wisata dengan spot foto Instagramable </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our team -->
    <section id="section" class="section grey lighten-4">
        <div class="container">
            <div class="row">
                <h3 class=" light center grey-text text-darken-4"> Tentang </h3>
                <p>Dolan Banyumas adalah website pengenalan wisata yang ada di Kabupaten Banyumas. Terdapat detail
                    penjelasan mengenai wisata di Banyumas. Selain pengenalan, di sini juga terdapat pemesanan tempat wisata
                    dan juga bisa booking jauh-jauh hari sebelum hari H.</p>
            </div>
            <div class="row">
                <h3 class=" light center grey-text text-darken-4"> Anggota Tim </h3>
            </div>
        </div>
    </section>

    <section>
        <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row">
                <div class="col s6 center">
                    <img src="assets/img/Pandy.jpeg" class="circle responsive-img" width="150px">
                    <h5>Pandy Affan Daffar</h5>
                    <p class="light grey-text text-darken-3">(PROGRAMMER)</p>
                    <p class="light grey-text text-darken-3">NIM : 19102154</p>
                </div>
                <div class="col s6 center">
                    <img src="assets/img/Tholut.jpeg" class="circle responsive-img" width="150px">
                    <h5>Tholut Amir Fatah</h5>
                    <p class="light grey-text text-darken-3">(PROGRAMMER)</p>
                    <p class="light grey-text text-darken-3">NIM : 19102165</p>
                </div>
            </div>
            <div class="row">
                <div class="col s6 center">
                    <img src="assets/img/Deni.jpeg" class="circle responsive-img" width="150px">
                    <h5>Deni Prasetyo</h5>
                    <p class="light grey-text text-darken-3">(DESAINER)</p>
                    <p class="light grey-text text-darken-3">NIM : 19102048</p>
                </div>
                <div class="col s6 center">
                    <img src="assets/img/Raf.JPEG " class="circle responsive-img" width="150px">
                    <h5>Muhammad Ravy Raspati</h5>
                    <p class="light grey-text text-darken-3">(DESAINER)</p>
                    <p class="light grey-text text-darken-3">NIM : 19102083</p>
                </div>
            </div>
            <div class="row">
                <div class="col s6 center">
                    <img src="assets/img/Putri.JPEG" class="circle responsive-img" width="150px">
                    <h5>Putri Nabilah Sarwenty</h5>
                    <p class="light grey-text text-darken-3">(KONTEN)</p>
                    <p class="light grey-text text-darken-3">NIM : 19102204</p>
                </div>
                <div class="col s6 center">
                    <img src="assets/img/Mir.JPEG " class="circle responsive-img" width="150px">
                    <h5>Miranda Dwi Febriliana</h5>
                    <p class="light grey-text text-darken-3">(KONTEN)</p>
                    <p class="light grey-text text-darken-3">NIM : 19102189</p>
                </div>
            </div>
            <div class="col s6 center">
                <img src="assets/img/MC REZA.JPG" class="circle responsive-img" width="150px">
                <h5>Reza Iqbal Pramudya</h5>
                <p class="light grey-text text-darken-3">(PROJECT MANAGER)</p>
                <p class="light grey-text text-darken-3">NIM : 19102083</p>
            </div>
        </div>
    </section>
@endsection
