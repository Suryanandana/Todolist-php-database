<?php

require_once __DIR__ . "/Entity/TodoList.php";
require_once __DIR__ . "/Helper/InputHelper.php";
require_once __DIR__ . "/Repository/TodoListRepository.php";
require_once __DIR__ . "/Service/TodoListService.php";
require_once __DIR__ . "/View/TodoListView.php";
require_once __DIR__ . "/Config/Database.php";

use Service\TodoListServiceImpl;
use View\TodoListView;
use Repository\TodoListRepositoryImpl;
use Config\Database;

$conn = Database::getConnection();
$todoListRepository = new TodoListRepositoryImpl($conn);
$todoListService = new TodoListServiceImpl($todoListRepository);
$todoListView = new TodoListView($todoListService);

$todoListView->showTodoList();