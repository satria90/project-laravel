@extends('adminlte.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <h1 class="m-0">Starter Page</h1> --}}
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="p-5">
            <div>
                <a class="btn btn-primary" href="/license/create">Buat Form</a>
            </div>
            <div class="mt-2">
                <table class="table">
                    <tr>
                        <th>Status</th>
                        <th>Email</th>
                        <th>Tanggal Masuk</th>
                        <th>Target Waktu</th>
                        <th>Action</th>
                        @if (auth()->user()->role == 'admin')
                        <th>Edit</th>
                        @endif
                    </tr>
                    @foreach ($data as $surat)
                        <tr>
                            <td>{{ $surat->status }}</td>
                            <td>{{ $surat->email }}</td>
                            <td>{{ date("d/m/Y", strtotime($surat->created_at))}}</td>
                            <td>{{ date("d/m/Y", strtotime($surat->deadline))}}</td>
                            <td>
                                @if (auth()->user()->role == 'admin')
                                    
                                    @if ($surat->status == '' || $surat->status == 'ditolak')
                                        <a class="btn btn-info" href="/in-progress/license/{{ $surat->id }}">Diproses</a>
                                    @endif
                                    @if ($surat->status == 'diproses')
                                        <a class="btn btn-secondary" href="/declain/license/{{ $surat->id }}">Ditolak</a>
                                        <a class="btn btn-primary" href="/accept/license/{{ $surat->id }}">Diterima</a>
                                        <a class="btn btn-info" href="/license/upload-data/{{ $surat->id }}">
                                          <i class="fas fa-file-upload"></i>
                                        </a>
                                    @endif
                                    @if ($surat->status == 'diterima')
                                        <a class="btn btn-info" href="/license/upload-data/{{ $surat->id }}">
                                          <i class="fas fa-file-upload"></i>
                                        </a>
                                    @endif
                                @endif

                                <a class="btn btn-warning text-light" href="/license/view/{{ $surat->id }}"> 
                                    <i class="fas fa-search"></i>
                                  </a>
                                @if ((auth()->user()->role == 'user') && ($surat->status == 'diterima'))
                                    <a class="btn btn-primary" href="/survey/{{ $surat->id }}">
                                        <i class="fas fa-file"></i>
                                    </a>
                                @endif
                                @if ($surat->status == 'survey-selesai')
                                    <a class="btn btn-primary" href="/download-data/license/{{ $surat->id }}">
                                        <i class="fas fa-file-download"></i>
                                    </a>
                                    <a class="btn btn-primary" href="/detail/survey/{{ $surat->id }}">
                                        <i class="fas fa-question-circle"></i>
                                    </a>
                                @endif

                            </td>
                            <td>
                                @if (auth()->user()->role == 'admin')
                                <a class="btn btn-warning text-light" href="/license/view/{{ $surat->id }}"> 
                                    <i class="fas fa-search"></i>
                                  </a>
                                <a class="btn btn-warning text-light" href="/license/update/{{ $surat->id }}"> 
                                    <i class="far fa-edit"></i>
                                  </a>
                                <a class="btn btn-danger" href="/delete/license/{{ $surat->id }}">
                                    <i class="fas fa-trash-alt"></i>
                                  </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div>
                    {{ $data->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    @endsection
