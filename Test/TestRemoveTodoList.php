<?php

require_once '../Model/TodoList.php';
require_once '../Logic/RemoveTodoList.php';
require_once '../Logic/AddTodoList.php';
require_once '../Logic/ShowTodoList.php';

addTodoList('Surya');
addTodoList('Yudik');
addTodoList('Adit');
addTodoList('Gagas');
addTodoList('Ari');

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();

$success = removeTodoList(4);
var_dump($success);

showTodoList();