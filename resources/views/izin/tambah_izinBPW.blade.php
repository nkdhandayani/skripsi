@extends('layout.blank')
@section('title', 'Tambah Data Izin | BPW')
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

@section('content-title', 'Tambah Data Izin Operasional')

@section('breadcrumb')
	<li><a href="{{url('dashboard_bpw')}}"><i class="fa fa-dashboard"></i><span> Dashboard</span></a></li>
	<li> Kelola Data</li>
	<li><a href="{{url('list_izinBPW')}}"><span> Data Izin Operasional</span></a></li>
	<li class="active"> Tambah Data Izin</li>
@endsection

@section('content')
<!-- Main content -->
<form action="{{ route('izin.store') }}" method="post">
	{{csrf_field()}}

	<!-- <div class="form-group col-md-6">
    	<label for="form_nm_bpw">Nama BPW</label>
   		<input name="nm_bpw" type="text" class="form-control" id="input_nm_bpw">
  	</div> -->
	<div class="form-group col-md-6">
      	<label for="inputNo_Izin">Nomor Izin Operasional</label>
      	<input name="no_izin" type="text" class="form-control">
    </div>
    <div class="form-row col-md-6">
    <div class="form-group col-md-6">
      	<label for="input_tanggal">Tanggal Izin Operasional</label>
      	<input name="tanggal" type="date" class="form-control">
    </div>
    <div class="form-group col-md-6">
      	<label for="input_ms_berlaku">Masa Berlaku Izin Operasional</label>
      	<input name="ms_berlaku" type="date" class="form-control">
    </div>
	</div>
    <div class="form-group col-md-6">
    	<label for="file_izin">File Izin Operasional</label>
    	<input name="file_izin" type="file" class="form-control-file">
	</div>
	<div class="form-group col-md-6">
	    <label for="status">Status Verifikasi</label>
	    <select name="sts_verifikasi" class="form-control">
			<option selected>-- Pilih Status Verifikasi --</option>
		    <option value="1">Diterima</option>
		    <option value="0">Diperbaiki</option>
	    </select>
	</div>
	<div class="form-group col-md-6">
	    <label for="inputDeskripsi">Keterangan</label>
	    <textarea name="deskripsi" class="form-control" rows="6"></textarea>
  	</div>
  	<div class="form-group col-md-6">
      	<label for="input_tgl_verifikasi">Tanggal Verifikasi</label>
      	<input name="tgl_verifikasi" type="date" class="form-control">
    </div>
    <div class="form-group col-md-6">
	    <label for="status">Status</label>
	    <select name="status" class="form-control">
	    	<option selected>-- Pilih Status --</option>
		    <option value="1">Aktif</option>
		    <option value="0">Tidak Aktif</option>
	    </select>
	</div>

	<div>
	<button type="submit" class="btn btn-primary" style="margin-left: 15px; margin-top: 10px">Tambah Izin Operasional</button>
	</div>
</form>

@endsection

@section('content-footer')