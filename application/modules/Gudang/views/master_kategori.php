<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Aplikasi Gudang SPS</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url().'assets/vendor/font-awesome/css/font-awesome.min.css';?>" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.css';?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url().'assets/css/sb-admin.css';?>" rel="stylesheet">

    <!-- datepicker -->
    <link href="<?php echo base_url().'assets/styles/glDatePicker.default.css';?>" rel="stylesheet" type="text/css">

    <link href="ScrollTabla.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="jquery.CongelarFilaColumna.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
    <script src="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css"></script>
    <script src="https://cdn.datatables.net/select/1.2.2/css/select.bootstrap.min.css"></script>
    <script src="jquery.min.js"></script>
    <script src="tableHeadFixer.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.print.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/jquery-birthday-picker.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.2/js/dataTables.select.min.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="glDatePicker.min.js"></script>

    <script type="text/javascript" class="init">
    $(document).on( "click", '#tomboledit',function(e) {
        var id_kategori = $(this).data('id_kategori');
        var nama_kategori = $(this).data('nama_kategori');

        $("#id_kategori2").val(id_kategori);
        $("#nama_kategori2").val(nama_kategori);
    });
    $(document).on( "click", '#tombolhapus',function(e) {
        var id_kategori = $(this).data('id_kategori');

        $("#id_kategori3").val(id_kategori);
    });

    $(document).ready(function(){
        $('#ubah').click(function() {
              alert("Tidak ada data yang dipilih"); 

          } );
        $('#hapus').click(function() {
              alert("Tidak ada data yang dipilih"); 

          } );
    });

     $('.datepicker').datepicker()
     $(document).ready(function() {
        $( "#datepicker" ).datepicker({
            format: 'mm/dd/yyyy'
        });
      });
    </script>
    

    <style>
        #exportButton, #ubah, #hapus, #tambah, #simpan, #tombolhapus, #tomboledit {
            border-radius: 0;
        }
    </style>
    <style type="text/css">
      .zui-table {
          border: none;
          border-right: solid 1px #007bff;
          border-left: solid 1px #007bff;
          border-collapse: separate;
          border-radius: 0;
          border-spacing: 0;
          font: normal 13px Arial, sans-serif;
      }
      .zui-table thead th {
          background-color: #007bff;
          border: none;
          color: #fff;
          padding: 10px;
          text-align: center;
          /*text-shadow: 1px 1px 1px #fff;*/
          white-space: nowrap;
      }
      .zui-table tbody td {
          border-bottom: solid 1px #007bff;
          color: #333;
          padding: 10px;
          /*text-shadow: 1px 1px 1px #fff;*/
          white-space: nowrap;
      }
      .zui-wrapper {
          position: relative;
      }
      .zui-scroller {
          margin-left: 141px;
          overflow-x: scroll;
          overflow-y: visible;
          padding-bottom: 5px;
          width: 300px;
      }
      .zui-table .zui-sticky-col {
          border-left: solid 1px #DDEFEF;
          border-right: solid 1px #DDEFEF;
          left: 0;
          position: absolute;
          top: auto;
          width: 120px;
      }
      table tr:hover {
          background-color: #d8d8d8;
      }
      table td:hover {
          cursor: pointer;
      }
      button, #simpan {
        cursor: pointer;
      }

    </style>


  </head>

  <body class="fixed-nav" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="<?php echo base_url();?>"><!-- 
      <img src="<?php echo base_url().'assets/image/logosps.png';?>"> -->
      Aplikasi Gudang SPS</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav">
          <li  data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="<?php echo base_url();?>">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">
                Data Barang</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents">
              <i class="fa fa-fw fa-database"></i>
              <span class="nav-link-text">
                Master</span>
            </a>
            <ul class="sidenav-second-level" id="collapseComponents">
              <li class="nav-item active">
                <a href="<?php echo base_url('Gudang/master_kategori');?>">Master Kategori</a>
              </li>
              <!-- <li>
                <a href="<?php echo base_url('Gudang/master_aktiva');?>">Master Jenis Aktiva</a>
              </li> -->
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content-wrapper py-3">

      <div class="container-fluid">

        <!-- Tabel Kategori -->
        <div class="card mb-3">
          <div class="card-header">
          <div class="row">
          <div class="col-md-6">
            <i class="fa fa-table"></i>
            Master Kategori
          </div>
            <div class="col-md-6"><span class="pull-right">
              <button type="button" id="tambah" class="btn btn-primary" data-toggle="modal" data-target="#formtambah">
                <i class="fa fa-plus"></i>
                Tambah
              </button>
              <!-- <button type="button" name="ubah" id="ubah" class="btn btn-primary" data-toggle="modal" data-target="">
                  <i class="fa fa-edit"></i>
                  Ubah
              </button> 
              <button type="button" id="hapus" class="btn btn-primary" data-toggle="modal" data-target="">
                  <i class="fa fa-trash"></i>
                  Hapus
              </button>  -->
              </span>
            </div>
          </div>
            <!-- Modal Tambah-->
            <div id="formtambah" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Form Master Kategori</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                  
                  <div class="row">
                  <div class="col-md-12">
                    <form name="simpan_data" action="<?php echo base_url('Gudang/simpan_kategori');?>" method="post">
                    <div class="row">
                      <div class="col-md-2">Id Kategori</div>
                      <div class="col-md-3"><input id="id_kategori" type="text" name="id_kategori" class="input-md  textinput textInput form-control" placeholder="Auto by system" disabled="true"></div>
                      <div class="col-md-3">Nama Kategori</div>
                      <div class="col-md-4"><input id="nama_kategori" type="text" name="nama_kategori" class="input-md  textinput textInput form-control" placeholder="Nama Kategori" required="true"></div>
                    </div> 
                    <br>
                 
                </div>
                  </div>
                  <div class="modal-footer">
                    <div class="col-md-6"><span class="pull-right"><input type="submit" name="simpan" value="Simpan" class="btn btn-primary" id="simpan"></span></div>
                    </div>
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                  </div>
                  </form>
                </div>

              </div>
            </div>
          </div>

          <!-- Modal Edit -->
          <div id="formedit" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Form Master Kategori</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                  
                  <div class="row">
                  <div class="col-md-12">
                    <form name="ubah_kategori" action="<?php echo base_url('Gudang/ubah_kategori');?>" method="post">
                     <input type="hidden" id="id_kategori2" name="id_kategori">
                    <div class="row">
                      <div class="col-md-2">Id Kategori</div>
                      <div class="col-md-3"><input id="id_kategori2" type="text" name="id_kategori" class="input-md  textinput textInput form-control" placeholder="Auto by system" disabled="true"></div>
                      <div class="col-md-3">Nama Kategori</div>
                      <div class="col-md-4"><input id="nama_kategori2" type="text" name="nama_kategori" class="input-md  textinput textInput form-control" placeholder="Nama Kategori" required="true"></div>
                    </div> 
                    <br>
                 
                </div>
                  </div>
                  <div class="modal-footer">
                    <div class="col-md-6"><span class="pull-right"><input type="submit" name="simpan" value="Simpan" class="btn btn-primary" id="simpan"></span></div>
                    </div>
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                  </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
          <!-- Modal Hapus -->
          <div class="modal fade" id="modalhapus" role="dialog">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                Hapus Data
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <form method="post" action="<?php echo base_url('Gudang/hapus_kategori');?>">
                <input type="hidden" name="id_kategori" id="id_kategori3">
                  <p>Apakah anda yakin?</p>
                </div>
                <div class="modal-footer">
                  <button id="yes" type="submit" class="btn btn-primary">Ya</button>
                  <button id="no" type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>
                </form>
              </div>
            </div>
          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table id="dataTable" class="zui-table" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    
                    <th>Id Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php 
                    foreach ($hasil2 as $hasilx) {
                    echo "<tr>
                    
                    <td>".$hasilx->id_kategori."</td>
                    <td>".$hasilx->nama_kategori."</td>
                    <td>
                    <button id='tomboledit' data-toggle='modal' data-target='#formedit' 
                            data-id_kategori='".$hasilx->id_kategori."' 
                            data-nama_kategori='".$hasilx->nama_kategori."'
                            >Ubah</button>
                    <button id='tombolhapus' data-toggle='modal' data-id_kategori='".$hasilx->id_kategori."' data-target='#modalhapus'>Hapus</button>
                    </td>

                    </tr>";
                }
                  ?>
                  
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <!-- Updated yesterday at 11:59 PM -->
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/vendor/popper/popper.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.min.js';?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url().'assets/vendor/jquery-easing/jquery.easing.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/vendor/chart.js/Chart.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/vendor/datatables/jquery.dataTables.js';?>"></script>
    <script src="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.js';?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url().'assets/js/sb-admin.min.js';?>"></script>

  </body>

</html>
