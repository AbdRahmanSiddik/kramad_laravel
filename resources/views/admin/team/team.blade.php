@php
    $title = "K'ramad | Team";
    $no = 1;
@endphp

@extends('layout.itsbrain')

@section('content')
<div class="page-content">
    <div class="panel panel-default">
      <div class="panel-heading" style="display: flex; align-items: center">
        <h6 class="panel-title" >List Data Tim</h6>
        <a href="/tambah_team" class="btn btn-primary" style="margin-left: auto; margin-right: 1rem">Tambah Tim</a>
      </div>
      <div class="datatable">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Posisi</th>
              <th style="text-align: center;">Opsi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($teams as $team)
              <tr>
                <td>{{ $no++ }}</td>
                <td style="display: flex; flex-direction: row; gap: 10px; align-items: center;">
                    <img src="{{ asset('team/'.$team->picture) }}" width="60px">
                    <p>{{ $team->name }}</p>
                </td>
                <td>{{ $team->position }}</td>
                <td style="text-align: center;">
                    <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-cogs"></i>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-icons-left" style="left: -100px; text-align: end;">
                            <li><a tabindex="-1" href="/team/{{ $team->token_team }}/edit"><i class="fa fa-pencil"></i> Edit</a></li>
                            <li><a tabindex="-1" href="/team/{{ $team->token_team }}/view"><i class="fa fa-book"></i> Detail</a></li>
                            <li><button id="myModal" tabindex="-1" type="button" data-toggle="modal" data-target="#myModal{{ $team->token_team }}"><i class="fa fa-archive"></i> Hapus</button></li>
                        </ul>
                    </div>

                    <div class="modal fade" id="myModal{{ $team->token_team }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Hapus {{ $team->name }}</h4>
                            </div>
                            <div class="modal-body" style="min-height: 20vh; padding: 20px 0 0 0;">
                              <p class="text-danger">Anda Yakin ingin menghapus data {{ $team->name }}. Semua data akan hilang!!!</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <a href="/team/{{ $team->token_team }}/hapus" class="btn btn-danger">Remove</a>
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
