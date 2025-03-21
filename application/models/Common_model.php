<?php

// dbden ayarlar tablosundan site_url kısmından çekmek için
// tüm kodlardan sonra ayarlar tablosuna bilgiler girilerek veriler çekilir
class Common_model extends CI_Model {

    public function __construct() {
        $query = $this->db->query("SELECT * FROM ayarlar")->row();
        $this->config->set_item('base_url', $query->site_url);
    }

    public function get($where, $table) {
        return $this->db->where($where)->get($table)->row();
    }

    public function getAll($where, $table)
    {
        return $this->db->where($where)->get($table)->result();
    }

    public function add($where, $table){
        return $this->db->where($where)->insert($table);
    }

    public function getcount($where, $table){
        return $this
            ->db
            ->where($where)
            ->count_all_results($table);
    }

    public function update($where, $data, $table)
    {
        return $this->db->where($where)->update($table, $data);
    }

    public function custom($query, $status) {
        if($status == true){
            return $this->db->query($query)->result();
        }else{
            return $this->db->query($query)->row();
        }
    }

    public function getLimitAll($where, $limit="", $pkCount="", $table, $orderbycolumn="id", $orderby="asc", $select="*"){
        return $this
            ->db
            ->select($select)
            ->where($where)
            ->order_by($orderbycolumn, $orderby)
            ->limit($limit, $pkCount)
            ->get($table)
            ->result();
    }

    // Common_model.php (veya ilgili model dosyanız)
    public function get_products_by_category($category_name) {
        $this->db->where('urun_kategori', $category_name);
        return $this->db->get('urunler')->result();
    }

}

?>
