<?php

class login extends controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        echo "404 ERROR";
    }

    public function home(){
        $this->view->render('view_newhome');
        
    }

    public function login(){
        $this->view->render('view_login');
    }

    public function loginSubmit(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $this->model('home_model');
        // $this->view->render('test');
        // $this->view->users = $this->model->validate($username, $password);
        $users = $this->model->validate($username, $password);
        $count = mysqli_num_rows($users);
         
        // echo $row['position'];
        // // echo $users;
        
        if($count == 1){
            
            $row = $users -> fetch_assoc();

            $viewname = "_1_view_".$row['position']."Home";
            $_SESSION['email']=$row['email'];
            $this->view->render($viewname);
            
          
        }
        else{
            $this->view->error = "error";
            $this->view->render('view_login');
        }
    }

    //forget password
    public function forgetPassword(){
        //view name to this>>>>>>>
        $this->view->render('view_sendmail');

    }

    public function resetMail()
    { $this->model('home_model');
        $email=$_POST['email'];

        $reseturl=sha1($email);
        if(isset($_POST['submit'])){
        
            $result = $this->model->resetMail($email,$reseturl);
           
            $count=mysqli_num_rows($result);
            $row = $result -> fetch_assoc();
           
            if($count==1)
            {
               
                //  echo $reseturl;
                $url = 'http://localhost/web-Experts/public/login/createPassword?code='.$reseturl;
                $to = $email;
                $sender = "himaleedairyproducts@gmail.com";
                $subject = "Reset email address";
                $body = "<p>Dear,".$row["name"]."</p>";
                $body .="<p> takehere to reset your account</p>";
                $body .= "<a href=".$url.">Click Me</a>";
                $header = "From : {$sender}\r\nContent-Type:text/html;";
        
                $send_mail_result = mail($to, $subject, $body, $header);
                if($send_mail_result){
                    echo "succuss";
                  
                 
                }
                else{
                    echo "error";
                }
        }
        
        
    }

    }




    public function createPassword(){
        $this->view->render('view_createpassword');
        $this->model('register_model');
        $url = $_GET['code'];

        $resultset = $this->model->forgetverification($url);
        $count=$resultset->num_rows;
         if($count ==1){

            $this->view->url = $url;
            $this->view->render('view_createpassword');   
        }
        
    }
}