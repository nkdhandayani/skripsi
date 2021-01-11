@extends('layout.blank')
@section('title', 'Edit LKU | BPW')
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
        <li><a href="{{url('list_izinBPW')}}"><i class="fa fa-circle-o"></i><span> Data Izin Operasional</span></a></li>
        <li class="active"><a href="{{url('list_lkuBPW')}}"><i class="fa fa-circle-o"></i><span> Data LKU</span></a></li>
      </ul>
    </li>
</ul>
</section>

<!-- sidebar: style can be found in sidebar.less -->
</aside>
@endsection

@section('content-title', 'Edit Data LKU')

@section('breadcrumb')
  <li><a href="{{url('dashboard_bpw')}}"><i class="fa fa-dashboard"></i><span> Dashboard</span></a></li>
  <li> Kelola Data</li>
  <li><a href="{{url('list_lkuBPW')}}"><span> Data LKU</span></a></li>
  <li class="active"> Edit Data LKU</li>
@endsection

@section('content')
<!-- Main content -->
<form action="{{url('/editLKUProsesBPW/' .$lku->id_lku) }}" method="post">
  {{csrf_field()}}

<section class="content">
<div class="box">

  <!-- /.box-header -->
  <!-- form start -->
  <form role="form">
  <div class="box-body">

	<!-- <div class="form-group col-md-6">
    	<label for="form_nm_bpw">Nama BPW</label>
   		<input name="nm_bpw" type="text" class="form-control" id="input_nm_bpw">
  	</div> -->
	<div class="form-group col-md-6">
      	<label for="input_no_surat">Nomor Surat Pengantar</label>
      	<input name="no_izin" type="text" class="form-control">
    </div>
    <div class="form-row col-md-6">
    <div class="form-group col-md-6">
      	<label for="input_tahun">Tahun LKU</label>
      	<input name="no_izin" type="text" class="form-control">
    </div>
    <div class="form-group col-md-6">
	    <label for="periode">Periode LKU</label>
	    <select name="periode" class="form-control">
			<option selected>-- Pilih Periode LKU --</option>
		    <option value="I">I</option>
		    <option value="II">II</option>
	    </select>
	</div>
	</div>
    <div class="form-group col-md-6">
    	<label for="file_lku">File LKU</label>
    	<input name="file_lku" type="file" class="form-control-file">
	</div>
	<!-- <div class="form-row col-md-6">
	<div class="form-group col-md-6">
      <label for="status">Status TDUP</label>
      <select name="sts_verifikasi" class="form-control">
      <option selected>-- Pilih Status TDUP --</option>
        <option value="1">Diterima</option>
        <option value="0">Diperbaiki</option>
      </select>
  	</div>
	<div class="form-group col-md-6">
      <label for="status">Status Izin</label>
      <select name="sts_verifikasi" class="form-control">
      <option selected>-- Pilih Status Izin --</option>
        <option value="1">Diterima</option>
        <option value="0">Diperbaiki</option>
      </select>
 	</div>
 	</div> -->
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
      	<input name="tgl_verified" type="date" class="form-control">
    </div>
    <!-- <div class="form-group col-md-6">
    	<label for="form_nm_staf">Diverifikasi Oleh</label>
   		<input name="nm_user" type="text" class="form-control" id="input_nm_user" value ="{{$user -> nm_user}}">
  	</div> -->
    <div class="form-group col-md-6">
	    <label for="status">Status</label>
	    <select name="status" class="form-control">
	    	<option selected>-- Pilih Status --</option>
		    <option value="1">Aktif</option>
		    <option value="0">Tidak Aktif</option>
	    </select>
	</div>

	<div>
	<button type="submit" class="btn btn-primary" style="margin-top: 10px">Simpan Data LKU</button>
	</div>

</div>
</form>
</div>

@endsection

@section('content-footer')