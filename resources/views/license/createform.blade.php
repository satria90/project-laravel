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
                        <h5 class="m-0">Formulir Permohonan Informasi Publik</h5>
                    </div>
                    <div class="card-body">
                        <form
                            action="{{ isset($data) && isset($data->id) ? '/update/license/' . $data->id : '/inset/license' }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <legend><i class="fa fa-user"></i> User Information</legend>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $data->email ?? auth()->user()->email }}" placeholder="name@example.com"
                                    required>

                                <label for="namalengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama-lengkap" name="nama_lengkap"
                                    value="{{ $data->nama_lengkap ?? auth()->user()->name }}" required>

                                <label for="nomoridentitas" class="form-label">Nomor Identitas (KTP/SIM/PASPOR/KK)</label>
                                <input type="text" class="form-control" id="nomor-identitas" name="nomor_identitas"
                                    value="{{ $data->nomor_identitas ?? '' }}" required>

                                <label for="formFile" class="form-label">Upload Identitas</label>
                                <input class="form-control" type="file" id="upload-identitas" name="upload_identitas"
                                    value="{{ $data->file_path ?? '' }}">
                                {{-- <div>{{ str_replace("upload_identitas", "", $data->file_path) }}</div> --}}
                                @if (isset($data) && isset($data->file_path))
                                    <div>{{ str_replace('upload_identitas', '', $data->file_path) }}</div>
                                @endif
                                <label for="alamatrumah" class="form-label">Alamat Rumah</label>
                                <input type="text" class="form-control" id="alamat-rumah" name="alamat_rumah"
                                    value="{{ $data->alamat_rumah ?? '' }}" required>

                                <label for="Nomor Telepon / WhatsApp" class="form-label">Nomor Telepon / WhatsApp</label>
                                <input type="tel" class="form-control" id="nomor-telepon" name="nomor_telepon"
                                    value="{{ $data->nomor_telepon ?? '' }}" required>

                                <label for="Pekerjaan" class="form-label">Perkerjaan</label>
                                <input type="text"class="form-control" id="pekerjaan" name="pekerjaan"
                                    value="{{ $data->perkerjaan ?? '' }}" required>

                                <label for="Nama Perusahaan/Instansi/Universitas/Sekolah/Organisasi" class="form-label">Nama
                                    Perusahaan/Instansi/Universitas/Sekolah/Organisasi</label>
                                <input type="text" class="form-control" id="nama-perusahaan" name="nama_perusahaan"
                                    value="{{ $data->nama_perusahaan ?? '' }}" required>

                                <label for="Alamat Perusahaan/Instansi/Universitas/Sekolah/Organisasi"
                                    class="form-label">Alamat Perusahaan/Instansi/Universitas/Sekolah/Organisasi</label>
                                <input type="text" class="form-control" id="alamat-perusahaan" name="alamat_perusahaan"
                                    value="{{ $data->alamat_perusahaan ?? '' }}" required>

                                <legend class="mt-4"><i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-clipboard2-data" viewBox="0 0 16 16">
                                            <path
                                                d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5z" />
                                            <path
                                                d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z" />
                                            <path
                                                d="M10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm4-3a1 1 0 0 0-1 1v3a1 1 0 1 0 2 0V9a1 1 0 0 0-1-1" />
                                        </svg></i> Pengajuan Permohonan Informasi</legend>

                                <label for="JenisInformasi" class="form-label">Jenis Informasi yang dibutuhkan</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="curah-hujan" name="curah_hujan"
                                        {{ isset($data) && isset($data->curah_hujan) ? ($data->curah_hujan == 'on' ? 'checked' : '') : '' }}>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Curah Hujan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="profile-sungai"
                                        name="profile_sungai"
                                        {{ isset($data) && isset($data->profile_sungai) ? ($data->profile_sungai == 'on' ? 'checked' : '') : '' }}>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Profil Sungai
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="topografi" name="topografi"
                                        {{ isset($data) && isset($data->topografi) ? ($data->topografi == 'on' ? 'checked' : '') : '' }}>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Topografi
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="studi-kajian"
                                        name="studi_kajian"
                                        {{ isset($data) && isset($data->studi_kajian) ? ($data->studi_kajian == 'on' ? 'checked' : '') : '' }}>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Studi/Kajian
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="alokasi-air" name="alokasi_air"
                                        {{ isset($data) && isset($data->alokasi_air) ? ($data->alokasi_air == 'on' ? 'checked' : '') : '' }}>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Alokasi Air
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="lainnya" name="lainnya"
                                        {{ isset($data) && isset($data->lainnya) ? ($data->lainnya == 'on' ? 'checked' : '') : '' }}>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Lainnya
                                    </label>
                                </div>
                                <label for="RincianInformasi" class="form-label">Rincian Informasi yang dibutuhkan</label>
                                <input type="text"class="form-control" id="rincian-informasi" name="rincian_informasi"
                                    value="{{ $data->rincian_informasi ?? '' }}" required>

                                <label for="TujuanPenggunaan" class="form-label">Tujuan Penggunaan Informasi</label>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="penelitian-ta-tesis"
                                        name="penelitian_ta_tesis"
                                        {{ isset($data) && isset($data->penelitian_ta_tesis) ? ($data->penelitian_ta_tesis == 'on' ? 'checked' : '') : '' }}>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Untuk Penelitian/Tugas Akhir/Tesis dan sejenisnya
                                    </label>
                                </div>
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="studi-kajian-proyek"
                                        name="studi_kajian_proyek"
                                        {{ isset($data) && isset($data->studi_kajian_proyek) ? ($data->studi_kajian_proyek == 'on' ? 'checked' : '') : '' }}>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Untuk Studi/Kajian/Proyek
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="lainnya2" name="lainnya2"
                                        {{ isset($data) && isset($data->lainnya2) ? ($data->lainnya2 == 'on' ? 'checked' : '') : '' }}>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Lainnya
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
