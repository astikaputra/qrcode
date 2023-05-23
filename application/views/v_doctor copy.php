<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>Membuat QR Code CodeIgniter 3</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>DATA DOKTER</h2><hr>
            <!-- <a class="btn btn-danger" href=" <?php echo base_url('pegawai/pdf') ?>"> PDF </a>
            <a class="btn btn-danger" href=" <?php echo base_url('pegawai/print_pegawai_detail') ?>"> PRINT </a>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Record</button> -->

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>KODE</th>
                        <th>NAMA DOKTER</th>
                        <th>SPECIALIST</th>
                        <th>STATUS</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data->result() as $row):?>
                    <tr>
                        <td style="vertical-align: middle;"><?php echo $row->code;?></td>
                        <td style="vertical-align: middle;"><?php echo $row->name;?></td>
                        <td style="vertical-align: middle;"><?php echo $row->specialist;?></td>
                        <td style="vertical-align: middle;"><?php echo $row->status;?></td>
                        <!-- <td><img style="width: 100px;" src="<?php //echo base_url().'assets/images/'.$row->qr_code;?>"></td> -->
                         <td> <a class="btn btn-warning" href="<?php echo base_url('doctor/generate_barcode')?>/<?php echo $row->id ?>"</a>View</td>
                        <td> <a class="btn btn-danger" href="<?php echo base_url('doctor/print_doctor_detail')?>/<?php echo $row->id ?>"</a>Pdf</td>
                         <!-- <td class="btn btn-danger" href="<?php //echo base_url('pegawai/email') ?>"> <i class="fa fa-file"></i> EMAIL </td> -->
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
 
    <!-- Modal add new pegawai-->
    <form action="<?php echo base_url().'pegawai/simpan'?>" method="post">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Pasien</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
             
                  <div class="form-group">
                    <label for="nip" class="control-label">NO MR:</label>
                    <input type="text" name="nip" class="form-control" id="nip">
                  </div>
                  <div class="form-group">
                    <label for="nama_pegawai" class="control-label">NAMA PASIEN:</label>
                    <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai">
                  </div>
                  <div class="form-group">
                    <label for="url" class="control-label">URL FILE:</label>
                    <input type="text" name="url" class="form-control" id="url">
                  </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </div>
    </form>
 
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>