<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Pembayaran Booking Wisata</title>

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
                    <img src="{{ asset('assets/img/payment.svg') }}" alt="">
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
                        <h1 class="heading">Bayar Pesanan</h1>
                        <form action="{{ route('bayar.lunas', $data->invoice) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Metode Transfer</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="bank">
                                    @foreach ($payment as $pay)
                                        <option value="{{$pay->id}}">{{$pay->name}} | {{$pay->bank}} | {{$pay->norek}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">UploadBukti Transfer</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="image">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
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
