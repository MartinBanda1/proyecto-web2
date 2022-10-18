<?php
    include_once './models/loginmodels.php';
    include_once './views/loginview.php';
class loginController{
    private $model;
    private $view;

    function __construct(){

    $this ->model =new loginModel();
    $this ->view =new loginView();
    }
    function showLogin() {
        session_start();
        $this->view->showLogin();
        
    }

    public function validateUser() {
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        $user = $this->model->getUserByEmail($email);

        
        if ($user && password_verify($password, $user->password)) {

           
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL); 
        } else {
            
           $this->view->showLogin("El usuario o la contraseña no existe.");
        } 
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL); 
    }
}

