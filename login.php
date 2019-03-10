 <?php require('core/init.php');?>
 <?php
 if(isset($_POST['do_login'])){
            //Get Vars
            $username=$_POST['username'];
            $password=md5($_POST['password']);

            //create user object
            $user=new User;

            if($user->user_login($username,$password))
            {
                redirect('index.php','You have logged in','success');
            }else{
                redirect('index.php','Login failed','error');
            }
 }else{
     redirect('index.php');
 }