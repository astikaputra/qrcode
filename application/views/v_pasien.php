    <form action="<?php echo base_url().'pasien/simpan'?>" method="post">
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