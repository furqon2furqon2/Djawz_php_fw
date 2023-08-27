<?php
/**
 * @Author  : Djawz Coding<muchammadfurqon.programer@yahoo.co.id>
 * @Date    : 12/28/15 - 3:40 PM
 */

class linkvideoconferenceModel extends Model{

    protected $tableName = "linkvideoconference";

    public function getPrev($id) {

        $sql = "select * from ". $this->tableName ." where id_link < ". $id ." order by id_link desc limit 1";

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    public function getNext($id) {

        $sql = "select * from ". $this->tableName ." where id_link > ". $id ." order by id_link asc limit 1";

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

}
?>