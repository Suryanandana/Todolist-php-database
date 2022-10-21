<?php
require_once __DIR__ . "/../Config/Database.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Config\Database;
use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

function testShowTodoList(){
    $conn = Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($conn);
    $todolistService = new TodoListServiceImpl($todoListRepository);
    $todolistService->showTodoList();
}

function testAddTodoList(){
    $conn = Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($conn);
    $todolistService = new TodoListServiceImpl($todoListRepository);
    $todolistService->addTodoList("Belajar Library");
    $todolistService->addTodoList("Belajar Package Manager");
    $todolistService->addTodoList("Belajar Unit Test");
    //$todolistService->showTodoList();
}

function testRemoveTodoList(){
    $conn = Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($conn);
    $todolistService = new TodoListServiceImpl($todoListRepository);
    $todolistService->removeTodoList(1);
    $todolistService->removeTodoList(2);
    $todolistService->removeTodoList(3);
    $todolistService->removeTodoList(4);
    $todolistService->removeTodoList(5);
}

testShowTodoList();

?>