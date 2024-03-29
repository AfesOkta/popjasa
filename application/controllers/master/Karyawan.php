<?php


class Karyawan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_Karyawan');
		$this->load->model('M_login');
		$this->M_login->isLogin();
	}

	public function index(){
		$data['jabatan']= $this->M_Karyawan->get_jabatan();
		$data['jabataan']= $this->M_Karyawan->get_jabatan();
		$data['pages']='master/karyawan/list_karyawan';
		$this->load->view('layout',$data);
	}

	public function ajax_list()
	{
		$this->load->helper('url');

		$list = $this->M_Karyawan->get_user();
		$data = array();

		foreach ($list as $d) {
			if ($d->status_karyawan=='1') {
				$status= '<p class="badge badge-success" style="font-size: 15px;">'."Bekerja";
			}elseif ($d->status_karyawan=='0') {
				$status= '<p class="badge badge-danger" style="font-size: 15px;">'."Tidak Bekerja";
			}

			if ($d->jns_kelamin=='L') {
				$jk= '<p class="badge badge-success" style="font-size: 15px;">'."Laki - Laki";
			}elseif ($d->jns_kelamin=='P') {
				$jk= '<p class="badge badge-info" style="font-size: 15px;">'."Perempuan";
			}

			$row = array();
			$row[] = '<h5 class="text-bold-500">'.$d->id_karyawan;
			$row[] = '<h5 class="text-bold-500">'.$d->nama_karyawan;
			$row[] = '<h5 class="text-bold-500">'.$d->nama_jabatan;
			$row[] = $jk;
		//	$row[] = '<h5 class="text-bold-500">'.$d->keterangan;
			$row[] = $status;
			// $row[] = '<h5 class="text-bold-500">'.$d->password;
			$date=date("d/m/Y", strtotime($d->tgl_input));
			$row[] = '<h5 class="text-bold-500">'.$date	;
			$row[] = '<h5 class="text-bold-500">'.$d->inputby;

			//add html for action
			// if ($d->st_data==0) {
			// 	$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$d->id_karyawan."'".')"><i class="ft-update"></i></a>
			// 		  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$d->id_karyawan."'".')"><i class="ft-trash"></i></a>';
			// }else {
			// 	$row[] = '<a class="btn btn-sm btn-primary disabled" href="#" title="Edit" onclick="edit_person('."'".$d->id_karyawan."'".')"><i class="la la-edit"></i></a>
			// 		  <a class="btn btn-sm btn-danger disabled" href="#" title="Hapus" onclick="delete_person('."'".$d->id_karyawan."'".')"><i class="la la-close"></i></a>';
			// }


			$data[] = $row;
		}

		$output = array(

						"recordsTotal" => $this->M_Karyawan->count_all(),
						"recordsFiltered" => $this->M_Karyawan->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->M_Karyawan->get_by_id($id);
		//$data->dob = ($data->dob == '0000-00-00') ? '' : $data->dob; // if 0000-00-00 set tu empty for datepicker compatibility
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->_validate();
		$kode=date('Ymds');
		$data = array(
			'id_karyawan' => $this->M_Karyawan->get_ID('id_karyawan'),
			'id_jabatan' => $this->input->post('id_jabatan'),
			'kd_cabang'	=> $this->session->userdata('cabang'),
			'nama_karyawan' => $this->input->post('nama_karyawan'),
			'status_karyawan' => $this->input->post('status_karyawan'),
			'jns_kelamin' => $this->input->post('jns_kelamin'),
			'keterangan' => $this->input->post('keterangan'),
			'tgl_input' => date('Y-m-d H:i:s'),
			'inputby' => $this->session->userdata('yangLogin'),
			);

		$insert = $this->M_Karyawan->save($data);

		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->_validate();
		$data = array(
			'id_jabatan' => $this->input->post('id_jabatan'),
			'nama_karyawan' => $this->input->post('nama_karyawan'),
			'kd_cabang'	=> $this->session->userdata('cabang'),
			'status_karyawan' => $this->input->post('status_karyawan'),
			'jns_kelamin' => $this->input->post('jns_kelamin'),
			'keterangan' => $this->input->post('keterangan'),
			'tgl_input' => date('Y-m-d H:i:s'),
			'inputby' => $this->session->userdata('yangLogin'),
			);
		$this->M_Karyawan->update(array('id_karyawan' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->M_Karyawan->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	private function _validate()
	{
			$data                   = [];
			$data['error_string']   = array();
			$data['inputerror']     = array();
			$data['notiferror']     = array();
			$data['status']         = TRUE;

			$prefix ='<p class="badge-default badge-danger block-tag text-center">
									<small class="block-area white">';
			$suffix ='</small</p>';

			if (empty($this->input->post('nama_karyawan'))) {
					$error                  = 'Nama Karyawan Tidak Boleh Kosong';
					$data['inputerror'][]   = 'nama_karyawan';
					$data['notiferror'][]   = $prefix.$error.$suffix;
					$data['error_string'][] = $error;
					$data['status']         = FALSE;
			}

			if (empty($this->input->post('jns_kelamin'))) {
					$error                  = 'Jenis Kelamiin Tidak Boleh Kosong';
					$data['inputerror'][]   = 'jns_kelamin';
					$data['notiferror'][]   = $prefix.$error.$suffix;
					$data['error_string'][] = $error;
					$data['status']         = FALSE;
			}

			if (empty($this->input->post('status_karyawan'))) {
					$error                  = 'Status Karyawan Tidak Boleh Kosong';
					$data['inputerror'][]   = 'status_karyawan';
					$data['notiferror'][]   = $prefix.$error.$suffix;
					$data['error_string'][] = $error;
					$data['status']         = FALSE;
			}

			if (empty($this->input->post('id_jabatan'))) {
					$error                  = 'Jabatan Tidak Boleh Kosong';
					$data['inputerror'][]   = 'id_jabatan';
					$data['notiferror'][]   = $prefix.$error.$suffix;
					$data['error_string'][] = $error;
					$data['status']         = FALSE;
			}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}


	}




}
