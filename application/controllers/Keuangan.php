<?php  

class Keuangan extends CI_Controller {

        function __construct(){
        parent::__construct();
        $this->load->model('M_keuangan');
        $this->load->helper('url');
        if ($this->session->userdata('status') != 'login') {
            redirect(base_url("index.php/Login"));
        }
        /*$this->simple_login->cek_login();*/
    }

    function tampil_pegawai(){
        $data['jabatan'] = $this->M_keuangan->tampil_data('jabatan');
    	$this->load->view('Keuangan/header',$data);
    	$data['pegawai']=$this->M_keuangan->tampil_data('pegawai');
        $this->load->view('Keuangan/v_pegawai',$data);
        $this->load->view('Keuangan/footer');
    }

    function tambah_data_pegawai(){
        $data['jabatan'] = $this->M_keuangan->tampil_data('jabatan');
        $this->load->view('keuangan/header',$data);
        $data['jabatan'] = $this->M_keuangan->tampil_data('jabatan');
        $this->load->view('keuangan/input_datapegawai',$data);
        $this->load->view('keuangan/footer');
    }

     function tambah_aksi_pegawai(){
        $nama           = $this->input->post('nama');
        $ktp            = $this->input->post('ktp');
        $id_jabatan     = $this->input->post('id_jabatan');
        $pangkat        = $this->input->post('pangkat');
        $alamat         = $this->input->post('alamat');
        $telpon         = $this->input->post('telpon');
        $tempat_lahir   = $this->input->post('tempat_lahir');
        $tanggal_lahir  = $this->input->post('tanggal_lahir');
        $agama          = $this->input->post('agama');
        $pendidikan     = $this->input->post('pendidikan');
                $data = array(
                    'nama'            => $nama,
                    'ktp'             => $ktp,
                    'id_jabatan'      => $id_jabatan,
                    'pangkat'         => $pangkat,
                    'alamat'          => $alamat,
                    'telpon'          => $telpon,
                    'tempat_lahir'    => $tempat_lahir,
                    'tanggal_lahir'   => $tanggal_lahir,
                    'agama'           => $agama,
                    'pendidikan'      => $pendidikan

                );

         $where=array(
            'id' => $id);

        $this->M_keuangan->input_data($data,'pegawai');
        redirect ('Keuangan/tampil_pegawai');
    }

     public function hapus_data_pegawai($id){
        $where = array('id' => $id);
        $this->M_keuangan->hapus_data($where,'pegawai');
        redirect('Keuangan/tampil_pegawai');
    }

    function edit_data_pegawai($id){
        $where = array(
            'id' => $id
        );
        $data['jabatan'] = $this->M_keuangan->tampil_data('jabatan');
        $this->load->view('Keuangan/header',$data);
        $data['pegawai'] = $this->M_keuangan->edit_data($where,'pegawai')->result();
        $data['jabatan']    = $this->M_keuangan->tampil_data('jabatan');
        $this->load->view('Keuangan/edit_datapegawai',$data);
        $this->load->view('Keuangan/footer');
    }

    function update_data_pegawai(){
        $id             = $this->input->post('id');
        $nama           = $this->input->post('nama');
        $ktp            = $this->input->post('ktp');
        $id_jabatan     = $this->input->post('id_jabatan');
        $pangkat        = $this->input->post('pangkat');
        $alamat         = $this->input->post('alamat');
        $telpon         = $this->input->post('telpon');
        $tempat_lahir   = $this->input->post('tempat_lahir');
        $tanggal_lahir  = $this->input->post('tanggal_lahir');
        $agama          = $this->input->post('agama');
        $pendidikan     = $this->input->post('pendidikan');
                $data = array(
                    'id'              => $id,
                    'nama'            => $nama,
                    'ktp'             => $ktp,
                    'id_jabatan'      => $id_jabatan,
                    'pangkat'         => $pangkat,
                    'alamat'          => $alamat,
                    'telpon'          => $telpon,
                    'tempat_lahir'    => $tempat_lahir,
                    'tanggal_lahir'   => $tanggal_lahir,
                    'agama'           => $agama,
                    'pendidikan'      => $pendidikan

                );

        $where=array(
            'id' => $id);

        $this->M_keuangan->update_data($where,$data,'pegawai');
        redirect('Keuangan/tampil_pegawai');
    }

     function tampil_pensiun(){
        $data['pegawai'] = $this->M_keuangan->tampil_data('pegawai');
        $this->load->view('Keuangan/header',$data);
        $data['pensiun']=$this->M_keuangan->tampil_data('pensiun');
        $this->load->view('Keuangan/v_pensiun',$data);
        $this->load->view('Keuangan/footer');
    }

     function tambah_data_pensiun(){
        $data['pegawai'] = $this->M_keuangan->tampil_data('pegawai');
        $this->load->view('keuangan/header',$data);
        $data['pegawai'] = $this->M_keuangan->tampil_data('pegawai');
        $this->load->view('keuangan/input_datapensiun',$data);
        $this->load->view('keuangan/footer');
    }

     function tambah_aksi_pensiun(){
        $nama           = $this->input->post('nama');
        $tanggal_pensiun= $this->input->post('tanggal_pensiun');
        $deskripsi      = $this->input->post('deskripsi');
                $data = array(
                    'nama'            => $nama,
                    'tanggal_pensiun' => $tanggal_pensiun,
                    'deskripsi'       => $deskripsi

                );

         $where=array(
            'id' => $id);

        $this->M_keuangan->input_data($data,'pensiun');
        redirect ('Keuangan/tampil_pensiun');
    }

     public function hapus_data_pensiun($id){
        $where = array('id' => $id);
        $this->M_keuangan->hapus_data($where,'pensiun');
        redirect('Keuangan/tampil_pensiun');
    }

    function edit_data_pensiun($id){
        $where = array(
            'id' => $id
        );
        $data['pegawai'] = $this->M_keuangan->tampil_data('pegawai');
        $this->load->view('Keuangan/header',$data);
        $data['pensiun'] = $this->M_keuangan->edit_data($where,'pensiun')->result();
        $data['pegawai'] = $this->M_keuangan->tampil_data('pegawai');
        $this->load->view('Keuangan/edit_datapensiun',$data);
        $this->load->view('Keuangan/footer');
    }


    function update_data_pensiun(){
        $id             = $this->input->post('id');
        $nama           = $this->input->post('nama');
        $tanggal_pensiun= $this->input->post('tanggal_pensiun');
        $deskripsi      = $this->input->post('deskripsi');
                $data = array(
                    'id'              => $id,
                    'nama'            => $nama,
                    'tanggal_pensiun' => $tanggal_pensiun,
                    'deskripsi'       => $deskripsi

                );

        $where=array(
            'id' => $id);

        $this->M_keuangan->update_data($where,$data,'pensiun');
        redirect('Keuangan/tampil_pensiun');
    }
}
?>