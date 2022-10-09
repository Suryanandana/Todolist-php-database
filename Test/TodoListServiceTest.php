<?php 
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

function testShowTodoList(){
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListRepository->todo = [1=>"Belajar OOP", 2=>"Belajar MVC", 3=>"Belajar Framework"];
    $todolistService = new TodoListServiceImpl($todoListRepository);
    $todolistService->showTodoList();
}
testShowTodoList();

?>