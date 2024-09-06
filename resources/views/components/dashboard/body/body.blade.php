<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </div>


    <x-dashboard.body.navbar />

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <x-dashboard.body.sidebar />

    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>

                  <p>Job Data</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="{{route('joblist')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>

                  <p>Bounce Rate</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44</h3>

                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>

                  <p>Unique Visitors</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

          </div>

          <div class="row">

            <section class="col-lg-3 connectedSortable">

              <div class="small-box bg-dark">
                <div class="inner">
                  <h3>65</h3>

                  <p>Payment Slip</p>
                </div>
                <div class="icon">
                  <i style="color:white;" class="fa fa-fan color:white"></i>
                </div>
                <a href="{{route('paymentSlip')}}" class="small-box-footer">More info <i class="fas fa-page"></i></a>
              </div>
            </section>

            <section class="col-lg-3 connectedSortable text-white">

              <div class="small-box " style="background-color: purple;">
                <div class="inner">
                  <h3>65</h3>

                  <p> Internship latter</p>
                </div>
                <div class="icon">
                  <i style="color:white;" class="fa fa-tree color:white"></i>
                </div>

                <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="small-box-footer">More info <i class="fas fa-page"></i></a>
                <!-- <a href="{{route('InternshipLetter')}}" class="small-box-footer">More info <i class="fas fa-page"></i></a> -->
              </div>
            </section>
            <section class="col-lg-3 connectedSortable text-white">

              <div class="small-box " style="background-color: #2d589f">
                <div class="inner">
                  <h3>65</h3>

                  <p>Appraisal Letter</p>
                </div>
                <div class="icon">
                  <i style="color:white;" class="fa fa-plane color:white"></i>
                </div>

                <a data-bs-toggle="modal" data-bs-target="#AppraisalLetter" class="small-box-footer">More info <i class="fas fa-page"></i></a>
                <!-- <a href="{{route('InternshipLetter')}}" class="small-box-footer">More info <i class="fas fa-page"></i></a> -->
              </div>
            </section>
            <section class="col-lg-3 connectedSortable text-white">

              <div class="small-box " style="background-color: #2d589f">
                <div class="inner">
                  <h3>65</h3>

                  <p>Custom  Salary Slip</p>
                </div>
                <div class="icon">
                  <i style="color:white;" class="fa fa-plane color:white"></i>
                </div>

                <a data-bs-toggle="modal" data-bs-target="#AppraisalLetter" class="small-box-footer">More info <i class="fas fa-page"></i></a>
                <!-- <a href="{{route('InternshipLetter')}}" class="small-box-footer">More info <i class="fas fa-page"></i></a> -->
              </div>
            </section>
          </div>

        </div>
      </section>

    </div>

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Enter Details</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{route('InternshipLetter')}}" method="post">
              @csrf
              <div class="mb-3">
                <label for="" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="" name="companyName" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Company Email</label>
                <input type="email" class="form-control" id="" name="companyEmail" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Company Website</label>
                <input type="text" class="form-control" id="" name="companyWebsite" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Candidate Name</label>
                <input type="text" name="candidateName" class="form-control" id="">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Profile</label>
                <input type="text" name="Profile" class="form-control" id="">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Generage Date</label>
                <input type="date" name="generateDate" class="form-control" id="">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Start At</label>
                <input type="date" name="startAt" class="form-control" id="">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">End At</label>
                <input type="date" name="EndAt" class="form-control" id="">
              </div>
             
              <button type="submit" class="col-12 btn btn-primary ">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="AppraisalLetter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Enter Details AppraisalLetter</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{route('AppraisalLetter')}}" method="post">
              @csrf
              <div class="mb-3">
                <label for="" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="" name="companyName" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Company Email</label>
                <input type="email" class="form-control" id="" name="companyEmail" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Company Website</label>
                <input type="text" class="form-control" id="" name="companyWebsite" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Candidate Name</label>
                <input type="text" name="candidateName" class="form-control" id="">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Profile</label>
                <input type="text" name="Profile" class="form-control" id="">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Generage Date</label>
                <input type="date" name="generateDate" class="form-control" id="">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Start At</label>
                <input type="date" name="startAt" class="form-control" id="">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">End At</label>
                <input type="date" name="EndAt" class="form-control" id="">
              </div>
             
              <button type="submit" class="col-12 btn btn-primary ">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <x-dashboard.body.footerNoteBody />


    <aside class="control-sidebar control-sidebar-dark">

    </aside>

  </div>