@extends('layouts.master')

@section('container')
    <h1><a href="/data-supplier" class="btn btn-dark">kembali</a></h1>

    <div class="card border-dark mb-3" style="max-width: 100rem;">
        <div class="card-header">Detail</div>
        <div class="card-body text-dark" style="display:flex;flex-direction: row">
            <img src="{{ $target->image }}" alt="..." srcset="" style="aspect-ratio:1/1" height="130rem">
            <div class="content" style="display: flex; flex-direction:column; margin-left:20px;">
                <h3 class="card-title">{{ $target->name }}</h3>
                <div class="card-text">Kategori: {{ $target->categories }}</div>
                <div class="card-text">Alamat: {{ $target->fulladdress }}</div>
                <div class="card-text">No. Telp: {{ $target->phone }}</div>
                <div class="card-text">Website: <a href="{{ $target->website }}">{{ $target->website }}</a></div>
                @if ($target->open_hours > 0)
                    <h5>Jam Buka:</h5>
                    <ul class="card-text" style="list-style-type: none;">
                        @foreach ($target->open_hours as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                @endif

            </div>
        </div>
    </div>
@endsection
