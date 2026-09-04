<?php
class modelAdminCategory{
    //------------------------------------------List
    public static function getCategoryList() {
        $sql = "SELECT * FROM category ORDER BY category.name ASC";
        $db = new Database();
        //$rows = массив данных
        $rows = $db->getAll($sql);
        //-------------------------------------------------------
        return $rows;
    }
    public static function getCategoryById($id) {
        $sql = "SELECT * FROM category WHERE id=" . $id;
        $db = new Database();
        $item = $db->getOne($sql);
        return $item;
    }

    public static function categoryAdd($name) {
        $sql = "INSERT INTO category (name) VALUES ('" . $name . "')";
        $db = new Database();
        $item = $db->executeRun($sql);
        return $item;
    }

    public static function categoryEdit($id, $name) {
        $sql = "UPDATE category SET name='" . $name . "' WHERE id=" . $id;
        $db = new Database();
        $item = $db->executeRun($sql);
        return $item;
    }

    public static function categoryDelete($id) {
        $sql = "DELETE FROM category WHERE id=" . $id;
        $db = new Database();
        $item = $db->executeRun($sql);
        return $item;
    }
}
?>
