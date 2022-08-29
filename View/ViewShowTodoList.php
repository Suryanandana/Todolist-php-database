<?php
//Tampilan daftar todo di list

require_once '../Helper/Input.php';
require_once '../Model/TodoList.php';
require_once 'ViewAddTodoList.php';
require_once 'ViewRemoveTodoList.php';
require_once '../Logic/ShowTodoList.php';

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