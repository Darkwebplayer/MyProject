<?php require('core/init.php');?>
<?php

//create a topic object

$topic=new Topic;

//create user object
$user=new User;

//Get Category from URL
$category=isset($_GET['category'])? $_GET['category']:null;
//Get user from URL
$user_id=isset($_GET['user'])? $_GET['user']:null;
//get template and assign varibles
$template=new Template('templates/frontpage.php');

if(isset($category)){
    $template->topics=$topic->getByCategory($category);
    $template->title='Posts In"'.$topic->getCategory($category)->name.'"';
}
//Check For User Filter
if(isset($user_id)){
	$template->topics = $topic->getByUser($user_id);
	//$template->title = 'Posts By "'.$user->getUser($user_id)->username.'"';
}
if(!isset($category)&& !isset($user_id)){
    $template->topics = $topic->getAllTopics();
}

$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();
$template->totalUsers = $user->getTotalUsers();
//Display template
echo $template;