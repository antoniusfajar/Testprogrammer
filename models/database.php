<?php
class database extends CI_Model {
   
  public function cekdata(){
  $query = $this->db->get('produk');

  if ($query->num_rows() == 0) {
      return true; // Tabel kosong
  } else {
      return false; // Tabel tidak kosong
  }
}

public function insertData($data) {
    $this->db->insert_batch('produk', $data);
}

public function getprodukById($id)
    {
        $option =array('id_produk' =>$id);
        $query = $this->db->get_where('produk',$option);
        $ret = $query->row();
        return $ret;
    }

public function tambahproduk() {
  $tambah= [
    'no' => $this->input->post('no') , 
    'id_produk' => $this->input->post('id_produk'),
    'nama_produk' => $this->input->post('nama_produk'),
    'harga' => $this->input->post('harga'),
    'kategori' => $this->input->post('kategori'),
    'status'  => $this->input->post('status')
    ]; 
    $this->db->insert('produk',$tambah);
}

public function updateproduk() {
  $edit= [
    'no' => $this->input->post('no') , 
    'id_produk' => $this->input->post('id_produk'),
    'nama_produk' => $this->input->post('nama_produk'),
    'harga' => $this->input->post('harga'),
    'kategori' => $this->input->post('kategori'),
    'status'  => $this->input->post('status')
    ];        

$this->db->where('id_produk', $this->input->post('id_produk'));
$this->db->update('produk', $edit);
}

public function hapusproduk($id) {
  return $this->db->delete('produk', array("id_produk" => $id));
}

}