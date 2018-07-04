<?php  

class Staff extends CI_Controller {

        function __construct(){
        parent::__construct();
        $this->load->model('M_staff');
        $this->load->helper('url');
        if ($this->session->userdata('status') != 'login') {
            redirect(base_url("index.php/Login"));
        }
        /*$this->simple_login->cek_login();*/
    }

    function tampil_kategori(){
    	$this->load->view('staff/header');
    	$data['kategori']=$this->M_staff->tampil_data('kategori');
        $this->load->view('staff/v_kategori',$data);
        $this->load->view('staff/footer');
    }

    function tambah_data_kategori(){
        $this->load->view('staff/header');
        $this->load->view('staff/input_datakategori');
        $this->load->view('staff/footer');
    }

     function tambah_aksi_kategori(){
        $kode           = $this->input->post('kode');
        $nama           = $this->input->post('nama');
        $deskripsi      = $this->input->post('deskripsi');
                $data = array(
                    'kode'            => $kode,
                    'nama'            => $nama,
                    'deskripsi'       => $deskripsi

                );

        $where=array(
            'id' => $id);

        $this->M_staff->input_data($data,'kategori');
        redirect ('Staff/tampil_kategori');

    }

    public function hapus_data_kategori($id){
        $where = array('id' => $id);
        $this->M_staff->hapus_data($where,'kategori');
        redirect('Staff/tampil_kategori');
    }

    function edit_data_kategori($id){
        $this->load->view('staff/header');
        $data['kategori'] = $this->M_staff->tampil_data('kategori');
        $this->load->view('Staff/edit_datakategori',$data);
        $this->load->view('Staff/footer');
    }

    function update_data_kategori(){
        $id             = $this->input->post('id');
        $kode           = $this->input->post('kode');
        $nama           = $this->input->post('nama');
        $deskripsi      = $this->input->post('deskripsi');
                $data = array(
                    'id'              => $id,
                    'kode'            => $kode,
                    'nama'            => $nama,
                    'deskripsi'       => $deskripsi

                );

        $where=array(
            'id' => $id);

        $this->M_staff->update_data($where,$data,'kategori');
        redirect('Staff/tampil_kategori');
    }

     function tampil_merk(){
        $this->load->view('staff/header');
        $data['merk']=$this->M_staff->tampil_data('merk');
        $this->load->view('staff/v_merk',$data);
        $this->load->view('staff/footer');
    }

    function tambah_data_merk(){
        $this->load->view('staff/header');
        $this->load->view('staff/input_datamerk');
        $this->load->view('staff/footer');
    }

     function tambah_aksi_merk(){
        $kode           = $this->input->post('kode');
        $nama           = $this->input->post('nama');
        $deskripsi      = $this->input->post('deskripsi');
                $data = array(
                    'kode'            => $kode,
                    'nama'            => $nama,
                    'deskripsi'       => $deskripsi

                );

        $where=array(
            'id' => $id);

        $this->M_staff->input_data($data,'merk');
        redirect ('Staff/tampil_merk');

    }

    public function hapus_data_merk($id){
        $where = array('id' => $id);
        $this->M_staff->hapus_data($where,'merk');
        redirect('Staff/tampil_merk');
    }

    function edit_data_merk($id){
        $this->load->view('staff/header');
        $data['merk'] = $this->M_staff->tampil_data('merk');
        $this->load->view('Staff/edit_datamerk',$data);
        $this->load->view('Staff/footer');
    }

    function update_data_merk(){
        $id             = $this->input->post('id');
        $kode           = $this->input->post('kode');
        $nama           = $this->input->post('nama');
        $deskripsi      = $this->input->post('deskripsi');
                $data = array(
                    'id'              => $id,
                    'kode'            => $kode,
                    'nama'            => $nama,
                    'deskripsi'       => $deskripsi

                );

        $where=array(
            'id' => $id);

        $this->M_staff->update_data($where,$data,'merk');
        redirect('Staff/tampil_merk');
    }

    function tampil_pj(){
        $this->load->view('staff/header');
        $data['pj']=$this->M_staff->tampil_data('pj');
        $this->load->view('staff/v_pj',$data);
        $this->load->view('staff/footer');
    }

    function tambah_data_pj(){
        $this->load->view('staff/header');
        $this->load->view('staff/input_datapj');
        $this->load->view('staff/footer');
    }

     function tambah_aksi_pj(){
        $kode           = $this->input->post('kode');
        $nama           = $this->input->post('nama');
        $deskripsi      = $this->input->post('deskripsi');
                $data = array(
                    'kode'            => $kode,
                    'nama'            => $nama,
                    'deskripsi'       => $deskripsi

                );

        $where=array(
            'id' => $id);

        $this->M_staff->input_data($data,'pj');
        redirect ('Staff/tampil_pj');

    }

    public function hapus_data_pj($id){
        $where = array('id' => $id);
        $this->M_staff->hapus_data($where,'pj');
        redirect('Staff/tampil_pj');
    }

    function edit_data_pj($id){
        $this->load->view('staff/header');
        $data['pj'] = $this->M_staff->tampil_data('pj');
        $this->load->view('Staff/edit_datapj',$data);
        $this->load->view('Staff/footer');
    }

    function update_data_pj(){
        $id             = $this->input->post('id');
        $kode           = $this->input->post('kode');
        $nama           = $this->input->post('nama');
        $deskripsi      = $this->input->post('deskripsi');
                $data = array(
                    'id'              => $id,
                    'kode'            => $kode,
                    'nama'            => $nama,
                    'deskripsi'       => $deskripsi

                );

        $where=array(
            'id' => $id);

        $this->M_staff->update_data($where,$data,'pj');
        redirect('Staff/tampil_pj');
    }
}
?>