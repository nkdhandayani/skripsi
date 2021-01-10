@extends('layout.blank')
@section('title', 'Tambah Data Pengguna | Admin')
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
    <li class="treeview">
        <a href="{{url('layout/dashboard_admin')}}">
            <i class="fa fa-home"></i><span> Dashboard</span>
        </a>
    </li>
    <li class="treeview">
        <a href="{{url('users/list_userAdmin')}}">
            <i class="fa fa-home active"></i><span> Kelola Pengguna</span>
        </a>
    </li>
    <li class="treeview">
    	<a href="#">
   		<i class="fa fa-edit"></i><span> Kelola BPW</span>
    		<span class="pull-right-container">
    		<i class="fa fa-angle-left pull-right"></i>
    		</span>
    	</a>
    	<ul class="treeview-menu">
    		<li><a href="{{url('bpw/list_bpwAdmin')}}"><i class="fa fa-circle-o"></i><span> Data BPW</span></a></li>
    		<li><a href="{{url('tdup/list_tdupAdmin')}}"><i class="fa fa-circle-o"></i><span> Data TDUP</span></a></li>
    		<li><a href="{{url('izin/list_izinAdmin')}}"><i class="fa fa-circle-o"></i><span> Data Izin Operasional</span></a></li>
    		<li><a href="{{url('lku/list_lkuAdmin')}}"><i class="fa fa-circle-o"></i><span> Data LKU</span></a></li>
    	</ul>
    </li>
</ul>
</section>

<!-- sidebar: style can be found in sidebar.less -->
</aside>
@endsection

@section('content-title', 'Tambah Data Pengguna')

@section('breadcrumb')
	<li><a href="{{url('layout/dashboard_admin')}}"><i class="fa fa-dashboard"></i><span> Dashboard</span></a></li>
	<li> Kelola Pengguna</li>
	<li class="active"> Tambah Data Pengguna</li>
@endsection

@section('content')
<!-- Main content -->
<form action="{{ route('users.store') }}" method="post" style="margin-left: 200px; margin-right: 200px">
	{{csrf_field()}}

<section class="content">
<div class="box">

    <!-- /.box-header -->
    <!-- form start -->
    <form role="form">
    <div class="box-body">

        <div class="form-group">
		 	<label for="form_foto_user">Foto Pengguna</label>
		   	<input name="foto_user" type="file" class="form-control-file" id="input_foto_user">
		</div>
        <div class="form-group">
		   	<label for="form_nm_user">Nama Pengguna</label>
			<input name="nm_bpw" type="text" class="form-control" id="input_nm_bpw">
		</div>
		<div class="form-row">
		    <div class="form-group col-md-6" style="padding: 0; padding-right: 10px">
		      	<label for="form_username">Username</label>
		      	<input name="username" type="username" class="form-control" id="input_username">
			</div>
			<div class="form-group col-md-6" style="padding: 0px; padding-right: 10px">
		  		<label for="form_password">Password</label>
		   		<input name="password" type="password" class="form-control" id="input_password">
			</div>
		</div>
		<div class="form-group col-md-6" style="padding: 0; padding-right: 10px">
		   	<label for="form_nik">NIK</label>
		   	<input name="nik" type="text" class="form-control" id="input_nik">
		</div>
		<div class="form-group">
		   	<label for="form_Email">E-mail</label>
		   	<input name="email"type="email" class="form-control" id="input_email">
		</div>
		<div class="form-group col-md-6" style="padding: 0; padding-right: 10px">
		   	<label for="form_no_telp">Nomor Telepon</label>
		   	<input name="no_telp" type="text" class="form-control" id="input_no_telp">
		</div>
		<div class="form-row col-md-6">
			<div class="form-group">
			    <label for="form_jns_kelamin">Jenis Kelamin</label>
			    <select name="jns_kelamin" class="form-control" id="input_jns_kelamin">
			    	<option selected>-- Pilih Jenis Kelamin --</option>
				    <option value="1">Perempuan</option>
				    <option value="0">Laki-laki</option>
			    </select>
			</div>
		    <div class="form-group">
			    <label for="form_level">Level</label>
			    <select name="level" class="form-control" id="input_level">
			    	<option selected>-- Pilih Level --</option>
				    <option value="1">Kepala Seksi Jasa Pariwisata</option>
				    <option value="0">Staf Jasa Pariwisata</option>
			    </select>
			</div>
			<div class="form-group">
			    <label for="form_status">Status</label>
			    <select name="status" class="form-control" id="input_status">
			    	<option selected>-- Pilih Status --</option>
				    <option value="1">Aktif</option>
				    <option value="0">Tidak Aktif</option>
			    </select>
			</div>
		</div>

		<div>
			<button type="submit" class="btn btn-primary" style="margin-top: 10px">Tambah Data Pengguna</button>
		</div>
	
	</div>
   	</form>
</div>
@endsection

@section('content-footer')