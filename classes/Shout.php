<?php
    $filepath = realpath(dirname(__FILE__));
    include_once $filepath.'/../lib/Database.php';
    class Shout{
        private $db;
        public function __construct(){
            $this->db = new Database();
        }

        
        public  function getAllData(){
            $query = "SELECT * FROM tbl_box ORDER BY id DESC";
            $result = $this->db->select($query);
            return $result;
        }

        public function insertData($data){
            $name = mysqli_real_escape_string($this->db->link, $data['name']);
            $body = mysqli_real_escape_string($this->db->link, $data['body']);
            $name = ucfirst($name);
            $body = ucfirst($body);
            date_default_timezone_set('Asia/Dhaka');
            $time = date('h:i:s a', time());

            $query = "INSERT INTO tbl_box (name, body, time) VALUES ('$name', '$body', '$time')";
            $insert_row = $this->db->insert($query);
            if($insert_row){
                header("Location:index.php");
            }
        }
    }
?>