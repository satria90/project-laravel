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
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Survey Kepuasan Pelayanan</h3>
        </div>
        <div class="card-body">
            <form action="{{ '/insert/survey/'.$id }}"method="POST" enctype="multipart/form-data">
                    @csrf
                        <label class="card-text">1. Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?</label>
                    <div class="mb-3 ml-3">
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="1" id="question1-option1" value="Tidak Sesuai">
                            <label class="form-check-label" for="question1-option1">1.Tidak Sesuai</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="1" id="question1-option2" value="Cukup Sesuai">
                            <label class="form-check-label" for="question1-option2">2.Cukup Sesuai</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="1" id="question1-option2" value="Sesuai">
                            <label class="form-check-label" for="question1-option3">3.Sesuai</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="1" id="question1-option2" value="Sangat Sesuai">
                            <label class="form-check-label" for="question1-option4">4.Sangat Sesuai</label>
                        </div>
                    </div>
                        <label class="card-text">2. Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini?</label>
                    <div class="div mb-3 ml-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="2" id="question2-option1" value="Tidak Sesuai">
                            <label class="form-check-label" for="question2-option1">1.Sangat Tidak Mudah</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="2" id="question2-option2" value="Cukup Sesuai">
                            <label class="form-check-label" for="question2-option2">2.Cukup Mudah</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="2" id="question2-option2" value="Sesuai">
                            <label class="form-check-label" for="question2-option3">3.Mudah</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="2" id="question2-option2" value="Sangat Sesuai">
                            <label class="form-check-label" for="question2-option4">4.Sangat Mudah</label>
                        </div>
                    </div>
                    
                    <div class="div mb-1 bold-text">
                        <label class="form-label bold-text">3. Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan?</label>
                    </div>
                    <div class="div mb-3 ml-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="3" id="question3-option1" value="Tidak Sesuai">
                            <label class="form-check-label" for="question3-option1">1.Tidak Cukup Cepat</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="3" id="question3-option2" value="Cukup Sesuai">
                            <label class="form-check-label" for="question3-option2">2.Cukup Cepat</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="3" id="question3-option2" value="Sesuai">
                            <label class="form-check-label" for="question3-option3">3.Cepat</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="3" id="question3-option2" value="Sangat Sesuai">
                            <label class="form-check-label" for="question3-option4">4.Sangat Cepat</label>
                        </div>
                    </div>
                    
                    <div class="div mb-1 bold-text">
                        <label class="form-label bold-text">4. Bagaimana pendapat Saudara tentang kewajaran biaya/tarif dalam pelayanan?</label>
                    </div>
                    <div class="div mb-3 ml-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="4" id="question4-option1"  value="Tidak Sesuai">
                            <label class="form-check-label" for="question4-option1">1.Sangat Mahal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="4" id="question4-option2" value="Cukup Sesuai">
                            <label class="form-check-label" for="question4-option2">2.Mahal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="4" id="question4-option2" value="Sesuai">
                            <label class="form-check-label" for="question4-option3">3.Murah</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="4" id="question4-option2" value="Sangat Sesuai">
                            <label class="form-check-label" for="question4-option4">4.Sangat Murah/Gratis</label>
                        </div>
                    </div>
                    
                    <div class="div mb-1 bold-text">
                        <label class="form-label bold-text">5. Bagaimana pendapat Saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan?</label>
                    </div>
                    <div class="div mb-3 ml-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="5" id="question5-option1" value="Tidak Sesuai">
                            <label class="form-check-label" for="question5-option1">1.Tidak Sesuai</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="5" id="question5-option2" value="Cukup Sesuai">
                            <label class="form-check-label" for="question5-option2">2.Cukup Sesuai</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="5" id="question5-option2" value="Sesuai">
                            <label class="form-check-label" for="question5-option3">3.Sesuai</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="5" id="question5-option2" value="Sangat Sesuai">
                            <label class="form-check-label" for="question5-option4">4.Sangat Sesuai</label>
                        </div>
                    </div>
                    
                    <div class="div mb-1 bold-text">
                        <label class="form-label bold-text">6. Bagaimana pendapat Saudara tentang kompetensi/ kemampuan petugas dalam pelayanan?</label>
                    </div>
                    <div class="div mb-3 ml-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="6" id="question6-option1" value="Tidak Sesuai">
                            <label class="form-check-label" for="question6-option1">1.Tidak Kompeten</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="6" id="question6-option2" value="Cukup Sesuai">
                            <label class="form-check-label" for="question6-option2">2.Cukup Kompeten</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="6" id="question6-option2" value="Sesuai">
                            <label class="form-check-label" for="question6-option3">3.Kompeten</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="6" id="question6-option2" value="Sangat Sesuai">
                            <label class="form-check-label" for="question6-option4">4.Sangat Kompeten</label>
                        </div>
                    </div>
                    
                    <div class="div mb-1 bold-text">
                        <label class="form-label bold-text">7. Bagaimana pendapat saudara perilaku petugas dalam pelayanan terkait kesopanan dan keramahan?</label>
                    </div>
                    <div class="div mb-3 ml-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="7" id="question7-option1" value="Tidak Sesuai">
                            <label class="form-check-label" for="question7-option1">1.Buruk</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="7" id="question7-option2"  value="Cukup Sesuai">
                            <label class="form-check-label" for="question7-option2">2.Cukup</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="7" id="question7-option2" value="Sesuai">
                            <label class="form-check-label" for="question7-option3">3.Baik</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="7" id="question7-option2" value="Sangat Sesuai">
                            <label class="form-check-label" for="question7-option4">4.Sangat Baik</label>
                        </div>
                    </div>
                    
                    <div class="div mb-1 bold-text">
                        <label class="form-label bold-text">8. Bagaimana pendapat Saudara tentang kualitas sarana dan prasarana?</label>
                    </div>
                    <div class="div mb-3 ml-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="8" id="question8-option1" value="Tidak Sesuai">
                            <label class="form-check-label" for="question8-option1">1.Buruk</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="8" id="question8-option2" value="Cukup Sesuai">
                            <label class="form-check-label" for="question8-option2">2.Cukup</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="8" id="question8-option2" value="Sesuai">
                            <label class="form-check-label" for="question8-option3">3.Baik</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="8" id="question8-option2" value="Sangat Sesuai">
                            <label class="form-check-label" for="question8-option4">4.Sangat Baik</label>
                        </div>
                    </div>
                    
                    <div class="div mb-1 bold-text">
                        <label class="form-label bold-text">9. Bagaimana pendapat Saudara tentang penanganan pengaduan pengguna layanan?</label>
                    </div>
                    <div class="div mb-3 ml-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="9" id="question9-option1" value="Tidak Sesuai">
                            <label class="form-check-label" for="question9-option1">1.Kurang baik</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="9" id="question9-option2" value="Cukup Sesuai">
                            <label class="form-check-label" for="question9-option2">2.Cukup Baik</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="9" id="question9-option2" value="Sesuai">
                            <label class="form-check-label" for="question9-option3">3.Baik</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="9" id="question9-option2" value="Sangat Sesuai">
                            <label class="form-check-label" for="question9-option4">4.Sangat Baik</label>
                        </div>
                    </div>
                    
                    <div class="div mb-1">
                        <label class="form-label bold-text"> 10. Saran atau komentar  </label>
                    </div>
                    <div class="div">
                        <input class="form-control form-control-sm" type="text" name="saran" id="question10">
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Kirim </button>
                    </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection
