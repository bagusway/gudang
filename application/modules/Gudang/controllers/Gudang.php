<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Gudang extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // $this->load->library('form_validation');
        //$this->_module = 'index.php/sample/sample';
        // $this->load->model('sample_model','m_sample');
   $this->load->model('Gudang_models',"md");
   $this->load->library('form_validation');
  $this->load->library(array('session'));
   $this->_module = 'index.php/gudang/gudang';




    }
    
	public function index(){
	//	echo "test";
	//$id_barang= "11";
	//$hasil =$this->md->getdata($id)->row();
	//	print_r($hasil);
	//   $data['nama'] 	= $hasil->nama;
	//	$data['alamat']	= $hasil->alamat;
	//$hasil = $this->md->loaddata()->result_array();
		//$id_kategori=1;
		//$bulan="12";
		//$status="1";
		$data['action'] 		= $this->_module."/simpan";
		$data['action2']		= $this->_module."/simpan_kategori";
		$data['action3']		= $this->_module."/ubah";
		//$data['action4']		= $this->_module."/login"
		//$data['action_ubah'] 	= $this->_module."/update_id";
	//	$data['ubah']			= $this->_module."/ubah";

		//$this->md->loaddata()->result();
		$hasil = $this->md->loaddata()->result();				//simpang data
		//$hasil2 =$this->md->cat($id_kategori)->row();			
		$hasil2 =$this->md->loadkategori()->result();			//hasil kategori
		
		$data['hasil']= $hasil;
		$data['hasil2']= $hasil2;
		//print_r($hasil2);
		//$this->load->view("Gudang2",$data);
		$this->load->view("gudang",$data);
		//$this->load->view("Master_kategori",$data);
		//$this->load->view("Master_kategori",$data);
		//$this->load->view('login');
		
		
	}
	
	public function master_kategori(){
		$data['action'] = $this->_module."/simpan";
		$this->md->loaddata()->result();
		$hasil = $this->md->loaddata()->result();
		//$hasil2 =$this->md->cat($id_kategori)->row();
		$hasil2 =$this->md->loadkategori()->result();
		$data['hasil']= $hasil;
		$data['hasil2']= $hasil2;
		//print_r($hasil2);
		$this->load->view("Master_kategori",$data);
	}

	public function asuu(){
		$this->load->view("asu");
	}	
	public function simpan(){
		$id_barang=$this->input->post("id_barang");
		$nama_barang= $this->input->post("nama_barang");
		$kode_barang= $this->input->post("kode_barang");
		$tanggal_masuk= $this->input->post("tanggal_masuk");
		$unit=$this->input->post("unit");
		$harga_awal=$this->input->post("harga_awal");
		$total_harga=$this->input->post("total_harga");
		$kategori=$this->input->post("kategori");
		$jenis_aktiva=$this->input->post("jenis_aktiva");
		$masa_manfaat=$this->input->post("masa_manfaat");
		$susut_tahun=$this->input->post("susut_tahun");
		$susut_bulan=$this->input->post("susut_bulan");
		$akhir_susut=$this->input->post("akhir_susut");
		$status=$this->input->post("status");
		$nilai_buku=$this->input->post("nilai_buku");
		$tahun=$harga_awal/$masa_manfaat;

		//echo $nama;
		//echo"--".$alamat;
		//$data=array("nama"=>$nama,"alamat"=>$alamat);
		

		if ($kategori==1) {
			$kode_barang="FUR-0".$id_barang."/I/HO/2017";
		}
		elseif ($kategori==2) {
			$kode_barang="KOM-0".$id_barang."/I/HO/2017";
		}
		else {
			$kode_barang="OTHERS-0".$id_barang."/I/HO/2017";	
		}

		$data=array("id_barang"=>$id_barang,
			"nama_barang"=>$nama_barang,
			"kode_barang"=>$kode_barang,
			"tanggal_masuk"=>$tanggal_masuk,
			"unit"=>$unit,
			"harga_awal"=>$harga_awal,
			"total_harga"=>$unit*$harga_awal,
			"kategori"=>$kategori,
			"jenis_aktiva"=>$jenis_aktiva,
			"masa_manfaat"=>$masa_manfaat,
			"susut_tahun"=>$tahun,
			"akhir_susut"=>$akhir_susut,
			"susut_bulan"=>$tahun/12,
			"status"=>$status);
		
		$this->md->simpan($data);

		redirect ('https://202.78.195.60/gudang');
		//redirect(base_url()."/index.php/sample/sample");

	}   

		public function simpan_kategori(){
			$id_kategori=$this->input->post("id_kategori");
			$nama_kategori=$this->input->post("nama_kategori");
			$data=array("id_kategori"=>$id_kategori,"nama_kategori"=>$nama_kategori);
			$this->md->simpan_kategori($data);
			redirect(base_url('Gudang/master_kategori'),'refresh');
			//$this->load->view("Master_kategori",$data);
		}			 
	public function ubah(){
		
		// $result = $query->result_array();
		// $updated_id = $result[0]['id_barang'];


		$id_barang= $this->input->post("id_barang");
		$kode_barang= $this->input->post("kode_barang");
		$nama_barang= $this->input->post("nama_barang");
		$tanggal_masuk= $this->input->post("tanggal_masuk");
		$unit=$this->input->post("unit");
		$harga_awal=$this->input->post("harga_awal");
		$total_harga=$this->input->post("total_harga");
		$kategori=$this->input->post("kategori");
		$jenis_aktiva=$this->input->post("jenis_aktiva");
		$masa_manfaat=$this->input->post("masa_manfaat");
		$susut_tahun=$this->input->post("susut_tahun");
		$susut_bulan=$this->input->post("susut_bulan");
		$akhir_susut=$this->input->post("akhir_susut");
		$status=$this->input->post("status");
		$nilai_buku=$this->input->post("nilai_buku");
		$tahun=$harga_awal/$masa_manfaat;

		//echo $nama;
		//echo"--".$alamat;
		//$data=array("nama"=>$nama,"alamat"=>$alamat);
		


		$data=array(
			"id_barang"=>$id_barang,
			"kode_barang"=>$kode_barang,
			"nama_barang"=>$nama_barang,
			"tanggal_masuk"=>$tanggal_masuk,
			"unit"=>$unit,
			"harga_awal"=>$harga_awal,
			"total_harga"=>$unit*$harga_awal,
			"kategori"=>$kategori,
			"jenis_aktiva"=>$jenis_aktiva,
			"masa_manfaat"=>$masa_manfaat,
			"susut_tahun"=>$tahun,
			"akhir_susut"=>$akhir_susut,
			"susut_bulan"=>$tahun/12,
			"status"=>$status
			);
		
		$a=$this->md->ubah($id_barang,$data);
		if($a){ ?>
		<div class="alert alert-success" role="alert"><strong>Well done!</strong> </div>
		<?php redirect ($route['default_controller'] = 'Gudang','refresh');	
		}
		else{
			echo "Edit failed";
		}
	}
	
	public function ubah_kategori(){
		
		
		$id_kategori=$this->input->post("id_kategori");
		$nama_kategori=$this->input->post("nama_kategori");
		$data=array("id_kategori"=>$id_kategori,"nama_kategori"=>$nama_kategori);
		$b=$this->md->ubah_kategori($id_kategori,$data);
		if($b){ ?>
		<div class="alert alert-success" role="alert"><strong>Well done!</strong> </div>
		<?php redirect (base_url('Gudang/master_kategori'),'refresh');	
		}
		else{
			echo "Edit failed";
		}
	}

    public function hapus(){
    	$id_barang= $this->input->post("id_barang");
    	$key=array('id_barang' => $id_barang);
    	$this->db->delete('barang',$key);
    	//echo $this->db->last_query();
    	redirect ($route['default_controller'] = 'Gudang','refresh');
	}
	 public function hapus_kategori(){
    	$id_kategori= $this->input->post("id_kategori");
    	$key=array('id_kategori' => $id_kategori);
    	$this->db->delete('master_kategori',$key);
    	//echo $this->db->last_query();
    	redirect(base_url('Gudang/master_kategori'),'refresh');
	}



