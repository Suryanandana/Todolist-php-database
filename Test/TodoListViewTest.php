<?php 

require_once __DIR__."/../Entity/TodoList.php";
require_once __DIR__."/../Service/TodoListService.php";
require_once __DIR__."/../Repository/TodoListRepository.php";
require_once __DIR__."/../View/TodoListView.php";
require_once __DIR__."/../Helper/InputHelper.php";
require_once __DIR__."/../Config/Database.php";

use Entity\TodoList;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;
use View\TodoListView;
use Config\Database;

function testViewShowTodoList(){
    $conn = Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($conn);
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar Ruby");
    $todoListService->addTodoList("Belajar Javascript");

    $todoListView->showTodoList();
}


function testViewAddTodoList(){
    $conn = Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($conn);
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar Ruby");
    $todoListService->addTodoList("Belajar Javascript");

    $todoListService->showTodoList();
    $todoListView->addTodoList();
    $todoListService->showTodoList();
}

function testViewRemoveTodoList(){
    $conn = Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($conn);
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar Ruby");
    $todoListService->addTodoList("Belajar Javascript");

    $todoListService->showTodoList();
    $todoListView->removeTodoList();
    $todoListService->showTodoList();
}

testViewRemoveTodoList();
?>