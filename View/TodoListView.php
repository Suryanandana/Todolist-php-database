<?php 
namespace View {

    use Service\TodoListService;

    class TodoListView {
        private TodoListService $todoListService;
        function showTodoList(): void {
            while(true){

                $this->todoListService->showTodoList();
            
                echo "Menu".PHP_EOL;
                echo "1 Tambah Todo".PHP_EOL;
                echo "2 Hapus Todo".PHP_EOL;
                echo "x Keluar Todo".PHP_EOL;
            
                $result = input("Pilih").PHP_EOL;
                    
                if($result == "1"){
                    $this->addTodoList();
                } else if($result == "2"){
                    $this->removeTodoList();
                } else if(trim($result) == "x"){
                    break;
                } else {
                    echo "Perintah tidak dimengerti".PHP_EOL;
                }
            
            }
        }

        function addTodoList(): void {

        }

        function removeTodoList(): void {

        }

    }

}

?>