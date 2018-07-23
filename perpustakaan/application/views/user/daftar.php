
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
        <form class="">
          <div class="form-group row">
            <label for="namaLengkap" class="col-sm-5 col-form-label">Nama Lengkap</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="nmLengkap" placeholder="masukan nama lengkap">
            </div>
          </div>
          <div class="form-group row">
            <label for="jenisKelamin" class="col-sm-5 col-form-label">Jenis kelamin</label>
            <div class="col-sm-7">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                  Pria
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                  Perempuan
                </label>
              </div>

            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-5 col-form-label">Alamat</label>
            <div class="col-sm-7">
            <textarea name="name" rows="5" cols="50"></textarea>
            </div>
          </div>
          <div class="form-group row justify-content-lg-center">
            <label for="Instansi" class="col-sm-5 col-form-label">Instansi </label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="nmLengkap" placeholder="">
            </div>
          </div>
          <div class="form-group row justify-content-lg-center">
            <label for="Instansi" class="col-sm-5 col-form-label">Pekerjaan</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="nmLengkap" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-5 col-form-label">Keperluan</label>
            <div class="col-sm-7">
            <textarea name="name" rows="5" cols="50"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-5  col-sm-10">
              <button type="submit" class="btn btn-primary">Register</button>
            </div>
          </div>
        </form>
      </div>
      </div>
  <!-- Footer -->
  <?php include_once "footer.php"; ?>
  <!-- Footer -->
    <script src="<?php echo base_url();?>/assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/mdb.js"></script>
  </body>
</html>
