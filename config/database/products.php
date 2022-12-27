<?php



include_once('menu.php');

class products extends menu
{

    var $lastentityId;

    function show(int $parentId = null)
    {
        $sql = "select * from products ";
        if ($parentId != null) {
            $where = "where parent_id=$parentId ";
            $sql .= $where;
        }
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }


    function delete(int $entityId)
    {
        $sql = "DELETE FROM products WHERE entity_id=$entityId";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    function addproduct(string $tablename, $params = [])
    {
        $tableColumns = implode(",", array_keys($params));
        $tableValues = implode("','", $params);
        $sql = "insert into $tablename($tableColumns) Values('$tableValues')";
        $this->pdo->query($sql);
        self::lastEntityId();
    }

    function lastEntityId()
    {

        $sql = "SELECT `entity_id` from `products` order by `entity_id` desc limit 1";
        $stmt = $this->pdo->query($sql);
        $this->lastentityId = $stmt->fetch(PDO::FETCH_OBJ)->entity_id;

    }

    function product_to_categories($categories = array())
    {
        foreach ($categories as $category) {
            $sql .= "insert into products_to_categories (category_id,products_id) values ('$category','$this->lastentityId');";


        }
        $stmt = $this->pdo->query($sql);
        $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}
