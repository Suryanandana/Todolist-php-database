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

            if ($number > sizeof($this->todo)){
                return false;
            }

            while($number < sizeof($this->todo)){
                $this->todo[$number] = $this->todo[$number + 1];
                $number++;
            }

            unset($this->todo[sizeof($this->todo)]);

            return true;
        }

        public function findAll(): array{
            return $this->todo;
        }
    }

}

?>