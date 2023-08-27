<?php
/**
 * @Author  : Djawz Coding<muchammadfurqon.programer@yahoo.co.id>
 * @Date    : 12/28/15 - 3:40 PM
 */

class jawaban_soalModel extends Model{

    protected $tableName = "jawaban_soal";

    public function getPrev($id) {

        $sql = "select * from ". $this->tableName ." where id_jawaban_soal < ". $id ." order by id_jawaban_soal desc limit 1";

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    public function getNext($id) {

        $sql = "select * from ". $this->tableName ." where id_jawaban_soal > ". $id ." order by id_jawaban_soal asc limit 1";

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

}
?>