<?php

require_once '../View/ViewRemoveTodoList.php';
require_once '../Logic/AddTodoList.php';
require_once '../Logic/ShowTodoList.php';

addTodoList('Laravel');
addTodoList('Vue');
addTodoList('Angular');
addTodoList('Gin');
addTodoList('Rails');
addTodoList('Spring');

showTodoList();

viewRemoveTodoList();

showTodoList();