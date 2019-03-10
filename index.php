<?php require('core/init.php');?>
<?php
//create topic object
$topic=new Topic;
//user new object
$user=new User;
//get template and assign varibles
$template=new Template('templates/frontpage.php');

//
$template->topics = $topic->getAllTopics();
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();
$template->totalUsers = $user->getTotalUsers();
//Display template
echo $template;