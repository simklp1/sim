<?php  

class admin extends CI_Controller {

        function __construct(){
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->helper('url');
        if ($this->session->userdata('status') != 'login') {
            redirect(base_url("index.php/Login"));
        }
        /*$this->simple_login->cek_login();*/
    }

    function tampil_pasien(){
    	$this->load->view('admin/header');
    	$data['pasien']=$this->m_admin->tampil_data('pasien');
        $this->load->view('admin/v_pasien',$data);
        $this->load->view('admin/footer');
    }

    function tambah_data_pasien(){
        $this->load->view('admin/header');
        $this->load->view('admin/input_datapasien');
        $this->load->view('admin/footer');
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

        $this->m_admin->input_data($data,'pasien');
        redirect ('Admin/tampil_pasien');

    }

    public function hapus_data_pasien($id){
        $where = array('id' => $id);
        $this->m_admin->hapus_data($where,'pasien');
        redirect('admin/tampil_pasien');
    }

    function edit_data_pasien($id){
        $where = array('id' => $id);
        $this->load->view('admin/header');
        $data['pasien'] = $this->m_admin->edit_data($where,'pasien')->result();
        $this->load->view('admin/edit_datapasien',$data);
        $this->load->view('admin/footer');
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

        $this->m_admin->update_data($where,$data,'pasien');
        redirect('Admin/tampil_pasien');
    }

     function tampil_jenjang(){
        $this->load->view('admin/header');
        $data['jenjang']=$this->m_admin->tampil_data('jenjang');
        $this->load->view('admin/v_jenjang',$data);
        $this->load->view('admin/footer');
    }

    public function tambah_data_jenjang(){
        $data['jenjang'] = $this->m_admin->tampil_data('jenjang');
        $this->load->view('admin/header',$data);
        $this->load->view('admin/input_datajenjang');
        $this->load->view('admin/footer');
    }

    public function tambah_aksi_jenjang(){
        $id        = $this->input->post('id');
        $jenjang     = $this->input->post('jenjang');
            $data = array(
                'id'            => $id,
                'jenjang'         => $jenjang
        );
        $where=array(
            'id' => $id);

        $this->m_admin->input_data($data,'jenjang');
        redirect ('Admin/tampil_jenjang');
    }

    public function hapus_data_jenjang($id){
        $where = array('id' => $id);
        $this->m_admin->hapus_data($where,'jenjang');
        redirect('admin/tampil_jenjang');
    }

    function edit_data_jenjang($id){ 
        $where = array('id' => $id);
        $this->load->view('admin/header');
        $data['jenjang'] = $this->m_admin->edit_data($where,'jenjang')->result();
        $this->load->view('admin/edit_datajenjang',$data);
        $this->load->view('admin/footer');
    }

    function update_data_jenjang(){
        $id        = $this->input->post('id');
        $jenjang   = $this->input->post('jenjang');
                $data = array(
                    'id'         => $id,
                    'jenjang'    => $jenjang
                );

        $where=array(
            'id' => $id);

        $this->m_admin->update_data($where,$data,'jenjang');
        redirect('Admin/tampil_jenjang');
    }

    function tampil_jabatan(){
        $this->load->view('admin/header');
        $data['jabatan']=$this->m_admin->tampil_data('jabatan');
        $this->load->view('admin/v_jabatan',$data);
        $this->load->view('admin/footer');
    }

    public function tambah_data_jabatan(){
        $data['jabatan'] = $this->m_admin->tampil_data('jabatan');
        $this->load->view('admin/header',$data);
        $this->load->view('admin/input_datajabatan');
        $this->load->view('admin/footer');
    }

    public function tambah_aksi_jabatan(){
        $id_jabatan        = $this->input->post('id_jabatan');
        $jabatan           = $this->input->post('jabatan');
            $data = array(
                'id_jabatan'      => $id_jabatan,
                'jabatan'         => $jabatan
        );
        $where=array(
            'id_jabatan' => $id_jabatan);

        $this->m_admin->input_data($data,'jabatan');
        redirect ('Admin/tampil_jabatan');
    }

    public function hapus_data_jabatan($id_jabatan){
        $where = array('id_jabatan' => $id_jabatan);
        $this->m_admin->hapus_data($where,'jabatan');
        redirect('admin/tampil_jabatan');
    }

    function edit_data_jabatan($id_jabatan){ 
        $where = array('id_jabatan' => $id_jabatan);
        $this->load->view('admin/header');
        $data['jabatan'] = $this->m_admin->edit_data($where,'jabatan')->result();
        $this->load->view('admin/edit_datajabatan',$data);
        $this->load->view('admin/footer');
    }

