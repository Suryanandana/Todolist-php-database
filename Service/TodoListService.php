<?php 
namespace Service {
    use Repository\TodoListRepository;
    use Entity\TodoList;

    interface TodoListService {

        function showTodoList(): void;

        function addTodoList(string $todo): void;

        function removeTodoList(int $number): void;

    }

    class TodoListServiceImpl implements TodoListService {

        private TodoListRepository $todo;

        function __construct (TodoListRepository $todo)
        {
            $this->todo = $todo;
        }

        function showTodoList(): void{
            echo "TODOLIST:".PHP_EOL;
            $todolist = $this->todo->findall();
            foreach($todolist as $number => $value){
                echo "$number. $value".PHP_EOL;
            }
        }

        function addTodoList(string $todo): void{
            $todoList = new TodoList($todo);
            $this->todo->save($todoList);
        }

        function removeTodoList(int $number): void{

        }
    }

}

?>