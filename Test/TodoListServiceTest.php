<?php 
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

function testShowTodoList(){
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListRepository->todo[1] = new TodoList("Belajar OOP");
    $todoListRepository->todo[2] = new TodoList("Belajar MVC");
    $todoListRepository->todo[3] = new TodoList("Belajar Framework");
    $todolistService = new TodoListServiceImpl($todoListRepository);
    $todolistService->showTodoList();
}

function testAddTodoList(){
    $todoListRepository = new TodoListRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todoListRepository);
    $todolistService->addTodoList("Belajar Library");
    $todolistService->addTodoList("Belajar Package Manager");
    $todolistService->addTodoList("Belajar Unit Test");
    $todolistService->showTodoList();
}

testAddTodoList();

?>