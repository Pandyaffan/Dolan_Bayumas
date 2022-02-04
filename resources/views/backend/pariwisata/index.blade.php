@extends('layouts.admin.master')
@section('title')
    List Pariwisata
@endsection


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield('title')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Admin</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Pariwisata</h3>

                        <div class="card-tools">
                            <a href="{{ route('pariwisata.create') }}" class="btn btn-secondary btn-sm">Buat Baru</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>thumbnail</th>
                                    <th>Title</th>
                                    <th>Tiket</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>
                                            <img src="{{ asset('wisata/' . $item->image) }}" alt="" width="70px"
                                                style="border-radius: 20px">
                                        </td>
                                        <td>{{ $item->title }}</td>
                                        <td>Rp. {{ $item->harga }},00</td>
                                        <td>
                                            <a href="{{ route('pariwisata.edit', $item->id) }}"
                                                class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                            <form method="POST" class="d-inline"
                                                onsubmit="return confirm('Move data to trash?')"
                                                action="{{ route('pariwisata.destroy', $item->id) }}">
                                                @csrf
                                                <input type="hidden" value="DELETE" name="_method">
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash mr-2"></i> Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('css-tambahan')

@endsection

@section('js-tambahan')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@endsection
