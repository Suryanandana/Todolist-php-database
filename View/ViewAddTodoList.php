<?php

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../Logic/AddTodoList.php';

// Tampilan Menambah Todo di List
function viewAddTodoList(){
    $todo = input('Tambah todolis (x jika batal)');

    if(trim($todo) == 'x'){
        echo "Batal menambah todo";
    } else {
        addTodoList($todo);
    }

}