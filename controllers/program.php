<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class program extends CI_Controller {

public function __construct() {
    parent::__construct();
    $this->load->model('database');
}

	public function index()
	{
     if($this->database->cekdata()){  //cek data kosong jika kosong akan memasukkan data didalam database 
        $data = array(
            'username' => 'tesprogrammer160623C20',
            'password' => '40de21bbc45f062fc1e5a1bc8f615c0a' 
        );
    
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://recruitment.fastprint.co.id/tes/api_tes_programmer');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        $headers = curl_getinfo($curl, CURLINFO_HEADER_OUT);
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $this->database->insertdata($data['data']);
        
		$this->load->view('template/head.php');
        $this->load->view('template/foter.php');
    }else{ // menampilkan data di dalam database
        $query = $this->db->query("Select * from produk where status='bisa dijual' order by no ASC");
        $dataproduk['produk'] = $query->result_array();
		$this->load->view('template/head.php');
        $this->load->view('tampilan.php',$dataproduk);
        $this->load->view('template/foter.php');
    }
	}
    public function tambahproduk(){
        $this->form_validation->set_rules('id_produk', 'ID Produk', 'required');
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('harga', 'harga Produk', 'required|numeric');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('no', 'No', 'required');
    if( $this->form_validation->run() == FALSE ){
        $this->load->view('template/head.php');
        $this->load->view('tambahproduk');
        $this->load->view('template/foter.php');
    } else{
            $this->database->tambahproduk();
            redirect('program');
        }
   }

   public function ubahproduk($id){
    $edit['edit'] = $this->database->getprodukById($id);
        $this->form_validation->set_rules('id_produk', 'ID Produk', 'required');
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('harga', 'harga Produk', 'required|numeric');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('no', 'No', 'required');
    if( $this->form_validation->run() == FALSE ){
        $this->load->view('template/head.php');
        $this->load->view('editproduk',$edit);
        $this->load->view('template/foter.php');
    } else{
            $this->database->updateproduk();
            redirect('program');
        }
   }

   public function hapusproduk($id){
       $this->database->hapusproduk($id);
       redirect('program');
   }
}
