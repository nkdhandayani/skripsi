@extends('layout.blank')
@section('title', 'Data LKU | Admin')
@section('topbaraccount')
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="{{url('adminLTE/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
        <span class="hidden-xs">Alexander Pierce</span>
    </a>

    <ul class="dropdown-menu">
    <!-- User image -->
    <li class="user-header">
        <img src="{{url('adminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        <p>
        Alexander Pierce - Web Developer
        <small>Member since Nov. 2012</small>
        </p>
    </li>
    </ul>
</li>
@endsection

@section('sidemenu')
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<section class="sidebar">
<ul class="sidebar-menu" data-widget="tree">
    <li>
      <a href="{{url('dashboard_admin')}}">
        <i class="fa fa-home"></i><span> Dashboard</span>
      </a>
    </li>
    <li>
      <a href="{{url('list_userAdmin')}}">
        <i class="fa fa-user"></i><span> Kelola Pengguna</span>
      </a>
    </li>
    <li class="active treeview">
      <a href="#">
      <i class="fa fa-edit"></i><span> Kelola BPW</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{url('list_bpwAdmin')}}"><i class="fa fa-circle-o"></i> Data BPW</a></li>
        <li><a href="{{url('list_tdupAdmin')}}"><i class="fa fa-circle-o"></i> Data TDUP</a></li>
        <li><a href="{{url('list_izinAdmin')}}"><i class="fa fa-circle-o"></i> Data Izin Operasional</a></li>
        <li class="active"><a href="{{url('list_lkuAdmin')}}"><i class="fa fa-circle-o"></i> Data LKU</a></li>
      </ul>
    </li>
    <li class="header"></li>
        <li><a href="{{url('/logout')}}"><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li>
</ul>
</section>

<!-- sidebar: style can be found in sidebar.less -->
</aside>
@endsection

@section('content-title', 'Data LKU')

@section('breadcrumb')
  <li><a href="{{url('dashboard_admin')}}"><i class="fa fa-dashboard"></i><span> Dashboard</span></a></li>
  <li> Kelola BPW</li>
  <li class="active"> Data LKU</li>
@endsection

@section('content')
<section class="content" style="padding-top: 0;">
<div class="row">
  <div class="col-xs-12">
     <div class="box">
              
        <div class="box-body">
          <table id='listusers' class="table table-bordered table-striped">
            <thead>
              <th>No.</th>
              <th>Nama BPW</th>
              <th>No. Surat Pengantar</th>
              <th>Tahun</th>
              <th>Periode</th>
              <th>File LKU</th>
              <th>Status Verifikasi</th>
              <th>Status</th>
              <th>Aksi</th>
            </thead>
          <tbody>
            @php
              $i=1;
            @endphp
            @foreach ($izinz as $izin)
              <tr>
                <td>{{ $i }}</td>
                <td>{{ $lku->nm_bpw }}</td>
                <td>{{ $lku->no_surat }}</td>
                <td>{{ $lku->tahun }}</td>
                <td>{{ $lku->periode }}</td>
                <td>{{ $lku->file_lku }}</td>
                <td>{{ $lku->sts_verifikasi }}</td>
                <td>{{ $lku->status }}</td>
                <td>
                  <a href="{{url('detail_lku', $lku -> id_lku)}}" class="btn btn-primary">View</a>
                </td>
              </tr>
                @php
                  $i++;
                @endphp
            @endforeach
          </tbody>
        </table>
      </div>
    <!-- /.box-body -->
    </div>
  </div>
</div>
@endsection

@section('content-footer')