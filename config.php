<?php
$page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';

// this configuration path for website
define('PATH', 'https://insanmuliamandirikelasonline.000webhostapp.com/AdministratorRMJ/'); // isi path dari website anda
define('SITE_URL', PATH . 'index.php');
define('POSITION_URL', PATH . '?page=' . $page);

// this configuration for database website
define('DB_HOST', 'localhost'); // host yang di gunakan
define('DB_USERNAME', 'id15024703_admin'); // username host
define('DB_PASSWORD', 'D@gadu88D@gadu88'); // password host
define('DB_NAME', 'id15024703_learn'); // database yang di gunakan
?>
