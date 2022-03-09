

<?php
    class Database {
      const DB = 'php';
      const USER = 'root';
      const PASSWORD = '';
      const HOST = 'localhost';

      public $conn;

      public function__construct()
      {
        $this->conn = mysqli_connect(host: self::HOST, user:self::USER, password:self::PASSWORD, database:self::DB);
        if (!$this->conn) {
          
        }
      }
    }
?>
