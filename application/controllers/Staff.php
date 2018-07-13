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

    function tampil_pegawai(){
        $data['jabatan'] = $this->M_staff->tampil_data('jabatan');
        $this->load->view('Staff/header',$data);
        $data['pegawai']=$this->M_staff->tampil_data('pegawai');
        $this->load->view('Staff/v_pegawai',$data);
        $this->load->view('Staff/footer');
    }

    function tambah_data_pegawai(){
        $data['jabatan'] = $this->M_staff->tampil_data('jabatan');
        $this->load->view('Staff/header',$data);
        $data['jabatan'] = $this->M_staff->tampil_data('jabatan');
        $this->load->view('Staff/input_datapegawai',$data);
        $this->load->view('Staff/footer');
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

        $this->M_staff->input_data($data,'pegawai');
        redirect ('Staff/tampil_pegawai');
    }

     public function hapus_data_pegawai($id){
        $where = array('id' => $id);
        $this->M_staff->hapus_data($where,'pegawai');
        redirect('Staff/tampil_pegawai');
    }

    function edit_data_pegawai($id){
        $where = array(
            'id' => $id
        );
        $data['jabatan'] = $this->M_staff->tampil_data('jabatan');
        $this->load->view('Staff/header',$data);
        $data['pegawai'] = $this->M_staff->edit_data($where,'pegawai')->result();
        $data['jabatan']    = $this->M_staff->tampil_data('jabatan');
        $this->load->view('Staff/edit_datapegawai',$data);
        $this->load->view('Staff/footer');
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

        $this->M_staff->update_data($where,$data,'pegawai');
        redirect('Staff/tampil_pegawai');
    }

     function tampil_pensiun(){
        $data['pegawai'] = $this->M_staff->tampil_data('pegawai');
        $this->load->view('Staff/header',$data);
        $data['pensiun']=$this->M_staff->tampil_data('pensiun');
        $this->load->view('Staff/v_pensiun',$data);
        $this->load->view('Staff/footer');
    }

     function tambah_data_pensiun(){
        $data['pegawai'] = $this->M_staff->tampil_data('pegawai');
        $this->load->view('Staff/header',$data);
        $data['pegawai'] = $this->M_staff->tampil_data('pegawai');
        $this->load->view('Staff/input_datapensiun',$data);
        $this->load->view('Staff/footer');
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

        $this->M_staff->input_data($data,'pensiun');
        redirect ('Staff/tampil_pensiun');
    }

     public function hapus_data_pensiun($id){
        $where = array('id' => $id);
        $this->M_staff->hapus_data($where,'pensiun');
        redirect('Staff/tampil_pensiun');
    }

    function edit_data_pensiun($id){
        $where = array(
            'id' => $id
        );
        $data['pegawai'] = $this->M_staff->tampil_data('pegawai');
        $this->load->view('Staff/header',$data);
        $data['pensiun'] = $this->M_staff->edit_data($where,'pensiun')->result();
        $data['pegawai'] = $this->M_staff->tampil_data('pegawai');
        $this->load->view('Staff/edit_datapensiun',$data);
        $this->load->view('Staff/footer');
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

        $this->M_staff->update_data($where,$data,'pensiun');
        redirect('Staff/tampil_pensiun');
    }
} 
?>