public function exportexcel(){
		$this->load->library("Excel/PHPExcel");
		$data = $this->md->loaddata()->result();
 
            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();

            $i=5;
 			foreach ($data as $datax) {
            //set Sheet yang akan diolah 
 				if($datax->kategori==1){

                      $cat = "Furniture"; $cate="FUR";
                      

                    }
                    elseif ($datax->kategori==2) {
                      $cat = "Komputer"; $cate="KOM";
                    }

                    else{

                      $cat = "Others";$cate="OTHERS";
                    }
 				
            //set Sheet yang akan diolah 
 
            	$objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
                                        ->setCellValue('A2', 'Laporan Asset PT. Surya Putra Sukses')
                                        ->setCellValue('A4', 'Kode Barang')
                                        ->setCellValue('B4', 'Nama Barang')
                                        ->setCellValue('C4', 'Tanggal Diperoleh')
                                        ->setCellValue('D4', 'Kategori')
                                        ->setCellValue('E4', 'Unit')
                                        ->setCellValue('F4', 'Harga Awal')
                                        ->setCellValue('G4', 'Total Harga')
                                        ->setCellValue('H4', 'Jenis Aktiva')
                                        ->setCellValue('I4', 'Masa Manfaat')
                                        ->setCellValue('J4', 'Penyusutan per Tahun')
                                        ->setCellValue('K4', 'Penyusutan per Bulan')
                                        ->setCellValue('L4', 'Nilai Buku')
                                        ->setCellValue('M4', 'Status')


                                        	->setCellValue('A'.$i, $cate."-0".$datax->id_barang."-I-HO-2017")
	                                        ->setCellValue('B'.$i, $datax->nama_barang)
	                                        ->setCellValue('C'.$i, $datax->tanggal_masuk)
	                                        ->setCellValue('D'.$i, $cat)
	                                        ->setCellValue('E'.$i, $datax->unit)
	                                        ->setCellValue('F'.$i, $datax->harga_awal)
	                                        ->setCellValue('G'.$i, $datax->total_harga)
	                                        ->setCellValue('H'.$i, 'Kelompok '.$datax->jenis_aktiva)
	                                        ->setCellValue('I'.$i, $datax->masa_manfaat.' tahun')
	                                        ->setCellValue('J'.$i, $datax->susut_tahun)
	                                        ->setCellValue('K'.$i, $datax->susut_bulan)
	                                        ->setCellValue('L'.$i, $datax->nilai_buku)
	                                        ->setCellValue('M'.$i, $datax->status);
	                                        $i++;
        }
                                        

            //set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('Laporan');

            $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(18);
            $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
            $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
            $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(15);
            $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(8);
            $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
            $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(15);
            $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(12);
            $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(15);
            $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(20);
            $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(20);
            $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(15);
            $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(10);

            $style = array(
			  'borders' => array(
			    'allborders' => array(
			      'style' => PHPExcel_Style_Border::BORDER_THIN
			    )
			  ),
			  'alignment' => array(
		            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
		        )
			);
            $j=$i-1;
 			$objPHPExcel->getActiveSheet()->getStyle('A4:M'.$j)->applyFromArray($style);

            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
 
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="Laporan Asset PT. SPS.xlsx"');
            //unduh file
            $objWriter->save("php://output");
     }
// public function login() {
		
		
// 			$username = $this->input->post("username");
// 			$password = $this->input->post("password");
// 			$cocok=array("username"=>$username,"password"=>md5($password));









			
// 		}
		
// public function logout() {
		
// 		// create the data object
// 		$data = new stdClass();
		
// 		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
// 			// remove session datas
// 			foreach ($_SESSION as $key => $value) {
// 				unset($_SESSION[$key]);
// 			}
			
// 			// user logout ok
// 			$this->load->view('header');
// 			$this->load->view('user/logout/logout_success', $data);
// 			$this->load->view('footer');
			
// 		} else {
			
// 			// there user was not logged in, we cannot logged him out,
// 			// redirect him to site root
// 			redirect('/');
			
// 		}
		
// 	}


}