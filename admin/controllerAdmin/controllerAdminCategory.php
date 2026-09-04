<?php
class controllerAdminCategory {
    //-----------------------------------------------List Categories
    public static function categoryList() {
        $arr = modelAdminCategory::getCategoryList();
        include_once('viewAdmin/categoryList.php');
    }

    //-----------------------------------------------Add Category
    public static function categoryAddForm() {
        include_once('viewAdmin/categoryAddForm.php');
    }
    public static function categoryAddResult() {
        $result = modelAdminCategory::categoryAdd($_POST['name']);
        header('Location: categoryAdmin');
    }

    //-----------------------------------------------Edit Category
    public static function categoryEditForm($id) {
        $detail = modelAdminCategory::getCategoryById($id);
        include_once('viewAdmin/categoryEditForm.php');
    }
    public static function categoryEditResult($id) {
        $result = modelAdminCategory::categoryEdit($id, $_POST['name']);
        header('Location: categoryAdmin');
    }

    //-----------------------------------------------Delete Category
    public static function categoryDeleteForm($id) {
        $detail = modelAdminCategory::getCategoryById($id);
        include_once('viewAdmin/categoryDeleteForm.php');
    }
    public static function categoryDeleteResult($id) {
        $result = modelAdminCategory::categoryDelete($id);
        header('Location: categoryAdmin');
    }
}
?>
