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
            <div class="mt-2 table-responsive">
                <table class="table">
                    <tr>
                        <th>User</th>
                        @for ($i = 1; $i <= $length; $i++)
                        <th>Jawaban {{ $i }}</th>
                        @endfor

                        <th>saran</th>
                    </tr>
                    @foreach ($data as $surat)
                        <tr>
                            @foreach($surat as $key => $value)
                            @if($key=='user')
                            <td>{{ $value }}</td>
                            @else
                           
                            <td>{{ $value['jawaban'] }}</td>
                            @endif
                            @endforeach
                            
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    @endsection