    function update_data_jabatan(){
        $id_jabatan        = $this->input->post('id_jabatan');
        $jabatan           = $this->input->post('jabatan');
                $data = array(
                    'id_jabatan' => $id_jabatan,
                    'jabatan'    => $jabatan
                );

        $where=array(
            'id_jabatan' => $id_jabatan);

        $this->m_admin->update_data($where,$data,'jabatan');
        redirect('Admin/tampil_jabatan');
    }

     function tampil_poliklinik(){
        $this->load->view('admin/header');
        $data['poliklinik']=$this->m_admin->tampil_data('poliklinik');
        $this->load->view('admin/v_poliklinik',$data);
        $this->load->view('admin/footer');
    }

    public function tambah_data_poliklinik(){
        $data['poliklinik'] = $this->m_admin->tampil_data('poliklinik');
        $this->load->view('admin/header',$data);
        $this->load->view('admin/input_datapoliklinik');
        $this->load->view('admin/footer');
    }

    public function tambah_aksi_poliklinik(){
        $id           = $this->input->post('id');
        $poliklinik   = $this->input->post('poliklinik');
            $data = array(
                'id'            => $id,
                'poliklinik'    => $poliklinik
        );
        $where=array(
            'id' => $id);

        $this->m_admin->input_data($data,'poliklinik');
        redirect ('Admin/tampil_poliklinik');
    }

    public function hapus_data_poliklinik($id){
        $where = array('id' => $id);
        $this->m_admin->hapus_data($where,'poliklinik');
        redirect('admin/tampil_poliklinik');
    }

    function edit_data_poliklinik($id){ 
        $where = array('id' => $id);
        $this->load->view('admin/header');
        $data['poliklinik'] = $this->m_admin->edit_data($where,'poliklinik')->result();
        $this->load->view('admin/edit_datapoliklinik',$data);
        $this->load->view('admin/footer');
    }

    function update_data_poliklinik(){
        $id           = $this->input->post('id');
        $poliklinik   = $this->input->post('poliklinik');
                $data = array(
                    'id'         => $id,
                    'poliklinik' => $poliklinik
                );

        $where=array(
            'id' => $id);

        $this->m_admin->update_data($where,$data,'poliklinik');
        redirect('Admin/tampil_poliklinik');
    }

    function tampil_spesialis(){
        $this->load->view('admin/header');
        $data['spesialis']=$this->m_admin->tampil_data('spesialis');
        $this->load->view('admin/v_spesialis',$data);
        $this->load->view('admin/footer');
    }

    public function tambah_data_spesialis(){
        $data['spesialis'] = $this->m_admin->tampil_data('spesialis');
        $this->load->view('admin/header',$data);
        $this->load->view('admin/input_dataspesialis');
        $this->load->view('admin/footer');
    }

    public function tambah_aksi_spesialis(){
        $id           = $this->input->post('id');
        $spesialis    = $this->input->post('spesialis');
            $data = array(
                'id'            => $id,
                'spesialis'     => $spesialis
        );
        $where=array(
            'id' => $id);

        $this->m_admin->input_data($data,'spesialis');
        redirect ('Admin/tampil_spesialis');
    }

    public function hapus_data_spesialis($id){
        $where = array('id' => $id);
        $this->m_admin->hapus_data($where,'spesialis');
        redirect('admin/tampil_spesialis');
    }

    function edit_data_spesialis($id){ 
        $where = array('id' => $id);
        $this->load->view('admin/header');
        $data['spesialis'] = $this->m_admin->edit_data($where,'spesialis')->result();
        $this->load->view('admin/edit_dataspesialis',$data);
        $this->load->view('admin/footer');
    }

    function update_data_spesialis(){
        $id           = $this->input->post('id');
        $spesialis    = $this->input->post('spesialis');
                $data = array(
                    'id'         => $id,
                    'spesialis'  => $spesialis
                );

        $where=array(
            'id' => $id);

        $this->m_admin->update_data($where,$data,'spesialis');
        redirect('Admin/tampil_spesialis');
    }

        function tampil_departemen(){
        $this->load->view('admin/header');
        $data['departemen']=$this->m_admin->tampil_data('departemen');
        $this->load->view('admin/v_departemen',$data);
        $this->load->view('admin/footer');
    }

    public function tambah_data_departemen(){
        $data['departemen'] = $this->m_admin->tampil_data('departemen');
        $this->load->view('admin/header',$data);
        $this->load->view('admin/input_datadepartemen');
        $this->load->view('admin/footer');
    }

