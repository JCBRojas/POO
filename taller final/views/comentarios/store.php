<?php
session_start();
require_once "../../controllers/comentarioController.php";
 ComentarioController::store(); // Instancia al controlador para registrar el comentario
?>