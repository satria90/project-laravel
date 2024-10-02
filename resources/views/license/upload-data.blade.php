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
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="m-0">Upload Permohonan Informasi Publik</h5>
                    </div>

                    <div class="card-body">
                        <form
                            action="{{'/upload-data/license/'.$data->id}}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <legend><i class="fa fa-user"></i> User Information</legend>
                            
                                <label for="formFile" class="form-label">Upload Data</label>
                                <input class="form-control" type="file" id="upload-data" name="upload_data">
                                @if (isset($data) && isset($data->upload_data))
                                    <div>{{ str_replace('upload_data', '', $data->upload_data) }}</div>
                                @endif
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
