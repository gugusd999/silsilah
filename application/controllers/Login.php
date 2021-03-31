<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
		$data['title'] = "Login";
		$data['admin'] = "user";
		$this->load->view('login', $data);
	}


	public function kelurga()
	{
		$data['title'] = "Login Keluarga";
		$data['admin'] = "user";
		$this->load->view('loginkel', $data);
	}


	public function prosses()
	{
		// default password admin
		$username = $_POST['username'];
		$password = md5(md5($_POST['password']));
		$cek = $this->db->query("SELECT * FROM user WHERE username = '$username' AND password = '$password' ")->num_rows();
		$cek2 = $this->db->query("SELECT * FROM user WHERE username = '$username' AND password = '$password' ")->row();
		if ($cek > 0) {
			create_session('loginid', $cek2->id);
			create_session('login', 'user');
			return redirect('home');
		}else{
			return redirect('login');
		}
	}
	public function prosseskel()
	{
		// default password admin
		$username = $_POST['username'];
		$password = md5(md5($_POST['password']));
		$cek = $this->db->query("SELECT * FROM user_kel WHERE username = '$username' AND password = '$password' ")->num_rows();
		$cek2 = $this->db->query("SELECT * FROM user_kel WHERE username = '$username' AND password = '$password' ")->row();
		if ($cek > 0) {
			create_session('loginid', $cek2->user_id);
			create_session('loginkelid', $cek2->id);
			create_session('login', 'user');
			return redirect('home');
		}else{
			return redirect('login/kelurga');
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

		$config = [
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'protocol'  => 'smtp',
			'smtp_host' => 'kediamanku.com',
			'smtp_user' => 'no_reply@kediamanku.com',  // Email gmail
			'smtp_pass'   => 'silsilahkeluarga',  // Password gmail
			'smtp_crypto' => 'ssl',
			'smtp_port'   => 465,
			'crlf'    => "\r\n",
			'newline' => "\r\n"
		];

		// Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('no_reply@kediamanku.com', 'AdminKediamanku');

        // Email penerima
        $this->email->to("$email"); // Ganti dengan email tujuan

		// Subject email
        $this->email->subject('Selamat Datang');

        // Isi email
        $this->email->message("Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa at nam dolorum consequuntur blanditiis! Aliquam incidunt culpa voluptatem, illum harum deserunt iusto nostrum, voluptatibus sed, id dolorum quam omnis distinctio.");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }

    $simpan = $this->db->query("
        INSERT INTO user
        (username,password,nama,hp,namaayah,namaibu,email,status_id) VALUES ('$username','$password','$nama','$hp','$namaayah','$namaibu','$email','$status_id')
    ");

		if($simpan){
			$getid = $this->db->query("SELECT * FROM user ORDER BY id DESC")->row()->id;
			create_session('loginid', $getid);
			create_session('login', 'user');
			// redirect('admin/user');
		}
	}
}
