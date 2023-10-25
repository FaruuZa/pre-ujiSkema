@extends('layouts.master')

@section('container')
    <h1><span style="font-weight: 700; font-size:50px">Data Barang Terkirim</span> <a href="/barang-terkirim/tambah" class="btn btn-dark btn-sm"><i class="fa-solid fa-plus"></i> &nbsp;Tambah Data</a></h1>

    <table class="table table-striped" style="text-align: center; box-shadow:0 0 1px black, 0 0 4px black;">
        <thead class="table-dark">
            <tr>
                <td>No</td>
                <td>Supplier</td>
                <td>Barang</td>
                <td>Jumlah</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            {{-- @if (count($supplier) > 0)
            @foreach ($supplier as $item)
            <tr>
                <td>
                    {{$loop->iteration}}
                </td>
                <td>
                    {{$item->name}}
                </td>
                <td>
                    {{$item->address}}
                </td>
                <td>
                    {{$item->phone}}
                </td>
                <td>
                    <a class="link-primary" href="/detail/{{$item->id}}" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Informasi lebih lanjut"><i class="fa-solid fa-circle-info fa-lg"></i></a>
                    <a class="link-primary" style="padding-left: 10px" href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Edit data"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                    <a class="link-danger" style="padding-left: 10px" href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Hapus data"><i class="fa-sharp fa-solid fa-trash fa-lg"></i></a>

                </td>
            </tr>
            @endforeach
            @else --}}
            <tr>
                <td colspan="5">Tidak ada Data</td>
            </tr>
            {{-- @endif --}}
        </tbody>
    </table>

@endsection
