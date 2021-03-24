<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public $paginbatas = 1;

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
        $el = $this->db->query("SELECT * FROM martikel")->row();
        $tot = $this->db->query("SELECT * FROM tbl_artikel WHERE artikel_id = '$el->id' ")->num_rows();
        $data['pagin'] = $this->pagination($tot);
        $data['data'] = $this->db->query("SELECT * FROM tbl_artikel WHERE artikel_id = '$el->id' ")->result();
        $this->load->view('artikel/artikel', $data);
    }
    
    public function kategori($id = '')
    {
        create_session('donaldart', $id);
        $data['idartikel'] = $id;
        $tot = $this->db->query("SELECT * FROM tbl_artikel WHERE artikel_id = '$id' ")->num_rows();
        $data['pagin'] = $this->pagination($tot);
        $data['data'] = $this->db->query("SELECT * FROM tbl_artikel WHERE artikel_id = '$id' ")->result();
        $this->load->view('artikel/artikel', $data);
    }
    
    public function pagination($tot)
    {
        $pepage = ceil($tot / $this->paginbatas);
        $html = "
            <nav aria-label=\"Page navigation example\">
                <ul class=\"pagination\">
                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">Previous</a></li>
                ";
                for ($i=0; $i < $pepage ; $i++) { 
                    $c = $i + 1;
                    $html .= " <li class=\"page-item\"><a class=\"page-link\" href=\"#\">$c</a></li>";
                }
                $html .= "
                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">Next</a></li>
                </ul>
            </nav>
        ";
        return $html;
    }

    public function detail($slug = '')
    {
        $data['data'] = $this->db->query("SELECT * FROM tbl_artikel WHERE slug = '$slug' ")->row();
        $this->load->view('artikel/detail', $data);
    }
}
