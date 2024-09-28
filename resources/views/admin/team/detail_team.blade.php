@php
    $title = "K'ramad Detail | ".$squad->name;
@endphp

@extends('layout.itsbrain')

@section('content')
<div class="page-content">
    <div class="row" style="border: 1px solid black; padding-bottom: 15px; box-sizing: border-box; margin: 0 1px 0 1px">
        <div class="col-md-12" style="display: flex; align-items: center;">
            <h3>{{ $squad->name }}</h3>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('team/'.$squad->picture) }}" width="100%">
        </div>
        <div class="col-md-8">
            <h4>{{ $squad->position }}</h4>
            <h5>Tentang</h5>
            <p>{!! $squad->about !!}</p>
        </div>
    </div>
</div>
@endsection
