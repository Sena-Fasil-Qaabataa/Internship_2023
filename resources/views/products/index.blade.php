<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
    @extends('layouts.base')
    @section('content')
{{--  <div class="wrapper">

  <!-- Navbar -->
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="{{route('About')}}" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{'/'}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('contact')}}" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
      </li>
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="{{route('product.create')}}" class="dropdown-item">
            <!-- Message Start -->

            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('welcome')}}" class="dropdown-item">
            <!-- Message Start -->
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('wel')}}" class="dropdown-item dropdown-footer">Change</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->



    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('photo')}}" class="brand-link">
      <span class="brand-text font-weight-light">show photos</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="{{route('About')}}" class="d-block">About Sena</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('About') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('contact') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>contact</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('mvc') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MVC</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('welcome') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               WELCOME
                <span class="right badge badge-danger">WELCOME</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               IN HOME
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">HERE</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('About') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ABOUT</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('photo') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PHOTO</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('contact') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CONTACT</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('mvc') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MVC</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('wel') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>WEL</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('welcome') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>WELCOMED</p>
                </a>
              </li>
            </ul>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                DATA
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('product.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>registration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('product.create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stored Data</p>
                </a>
              </li>



              <li class="nav-item">
                <a href="{{ route('contact') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact us</p>
                </a>
              </li>
            </ul>
          </li>

                  <li class="nav-item">
                    <a href="{{ route('product.create') }}" class="nav-link">
                      <i class="far  fa-arrow-right nav-icon"></i>
                      <p>Register </p>
                    </a>
                  </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('product.create') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login</p>
                    </a>
                  </li>
                 </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('sidebar') }}" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Search

              </p>
            </a>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>  --}}

  <!-- Content Wrapper. Contains page content -->


  {{--  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Stored Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/'}}">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>  --}}
    <!-- Main content -->
    {{--  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>--}}
              <!-- /.card-header -->
              <div class="card-body">
                <div >
                    <div class="cont">
                    <a class="A" href="{{ route('product.create') }}">create a product</a>
                </div>

                    <table class="content" border="4">
                        <tr >
                            <th>id</th>
                            <th>name</th>
                            <th>qty</th>
                            <th>price</th>
                            <th>description </th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                        @foreach($products as $product)
                <tr>
                    <td>{{ $product ->id }}</td>
                    <td>{{ $product ->name }}</td>
                    <td>{{ $product ->qty}}</td>
                    <td>{{ $product ->price }}</td>
                    <td>{{ $product ->description }}</td>
                    <td>
                        <a href="{{ route('product.edit', ['product'=> $product])}}"><input type="submit" btn btn-primary value="edit" /></a>

                    </td>

                    <td>
                        <form method="POST" action="{{ route('product.destroy' ,['product' =>$product]) }}">
                            @csrf
                            @method('delete')
                        <input type="submit" btn btn-primary value="delete" />
                    </form>
                    </td>
                </tr>
                        @endforeach
                    </table>
                </div>


            </div>

          </div>

        </div>

      </div>
    </section>
</div>

{{--
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
--}}
@endsection
</body>
</html>
