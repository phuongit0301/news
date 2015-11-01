<!-- load header -->
@include("layouts.admin.header")
<!-- end load header -->

@if (Auth::guest())
    @include("auth.login")
@else

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

@include("layouts.admin.menu")

<!-- load aside -->
@include("layouts.admin.sidebar")
<!-- end load aside -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Content Here -->
        @include('layouts.admin.error-notification')

        @yield('content')
      <!-- End Content -->
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->
@endif

@include("layouts.admin.footer")
@include("layouts.admin.footer-bottom")