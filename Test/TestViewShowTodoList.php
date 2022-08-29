<?php

require_once '../View/ViewShowTodoList.php';
require_once '../Logic/AddTodoList.php';

addTodoList('Github');
addTodoList('GitLab');
addTodoList('StackOverFlow');
addTodoList('W3School');
addTodoList('SoloLearn');

viewShowTodoList();