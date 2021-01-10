@extends('layout.blank')
@section('title', 'Data Izin Operasional | BPW')
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
      <a href="{{url('dashboard_bpw')}}">
        <i class="fa fa-dashboard"></i><span> Dashboard</span>
      </a>
    </li>
    <li>
      <a href="{{url('list_bpwBPW')}}">
        <i class="fa fa-list-alt"></i><span> Biro Perjalanan Wisata</span>
      </a>
    </li>
    <li class="active treeview">
      <a href="#">
      <i class="fa fa-edit"></i><span> Kelola Data</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{url('list_tdupBPW')}}"><i class="fa fa-circle-o"></i><span> Data TDUP</span></a></li>
        <li class="active"><a href="{{url('list_izinBPW')}}"><i class="fa fa-circle-o"></i><span> Data Izin Operasional</span></a></li>
        <li><a href="{{url('list_lkuBPW')}}"><i class="fa fa-circle-o"></i><span> Data LKU</span></a></li>
      </ul>
    </li>
</ul>
</section>

<!-- sidebar: style can be found in sidebar.less -->
</aside>
@endsection

@section('content-title', 'Data Izin Operasional')

@section('breadcrumb')
  <li><a href="{{url('dashboard_bpw')}}"><i class="fa fa-dashboard"></i><span> Dashboard</span></a></li>
  <li> Kelola Data</li>
  <li class="active"> Data Izin Operasional</li>
@endsection

@section('content')
<section class="content" style="padding-top: 0;">
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-body pad table-responsive" style="width: 200px">
        <td>
          <a href="{{url('izin/tambah_izinBPW')}}"><button type="button" class="btn btn-block btn-primary">Tambah Izin Operasional</button></a>
        </td>
      </div>
  
      <div class="box-body">
        <table id='listusers' class="table table-bordered table-striped">
          <thead>
            <th>No.</th>
            <th>No. Izin Operasional</th>
            <th>Tanggal</th>
            <th>Masa Berlaku</th>
            <th>File Izin Operasional</th>
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
                <td>{{ $izin->no_izin }}</td>
                <td>{{ $izin->tanggal }}</td>
                <td>{{ $izin->ms_berlaku }}</td>
                <td>{{ $izin->file_izin }}</td>
                <td>{{ $izin->sts_verifikasi }}</td>
                <td>{{ $izin->status }}</td>
                <td>
                  <a href="{{url('detail_izinBPW', $bpw -> id_bpw)}}" class="btn btn-primary">View</a>
                  <a href="{{url('edit_izinBPW', $bpw -> id_bpw)}}" class="btn btn-primary">Edit</a>
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