@php
  $title = "K'ramad | Produk";
  $no = 1;
@endphp
@extends('layout.itsbrain')

@section('content')
  <div class="page-content">
    <div class="panel panel-default">
      <div class="panel-heading" style="display: flex; align-items: center">
        <h6 class="panel-title" >List Data Produk</h6>
        <a href="/tambah_produk" class="btn btn-primary" style="margin-left: auto; margin-right: 1rem">Tambah Produk</a>
      </div>
      <div class="datatable">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Produk</th>
              <th>Harga</th>
              <th>Berat bersih</th>
              <th>Stok</th>
              <th style="text-align: center;">Opsi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($coffees as $coffee)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $coffee->name }}</td>
                <td>Rp. {{ $coffee->price }}</td>
                <td>{{ $coffee->netto }} gram</td>
                <td>{{ $coffee->stock }}</td>
                <td style="text-align: center;">
                    <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-cogs"></i>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-icons-left" style="left: -100px; text-align: end;">
                            <li><a tabindex="-1" href="/produk/{{ $coffee->token_coffee }}/edit"><i class="fa fa-pencil"></i> Edit</a></li>
                            <li><a tabindex="-1" href="/produk/{{ $coffee->token_coffee }}/view"><i class="fa fa-book"></i> Detail</a></li>
                            <li><button id="myModal" tabindex="-1" type="button" data-toggle="modal" data-target="#myModal{{ $coffee->token_coffee }}"><i class="fa fa-archive"></i> Hapus</button></li>
                        </ul>
                    </div>

                    <div class="modal fade" id="myModal{{ $coffee->token_coffee }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Hapus {{ $coffee->name }}</h4>
                            </div>
                            <div class="modal-body" style="min-height: 20vh; padding: 20px 0 0 0;">
                              <p class="text-danger">Anda Yakin ingin menghapus data {{ $coffee->name }}. Semua data akan hilang!!!</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <a href="/produk/{{ $coffee->token_coffee }}/hapus" class="btn btn-danger">Remove</a>
                            </div>
                          </div>
                        </div>
                    </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
