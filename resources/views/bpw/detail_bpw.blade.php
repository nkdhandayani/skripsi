<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<title>Detail BPW</title>
</head>
<body>

<!-- <form action="{{ url('editProsesAdmin_bpw/' .$bpw->$bpw) }}" method="post">
	@method('patch')
	{{csrf_field()}}

	<div class="form-group col-md-6">
    	<label for="form_foto_bpw">Foto BPW</label>
    	<input name="foto_bpw" type="file" class="form-control-file" id="input_foto_bpw" value ="{{$bpw -> foto_bpw}}">
	</div>
	<div class="form-group col-md-6">
    	<label for="form_nm_bpw">Nama BPW</label>
   		<input name="nm_bpw" type="text" class="form-control" id="input_nm_bpw" value ="{{$bpw -> nm_bpw}}">
  	</div>
  	<div class="form-row col-md-6">
    <div class="form-group col-md-6">
      	<label for="form_sername">Username</label>
      	<input name="username" type="username" class="form-control" id="input_username" value ="{{$bpw -> username}}">
    </div>
    <div class="form-group col-md-6">
      	<label for="form_assword">Password</label>
      	<input name="password" type="password" class="form-control" id="input_password" value ="{{$bpw -> password}}">
    </div>
  	</div>
  	<div class="form-group col-md-6">
      	<label for="form_Email">E-mail</label>
      	<input name="email"type="email" class="form-control" id="input_email" value ="{{$bpw -> email}}">
	</div>
  	<div class="form-group col-md-6">
	    <label for="for_alamat">Alamat</label>
	    <textarea name="alamat" type="textarea" class="form-control" id="input_alamat" rows="6" value ="{{$bpw -> alamat}}"></textarea>
  	</div>
	<div class="form-group col-md-6">
	    <label for="form_kabupaten">Kabupaten/Kota</label>
	    <select name="kabupaten" class="form-control" id="input_kabupaten" value ="{{$bpw -> kabupaten}}">
	    	<option selected>-- Pilih Kabupaten/Kota --</option>
		    <option value="Kota Denpasar">Kota Denpasar</option>
		    <option value="Badung">Badung</option>
		    <option value="Gianyar">Gianyar</option>
			<option value="Bangli">Bangli</option>
		    <option value="Tabanan">Tabanan</option>
		    <option value="Jembrana">Jembrana</option>
		    <option value="Buleleng">Buleleng</option>
		    <option value="Klungkung">Klungkung</option>
		    <option value="Karangasem">Karangasem</option>
	    </select>
	</div>
	<div class="form-row col-md-6">
	<div class="form-group col-md-6">
      	<label for="form_no_telp">Nomor Telepon</label>
      	<input name="no_telp" type="text" class="form-control" id="input_no_telp" value ="{{$bpw -> no_telp}}">
    </div>
    <div class="form-group col-md-6">
      	<label for="form_no_fax">Nomor Fax</label>
      	<input name="no_fax" type="text" class="form-control" id="input_no_fax" value ="{{$bpw -> no_fax}}">
    </div>
	</div>
    <div class="form-group col-md-6">
    	<label for="form_nm_pic">Nama PIC</label>
   		<input name="nm_pic" type="text" class="form-control" id="input_nm_pic" value ="{{$bpw -> nm_pic}}">
  	</div>
  	<div class="form-group col-md-6">
    	<label for="form_nm_pimpinan">Nama Pimpinan</label>
   		<input name="nm_pimpinan" type="text" class="form-control" id="input_nm_pimpinan" value ="{{$bpw -> nm_pimpinan}}">
  	</div>
  	<div class="form-row col-md-6">
  	<div class="form-group col-md-6">
	    <label for="form_jns_BPW">Jenis BPW</label>
	    <select name="jns_bpw" class="form-control" id="input_jns_bpw" value ="{{$bpw -> jns_bpw}}">
	    	<option selected>-- Pilih Jenis BPW --</option>
		    <option value="BPW">BPW</option>
		    <option value="MICE">MICE</option>
		    <option value="Lanjut Usia">Lanjut Usia</option>
	    </select>
	</div>
    <div class="form-group col-md-6">
	    <label for="form_sts_kantor">Status Kantor</label>
	    <select name="sts_kantor" class="form-control" id="input_sts_kantor" value ="{{$bpw -> sts_kantor}}">
	    	<option selected>-- Pilih Status Kantor --</option>
		    <option value="Hak Pribadi">Hak Pribadi</option>
		    <option value="Kontrak">Kontrak</option>
	    </select>
	</div>
	</div>
	<div class="form-group col-md-6">
      	<label for="form_nib">Nomor Induk Berusaha</label>
      	<input name="nib" type="text" class="form-control" id="input_nib" value ="{{$bpw -> nib}}">
    </div>
	<div class="form-group col-md-6">
	    <label for="form_status">Status</label>
	    <select name="status" class="form-control" id="input_status" value ="{{$bpw -> status}}">
	    	<option selected>-- Pilih Status --</option>
		    <option value="1">Aktif</option>
		    <option value="0">Tidak Aktif</option>
	    </select>
	</div>
	<!-- <div class="form-group col-md-6">
    	<label for="form_nm_admin">Ditambahkan Oleh</label>
   		<input name="nm_user" type="text" class="form-control" id="input_nm_user" value ="{{$user -> nm_user}}">
  	</div> -->
	<!-- <div class="form-group col-md-6">
      	<label for="input_tanggal_tambah">Tanggal Ditambahkan</label>
      	<input name="created_at" type="date" class="form-control">
    </div> -->
	<!-- <div class="form-group col-md-6">
    	<label for="form_nm_staf">Disunting Oleh</label>
   		<input name="nm_user" type="text" class="form-control" id="input_nm_user" value ="{{$user -> nm_user}}">
  	</div> -->
  	<!-- <div class="form-group col-md-6">
      	<label for="input_tanggal_edit">Tanggal Disuting</label>
      	<input name="updated_at" type="date" class="form-control">
    </div> --> -->

</form>
	
</body>
</html>