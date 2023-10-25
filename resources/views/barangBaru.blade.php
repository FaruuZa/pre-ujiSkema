@extends('layouts.master')

@section('container')
    <h1><a href="/data-barang" class="btn btn-dark">kembali</a></h1>

    <div class="card border-dark mb-3" style="max-width: 40rem; text-align:center;">
        <div class="card-header">Tambah data Barang</div>
        <div class="card-body text-dark" style="display:flex;flex-direction: row; justify-content: center">
            <form action="/data-barang/tambah" method="POST" style="display: flex; flex-direction: column; text-align:left; width: 90%">
                @csrf
                <div class="input-group">
                    <label for="name" class="form-label">Nama Barang</label>
                    {{-- <input type="text" class="form-control" > --}}
                    <input type="text" class="form-control" style="width: 100%" name="name">
                </div>
                <div class="input-group mt-2">
                    <label for="nama" class="form-label">Satuan</label>
                    {{-- <input type="text" class="form-control" > --}}
                    <input type="text" class="form-control" style="width: 100%" name="satuan">
                </div>
                <label for="banyak" class="form-label mt-3">Jumlah</label>
                <div class="input-group">
                    <input type="number" class="form-control" style="width: 100%" min="0" name="qty">
                </div>
                <button type="submit" class="btn btn-dark mt-4 mb-3">Tambahkan data</button>
            </form>

        </div>
    </div>
@endsection
