<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>C-Testing Formulir</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
    <div class="container">
        <div class="row">
		<form>
         <center> <h2>Formulir Screening Kesehatan Rencana Swab/ Screening Form for Swab test Preparation</h2><hr> </center>

         <h5> Mohon diisi dengan lengkap sesuai identitas / Please fill all of the question
Petugas kami membutuhkan fotokopi identitas anda sebanyak 2 lembar / our staff also need 2 copies of your id (Passport or kitas)> </h5> 
		<h5> * Wajib </h5>
		<div class="form-group">
			<label for="nama">Nama Lengkap / Full name *</label>
				<input type="text" id="nama" class="form-control" placeholder="Contoh form text ...">
		</div>

		<div class="form-group">
			<label for="no_ktp">Nomor KTP (harus diisi bila WNI, nomor passport dapat ditambahkan sebelahnya) / Passport Number (ID number) , Mohon tambahkan spasi setelah angka/huruf PERTAMA / Please add space after FIRST letter or number, example : 1 23456 or B 987654321 *</label>
				<input type="text" id="no_ktp" class="form-control" placeholder="example : 1 23456 or B 987654321">
		</div>

			<div class="form-row">
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
	</div>
		 
		<div class="form-group">
				<label for="umur">Umur</label>
				<input type="number" id="umur" class="form-control" placeholder="Contoh form angka ...">
		</div>
		 
		<div class="form-group">
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
			 
				<hr>
			 
				<h5>Contoh Radio</h5>
				<div class="custom-control custom-radio">
					<input type="radio" id="ContohRadio1" name="ContohRadio" class="custom-control-input">
					<label class="custom-control-label" for="ContohRadio1">Pilihan 1</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" id="ContohRadio2" name="ContohRadio" class="custom-control-input">
					<label class="custom-control-label" for="ContohRadio2">Pilihan 2</label>
				</div>
			 
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


		    </div>

		    <hr>

		    <button type="submit" class="btn btn-primary">Submit</button>

   		 </div>

		 
		  </form>
 
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>