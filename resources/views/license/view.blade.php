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
                            <legend><i class="fa fa-user"></i> User Information</legend>
                            <div class="mb-3">

                                <label for="email" class="form-label">Email address</label>
                                <div>{{ $data->email }}</div>

                                <label for="namalengkap" class="form-label">Nama Lengkap</label>
                                <div>{{ $data->nama_lengkap }}</div>
                                
                                <label for="nomoridentitas" class="form-label">Nomor Identitas (KTP/SIM/PASPOR/KK)</label>
                                <div>{{ $data->nomor_identitas }}</div>

                                <label for="formFile" class="form-label">Upload Identitas</label>
                                <input class="form-control" type="file" id="upload-identitas" name="upload_identitas"
                                    value="{{ $data->file_path ?? '' }}">
                                {{-- <div>{{ str_replace("upload_identitas", "", $data->file_path) }}</div> --}}
                                @if (isset($data) && isset($data->file_path))
                                    <div>{{ str_replace('upload_identitas', '', $data->file_path) }}</div>
                                @endif

                                <label for="alamatrumah" class="form-label">Alamat Rumah</label>
                                <div>{{ $data->alamat_rumah }}</div>

                                <label for="Nomor Telepon / WhatsApp" class="form-label">Nomor Telepon / WhatsApp</label>
                                <div>{{ $data->nomor_telepon }}</div>

                                <label for="Pekerjaan" class="form-label">Perkerjaan</label>
                                <div>{{ $data->perkerjaan }}</div>

                                <label for="Nama Perusahaan/Instansi/Universitas/Sekolah/Organisasi" class="form-label">Nama
                                    Perusahaan/Instansi/Universitas/Sekolah/Organisasi</label>
                                <div>{{ $data->nama_perusahaan }}</div>

                                <label for="Alamat Perusahaan/Instansi/Universitas/Sekolah/Organisasi"
                                    class="form-label">Alamat Perusahaan/Instansi/Universitas/Sekolah/Organisasi</label>
                                <div>{{ $data->alamat_perusahaan }}</div>

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
                                
                                <div>
                                    @if($data->curah_hujan == 'on')
                                    Curah Hujan
                                    @endif
                                </div>

                                <div>
                                    @if($data->profile_sungai == 'on')
                                    Profil Sungai
                                    @endif
                                </div>

                                <div>
                                    @if($data->topografi == 'on')
                                    Topografi
                                    @endif
                                </div>

                                <div>
                                    @if($data->studi_kajian == 'on')
                                    Studi/Kajian
                                    @endif
                                </div>

                                <div>
                                    @if($data->alokasi_air == 'on')
                                    Alokasi air
                                    @endif
                                </div>

                                <div>
                                    @if($data->lainnya == 'on')
                                    Lainnya
                                    @endif
                                </div>

                                <label for="RincianInformasi" class="form-label">Rincian Informasi yang dibutuhkan</label>
                                <div>{{ $data->rincian_informasi }}</div>

                                <label for="TujuanPenggunaan" class="form-label">Tujuan Penggunaan Informasi</label>

                                <div>
                                    @if($data->penelitian_ta_tesis == 'on')
                                    Untuk Penelitian/Tugas Akhir/Tesis dan sejenisnya
                                    @endif
                                </div>

                                <div>
                                    @if($data->studi_kajian_proyek == 'on')
                                    Untuk Studi/Kajian/Proyek
                                    @endif
                                </div>

                                <div>
                                    @if($data->lainnya2 == 'on')
                                    lainnya2
                                    @endif
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
