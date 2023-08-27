<?php
/**
 * @Author  : Djawz Coding<muchammadfurqon.programer@yahoo.co.id>
 * @Date    : 12/28/15 - 3:40 PM
 */

class kelasModel extends Model{

    protected $tableName = "kelas";

    public function getPrev($id) {

        $sql = "select * from ". $this->tableName ." where id_kelas < ". $id ." order by id_kelas desc limit 1";

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    public function getNext($id) {

        $sql = "select * from ". $this->tableName ." where id_kelas > ". $id ." order by id_kelas asc limit 1";

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

}
?>