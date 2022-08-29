<?php

require_once '../Model/TodoList.php';
require_once '../Logic/AddTodoList.php';

addTodoList('Belajar git remote');
addTodoList('Belajar git branch');
addTodoList('Belajar git rebase');

var_dump($todolist);