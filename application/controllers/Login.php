<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['admin'] = "user";
		$this->load->view('login', $data);
	}

	public function prosses()
	{
		// default password admin
		$username = $_POST['username'];
		$password = md5(md5($_POST['password']));
		$cek = $this->db->query("SELECT * FROM user WHERE username = '$username' AND password = '$password' ")->num_rows();
		if ($cek > 0) {
			create_session('login', 'user');
			return redirect('admin/magama');
		}else{
			return redirect('login');
		}
	}

	public function daftar()
	{
		$username = post("username");
		$password = md5(md5(post("password")));
		$nama = post("nama");
		$hp = post("hp");
		$namaayah = post("namaayah");
		$namaibu = post("namaibu");
		$email = post("email");
		$status_id = post("status_id");

        $simpan = $this->db->query("
            INSERT INTO user            
            (username,password,nama,hp,namaayah,namaibu,email,status_id) VALUES ('$username','$password','$nama','$hp','$namaayah','$namaibu','$email','$status_id')
        ");

		if($simpan){
			create_session('login', 'user');
			redirect('admin/user');
		}
	}


}
