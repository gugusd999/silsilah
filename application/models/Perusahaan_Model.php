<?php


class Perusahaan_Model extends CI_Model
{

    private $table = "perusahaan";

    function get()
    {
        return $this->db->query("select * from perusahaan where id=1")->row();
    }
    static function load()
    {
        return (new self)->get();
    }
    public function save($data)
    {
        return $this->db->update($this->table, $data, array('id' => '1'));
    }
}
