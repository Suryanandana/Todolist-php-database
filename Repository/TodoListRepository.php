<?php 
namespace Repository{

    use Entity\TodoList;
    use PDO;

    interface TodoListRepository {

        public function save(TodoList $todoList): void;

        public function remove(int $number): bool;

        public function findAll(): array;

    }

    class TodoListRepositoryImpl implements TodoListRepository {

        public array $todo = array();
        private PDO $conn;

        public function __construct(PDO $conn)
        {
            $this->conn = $conn;
        }

        public function save(TodoList $todoList): void{
            // $number = sizeof($this->todo) + 1;
            // $this->todo[$number] = $todoList;
            $sql = "INSERT INTO todolist(todo) VALUES(?)";
            $statement = $this->conn->prepare($sql);
            $statement->execute([$todoList->getTodo()]);
        }

        public function remove(int $number): bool{

            // if ($number > sizeof($this->todo)){
            //     return false;
            // }

            // while($number < sizeof($this->todo)){
            //     $this->todo[$number] = $this->todo[$number + 1];
            //     $number++;
            // }

            // unset($this->todo[sizeof($this->todo)]);

            // return true;

            $sql = "SELECT * FROM todolist WHERE id = (?)";
            $statement = $this->conn->prepare($sql);
            $statement->execute([$number]);

            if($statement->fetch()){
                // jika id todolist ada maka hapus
                $sql = "DELETE FROM todolist WHERE id = (?)";
                $statement = $this->conn->prepare($sql);
                $statement->execute([$number]);
                return true;
            } else {
                // jika id todolist tidak ada maka false
                return false;
            }
        }

        public function findAll(): array{
            return $this->todo;
        }
    }

}

?>