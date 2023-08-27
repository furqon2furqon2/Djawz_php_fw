<?php
/**
 * @Author  : Djawz Coding<muchammadfurqon.programer@yahoo.co.id>
 * @Date    : 12/28/15 - 3:40 PM
 */

class pertemuanModel extends Model{

    protected $tableName = "pertemuan";

    public function getPrev($id) {

        $sql = "select * from ". $this->tableName ." where id_pertemuan < ". $id ." order by id_pertemuan desc limit 1";

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    public function getNext($id) {

        $sql = "select * from ". $this->tableName ." where id_pertemuan > ". $id ." order by id_pertemuan asc limit 1";

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

}
?>