<?php  

class Login extends CI_Controller {

        function __construct(){
        parent::__construct();
        $this->load->model('m_login');
        /*$this->simple_login->cek_login();*/
    }

    function index(){
        $this->load->view('v_login');
    }

    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );

        $cek=$this->m_login->cek_login("login",$where);
        if($cek->num_rows() > 0){
            foreach ($cek->result() as $row){
            $data_session = array(
                'id'            => $id,
                'username'      => $username,
                'password'      => $password,
                'hak_akses'     => $hak_akses,
                'status'        => "login",
                'nama'          => $nama,
                'foto'          => $foto,

            );

        $this->session->set_userdata($data_session);
        $a = $cek->row();
            if($username == $a->username && $password == $a->password)
            {
                if($a->hak_akses == 'admin')
                    redirect('Admin/tampil_pasien');
                else if ($a->hak_akses == 'dokter')
                    redirect('Dokter/tampil_pasien');
                else if ($a->hak_akses == 'staff')
                    redirect('c_staff/index');
                else
                    redirect('c_keuangan/index');
            }

        else
        {
            redirect('Login/index');
        }
    }
    }

    }

    function logout(){
        $this->session->sess_destroy();
        redirect('Login/index');
    }
}
?>  
