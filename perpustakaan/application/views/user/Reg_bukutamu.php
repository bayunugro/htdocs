
  <!-- Header -->
  <?php include_once"header.php"; ?>
  <!-- Header -->

    <!-- multistep form -->
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="<?php echo base_url();?>/assets/img/balitbang.jpg" alt="" width="100" height="100"></img>
        <h2>Buku Tamu</h2>
        <p class="lead">Perpustakaan Badan Litbang Perhubungan</p>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-lg-center ">
        <form action="<?php echo base_url('Login/signRegistration'); ?>" class="col-xl-6 col-lg-6 col-md-6 col-sm-12" method="post" id="myForm">
        <?php //echo validation_errors('<div class="alert alert-warning">', '</div>'); ?> <br>
          <div class="form-group row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
              <label for="namaLengkap" class=" col-form-label">Nama Lengkap</label>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-">
              <input type="text" class="form-control is-invalid" id="namaLengkap" name="namaLengkap" placeholder="Enter Fullname" autocomplete="off" >
              <span class="text-warning"><?php echo form_error('namaLengkap'); ?></span>
            </div>
          </div>
          <div class="form-group row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <label for="jenisKelamin" class="col-form-label">Jenis kelamin</label>
            </div>            
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="jenkel" id="gridRadios1" value="L" checked>
                  Pria
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="jenkel" id="gridRadios2" value="P">
                  Perempuan
                </label>
              </div>
            </div>
          </div>
          <div class="form-group row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <label for="alamat" class="col-form-label">Alamat</label>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <textarea name="alamat" id="alamat" rows="5" cols="30" minlength="5"></textarea>
            <span class="text-warning"><?php echo form_error('alamat'); ?></span>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <label for="Instansi" class="col-form-label">Instansi </label>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
              <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Enter Agency" minlength="3">
              <span class="text-warning"><?php echo form_error('instansi'); ?></span>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <label for="pekerjaan" class="col-form-label">Pekerjaan</label>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
              <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Enter your job" minlength="3">
              <span class="text-warning"><?php echo form_error('pekerjaan'); ?></span>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <label for="notelp" class="col-form-label">No Telp</label>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
              <input type="text" class="form-control" id="notelp" name="notelp" placeholder="Enter phone number" minlength="7">
              <span class="text-warning"><?php echo form_error('notelp'); ?></span>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <label for="keperluan" class="col-form-label">Keperluan</label>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <textarea name="keperluan" rows="5" cols="30" minlength="4"></textarea>
            <span class="text-warning"><?php echo form_error('keperluan'); ?></span>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-2  col-sm-12">
              <button type="submit" name="submit" class="btn btn-green" id="submit">Register</button>
              <!-- <button type="button" name="ubah" class="btn btn-cyan" disable="disabled" onclick="ubah_bukutamu()">Ubah</button> -->
              <button type="button" name="cancel" class="btn btn-danger" onclick="history.back();">Cancel</button>
            </div>
          </div>
        </form>
      </div>
      </div>
  <!-- Footer -->
  <?php include_once "footer.php"; ?>
  <!-- Footer -->
  <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/mdb.js"></script>
    <script src="<?php echo base_url();?>assets/js/javascript.js"></script>
  <script>

    </script>