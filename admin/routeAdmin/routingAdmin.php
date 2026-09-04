<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == '' OR $path == 'index.php') {
    // Главная страница
    $response = controllerAdmin::formLoginSite();
}
// ------ ВХОД ----------------------------------------
elseif ($path == 'login') {
    // форма входа
    $response = controllerAdmin::loginAction();
}
elseif ($path == 'logout') {
    // Выход
    $response = controllerAdmin::logoutAction();
}
//-------------------------------------------------------listNews
elseif ($path == 'newsAdmin') {
    $response = controllerAdminNews::NewsList();
}
//-------------------------------------------------------add news
elseif($path=='newsAdd') {
    $response=controllerAdminNews::newsAddForm();
}
elseif($path == 'newsAddResult') {
    $response = controllerAdminNews::newsAddResult();
}
//-------------------------------------------------------edit news
elseif($path=='newsEdit' && isset($_GET['id'])) {
    $response=controllerAdminNews::newsEditForm($_GET['id']);
}
elseif($path == 'newsEditResult' && isset($_GET['id'])) {
    $response = controllerAdminNews::newsEditResult($_GET['id']);
}
//-------------------------------------------------------delete news
elseif($path=='newsDel' && isset($_GET['id'])) {
    $response=controllerAdminNews::newsDeleteForm($_GET['id']);
}
elseif($path == 'newsDelResult' && isset($_GET['id'])) {
    $response = controllerAdminNews::newsDeleteResult($_GET['id']);
}
//-------------------------------------------------------Categories
elseif ($path == 'categoryAdmin') {
    $response = controllerAdminCategory::categoryList();
}
elseif ($path == 'categoryAdd') {
    $response = controllerAdminCategory::categoryAddForm();
}
elseif ($path == 'categoryAddResult') {
    $response = controllerAdminCategory::categoryAddResult();
}
elseif ($path == 'categoryEdit' && isset($_GET['id'])) {
    $response = controllerAdminCategory::categoryEditForm($_GET['id']);
}
elseif ($path == 'categoryEditResult' && isset($_GET['id'])) {
    $response = controllerAdminCategory::categoryEditResult($_GET['id']);
}
elseif ($path == 'categoryDel' && isset($_GET['id'])) {
    $response = controllerAdminCategory::categoryDeleteForm($_GET['id']);
}
elseif ($path == 'categoryDelResult' && isset($_GET['id'])) {
    $response = controllerAdminCategory::categoryDeleteResult($_GET['id']);
}
else {
    // Страница не существует
    $response = controllerAdmin::error404();
}
?>
