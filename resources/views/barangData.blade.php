@extends('layouts.master')

@section('container')
    <h1><span style="font-weight: 700; font-size:60px">Data Barang</span> <a href="/data-barang/tambah"
            class="btn btn-dark btn-sm"><i class="fa-solid fa-plus"></i> &nbsp;Tambah Data</a></h1>

    <div class="tabel" style="display:flex; flex-direction:row">
        <table class="table table-striped" style="text-align: center; box-shadow:0 0 1px black, 0 0 4px black;">
            <thead class="table-dark">
                <tr>
                    <td>No</td>
                    <td>Kode Barang</td>
                    <td>Nama</td>
                    <td>Jumlah</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                @if (count($barang) > 0)
                    @foreach ($barang as $item)
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                {{ $item->code }}
                            </td>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                {{ $item->qty }} {{ $item->satuan }}
                            </td>
                            <td>
                                <a class="link-primary" style="padding-left: 10px"
                                    href="/data-barang/edit/{{ $item->code }}" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Edit data"><i
                                        class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                <a class="link-danger" style="padding-left: 10px" data-bs-toggle="tooltip"
                                    href="/data-barang/destroy/{{ $item->code }}" data-bs-placement="top"
                                    title="Hapus data"><i class="fa-sharp fa-solid fa-trash fa-lg"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5">Tidak ada Data</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <div class="btn btn-dark" style="height: 40px; width:40px; margin-left:10px" data-bs-toggle="modal"
            data-bs-target="#exampleModal"><i class="fas fa-search "></i></div>
    </div>

    <div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                {{-- <div class="modal-header">
                </div> --}}
                <h5 class="modal-title text-center" id="staticBackdropLabel">Cari Barang</h5>
                <div class="modal-body">
                    <form action="" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" autofocus>
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



@endsection
