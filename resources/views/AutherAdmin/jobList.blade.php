<x-dashboard.head />


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>


  <x-dashboard.body.navbar/>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <x-dashboard.body.sidebar/>

  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Dashboard </h1>

            <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody id="show" >
          
   
        </tbody>
    </table>
          </div><!-- /.col -->
          <div class="col-sm-6">
       
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
  
  
  </div>

<x-dashboard.body.footerNoteBody />


  <aside class="control-sidebar control-sidebar-dark">

  </aside>

</div>


<x-dashboard.foot/>
   
<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
      
        ajax: "{{ route('index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'First_Name', name: 'name'},
            {data: 'Last_Name', name: 'last'},
            {data: 'Email', name: 'email'},
            {data: 'Contact', name: 'Contact'},
            {data: "id" , render : function ( data, type, row, meta ) {
              return '<a  onclick="editUser()"  class="btn btn-success" > <i class="fa fa-edit"></i></a>';
            }
          },
          
          
          
        ]
    });  
    
  });

function editUser(){
  $("#show").append("<tr><td>No</td><td>First_Name</td><td>Last_Name</td><td>Email</td><td>Contact</td><td>Action</td></tr>");
}



</script>


	
	
	
