<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tbl_kegiatan extends CI_Controller {

	private $table1 = 'tbl_kegiatan';

	public function __construct()
	{
		parent::__construct();
        Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/tbl_kegiatan/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["no","user","user keluarga","kegiatan","judul","foto","isi","waktu","status", "action"]);
        $this->Createtable->order_set('0, 9');
		$show = $this->Createtable->create();

		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/tbl_kegiatan/view', $data);
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
                        'row' => ["user_id","user_kel_id","kegiatan_id","judul","foto","isi","waktu","status_id"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["user_id","user_kel_id","kegiatan_id","judul","foto","isi","waktu","status_id"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"user_id", "2"=>"user_kel_id", "3"=>"kegiatan_id", "4"=>"judul", "5"=>"foto", "6"=>"isi", "7"=>"waktu", "8"=>"status_id"],
                    ],
                    
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/tbl_kegiatan/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/tbl_kegiatan/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $user_id = post("user_id");
$user_kel_id = post("user_kel_id");
$kegiatan_id = post("kegiatan_id");
$judul = post("judul");
$foto = post("foto");
$isi = post("isi");
$waktu = post("waktu");
$status_id = post("status_id");

        

        $simpan = $this->db->query("
            INSERT INTO tbl_kegiatan            
            (user_id,user_kel_id,kegiatan_id,judul,foto,isi,waktu,status_id) VALUES ('$user_id','$user_kel_id','$kegiatan_id','$judul','$foto','$isi','$waktu','$status_id')
        ");
    

        if($simpan){
            redirect('admin/tbl_kegiatan');
        }
    }

    public function update(){
          $key = post('id'); $user_id = post("user_id");
$user_kel_id = post("user_kel_id");
$kegiatan_id = post("kegiatan_id");
$judul = post("judul");
$foto = post("foto");
$isi = post("isi");
$waktu = post("waktu");
$status_id = post("status_id");

        $simpan = $this->db->query("
            UPDATE tbl_kegiatan SET  user_id = '$user_id', user_kel_id = '$user_kel_id', kegiatan_id = '$kegiatan_id', judul = '$judul', foto = '$foto', isi = '$isi', waktu = '$waktu', status_id = '$status_id' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/tbl_kegiatan');
        }
    }
    
}
