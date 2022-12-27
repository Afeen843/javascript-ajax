<?php

class configuartion extends  menu
{

    /**
     * @param $parentid
     * @return void
     */
    function fetch($parentid)
    {
        $sql = "select * from configuration";
        if ($parentid != null) {
            $where = " where parent_id= $parentid  AND status= 1 ";
            $sql .= $where;
        }
        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }



}