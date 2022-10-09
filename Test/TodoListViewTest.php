<?php 

require_once __DIR__."/../Entity/TodoList.php";
require_once __DIR__."/../Service/TodoListService.php";
require_once __DIR__."/../Repository/TodoListRepository.php";
require_once __DIR__."/../View/TodoListView.php";
require_once __DIR__."/../Helper/InputHelper.php";

use Entity\TodoList;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;
use View\TodoListView;

function testViewShowTodoList(){
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar Ruby");
    $todoListService->addTodoList("Belajar Javascript");

    $todoListView->showTodoList();
}

testViewShowTodoList();
?>