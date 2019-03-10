<?php require('core/init.php');?>
<?php
//create topic object
$topic=new Topic;
//create new user
$user=new User;
//create new user
$validate=new Validator;

if(isset($_POST['register'])){
//Create Data Array
$data = array();
$data['name'] = $_POST['name'];
$data['email'] = $_POST['email'];
$data['username'] = $_POST['username'];
$data['password'] = md5($_POST['password']);
$data['password2'] = md5($_POST['password2']);
$data['about'] = $_POST['about'];
$data['last_activity'] = date("Y-m-d H:i:s");

//required fields
$field_array=array('name','email','username','password','password2');

if($validate->isRequired($field_array)){
    if($validate->isValidEmail($data['email'])){
        if($validate->passwordsMatch($data['password'],$data['password2'])){
                //Upload Avatar Image
                if($user->uploadAvatar()){
                    $data['avatar'] = $_FILES["avatar"]["name"];
                }else{
                    $data['avatar'] = 'noimage.png';
                }
                //Register User
                if($user->register($data)){
                    redirect('index.php', 'You are registered and can now log in', 'success');
                } else {
                    redirect('index.php', 'Something went wrong with registration', 'error');
                }
        } else {
            redirect('Register.php', 'Your passwords did not match', 'error');
        }
    } else {
        redirect('Register.php', 'Please use a valid email address', 'error');
    }
} else {
    redirect('Register.php', 'Please fill in all required fields', 'error');
}
}


/*
if($user->uploadAvatar()){
$data['avatar']=$_FILES["avatar"]["name"];
}else{
    $data['avatar']='noimage.png';
}
//Register user
if($user->register($data)){
    redirect('index.php','You are now a member of talkingspace ,login to start');
}else{
    redirect('index.php','Something went wrong with registration');
}
*/


//get template and assign varibles
$template=new Template('templates/register.php');

//Display template
echo $template;