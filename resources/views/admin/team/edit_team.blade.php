@php
  $title = "K'ramad Edit | " . $squad->name;
@endphp

@extends('layout.itsbrain')

@section('content')
  <div class="page-content">
    <form class="form-horizontal" enctype="multipart/form-data" action="/team/{{ $squad->token_team }}/edit" method="POST">
      @csrf
      <div class="panel panel-default">
        <div class="panel-heading" style="display: flex; justify-content: center; align-items: center;">
          <h6 class="panel-title">Tambah Tim</h6>
          <a href="/team" class="btn btn-warning" style="margin-left: auto">Cancel</a>
          <input type="submit" value="Submit form" class="btn btn-primary">
        </div>
        <div class="panel-body">

          <div class="alert alert-info fade in widget-inner">
            <button type="button" class="close" data-dismiss="alert">×</button>
            Silahkan Mengisi Form Berikut untuk menambahkan karyawan baru!
          </div>

          <div class="row">

            <div class="col-sm-6">
              <div class="form-group">
                <label for="name" class="col-sm-12 control-label">Nama :<span class="mandatory">*</span></label>
                <div class="col-sm-12">
                  <input type="text" name="name" id="name"
                    class="form-control @error('name') is-invalid @enderror" value="{{ $squad->name }}">
                  @error('name')
                    <span class="label label-block label-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="position" class="col-sm-12 control-label">Jabatan :<span class="mandatory">*</span></label>
                <div class="col-sm-12">
                  <input type="text" name="position" id="position"
                    class="form-control @error('position') is-invalid @enderror" value="{{ $squad->position }}">
                  @error('position')
                    <span class="label label-block label-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="about" class="col-sm-12 control-label">Tentang :<span class="mandatory">*</span></label>
                <div class="col-sm-12">
                  <textarea name="about" id="about" class="form-control @error('about') is-invalid @enderror">{{ $squad->about }}</textarea>
                  @error('about')
                    <span class="label label-block label-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label for="picture" class="col-sm-12 control-label">Gambar :</label>
                <div class="col-sm-12">
                  <label for="input-file" id="drop-area">
                    <input type="file" name="picture" accept="image/*" id="input-file"
                      style="position: absolute; z-index: -100;">
                    <div id="image-view">
                      <img src="{{ asset('team/'.$squad->picture) }}" width="90px">
                    </div>
                  </label>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </form>
  </div>
@endsection
