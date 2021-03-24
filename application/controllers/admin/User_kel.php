<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_kel extends CI_Controller {

	private $table1 = 'user_kel';

	public function __construct()
	{
		parent::__construct();
        Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/user_kel/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["no","user","nama","jenis kelamin","tempat lahir","tanggal lahir","agama","pendidikan","pekerjaan","alamat","kelurahan","kecamatan","kabupaten","provinsi","perkawinan","tanggal menikah","tanggal meninggal","tempat meninggal","foto","username","password","waktu","status", "action"]);
        $this->Createtable->order_set('0, 23');
		$show = $this->Createtable->create();

		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/user_kel/view', $data);
        $this->load->view('templateadmin/footer');
	}

	public function table_show($action = 'show', $keyword = '')
	{
		if ($action == "show") {
        
            if (isset($_POST['order'])): $setorder = $_POST['order']; else: $setorder = ''; endif;

            $this->Datatable_gugus->datatable(
                [
                    "table" => $this->table1,
                    "select" => [
						"*"
					],
                    'limit' => [
                        'start' => post('start'),
                        'end' => post('length')
                    ],
                    'search' => [
                        'value' => $this->Datatable_gugus->search(),
                        'row' => ["user_id","nama","kelamin_id","tmptlahir","tgllahir","agama_id","pendidikan_id","pekerjaan_id","alamat","kel","kec","kab_id","prov_id","perkawinan_id","tglmenikah","tglmeninggal","tmptmeninggal","foto","username","password","waktu","status_id"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["user_id","nama","kelamin_id","tmptlahir","tgllahir","agama_id","pendidikan_id","pekerjaan_id","alamat","kel","kec","kab_id","prov_id","perkawinan_id","tglmenikah","tglmeninggal","tmptmeninggal","foto","username","password","waktu","status_id"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"user_id", "2"=>"nama", "3"=>"kelamin_id", "4"=>"tmptlahir", "5"=>"tgllahir", "6"=>"agama_id", "7"=>"pendidikan_id", "8"=>"pekerjaan_id", "9"=>"alamat", "10"=>"kel", "11"=>"kec", "12"=>"kab_id", "13"=>"prov_id", "14"=>"perkawinan_id", "15"=>"tglmenikah", "16"=>"tglmeninggal", "17"=>"tmptmeninggal", "18"=>"foto", "19"=>"username", "20"=>"password", "21"=>"waktu", "22"=>"status_id"],
                    ],
                    
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/user_kel/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/user_kel/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $user_id = post("user_id");
$nama = post("nama");
$kelamin_id = post("kelamin_id");
$tmptlahir = post("tmptlahir");
$tgllahir = post("tgllahir");
$agama_id = post("agama_id");
$pendidikan_id = post("pendidikan_id");
$pekerjaan_id = post("pekerjaan_id");
$alamat = post("alamat");
$kel = post("kel");
$kec = post("kec");
$kab_id = post("kab_id");
$prov_id = post("prov_id");
$perkawinan_id = post("perkawinan_id");
$tglmenikah = post("tglmenikah");
$tglmeninggal = post("tglmeninggal");
$tmptmeninggal = post("tmptmeninggal");
$foto = post("foto");
$username = post("username");
$password = post("password");
$waktu = post("waktu");
$status_id = post("status_id");

        

        $simpan = $this->db->query("
            INSERT INTO user_kel            
            (user_id,nama,kelamin_id,tmptlahir,tgllahir,agama_id,pendidikan_id,pekerjaan_id,alamat,kel,kec,kab_id,prov_id,perkawinan_id,tglmenikah,tglmeninggal,tmptmeninggal,foto,username,password,waktu,status_id) VALUES ('$user_id','$nama','$kelamin_id','$tmptlahir','$tgllahir','$agama_id','$pendidikan_id','$pekerjaan_id','$alamat','$kel','$kec','$kab_id','$prov_id','$perkawinan_id','$tglmenikah','$tglmeninggal','$tmptmeninggal','$foto','$username','$password','$waktu','$status_id')
        ");
    

        if($simpan){
            redirect('admin/user_kel');
        }
    }

    public function update(){
          $key = post('id'); $user_id = post("user_id");
$nama = post("nama");
$kelamin_id = post("kelamin_id");
$tmptlahir = post("tmptlahir");
$tgllahir = post("tgllahir");
$agama_id = post("agama_id");
$pendidikan_id = post("pendidikan_id");
$pekerjaan_id = post("pekerjaan_id");
$alamat = post("alamat");
$kel = post("kel");
$kec = post("kec");
$kab_id = post("kab_id");
$prov_id = post("prov_id");
$perkawinan_id = post("perkawinan_id");
$tglmenikah = post("tglmenikah");
$tglmeninggal = post("tglmeninggal");
$tmptmeninggal = post("tmptmeninggal");
$foto = post("foto");
$username = post("username");
$password = post("password");
$waktu = post("waktu");
$status_id = post("status_id");

        $simpan = $this->db->query("
            UPDATE user_kel SET  user_id = '$user_id', nama = '$nama', kelamin_id = '$kelamin_id', tmptlahir = '$tmptlahir', tgllahir = '$tgllahir', agama_id = '$agama_id', pendidikan_id = '$pendidikan_id', pekerjaan_id = '$pekerjaan_id', alamat = '$alamat', kel = '$kel', kec = '$kec', kab_id = '$kab_id', prov_id = '$prov_id', perkawinan_id = '$perkawinan_id', tglmenikah = '$tglmenikah', tglmeninggal = '$tglmeninggal', tmptmeninggal = '$tmptmeninggal', foto = '$foto', username = '$username', password = '$password', waktu = '$waktu', status_id = '$status_id' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/user_kel');
        }
    }
    
}
