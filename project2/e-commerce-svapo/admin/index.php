

<?php $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard'; ?>

<?php require_once '../init/inc.php' ?>

<?php require_once  ROOT_PATH . 'public/template-parts/header.php' ?>

<?php require_once  ROOT_PATH . 'admin/pages/' . $page . '.php' ?>

<?php require_once  ROOT_PATH . 'public/template-parts/footer.php' ?>


<!-- /*  //  { }  [ ]  @  #  */ -->