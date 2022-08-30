<?php
//Tampilan daftar todo di list

require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/ViewAddTodoList.php';
require_once __DIR__ . '/ViewRemoveTodoList.php';
require_once __DIR__ . '/../Logic/ShowTodoList.php';

function viewShowTodoList(){

    while(true){

    showTodoList();

        echo "Menu".PHP_EOL;
        echo "1 Tambah Todo".PHP_EOL;
        echo "2 Hapus Todo".PHP_EOL;
        echo "x Keluar Todo".PHP_EOL;

        $result = input("Pilih").PHP_EOL;
        
        if($result == "1"){
            viewAddTodoList();
        } else if($result == "2"){
            viewRemoveTodoList();
        } else if(trim($result) == "x"){
            break;
        } else {
            echo "Perintah tidak dimengerti".PHP_EOL;
        }

    }
}