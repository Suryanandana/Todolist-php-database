<?php 
namespace Repository{

    use Entity\TodoList;
    interface TodoListRepository {

        public function save(TodoList $todoList): void;

        public function remove(int $number): bool;

        public function findAll(): array;

    }

    class TodoListRepositoryImpl implements TodoListRepository {

        public array $todo = array();

        public function save(TodoList $todoList): void{
            $number = sizeof($this->todo) + 1;
            $this->todo[$number] = $todoList;
        }

        public function remove(int $number): bool{
            return false;
        }

        public function findAll(): array{
            return $this->todo;
        }
    }

}

?>