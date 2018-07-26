<?php
include_once "header.php";
?>

<!-- multistep form -->
<div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="<?php echo base_url();?>/assets/img/balitbang.jpg" alt="" width="100" height="100"></img>
        <h2>Buku Tamu</h2>
        <p class="lead">Perpustakaan Badan Litbang Perhubungan</p>
      </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <a href="<?php echo base_url('Login/daftarBukutamu');  ?>">  <button type="button" class="btn btn-floating btn-deep-orange">Add Buku Tamu</button></a>

        
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                <th class="th-sm text-center">No
                    <i class="fa fa-sort float-none" aria-hidden="true"></i>
                </th>
                <th class="th-sm text-center">Nama Lengkap
                    <i class="fa fa-sort float-none" aria-hidden="true"></i>
                </th>
                <th class="th-sm text-center">Jenis Kelamin
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <!-- <th class="th-sm text-center">Alamat
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th> -->
                <th class="th-sm text-center">Instansi
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm text-center">Pekerjaan
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm text-center">Nomor Telp
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm text-center">Keperluan
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $d) {?>
            
                <tr>
                    <td class="text-center"><?php echo $d['idTamu']; ?></td>
                    <td class="text-center"><?php echo $d['namaLengkap']; ?></td>
                    <td class="text-center"><?php echo $d['jenisKelamin']; ?></td>
                    
                    <td><?php echo $d['instansi']; ?></td>
                    <td><?php echo $d['pekerjaan']; ?></td>
                    <td><?php echo $d['noTelp']; ?></td>
                    <td><?php echo $d['keperluan']; ?></td>
                </tr>
            </tbody>
            <?php } ?>
            <tfoot>
            <tr>
                <th class="th-sm text-center">No
                    <i class="fa fa-sort float-none" aria-hidden="true"></i>
                </th>
                <th class="th-sm text-center">Nama Lengkap
                    <i class="fa fa-sort float-none" aria-hidden="true"></i>
                </th>
                <th class="th-sm text-center">Jenis Kelamin
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <!-- <th class="th-sm text-center">Alamat
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th> -->
                <th class="th-sm text-center">Instansi
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm text-center">Pekerjaan
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm text-center">Nomor Telp
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm text-center">Keperluan
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                </tr>
            </tfoot>
        </table>
        </div>
    </div>
</div>

<?php include_once "footer.php"; ?>