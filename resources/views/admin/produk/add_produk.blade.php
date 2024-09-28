@php
  $title = "K'ramad | Tambah Produk";
@endphp

@extends('layout.itsbrain')

@section('content')
  <div class="page-content">
    <form class="form-horizontal" enctype="multipart/form-data" action="/tambah_produk" method="POST">
      @csrf
      <div class="panel panel-default">
        <div class="panel-heading" style="display: flex; justify-content: center; align-items: center;">
          <h6 class="panel-title">Tambah Produk</h6>
          <a href="/produk" class="btn btn-warning" style="margin-left: auto">Cancel</a>
          <input type="submit" value="Submit form" class="btn btn-primary">
        </div>
        <div class="panel-body">

          <div class="alert alert-info fade in widget-inner">
            <button type="button" class="close" data-dismiss="alert">×</button>
            Silahkan Mengisi Form Berikut untuk menambahkan produk!
          </div>

          <div class="row">

            <div class="col-sm-6">
              <div class="form-group">
                <label for="name" class="col-sm-12 control-label">Nama :<span class="mandatory">*</span></label>
                <div class="col-sm-12">
                  <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                  @error('name')
                    <span class="label label-block label-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="price" class="col-sm-12 control-label">Harga :<span class="mandatory">*</span></label>
                <div class="col-sm-12">
                  <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
                  @error('price')
                    <span class="label label-block label-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="stock" class="col-sm-12 control-label">Stok :<span class="mandatory">*</span></label>
                <div class="col-sm-12">
                  <input type="number" name="stock" id="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock') }}">
                  @error('stock')
                    <span class="label label-block label-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="netto" class="col-sm-12 control-label">Berat Bersih :<span
                    class="mandatory">*</span></label>
                <div class="col-sm-12">
                  <input type="number" name="netto" id="netto" class="form-control @error('netto') is-invalid @enderror" value="{{ old('netto') }}">
                  @error('netto')
                    <span class="label label-block label-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label for="picture" class="col-sm-12 control-label">Gambar Produk :</label>
                <div class="col-sm-12">
                  <label for="input-file" id="drop-area">
                    <input type="file" name="picture" accept="image/*" id="input-file" style="position: absolute; z-index: -100;">
                    <div id="image-view">
                      <img src="{{ asset('dropzone/508-icon.png') }}" width="90px">
                    </div>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label for="ingredients" class="col-sm-12 control-label">Komposisi :</label>
                <div class="col-sm-12">
                  <textarea name="ingredients" id="ingredients" class="form-control @error('ingredients') is-invalid @enderror" style="height: 10.5rem;">{{ old("ingredients") }}</textarea>
                  @error('ingredients')
                    <span class="label label-block label-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </form>
  </div>
@endsection
