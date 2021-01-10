<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<title>Detail Data LKU</title>
</head>
<body>

<form action="{{ route('izin.store') }}" method="post">
	{{csrf_field()}}

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
      	<input name="tgl_verikasi" type="date" class="form-control">
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
	<button type="submit" class="btn btn-primary" style="margin-left: 15px; margin-top: 10px">Tambah Data LKU</button>
	</div>
</form>
	
</body>
</html>