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
    $(document).ready(function() {
          var table = $('#dataTable').DataTable( {
              // scrollY:        "300px",
              scrollX:        true,
              scrollCollapse: true,
              // paging:         false,
              select: true,
              // order: [[ 1, "desc" ]],
              fixedColumns:   {
                  leftColumns: 2,
                  rightColumns: 1
              }
          } );
    } );
    $(document).on( "click", '#tomboledit',function(e) {
        var id_barang = $(this).data('id_barang');
        var kode_barang = $(this).data('kode_barang');
        var nama_barang = $(this).data('nama_barang');
        var tanggal_masuk = $(this).data('tanggal_masuk');
        var unit = $(this).data('unit');
        var harga_awal = $(this).data('harga_awal');
        var total_harga = $(this).data('total_harga');
        var jenis_aktiva = $(this).data('jenis_aktiva');
        var masa_manfaat = $(this).data('masa_manfaat');
        var kategori = $(this).data('kategori');

        $("#id_barang2").val(id_barang);
        $("#kode_barang2").val(kode_barang);
        $("#nama_barang2").val(nama_barang);
        $("#datepicker2").val(tanggal_masuk);
        $("#unit2").val(unit);
        $("#harga_awal2").val(harga_awal);
        $("#total_harga2").val(total_harga);
        $("#jenis_aktiva2").val(jenis_aktiva);
        $("#masa_manfaat2").val(masa_manfaat);
        $("#kategori2").val(kategori);
    });
    $(document).on( "click", '#tombolhapus',function(e) {
        var id_barang = $(this).data('id_barang');

        $("#id_barang3").val(id_barang);
    });

    function hitung() {
        var a = $("#unit").val();
        var b = $("#harga_awal").val();
        c = a * b; //a kali b
        $("#total_harga").val(c);
    }

    function hitung2() {
        var a = $("#unit2").val();
        var b = $("#harga_awal2").val();
        c = a * b; //a kali b
        $("#total_harga2").val(c);
    }

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
     function myFunction(x) {
        alert("Row index is: " + x.rowIndex);
    }
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
          /*width: 300px;*/
      }
      .zui-table .zui-sticky-col {
          border-left: solid 1px #DDEFEF;
          border-right: solid 1px #DDEFEF;
          left: 0;
          position: absolute;
          top: auto;
          /*width: 120px;*/
      }
      th, td { white-space: nowrap; }
      /*div.dataTables_wrapper {
          width: 800px;
          margin: 0 auto;
      }*/

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
      <a class="navbar-brand" href="<?php echo base_url();?>">Aplikasi Gudang SPS</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav">
          <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
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
            <ul class="sidenav-second-level collapse" id="collapseComponents">
              <li>
                <a href="<?php echo base_url('Gudang/master_kategori');?>">Master Kategori</a>
              </li><!-- 
              <li>
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
            <a class="nav-link" data-toggle="modal" data-target="#modal_logout">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
              <div id="modal_logout" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Ready to Leave?</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                  
                  <div class="row">
                  <div class="col-md-12">
                    <form name="simpan_data" action="<?php echo $action;?>" method="post">
                    <div class="row">
                      Select "Logout" below if you are ready to end your current session.
                    </div> 
                 
                  </div>
                  </div>
                  <div class="modal-footer">
                    <div class="col-md-6"><span class="pull-right"><input type="button" name="simpan" value="Cancel" class="btn btn-default" id="simpan"></span></div>
                    <div class="col-md-6"><span class="pull-right"><input type="submit" name="simpan" value="Logout" class="btn btn-primary" id="simpan"></span></div>
                    </div>
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                  </div>
                  </form>
                </div>

              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content-wrapper py-3">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <!-- <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data Barang</li>
        </ol> -->

        <!-- Tabel Barang -->
        <div class="card mb-3">
          <div class="card-header">
          <div class="row">
          <div class="col-md-6">
            <i class="fa fa-table"></i>
            Daftar Barang
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
              <a href="<?php echo base_url('Gudang/exportexcel');?>" > 
                  <button type="button" id="exportButton" class="btn btn-primary" >
                  <i class="fa fa-file-excel-o"></i>
                  Export to Excel
              </button>     
              </a>
              </span>
            </div>
          </div>
            <!-- Modal -->
            <div id="formtambah" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Form Tambah Barang</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                  
                  <div class="row">
                  <div class="col-md-12">
                    <form name="simpan_data" action="<?php echo $action;?>" method="post">
                    <div class="row">
                      <div class="col-md-2">Kode Barang</div>
                      <div class="col-md-4"><input id="kode_barang" type="text" name="kode_barang" class="input-md  textinput textInput form-control" placeholder="Auto by system" disabled="true"></div>
                      <div class="col-md-2">Nama Barang</div>
                      <div class="col-md-4"><input id="nama_barang" type="text" name="nama_barang" class="input-md  textinput textInput form-control" placeholder="Nama Barang" required="true"></div>
                    </div> 
                    <br>
                    <div class="row">
                      <div class="col-md-2">Tanggal Masuk</div>
                      <div class="col-md-4"><input id="datepicker" type="date" name="tanggal_masuk" class="form-control" placeholder="MM/DD/YYYY" required="true">
                      </div>
                      <div class="col-md-2">Unit</div>
                      <div class="col-md-4"><input id="unit" type="text" name="unit" onkeyup="hitung();" class="input-md  textinput textInput form-control" placeholder="Unit" required="true"></div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-2">Harga Awal</div>
                      <div class="col-md-4"><input id="harga_awal" type="text" name="harga_awal" onkeyup="hitung();" class="input-md  textinput textInput form-control" placeholder="Harga Awal" required="true"></div>
                      <div class="col-md-2">Total Harga</div>
                      <div class="col-md-4"><input id="total_harga" type="text" name="total_harga" class="input-md  textinput textInput form-control" placeholder="Total Harga" readonly="readonly"> </div>
                    </div> 
                    <br>
                    <div class="row">
                      <div class="col-md-2">Jenis Aktiva</div>
                      <div class="col-md-4">
                          <select  name="jenis_aktiva" id="jenis_aktiva" class="form-control" required="true">
                              <option value="">--Pilih Jenis Aktiva--</option>
                              <option value="1">Kelompok 1</option>
                              <option value="2">Kelompok 2</option>
                              <option value="3">Kelompok 3</option>
                          </select> 
                      </div>
                    
                     
                      <div class="col-md-2">Masa Manfaat</div>
                      <div class="col-md-4"><input id="masa_manfaat" type="text" name="masa_manfaat" class="input-md  textinput textInput form-control" placeholder="Masa Manfaat" required="true"></div>

                    </div>
                    <br>

                    <div class="row">
                      <div class="col-md-2">Kategori</div>
                      <div class="col-md-4">
                          <select name="kategori" id="kategori" class="form-control" required="true">
                              <option value="">--Pilih Kategori--</option>
                          <?php
                              foreach ($hasil2 as $hasily) {
                                echo 
                                "<option value=".$hasily->id_kategori.">".$hasily->nama_kategori."</option>";
                              }
                          ?>
                          </select> 
                      </div>
                      
                    
                  </div>
                 
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
          <div id="formedit" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Form Tambah Barang</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                  
                  <div class="row">
                  <div class="col-md-12">
                    <form name="edit_data" action="<?php echo $action3;?>" method="post">
                    <input type="hidden" id="id_barang2" name="id_barang">
                    <div class="row">
                      <div class="col-md-2">Kode Barang</div>
                      <div class="col-md-4"><input id="kode_barang2" name="kode_barang" type="text"  class="input-md  textinput textInput form-control" placeholder="Auto by system" disabled="true" ></div>
                      <div class="col-md-2">Nama Barang</div>
                      <div class="col-md-4"><input id="nama_barang2" name="nama_barang" type="text"  class="input-md  textinput textInput form-control" placeholder="Nama Barang" required="true"></div>
                    </div> 
                    <br>
                    <div class="row">
                      <div class="col-md-2">Tanggal Masuk</div>
                      <div class="col-md-4"><input id="datepicker2" type="date" name="tanggal_masuk" class="form-control" placeholder="MM/DD/YYYY" required="true">
                      </div>
                      <div class="col-md-2">Unit</div>
                      <div class="col-md-4"><input id="unit2" type="text" name="unit" onkeyup="hitung2();" class="input-md  textinput textInput form-control" placeholder="Unit" required="true"></div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-2">Harga Awal</div>
                      <div class="col-md-4"><input id="harga_awal2" type="text" name="harga_awal" onkeyup="hitung2();" class="input-md  textinput textInput form-control" placeholder="Harga Awal" required="true"></div>
                      <div class="col-md-2">Total Harga</div>
                      <div class="col-md-4"><input id="total_harga2" type="text" name="total_harga" class="input-md  textinput textInput form-control" placeholder="Total Harga" readonly="readonly"> </div>
                    </div> 
                    <br>
                    <div class="row">
                      <div class="col-md-2">Jenis Aktiva</div>
                      <div class="col-md-4">
                          <select  name="jenis_aktiva" id="jenis_aktiva2" class="form-control" required="true">
                              <option value="">--Pilih Jenis Aktiva--</option>
                              <option value="1">Kelompok 1</option>
                              <option value="2">Kelompok 2</option>
                              <option value="3">Kelompok 3</option>
                          </select> 
                      </div>
                    
                     
                      <div class="col-md-2">Masa Manfaat</div>
                      <div class="col-md-4"><input id="masa_manfaat2" type="text" name="masa_manfaat" class="input-md  textinput textInput form-control" placeholder="Masa Manfaat" required="true"></div>

                    </div>
                    <br>

                    <div class="row">
                      <div class="col-md-2">Kategori</div>
                      <div class="col-md-4">
                          <select name="kategori" id="kategori2" class="form-control" required="true">
                              <option value="">--Pilih Kategori--</option>
                          <?php
                              foreach ($hasil2 as $hasily) {
                                echo 
                                "<option value=".$hasily->id_kategori.">".$hasily->nama_kategori."</option>";
                              }
                          ?>
                          </select> 
                      </div>
                  </div>
                </div>
                  </div>
                  <div class="modal-footer">
                    <div class="col-md-6"><span class="pull-right"><input type="submit" name="simpan" value="Simpan Perubahan" class="btn btn-primary" id="simpan"></span></div>
                    </div>
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                  </div>
                  </form>
                </div>

              </div>
            </div>

            <div class="modal fade" id="modalhapus" role="dialog">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                Hapus Data
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <form method="post" action="<?php echo base_url('Gudang/hapus');?>">
                <input type="hidden" name="id_barang" id="id_barang3">
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
              <table id="dataTable" class="zui-table zui-sticky-col" width="100%" cellspacing="0" data-click-to-select="true" data-toggle="table">
                <thead>
                  <tr>
                    <th >Aksi</th>
                    <th >Kode Barang</th>
                    <th >Nama Barang</th>
                    <th >Tanggal masuk</th>
                    <th >Unit</th>
                    <th >Harga awal</th>
                    <th >Total Harga</th>
                    <th >Kategori</th>
                    <th >Jenis Aktiva</th>
                    <th >Masa Manfaat</th>
                    <th >Beban Penyusutan/tahun</th>
                    <th >Beban Penyusutan/bulan</th>
                    <th >Nilai Buku</th>
                    <th >Status</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php 
                    foreach ($hasil as $hasilx) {
                    if($hasilx->kategori==1){

                      $cat = "Furniture"; $cate="FUR";
                      

                    }
                    elseif ($hasilx->kategori==2) {
                      $cat = "Komputer"; $cate="KOM";
                    }

                    else{

                      $cat = "Others";$cate="OTHERS";
                    }

                    if ($hasilx->jenis_aktiva==1) {
                      $masa_aktif=4;
                    }
                    elseif ($hasilx->jenis_aktiva==2) {
                     $masa_aktif=8;
                    }
                    else {
                      $masa_aktif=12;
                    }

                   // $hasilx->susut_bulan=$hasilx->susut_tahun/12;

                    $hasilx->status="Available";

                    
                    echo "<tr>
                    <td >
                    <button id='tomboledit' data-toggle='modal' data-target='#formedit' 
                            data-id_barang='".$hasilx->id_barang."' 
                            data-kode_barang='".$hasilx->kode_barang."'
                            data-nama_barang='".$hasilx->nama_barang."'
                            data-tanggal_masuk='".$hasilx->tanggal_masuk."'
                            data-unit='".$hasilx->unit."'
                            data-harga_awal='".$hasilx->harga_awal."'
                            data-total_harga='".$hasilx->total_harga."'
                            data-jenis_aktiva='".$hasilx->jenis_aktiva."'
                            data-masa_manfaat='".$hasilx->masa_manfaat."'
                            data-kategori='".$hasilx->kategori."'
                            >Ubah</button>
                    <button id='tombolhapus' data-toggle='modal' data-id_barang='".$hasilx->id_barang."' data-target='#modalhapus'>Hapus</button>
                    </td>
                    <td >".$cate."-0".$hasilx->id_barang."-I-HO-2017 </td>
                    <td>".$hasilx->nama_barang."</td>
                    <td>".$hasilx->tanggal_masuk."</td>
                    <td>".$hasilx->unit."</td>
                    <td>".$hasilx->harga_awal."</td>
                    <td>".$hasilx->total_harga."</td>
                    <td>".$cat."</td>
                    <td>"."Kelompok ".$hasilx->jenis_aktiva."</td>
                    <td>".$hasilx->masa_manfaat." Tahun"."</td>
                    <td>".$hasilx->susut_tahun."</td>
                    <td>".$hasilx->susut_bulan."</td>
                    <td>".$hasilx->nilai_buku."</td>
                    <td>".$hasilx->status."</td></tr>";
                    
                    

                }
                  ?>
                  
                </tbody>
              </table>
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
