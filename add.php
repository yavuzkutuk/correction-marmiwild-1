<?php
require_once 'config.php';
require __DIR__ . '/src/models/recipe-model.php';
var_dump(__DIR__);
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $recipe = array_map('trim', $_POST);
        saveRecipe($recipe);
        header('Location: /');
}
require __DIR__ . '/src/views/form.php';