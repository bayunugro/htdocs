
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
        <form action="<?php echo base_url('Login/signup'); ?>" method="post" id="bukutamu">
          <div class="form-group row">
            <label for="namaLengkap" class="col-sm-5 col-form-label">Nama Lengkap</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="nmLengkap" name="namaLengkap" placeholder="Enter Fullname" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label for="jenisKelamin" class="col-sm-5 col-form-label">Jenis kelamin</label>
            <div class="col-sm-7">
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
            <label for="alaamt" class="col-sm-5 col-form-label">Alamat</label>
            <div class="col-sm-7">
            <textarea name="alamat" id="alamat" rows="5" cols="50"></textarea>
            </div>
          </div>
          <div class="form-group row justify-content-lg-center">
            <label for="Instansi" class="col-sm-5 col-form-label">Instansi </label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Enter Agency">
            </div>
          </div>
          <div class="form-group row justify-content-lg-center">
            <label for="pekerjaan" class="col-sm-5 col-form-label">Pekerjaan</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Enter your job">
            </div>
          </div>
          <div class="form-group row justify-content-lg-center">
            <label for="notelp" class="col-sm-5 col-form-label">No Telp</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="notelp" name="notelp" placeholder="Enter phone number">
            </div>
          </div>
          <div class="form-group row">
            <label for="keperluan" class="col-sm-5 col-form-label">Keperluan</label>
            <div class="col-sm-7">
            <textarea name="keperluan" rows="5" cols="50"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-2  col-sm-12">
              <button type="submit" name="submit" class="btn btn-green">Register</button>
              <button type="button" name="ubah" class="btn btn-cyan" disable="disabled" onclick="ubah_bukutamu()">Ubah</button>
              <button type="button" name="ubah" class="btn btn-danger" onclick="window.history.back();">Cancel</button>
            </div>
          </div>
        </form>
      </div>
      </div>
  <!-- Footer -->
  <?php include_once "footer.php"; ?>
  <!-- Footer -->
  </body>
</html>