    public function tambah_aksi_departemen(){
        $id           = $this->input->post('id');
        $departemen    = $this->input->post('departemen');
            $data = array(
                'id'            => $id,
                'departemen'    => $departemen
        );
        $where=array(
            'id' => $id);

        $this->m_admin->input_data($data,'departemen');
        redirect ('Admin/tampil_departemen');
    }

    public function hapus_data_departemen($id){
        $where = array('id' => $id);
        $this->m_admin->hapus_data($where,'departemen');
        redirect('admin/tampil_departemen');
    }

    function edit_data_departemen($id){ 
        $where = array('id' => $id);
        $this->load->view('admin/header');
        $data['departemen'] = $this->m_admin->edit_data($where,'departemen')->result();
        $this->load->view('admin/edit_datadepartemen',$data);
        $this->load->view('admin/footer');
    }

    function update_data_departemen(){
        $id           = $this->input->post('id');
        $departemen   = $this->input->post('departemen');
                $data = array(
                    'id'         => $id,
                    'departemen' => $departemen
                );

        $where=array(
            'id' => $id);

        $this->m_admin->update_data($where,$data,'departemen');
        redirect('Admin/tampil_departemen');
    }

    function tampil_gedung(){
        $this->load->view('admin/header');
        $data['gedung']=$this->m_admin->tampil_data('gedung');
        $this->load->view('admin/v_gedung',$data);
        $this->load->view('admin/footer');
    }

    public function tambah_data_gedung(){
        $data['gedung'] = $this->m_admin->tampil_data('gedung');
        $this->load->view('admin/header',$data);
        $this->load->view('admin/input_datagedung');
        $this->load->view('admin/footer');
    }

    public function tambah_aksi_gedung(){
        $id           = $this->input->post('id');
        $gedung       = $this->input->post('gedung');
            $data = array(
                'id'            => $id,
                'gedung'        => $gedung
        );
        $where=array(
            'id' => $id);

        $this->m_admin->input_data($data,'gedung');
        redirect ('Admin/tampil_gedung');
    }

    public function hapus_data_gedung($id){
        $where = array('id' => $id);
        $this->m_admin->hapus_data($where,'gedung');
        redirect('admin/tampil_gedung');
    }

    function edit_data_gedung($id){ 
        $where = array('id' => $id);
        $this->load->view('admin/header');
        $data['gedung'] = $this->m_admin->edit_data($where,'gedung')->result();
        $this->load->view('admin/edit_datagedung',$data);
        $this->load->view('admin/footer');
    }

    function update_data_gedung(){
        $id           = $this->input->post('id');
        $gedung       = $this->input->post('gedung');
                $data = array(
                    'id'         => $id,
                    'gedung' => $gedung
                );

        $where=array(
            'id' => $id);

        $this->m_admin->update_data($where,$data,'gedung');
        redirect('Admin/tampil_gedung');
    }

    function tampil_ruang(){
        $this->load->view('admin/header');
        $data['ruang']=$this->m_admin->tampil_data('ruang');
        $this->load->view('admin/v_ruang',$data);
        $this->load->view('admin/footer');
    }

    public function tambah_data_ruang(){
        $data['ruang'] = $this->m_admin->tampil_data('ruang');
        $this->load->view('admin/header',$data);
        $this->load->view('admin/input_dataruang');
        $this->load->view('admin/footer');
    }

    public function tambah_aksi_ruang(){
        $id           = $this->input->post('id');
        $ruang        = $this->input->post('ruang');
            $data = array(
                'id'            => $id,
                'ruang'        => $ruang
        );
        $where=array(
            'id' => $id);

        $this->m_admin->input_data($data,'ruang');
        redirect ('Admin/tampil_ruang');
    }

    public function hapus_data_ruang($id){
        $where = array('id' => $id);
        $this->m_admin->hapus_data($where,'ruang');
        redirect('admin/tampil_ruang');
    }

    function edit_data_ruang($id){ 
        $where = array('id' => $id);
        $this->load->view('admin/header');
        $data['ruang'] = $this->m_admin->edit_data($where,'ruang')->result();
        $this->load->view('admin/edit_dataruang',$data);
        $this->load->view('admin/footer');
    }

    function update_data_ruang(){
        $id           = $this->input->post('id');
        $ruang        = $this->input->post('ruang');
                $data = array(
                    'id'         => $id,
                    'ruang'      => $ruang
                );

        $where=array(
            'id' => $id);

        $this->m_admin->update_data($where,$data,'ruang');
        redirect('Admin/tampil_ruang');
    }

     function tampil_rekamedis(){
        $this->load->view('admin/header');
        $data['pasien']=$this->m_admin->tampil_data('pasien');
        $this->load->view('admin/v_rekamedis',$data);
        $this->load->view('admin/footer');
    }
}
?>