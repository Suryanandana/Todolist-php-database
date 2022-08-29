<?php

require_once '../View/ViewAddTodoList.php';
require_once '../Logic/AddTodoList.php';
require_once '../Logic/ShowTodoList.php';

addTodoList('PHP');
addTodoList('Golang');
addTodoList('JavaScript');
addTodoList('Python');
addTodoList('C#');

showTodoList();

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();