<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/controller/painel-admin/admin_controller.php';
$page_title = "Administradores Listar";
$administradores = user_listar("admin");