<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Booking Wisata</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave&display=swap" rel="stylesheet">
</head>

<style>
    .heading {
        font-family: 'Sedgwick Ave', cursive;
    }

</style>

<body>
    <main class="mt-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/booking.svg') }}" alt="">
                </div>
                <div class="col-md-6">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            @foreach ($errors->all() as $error)
                                <strong>{{ $error }}</strong>
                                <br>
                            @endforeach
                        </div>
                    @endif
                    <div class="card p-3 shadow-sm rounded mt-5">
                        <h1 class="heading">Form Pemesanan</h1>
                        <form action="{{ route('konfirmasi', $data->slug_url) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                            </div>
                            <label>Jenis Kelamin</label>
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="jk" class="custom-control-input"
                                        value="laki-laki">
                                    <label class="custom-control-label" for="customRadioInline1">Laki Laki</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="jk" class="custom-control-input"
                                        value="perempuan">
                                    <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat EMail</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No Telepon</label>
                                        <input type="number" name="telepon" class="form-control"
                                            id="exampleInputEmail1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Booking</label>
                                        <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Jumlah Tiket</label>
                                        <input type="number" name="tiket" class="form-control" id="exampleInputEmail1">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-secondary btn-block">Bayar Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>
