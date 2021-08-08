<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>C-Testing Formulir</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap-datepicker3.css'?>">

</head>
<body>
    <div class="container">
        <div class="row">
		<form>
         <center> <h2>Formulir Screening Kesehatan Rencana Swab Antigen</h2> </center>
		
		 <hr>

		
        <h5>Apakah anda pernah periksa / berobat di Klinik xxx  sebelumnya? </h5> 
        <div class="form-row">
		<div class="form-group col-md-4">
		<div class="custom-control custom-radio">
					<input type="radio" id="ContohRadio1" name="ContohRadio" class="custom-control-input">
					<label class="custom-control-label" for="ContohRadio1">Ya</label>
		</div>
		</div>
		<div class="form-group col-md-4">
		<div class="custom-control custom-radio">
					<input type="radio" id="ContohRadio2" name="ContohRadio" class="custom-control-input">
					<label class="custom-control-label" for="ContohRadio2">Tidak</label>
		</div> 
		</div>
		</div>				

		<div class="form-row">
		<div class="form-group col-md-4">
		<b><label for="jeniskelamin">Jenis Kelamin :</label></b>
				<select id="jeniskelamin" class="form-control">
					<option value="">- Pilih Jenis Kelamin</option>
					<option value="">Laki - Laki</option>
					<option value="">Perempuan</option>
				</select>
		</div>
		<div class="form-group col-md-4">
		<b><label  for="nama">Nama Pendaftar :</label></b>
				<input type="text" id="nama" class="form-control" placeholder="">
		</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-4">
			<b><label for="pekerjaan">Jenis Identitas :</label></b>
					<select id="pekerjaan" class="form-control">
						<option value="">- Pilih Identitas</option>
						<option value="">KTP</option>
						<option value="">SIM</option>
						<option value="">Passport</option>
					</select>
			</div>
		<div class="form-group col-md-4">
		<b><label for="nama">Nomor Identitas :</label></b>
				<input type="text" id="no_id" class="form-control" placeholder="">
		</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-5">
				<b> <label for="tempat_lahir">Tempat Lahir :</label></b>
				<input type="text" id="tempat_lahir" class="form-control" placeholder="">
			</div>
			<div class="form-group col-md-5">
				<b><label for="contoh1">Tanggal Lahir :</label></b>
				<input type="text" name="tgl" id="tgl" class="form-control">
			</div>
		</div>		
   		
   		<div class="form-row">
		<div class="form-group col-md-10">
		<b> <label for="nama">Nomor Telepone :</label></b>
				<input type="text" id="no_telpon" class="form-control" placeholder="">
		</div>
		</div>

		<div class="form-row">
		<div class="form-group col-md-10">
		<b><label for="alamat">Alamat :</label></b>
				<input type="text" id="alamat" class="form-control" placeholder="">
		</div>
		</div>

		<div class="form-row">
		<div class="form-group col-md-10">
		<b><label for="suhu">Suhu tubuh saat sampai di XXX</label></b>
				<input type="text" id="suhu" class="form-control" placeholder="">
		</div>
		</div>

		<div class="form-row">
		<div class="form-group col-md-10">
		<b><label for="gejala">Apakah anda mengalami salah satu gejala di bawah ini dalam dua minggu terakhir?</label></b>
		<select id="gejala" class="form-control">
						<option value="">- Pilih Jenis Gejala</option>
						<option value="">Tidak Ada</option>
						<option value="">Meriang</option>
						<option value="">Pusing</option>
						<option value="">Sakit Kepala</option>
					</select>
			</div>
		</div>
		</div>

		<div class="form-row">
		<div class="form-group col-md-10">
		<b><label for="suhu">Apakah anda pernah bertemu dengan pasien yang terdiagnosa COVID-19 dalam dua minggu terakhir?</label></b>
		</div>
			<div class="form-group col-md-4">
			  <div class="custom-control custom-radio">
					<input type="radio" id="diagnosa" name="diagnosa" class="custom-control-input">
					<label class="custom-control-label" for="diagnosa">Ya</label>
			  </div>
			</div>
			<div class="form-group col-md-4">
			 <div class="custom-control custom-radio">
					<input type="radio" id="diagnosa1" name="diagnosa" class="custom-control-input">
					<label class="custom-control-label" for="diagnosa1">Tidak</label>
		     </div> 
		    </div>
		</div>

	

		<div class="form-row">
			<div class="form-group col-md-7">
			<b><label for="pembayaran">Jenis Pembayaran :</label></b>
			<select id="pembayaran" class="form-control">
						<option value="">- Pilih Jenis Pembayaran</option>
						<option value="">CASH</option>
						<option value="">DEBIT</option>
						<option value="">PERUSAHAAN</option>
						<option value="">ASURANSI</option>
					</select>
		</div>
		</div>
	

		


 
	<!-- 	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="contoh1">Nama Ayah</label>
			<input type="text" class="form-control" id="contoh1" placeholder="Nama Ayah">
		</div>
		<div class="form-group col-md-4">
			<label for="contoh2">Pekerjaan Ayah</label>
			<input type="text" class="form-control" id="contoh2" placeholder="Pekerjaan Ayah">
		</div>
		<div class="form-group col-md-4">
			<label for="contoh2">Alamat Ayah</label>
			<input type="text" class="form-control" id="contoh2" placeholder="Alamat Ayah">
		</div>
	</div> -->
	<!-- 	 
		<div class="input-group date">
    <input type="text" class="form-control" value="12-02-2012">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div> -->
		 
	<!-- 	<div class="form-group">
				<label for="pekerjaan">Pekerjaan</label>
				<select id="pekerjaan" class="form-control">
					<option value="">- Pilih Pekerjaan</option>
					<option value="">Programmer</option>
					<option value="">Web Designer</option>
					<option value="">Pengusaha</option>
				</select>
		</div>
			<h5>Contoh Checkbox</h5>
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="ContohCheckbox1">
					<label class="custom-control-label" for="ContohCheckbox1">Pilihan 1</label>
				</div>
			 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="ContohCheckbox2">
					<label class="custom-control-label" for="ContohCheckbox2">Pilihan 2</label>
				</div>
			 
				<hr> -->
			 
				<!-- <h5>Contoh Radio</h5>
				<div class="custom-control custom-radio">
					<input type="radio" id="ContohRadio1" name="ContohRadio" class="custom-control-input">
					<label class="custom-control-label" for="ContohRadio1">Pilihan 1</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" id="ContohRadio2" name="ContohRadio" class="custom-control-input">
					<label class="custom-control-label" for="ContohRadio2">Pilihan 2</label>
				</div> -->
			 <!-- 
				<hr>
			 
				<h5>Contoh Checkbox Inline</h5>
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox" class="custom-control-input" id="inline1">
					<label class="custom-control-label" for="inline1">Pilihan 1</label>
				</div>
			 
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox" class="custom-control-input" id="inline2">
					<label class="custom-control-label" for="inline2">Pilihan 2</label>
				</div>
 -->

		    </div>

		    <hr>
		    <div class="form-row">
			<div class="form-group col-md-8">
		    <center><button type="submit" class="btn btn-primary">Submit</button></center>

		    </div>
		    </div>
		    
   		 </div>

		 
		  </form>

    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>    
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap-datepicker.js'?>"></script>	
	<script>
      $('#tgl').datepicker({
      	format: 'yyyy-mm-dd',
      });
    </script>
</body>
</html>