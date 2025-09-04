<?php

class Dashboard_mod extends CI_model
{
    public function getAllData($table, $where = null)
    {
        $this->db->from($table);

        if (isset($where)) {
            $this->db->where($where);
        }

        if ($table === "tbl_devmenu") {
            $this->db->order_by('tbl_devmenu.nourut', 'ASC');
        } else {
            $this->db->order_by('id', 'asc');
        }

        return $this->db->get();
    }
}
