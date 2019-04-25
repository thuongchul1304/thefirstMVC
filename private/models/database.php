    <?php

    class Database 
    {
        private $dburl = "mysql:host=localhost;dbname=php2;charset=utf8";
        private $username = 'root';
        private $password = '';
        public $conn;
        public function connect(){

            $this->conn = new PDO($this->dburl, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        }

        public function fetchAll($sql){
            $sql_args = array_slice(func_get_args(), 1);
            try{
                $this->connect();
                $stmt =$this->conn->prepare($sql);
                $stmt->execute($sql_args);
                $rows = $stmt->fetchAll();
                return $rows;
            }
            catch(PDOException $e){
                throw $e;
            }
            finally{
                unset($conn);
            }
        }
        public function fetch($sql){
            $sql_args = array_slice(func_get_args(), 1);
            try{
               $this->connect();
               $stmt =$this->conn->prepare($sql);
               $stmt->execute($sql_args);
               $row = $stmt->fetch(PDO::FETCH_ASSOC);
               return $row;
           }
           catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
    public function query($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $this->connect();
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($sql_args);

        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
    // public function getLastID($table)
    // {
    //     $id=$this->query("SELECT id FROM $table ORDER BY Id DESC LIMIT 1");
    //     return $id;
    // }
}
