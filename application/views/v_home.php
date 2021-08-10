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
		<form action="<?php echo base_url().'ctesting/simpan'?>" method="post">
         <center> <h2>Formulir Screening Kesehatan Rencana Swab Antigen</h2> </center>
		
		 <hr>

		
        <h5>Apakah anda pernah periksa / berobat di Klinik xxx  sebelumnya? </h5> 
        <div class="form-row">
		<div class="form-group col-md-4">
		<div class="custom-control custom-radio">
					<input type="radio" id="ContohRadio1" name="status_pasien" class="custom-control-input">
					<label class="custom-control-label" for="ContohRadio1">Ya</label>
		</div>
		</div>
		<div class="form-group col-md-4">
		<div class="custom-control custom-radio">
					<input type="radio" id="ContohRadio2" name="status_pasien" class="custom-control-input">
					<label class="custom-control-label" for="ContohRadio2">Tidak</label>
		</div> 
		</div>
		</div>				

		<div class="form-row">
		<div class="form-group col-md-4">
		<b><label for="jenis_kelamin">Jenis Kelamin :</label></b>
				<select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
					<option value="0">- Pilih Jenis Kelamin</option>
					<option value="1">Laki - Laki</option>
					<option value="2">Perempuan</option>
				</select>
		</div>
		<div class="form-group col-md-4">
		<b><label  for="nama">Nama Pendaftar :</label></b>
				<input type="text" id="nama" name="nama" class="form-control" placeholder="">
		</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-4">
			<b><label for="jenis_identitas">Jenis Identitas :</label></b>
					<select id="jenis_identitas" name="jenis_identitas" class="form-control">
						<option value="">- Pilih Identitas</option>
						<option value="1">KTP</option>
						<option value="2">SIM</option>
						<option value="3">Passport</option>
					</select>
			</div>
		<div class="form-group col-md-4">
		<b><label for="nomor_identitas">Nomor Identitas :</label></b>
				<input type="text" id="nomor_identitas" name="nomor_identitas" class="form-control" placeholder="">
		</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-5">
				<b> <label for="tempat_lahir">Tempat Lahir :</label></b>
				<input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="">
			</div>
			<div class="form-group col-md-5">
				<b><label for="tanggal_lahir">Tanggal Lahir :</label></b>
				<input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
			</div>
		</div>		
   		
   		<div class="form-row">
		<div class="form-group col-md-10">
		<b> <label for="no_tel">Nomor Telepone :</label></b>
				<input type="text" id="no_tel" name="no_tel" class="form-control" placeholder="">
		</div>
		</div>

		<div class="form-row">
		<div class="form-group col-md-10">
		<b><label for="alamat">Alamat :</label></b>
				<input type="text" id="alamat" name="alamat" class="form-control" placeholder="">
		</div>
		</div>

		<div class="form-row">
		<div class="form-group col-md-10">
		<b><label for="suhu">Suhu tubuh saat sampai di XXX</label></b>
				<input type="text" id="suhu" name="suhu" class="form-control" placeholder="">
		</div>
		</div>

		<div class="form-row">
		<div class="form-group col-md-10">
		<b><label for="gejala">Apakah anda mengalami salah satu gejala di bawah ini dalam dua minggu terakhir?</label></b>
		<select id="gejala" name="gejala" class="form-control">
						<option value="">- Pilih Jenis Gejala</option>
						<option value="0">Tidak Ada</option>
						<option value="1">Meriang</option>
						<option value="2">Pusing</option>
						<option value="3">Sakit Kepala</option>
					</select>
			</div>
		</div>
		</div>

		<div class="form-row">
		<div class="form-group col-md-10">
		<b><label for="diagnosa">Apakah anda pernah bertemu dengan pasien yang terdiagnosa COVID-19 dalam dua minggu terakhir?</label></b>
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
			<b><label for="type_bayar">Jenis Pembayaran :</label></b>
			<select id="type_bayar" name="type_bayar" class="form-control">
						<option value="">- Pilih Jenis Pembayaran</option>
						<option value="0">CASH</option>
						<option value="1">DEBIT</option>
						<option value="2">PERUSAHAAN</option>
						<option value="3">ASURANSI</option>
					</select>
		</div>
		</div>
	

		


 
	<!-- 	<div class="form-row">
=======
			<div class="input-group date" data-provide="datepicker">
			   <input type="text" class="form-control">
			    <div class="input-group-addon">
			        <span class="glyphicon glyphicon-th"></span>
			    </div>
			</div>

			<div class="form-row">
>>>>>>> c998097e344a1c3a358ddaca57242397d2114365
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

<!-- https://gedelumbung.com/tutorial-codeigniter-membuat-helper-untuk-format-tanggal-indonesia-di-codeigniter/		 -->
 
		  </form>

    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>    
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap-datepicker.js'?>"></script>	
	<script>
      $('#tanggal_lahir').datepicker({
      	format: 'yyyy-mm-dd',
      });
    </script>
</body>
</html>