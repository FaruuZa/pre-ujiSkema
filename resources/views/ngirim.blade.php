@extends('layouts.master')

@section('container')
    <h1><a href="/data-barang" class="btn btn-dark">kembali</a></h1>

    <div class="card border-dark mb-3" style="max-width: 40rem; text-align:center;">
        <div class="card-header">Kirim Barang</div>
        <div class="card-body text-dark" style="display:flex;flex-direction: row">
             <div class="input-group" style="display: flex; flex-direction: column; text-align:left" >
                <label for="nama" class="form-label">Nama Supplier</label>
                {{-- <input type="text" class="form-control" > --}}
                <select class="form-select" aria-label="Default select example"style="width: 100%">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
             </div>
        </div>
    </div>
@endsection
