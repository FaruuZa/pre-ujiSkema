@extends('layouts.master')

@section('container')
    <h1><a href="/barang-terkirim" class="btn btn-dark">kembali</a></h1>

    <div class="card border-dark mb-3" style="max-width: 40rem; text-align:center;">
        <div class="card-header">Tambah data Barang terkirim</div>
        <div class="card-body text-dark" style="display:flex;flex-direction: row; justify-content: center">
            <form action="/barang-terkirim/edit/{{$target->id}}" method="POST" style="display: flex; flex-direction: column; text-align:left; width: 90%">
                @csrf
                <div class="input-group" style="width: 100%">
                    <label for="nama" class="form-label">Supplier</label>
                    {{-- <input type="text" class="form-control" > --}}
                    <select class="form-select" aria-label="Default select example" style="width: 100%" name="id_supplier">
                        @foreach ($supplier as $item)
                        @if ($item->name == $target->Supplier->name)
                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                        @else
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="input-group">
                    <label for="nama" class="form-label">Barang</label>
                    {{-- <input type="text" class="form-control" > --}}
                    <select class="form-select" aria-label="Default select example" style="width: 100%" name="id_barang">
                        @foreach ($barang as $item)
                        @if ($item->name == $target->Barang->name)
                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                        @else
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <label for="banyak" class="form-label mt-3">Jumlah</label>
                <div class="input-group">
                    <input type="number" class="form-control" style="width: 100%" min="1" name="qty" value="{{$target->qty}}">
                </div>
                <button type="submit" class="btn btn-dark mt-4 mb-3">Edit data</button>
            </form>

        </div>
    </div>
@endsection
