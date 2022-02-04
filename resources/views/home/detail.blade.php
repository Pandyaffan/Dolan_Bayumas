@extends('layouts.frontend.master')

@section('title')
    wisata {{ $data->title }}
@endsection

@section('content')
    <section id="section" class="section lighten-4">
        <div class="container">
            <div class="row">
                <h3 class="center">{{ $data->title }}</h3>
            </div>
        </div>
    </section>
    <section>
        <div class="card-panel z-depth-2">
            <div class="container">
                <div class="center">
                    <img src="{{ asset('wisata/' . $data->image) }}">
                    <article>
                        <h5>Deskripsi</h5>
                        <p>{!! $data->deskripsi !!}</P>
                        <h5>Lokasi</h5>
                        <p>Alamat: {{ $data->lokasi }}</p>
                        <h5>Harga Tiket</h5>
                        <p>Rp {{ number_format($data->harga) }}/orang (berlaku pada hari senin-minggu, kecuali selasa)</p>
                        <p>Buka pukul 08.00 hingga pukul 17.00 WIB.</p>
                        <h5>Rating</h5>
                        <p>4,3 dari 9.254 ulasan</p>
                        <h5>Ulasan Pengunjung</h5>
                        <p>a. Yogi Fretless : Tempat asik banget buat ngilangin penat rutinitas, pas week end ke sini sama
                            keluarga, teman atau pasangan cocok banget, nuansa abad pertengahan yang nyaman dan bersih serta
                            harga yang terjangkau [Rating : 5]</p>
                        <p>b. Mahesa Fitra : Cocok buat wisata keluarga,tempatnya luas,bersih,petugasnya ramah dan banyak
                            spot buat foto foto. [Rating : 5] </p>
                        <p>c. Salma Maulida :Tempatnya bagus. Banyak tempat untuk foto-foto. Ada hewan juga seperti kelinci,
                            kuda, rusa, domba, burung unta. [Rating : 5]</p>
                    </article>
                    <div class="card-action">
                        <a href="{{ route('pesan', $data->slug_url)}}" class="btn waves-effect waves-light">PESAN TIKET
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
