<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_project extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_user($id){
		$query=$this->db->query("
      SELECT a.id_project,a.id_layanan,c.nama_layanan,d.harga,a.id_customer,b.nm_customer,a.harga_jual,a.keterangan,a.input_by,a.tgl_input,a.st_data
      FROM trs_project a,m_customer b, m_layanan c, m_harga_layanan d
      WHERE a.id_customer=b.id_customer AND a.id_layanan=c.id_layanan AND a.id_layanan=d.id_layanan AND a.id_hdr_project='$id'
			");
		return $query->result();
	}

	public function get_trs_project_hdr(){
		$query=$this->db->query("
				select a.id_hdr_project,a.nm_project,a.kd_cabang,a.id_customer,b.nm_customer,a.jml_penjualan,a.keterangan,a.input_by,a.tgl_input,a.st_data
				from trs_project_hdr a
				JOIN m_customer b ON a.id_customer=b.id_customer
			");
		return $query->result();
	}

	public function get_trs_project_hdr_confirmed(){
		$query=$this->db->query("
				select a.id_hdr_project,a.kd_cabang,a.id_customer,b.nm_customer,a.jml_penjualan,a.keterangan,a.input_by,a.tgl_input,a.st_data
				from trs_project_hdr a
				JOIN m_customer b ON a.id_customer=b.id_customer and a.st_data=1
			");
		return $query->result();
	}

	public function get_trs_project_hdr_id($id){
		$query=$this->db->query("
			SELECT * from trs_project_hdr where id_hdr_project='$id'
			");
		return $query->row();
	}

	public function count_trs_project_hdr(){
		$query=$this->db->query("
			SELECT * from trs_project_hdr
			");
		return $query->num_rows();
	}

	public function get_projectid($id){
		$query=$this->db->query("
      SELECT a.id_project,a.id_layanan,c.nama_layanan,d.harga,a.id_customer,b.nm_customer,a.harga_jual,a.keterangan,a.input_by,a.tgl_input
      FROM trs_project a,m_customer b, m_layanan c, m_harga_layanan d
      WHERE a.id_customer=b.id_customer AND a.id_layanan=c.id_layanan AND a.id_layanan=d.id_layanan AND a.id_project='$id'
			");
		return $query->row();
	}

  function get_produk(){
    $query=$this->db->query("
		SELECT a.nama_layanan,a.id_layanan,b.id_hrg_layanan,b.harga
			FROM m_layanan a, m_harga_layanan b
			where a.id_layanan=b.id_layanan
			");
		return $query->result();
  }

	function count_produk()
	{
    $query=$this->db->query("
	 	SELECT a.nama_layanan,a.id_layanan,b.id_hrg_layanan,b.harga
			FROM m_layanan a, m_harga_layanan b
			where a.id_layanan=b.id_layanan
      ");
		return $query->num_rows();
	}

	function get_ID(){
		$tahun=date('Y');
		$bulan=date('m');
		$q = $this->db->query("select MAX(RIGHT(id_project,5)) as kd_max from trs_project");
		$kd = "";
		if($q->num_rows()>0){
				foreach($q->result() as $k){
						$tmp = ((int)$k->kd_max)+1;
						$kd = sprintf("%05s",$tmp);
				}
		}else{
				$kd = "00001";
		}
		return "PRO$tahun$bulan".$kd;
	}

	function get_ID_hdr(){
		$tahun=date('Y');
		$bulan=date('m');
		$q = $this->db->query("select MAX(RIGHT(id_hdr_project,5)) as kd_max from trs_project_hdr");
		$kd = "";
		if($q->num_rows()>0){
				foreach($q->result() as $k){
						$tmp = ((int)$k->kd_max)+1;
						$kd = sprintf("%05s",$tmp);
				}
		}else{
				$kd = "00001";
		}
		return "POP$tahun$bulan".$kd;
	}


	function count_filtered()
	{
    $query=$this->db->query("
      SELECT a.id_project,a.id_layanan,c.nama_layanan,d.harga,a.id_customer,b.nm_customer,a.harga_jual,a.keterangan,a.input_by,a.tgl_input
      FROM trs_project a,m_customer b, m_layanan c, m_harga_layanan d
      WHERE a.id_customer=b.id_customer AND a.id_layanan=c.id_layanan AND a.id_layanan=d.id_layanan
      ");
		return $query->num_rows();
	}

	public function count_all()
	{
    $query=$this->db->query("
      SELECT a.id_project,a.id_layanan,c.nama_layanan,d.harga,a.id_customer,b.nm_customer,a.harga_jual,a.keterangan,a.input_by,a.tgl_input
      FROM trs_project a,m_customer b, m_layanan c, m_harga_layanan d
      WHERE a.id_customer=b.id_customer AND a.id_layanan=c.id_layanan AND a.id_layanan=d.id_layanan
      ");
		return $query->num_rows();
	}

	function count_filtered_project($id)
	{
    $query=$this->db->query("
      SELECT a.id_project,a.id_layanan,c.nama_layanan,d.harga,a.id_customer,b.nm_customer,a.harga_jual,a.keterangan,a.input_by,a.tgl_input
      FROM trs_project a,m_customer b, m_layanan c, m_harga_layanan d
      WHERE a.id_customer=b.id_customer AND a.id_layanan=c.id_layanan AND a.id_layanan=d.id_layanan AND a.id_customer='$id'
      ");
		return $query->num_rows();
	}

	public function count_all_project($id)
	{
    $query=$this->db->query("
      SELECT a.id_project,a.id_layanan,c.nama_layanan,d.harga,a.id_customer,b.nm_customer,a.harga_jual,a.keterangan,a.input_by,a.tgl_input
      FROM trs_project a,m_customer b, m_layanan c, m_harga_layanan d
      WHERE a.id_customer=b.id_customer AND a.id_layanan=c.id_layanan AND a.id_layanan=d.id_layanan AND a.id_customer='$id'
      ");
		return $query->num_rows();
	}

	public function get_by_id($id)
	{
		$this->db->from('trs_project');
		$this->db->where('id_project',$id);
		$query = $this->db->get();

		return $query->row();
	}

	// public function get_trs_project_hdr_id($id)
	// {
	// 	$this->db->from('trs_project');
	// 	$this->db->where('id_customer',$id);
	// 	$query = $this->db->get();
	//
	// 	return $query->row();
	// }

	public function get_jml_penjualan($id)
	{
		$query = $this->db->query("select SUM(harga_jual) as jml_penjualan from trs_project where id_hdr_project='$id'");
		return $query->row();
	}

	public function save($data)
	{
		$this->db->insert('trs_project', $data);
		return $this->db->insert_id();
	}

	public function update($where, $data)
	{
		$this->db->update('trs_project', $data, $where);
		return $this->db->affected_rows();
	}

	public function simpan_transaksi($where, $hdr, $detail)	{
		// $this->db->insert('trs_project_hdr', $input);
		$this->db->update('trs_project_hdr', $hdr, $where);
		$this->db->update('trs_project', $detail, $where);
		return $this->db->affected_rows();
	}

	public function input_header($data)
	{
		$this->db->insert('trs_project_hdr', $data);
		return $this->db->insert_id();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id_project', $id);
		$this->db->delete('trs_project');
	}

	public function delete_project_by_id($id)
	{
		$this->db->where('id_hdr_project', $id);
		$this->db->delete('trs_project');

		$this->db->where('id_hdr_project', $id);
		$this->db->delete('trs_project_hdr');
	}

	//report

	public function get_project_hdr($id){
		$query=$this->db->query("
		select a.id_hdr_project,a.kd_cabang,a.id_customer,b.nm_customer,a.jml_penjualan,a.keterangan,a.input_by,a.tgl_input,a.st_data
		from trs_project_hdr a
		JOIN m_customer b ON a.id_customer=b.id_customer
		where a.id_hdr_project='$id' and a.st_data='1'
			");
		return $query->row();
	}

	public function get_project_dtl($id){
		$query=$this->db->query("
		select a.id_hdr_project,a.kd_cabang,a.id_customer,b.nm_customer,a.jml_penjualan,a.keterangan,a.input_by,a.tgl_input,a.st_data,c.id_layanan,d.nama_layanan,c.harga_jual
		from trs_project_hdr a
		JOIN m_customer b ON a.id_customer=b.id_customer
		JOIN trs_project c ON a.id_hdr_project=c.id_hdr_project
		JOIN m_layanan d ON c.id_layanan=d.id_layanan
		where a.id_hdr_project='$id' and a.st_data='1'
			");
		return $query->result();
	}

}
