<?php
include_once "header.php";
?>

<script>
    $(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
  });
</script>
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
                <th class="th-sm text-center">Alamat
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
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
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                </tr>
                    <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                    <td>$86,000</td>
                    <td>$86,000</td>
                </tr>
                <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
                <td>$433,060</td>
                <td>$433,060</td>
                </tr>
                <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
                <td>$162,700</td>
                <td>$162,700</td>
                </tr>
                <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
                <td>$372,000</td>
                <td>$372,000</td>
                </tr>
                <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
                <td>$137,500</td>
                <td>$137,500</td>
                </tr>
  

            </tbody>
            <tfoot>
            <tr>
                <th class="th-sm">No
                    <i class="fa fa-sort float-none" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Nama Lengkap
                    <i class="fa fa-sort float-none" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Jenis Kelamin
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Alamat
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Instansi
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Pekerjaan
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Nomor Telp
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Keperluan
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                </tr>
            </tfoot>
        </table>
        </div>
    </div>
</div>
<script src="<?php echo base_url();?>/assets/js/javascript.js"></script>
<?php include_once "footer.php"; ?>