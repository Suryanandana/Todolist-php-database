<?php
// Tampilan Hapus Todo di List
require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../Logic/RemoveTodoList.php';

function viewRemoveTodoList(){

    echo 'HAPUS TODOLIST'.PHP_EOL;
    $todo = input('Hapus todolist (x jika batal)');

    if(trim($todo) == 'x'){
        echo 'Batal menghapus todolist' . PHP_EOL;
    } else {
        $success = removeTodoList($todo);
        if($success){
            echo "Berhasil menghapus todo $todo" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo" . PHP_EOL;
        }
    }

}