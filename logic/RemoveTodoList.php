<?php
// Menghapus Todo di List
function removeTodoList($number): bool{
    global $todolist;

    if ($number > sizeof($todolist)){
        return false;
    }

    while($number < sizeof($todolist)){
        $todolist[$number] = $todolist[$number + 1];
        $number++;
    }

    unset($todolist[sizeof($todolist)]);

    return true;
}