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
}