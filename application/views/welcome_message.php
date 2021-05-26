<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker.min.css'); ?>">

<section class="content-header">
  <h1>
    Dashboard
    <small>Version 2.0</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <div class="col-md-14">
      <!-- TABLE: LATEST ORDERS -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Formulir Pendaftaran</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
              <form action="" method="post">
                <table>
                    <tr>
                        <td width="120"> Nama </td>
                        <td> <input type="text" name="nama" pattern="[A-Za-z]{1,}" title="Alpabeth Only"> </td>
                    </tr>
                    <tr>
                        <td> Tempat Lahir </td>
                        <td> <input type="text" name="tempat_lahir" pattern="[A-Za-z]{1,}" title="Alpabeth Only"> </td>
                    </tr>
                    <tr>
                        <td> Tanggal Lahir </td>
                        <td> <input type="text" name="tanggal_lahir" class="form-control datepicker"> </td>
                    </tr>
                    <tr>
                        <td> Jenis Kelamin </td>
                        <td> <input type="radio" name="jenis_kelamin" value="L"> Laki-laki  
                             <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td> Alamat </td>
                        <td><textarea name="alamat" id="alamat"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="proses" value="Simpan"> </td>
                    </tr>
                </table>

                </form>

                <?php
                $koneksi = mysqli_connect("localhost","root","","formulir");

                if(isset($_POST['proses'])){
                mysqli_query($koneksi, "insert into pendaftaran set  
                nama = '$_POST[nama]',
                tempat_lahir = '$_POST[tempat_lahir]',
                tanggal_lahir = '$_POST[tanggal_lahir]',
                jenis_kelamin = '$_POST[jenis_kelamin]',
                alamat = '$_POST[alamat]'");

                echo "Data Peserta Baru Telah Disimpan";
                

                }

                ?>
              </thead>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
      </div>
      <!-- /.box -->
      <!-- /.box -->
      <!-- /.row -->
    </div>
</section>