<?php
/**
 * @Author  : Djawz Coding<muchammadfurqon.programer@yahoo.co.id>
 * @Date    : 12/28/15 - 3:40 PM
 */

class matapelajaranModel extends Model{

    protected $tableName = "matapelajaran";

    public function getPrev($id) {

        $sql = "select * from ". $this->tableName ." where id_matapelajaran < ". $id ." order by id_matapelajaran desc limit 1";

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    public function getNext($id) {

        $sql = "select * from ". $this->tableName ." where id_matapelajaran > ". $id ." order by id_matapelajaran asc limit 1";

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

}
?>