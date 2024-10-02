@extends('adminlte.layouts.app')

@section('content')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
              <li class="breadcrumb-item active">Halaman Utama</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <div class="row mt-3 ml-2 mr-2">
      @if (auth()->user()->role == 'admin')
      <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
              <div class="icon-contain">
                <div class="row">
                  <div class="col-8 align-self-center">
                    <h5 class>{{ isset($baru) ? $baru : 0 }}</h5>
                    <p class="text-muted mb-0">Baru </p>
                  </div>
                  {{-- end COl --}}
                  <div class="col-4">
                    <i class="mdi mdi-account-ceheck"><svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="#77FF63" class="bi bi-envelope-check" viewBox="0 0 16 16">
                      <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                      <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686"/>
                    </svg></i>
                  </div>
                </div>
              </div>
            </div>                   
        </div>
      </div>
      @endif
      @if (auth()->user()->role == 'admin')
        <div class="col-lg-3">
      @else
        <div class="col-lg-4">
      @endif
          <div class="card">
              <div class="card-body">
                <div class="icon-contain">
                  <div class="row">
                    <div class="col-8 align-self-center">
                      <h5 class>{{ isset($diterima) ? $diterima : 0 }}</h5>
                      <p class="text-muted mb-0">Diterima</p>
                    </div>
                    {{-- end COl --}}
                    <div class="col-4">
                      <i class="mdi mdi-account-ceheck"><svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="#77FF63" class="bi bi-envelope-check" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                        <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686"/>
                      </svg></i>
                    </div>
                  </div>
                </div>
              </div>                   
          </div>
        </div>
        @if (auth()->user()->role == 'admin')
          <div class="col-lg-3">
        @else
          <div class="col-lg-4">
        @endif
          <div class="card">
              <div class="card-body">
                <div class="icon-contain">
                  <div class="row">
                    <div class="col-8 align-self-center">
                      <h5 class>{{ isset($diproses) ? $diproses : 0 }}</h5>
                      <p class="text-muted mb-0">Diproses</p>
                    </div>
                    {{-- end COl --}}
                    <div class="col-4">
                      <i class="mdi mdi-account-waitting"><svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="#FFC90E" class="bi bi-envelope-paper" viewBox="0 0 16 16">
                        <path d="M4 0a2 2 0 0 0-2 2v1.133l-.941.502A2 2 0 0 0 0 5.4V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5.4a2 2 0 0 0-1.059-1.765L14 3.133V2a2 2 0 0 0-2-2zm10 4.267.47.25A1 1 0 0 1 15 5.4v.817l-1 .6zm-1 3.15-3.75 2.25L8 8.917l-1.25.75L3 7.417V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1zm-11-.6-1-.6V5.4a1 1 0 0 1 .53-.882L2 4.267zm13 .566v5.734l-4.778-2.867zm-.035 6.88A1 1 0 0 1 14 15H2a1 1 0 0 1-.965-.738L8 10.083zM1 13.116V7.383l4.778 2.867L1 13.117Z"/>
                      </svg></i>
                    </div>
                  </div>
                </div>
              </div>                   
          </div>
        </div>
        @if (auth()->user()->role == 'admin')
          <div class="col-lg-3">
        @else
          <div class="col-lg-4">
        @endif
          <div class="card">
              <div class="card-body">
                <div class="icon-contain">
                  <div class="row">
                    <div class="col-8 align-self-center">
                      <h5 class>{{ isset($ditolak) ? $ditolak : 0 }}</h5>
                      <p class="text-muted mb-0">Ditolak</p>
                    </div>
                    {{-- end COl --}}
                    <div class="col-4">
                      <i class="mdi mdi-account-dash"><svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="#FF0000" class="bi bi-envelope-dash" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                        <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-5.5 0a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5"/>
                      </svg></i>
                    </div>
                  </div>
                </div>
              </div>                   
          </div>
        </div>
      {{-- end col --}}
    </div>
    <div>
      <div>
        {{-- Survey Chart{{ json_encode($survey) }} --}}
      </div>
      <canvas id="chartJSContainer" width="600" height="400"></canvas>
    </div>
    {{-- end row --}}

    <!-- /.content -->
  </div>
  {{-- <script type="text/javascript">
    $(document).ready(function(){
        // console.log("halooo",{{ json_encode($survey) }});

        // var options = {
        //   type: 'line',
        //   data: {
        //     labels: ["jawaban1", "jawaban2", "jawaban3", "jawaban4", "jawaban5", "jawaban6","jawaban7","jawaban8","jawban9"],
        //     datasets: [
        //       {
        //         label: '# of Votes',
        //         data: {{ json_encode($survey) }},
        //         borderWidth: 1
        //       },	
              
        //     ]
        //   },
        //   options: {
        //     scales: {
        //       yAxes: [{
        //         ticks: {
        //           reverse: false
        //         }
        //       }]
        //     }
        //   }
        // }

        // var ctx = document.getElementById('chartJSContainer').getContext('2d');
        // new Chart(ctx, options);
  });
  </script> --}}
  <!-- /.content-wrapper -->

@endsection
