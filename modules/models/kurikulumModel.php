<?php
/**
 * @Author  : Djawz Coding<muchammadfurqon.programer@yahoo.co.id>
 * @Date    : 12/28/15 - 3:40 PM
 */

class kurikulumModel extends Model{

    protected $tableName = "kurikulum";

    public function getPrev($id) {

        $sql = "select * from ". $this->tableName ." where id_kurikulum < ". $id ." order by id_kurikulum desc limit 1";

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    public function getNext($id) {

        $sql = "select * from ". $this->tableName ." where id_kurikulum > ". $id ." order by id_kurikulum asc limit 1";

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

}
?>