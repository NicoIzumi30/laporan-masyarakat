<?php 
class Admin extends CI_Controller {
    public function index() {
        $this->load->view('template/header');
        $this->load->view('admin/index');
        $this->load->view('template/footer');
    }
    public function petugas() {
        $data['petugas'] = $this->M_admin->get_data_petugas();
        $this->load->view('template/header');
        $this->load->view('admin/petugas',$data);
        $this->load->view('template/footer');
    }
    public function add_petugas() {
        $data = array(
            'nama_petugas' =>  $this->input->post('nama'),
            'alamat' =>  $this->input->post('alamat'),
            'telp' =>  $this->input->post('telp')
        );
        $this->db->insert('petugas',$data);
       redirect('admin/petugas'); 

    }
    public function del_petugas($id){
		$where = array('id_petugas' => $id);
		$this->M_admin->delete_petugas($where, 'petugas');
		redirect('admin/petugas');
	 }
     public function edit_petugas($id){
        $data['petugas'] = $this->M_admin->get_data_petugas_where($id);
        $this->load->view('template/header');
        $this->load->view('admin/edit_petugas',$data);
        $this->load->view('template/footer');
     } 
     public function update_petugas($id) {
        $data = array(
            'id_petugas' =>  $this->input->post('idp'),
            'nama_petugas' =>  $this->input->post('nama'),
            'alamat' =>  $this->input->post('alamat'),
            'telp' =>  $this->input->post('telp')
        );

        $where = array(
			'id_petugas' => $id
		);
		$this->M_admin->update_petugas($where, 'petugas',$data);
		redirect('admin/petugas'); 
     }
     public function pelapor() {
        $data['pelapor'] = $this->M_admin->get_data_pelapor();
        $this->load->view('template/header');
        $this->load->view('admin/pelapor',$data);
        $this->load->view('template/footer');
    }
    public function add_pelapor() {
        $data = array(
            'nama_pelapor' =>  $this->input->post('nama'),
            'alamat' =>  $this->input->post('alamat'),
            'telp' =>  $this->input->post('telp')
        );
        $this->db->insert('pelapor',$data);
       redirect('admin/pelapor'); 

    }
     public function del_pelapor($id){
        $where = array('id_pelapor' => $id);
        $this->M_admin->delete_petugas($where, 'pelapor');
        redirect('admin/pelapor');
     }
     public function edit_pelapor($id){
        $data['pelapor'] = $this->M_admin->get_data_pelapor_where($id);
        $this->load->view('template/header');
        $this->load->view('admin/edit_pelapor',$data);
        $this->load->view('template/footer');
     } 
     public function update_pelapor($id) {
        $data = array(
            'id_pelapor' =>  $this->input->post('idp'),
            'nama_pelapor' =>  $this->input->post('nama'),
            'alamat' =>  $this->input->post('alamat'),
            'telp' =>  $this->input->post('telp')
        );

        $where = array(
            'id_pelapor' => $id
        );
        $this->M_admin->update_petugas($where, 'pelapor',$data);
        redirect('admin/pelapor'); 
     }
     public function laporan() {
        $data['dataa'] = $this->M_admin->get_data_laporan();
        $this->load->view('template/header');
        $this->load->view('admin/laporan',$data);
        $this->load->view('template/footer');
    }
     public function del_laporan($id){
        $where = array('id_laporan' => $id);
        $this->M_admin->delete_petugas($where, 'laporan');
        redirect('admin/laporan');
     }

    }
