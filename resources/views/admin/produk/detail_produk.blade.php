@php
    $title = "K'ramad Detail | ".$produk->name;
@endphp

@extends('layout.itsbrain')

@section('content')
    <div class="page-content">
        <div class="row" style="border: 1px solid black; padding-bottom: 15px; box-sizing: border-box; margin: 0 1px 0 1px">
            <div class="col-md-12" style="display: flex; align-items: center; justify-content: center;">
                <h3>{{ $produk->name }}</h3>
                <p style="margin-left: auto; margin-right: 20px">Stock: <span class="label label-danger">{{ $produk->stock }}</span></p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('coffee/'.$produk->picture) }}" width="100%">
            </div>
            <div class="col-md-8">
                <h4>Rp. {{ $produk->price }}</h4>
                <h5 style="padding: 10px 0 10px 0">Berat Bersih : {{ $produk->netto }} gram</h5>
                <h5>Komposisi</h5>
                <p>{!! $produk->ingredients !!}</p>
            </div>
        </div>
    </div>
@endsection
