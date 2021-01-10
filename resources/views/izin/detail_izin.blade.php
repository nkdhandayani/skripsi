<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <title>Detail Data Izin Operasional</title>
</head>
<body>

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
  <!-- <div class="form-group col-md-6">
        <label for="input_tanggal_tambah">Tanggal Ditambahkan</label>
        <input name="created_at" type="date" class="form-control">
  </div> -->
  <!-- <div class="form-group col-md-6">
        <label for="input_tanggal_tambah">Tanggal Disuntuing</label>
        <input name="updated_at" type="date" class="form-control">
  </div> -->

</form>
  
</body>
</html>