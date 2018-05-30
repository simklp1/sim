<?php  

class Dokter extends CI_Controller {

        function __construct(){
        parent::__construct();
        $this->load->model('m_dokter');
        $this->load->helper('url');
        if ($this->session->userdata('status') != 'login') {
            redirect(base_url("index.php/Login"));
        }
        /*$this->simple_login->cek_login();*/
    }

    function tampil_pasien(){
    	$this->load->view('dokter/header');
    	$data['pasien']=$this->m_dokter->tampil_data('pasien');
        $this->load->view('dokter/v_pasien',$data);
        $this->load->view('dokter/footer');
    }

    function tambah_data_pasien(){
        $this->load->view('dokter/header');
        $this->load->view('dokter/input_datapasien');
        $this->load->view('dokter/footer');
    }

    function tambah_aksi_pasien(){
        $no_rekamedis   = $this->input->post('no_rekamedis');
        $nama_pasien    = $this->input->post('nama_pasien');
        $jk             = $this->input->post('jk');
        $goldar         = $this->input->post('goldar');
        $tempat_lahir   = $this->input->post('tempat_lahir');
        $tanggal_lahir  = $this->input->post('tanggal_lahir');
        $nama_ibu       = $this->input->post('nama_ibu');
        $alamat         = $this->input->post('alamat');
        $agama          = $this->input->post('agama');
        $telpon         = $this->input->post('telpon');
        $pekerjaan      = $this->input->post('pekerjaan');
        $status_menikah = $this->input->post('status_menikah');
                $data = array(
                    'no_rekamedis'    => $no_rekamedis,
                    'nama_pasien'     => $nama_pasien,
                    'jk'              => $jk,
                    'goldar'          => $goldar,
                    'tempat_lahir'    => $tempat_lahir,
                    'tanggal_lahir'   => $tanggal_lahir,
                    'nama_ibu'        => $nama_ibu,
                    'alamat'          => $alamat,
                    'agama'           => $agama,
                    'telpon'          => $telpon,
                    'pekerjaan'       => $pekerjaan,
                    'status_menikah'  => $status_menikah

                );

        $where=array(
            'id' => $id);

        $this->m_dokter->input_data($data,'pasien');
        redirect ('Dokter/tampil_pasien');

    }

    public function hapus_data_pasien($id){
        $where = array('id' => $id);
        $this->m_dokter->hapus_data($where,'pasien');
        redirect('Dokter/tampil_pasien');
    }

    function edit_data_pasien($id){
        $this->load->view('admin/header');
        $data['pasien'] = $this->m_dokter->tampil_data('pasien');
        $this->load->view('dokter/edit_datapasien',$data);
        $this->load->view('dokter/footer');
    }

    function update_data_pasien(){
        $id             = $this->input->post('id');
        $no_rekamedis   = $this->input->post('no_rekamedis');
        $nama_pasien    = $this->input->post('nama_pasien');
        $jk             = $this->input->post('jk');
        $goldar         = $this->input->post('goldar');
        $tempat_lahir   = $this->input->post('tempat_lahir');
        $tanggal_lahir  = $this->input->post('tanggal_lahir');
        $nama_ibu       = $this->input->post('nama_ibu');
        $alamat         = $this->input->post('alamat');
        $agama          = $this->input->post('agama');
        $telpon         = $this->input->post('telpon');
        $pekerjaan      = $this->input->post('pekerjaan');
        $status_menikah = $this->input->post('status_menikah');
                $data = array(
                    'id'    => $id,
                    'no_rekamedis'    => $no_rekamedis,
                    'nama_pasien'     => $nama_pasien,
                    'jk'              => $jk,
                    'goldar'          => $goldar,
                    'tempat_lahir'    => $tempat_lahir,
                    'tanggal_lahir'   => $tanggal_lahir,
                    'nama_ibu'        => $nama_ibu,
                    'alamat'          => $alamat,
                    'agama'           => $agama,
                    'telpon'          => $telpon,
                    'pekerjaan'       => $pekerjaan,
                    'status_menikah'  => $status_menikah
                );

        $where=array(
            'id' => $id);

        $this->m_dokter->update_data($where,$data,'pasien');
        redirect('Dokter/tampil_pasien');
    }
}
?>