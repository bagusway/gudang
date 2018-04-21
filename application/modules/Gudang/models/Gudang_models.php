<?php

class Gudang_models extends CI_Model {    

    public function __construct() {
        parent::__construct();
    }
    
    public function getdata($id_barang){
        $this->db->select("id_barang,nama_barang,kode_barang,tanggal_masuk,unit,harga_awal,total_harga,kategori,masa_manfaat,jenis_aktiva,masa_manfaat,susut_tahun,susut_bulan,akhir_susut,status,nilai_buku,bulan");
        $this->db->from("barang");
        $this->db->where("id_barang",$id_barang);
        return $this->db->get();
    }
    public function simpan($data){
        $this->db->insert("barang",$data);

    }
    public function simpan_kategori($data){
        $this->db->insert("master_kategori",$data);

    }

    public function loaddata(){
        $this->db->select("id_barang,nama_barang,kode_barang,tanggal_masuk,unit,harga_awal,total_harga,kategori,masa_manfaat,jenis_aktiva,susut_tahun,susut_bulan,akhir_susut,status,nilai_buku,bulan");
        //$this->db->select("nama_barang,kode_barang");
        $this->db->from("barang");
        //$this->db->where("id",$id);
        return $this->db->get();
    }
    
    public function loadkategori(){
        $this->db->select("id_kategori,nama_kategori");
        $this->db->from("master_kategori");
        return $this->db->get();
    }

    public function cat($id_kategori){
        $this->db->select("id_kategori,nama_kategori");
        $this->db->from("master_kategori");
        $this->db->where("id_kategori",$id_kategori);

        return $this->db->get();
    }

    public function ubah($id_barang,$data){
        $this->db->select("id_barang,nama_barang,kode_barang,tanggal_masuk,unit,harga_awal,total_harga,kategori,masa_manfaat,jenis_aktiva,susut_tahun,susut_bulan,akhir_susut,status,nilai_buku,bulan");
        $this->db->where("id_barang",$id_barang);
        $this->db->update("barang",$data);
       // $this->db->set($data);
        //return $this->db->last_query();
         if ($this->db->affected_rows()>0) {

            return true;
            }else{
                return false;
            }
    }
    public function ubah_kategori($id_kategori,$data){
        $this->db->select("id_kategori,nama_kategori");
        $this->db->where("id_kategori",$id_kategori);
        $this->db->update("master_kategori",$data);
       // $this->db->set($data);
        //return $this->db->last_query();
         if ($this->db->affected_rows()>0) {

            return true;
            }else{
                return false;
            }
    }
    public function kodebarang(){
    $this->db->select("id_kategori");
    $this->db->from("master_kategori");
    $this->db->where("id_barang",$id_barang);
    }

// public function resolve_user_login($username, $password) {
        
//         $this->db->select('password');
//         $this->db->from('users');
//         $this->db->where('username', $username);
//         $hash = $this->db->get()->row('password');
        
//         return $this->verify_password_hash($password, $hash);
        
//     }

// public function get_user_id_from_username($username) {
        
//         $this->db->select('id');
//         $this->db->from('users');
//         $this->db->where('username', $username);

//         return $this->db->get()->row('id');
        
//     }
//     public function get_user($user_id) {
        
//         $this->db->from('users');
//         $this->db->where('id', $user_id);
//         return $this->db->get()->row();
        
//     }
//     private function hash_password($password) {
        
//         return password_hash($password, PASSWORD_BCRYPT);
        
//     }
//     private function verify_password_hash($password, $hash) {
        
//         return password_verify($password, $hash);
        
//     }
// public function m_login(){
//     $username = $this->input->post('username');
//     $password = $this->input->post('password');
//     $cocok = array(
//     'username' => $username,
//     'password' => md5($password)
//     );
// }
}
?>