<?php
session_start();
require_once '../../controllers/tareaController.php';

TareaController::store();
