<?php
require_once "config.php";
require_once "models/User.php";

class UserController {
    private $db;
    private $user;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->user = new User($this->db);
    }
  
    public function create() {
        include "views/user_create.php"; 
    }
    
   public function index() {
        $result = $this->user->getAll();
        include "views/users_list.php";
    }
 
    public function store($data) {
        $this->user->create($data['name'], $data['email']);
        header("Location: index.php");
        exit;
    }

    public function edit($id) {
        $userData = $this->user->getById($id);
        include "views/user_edit.php";
    }

    public function update($id, $data) {
        $this->user->update($id, $data['name'], $data['email']);
        header("Location: index.php");
        exit;
    }

 
    public function delete($id) {
        $this->user->delete($id);
        header("Location: index.php");
        exit;
    }
}
