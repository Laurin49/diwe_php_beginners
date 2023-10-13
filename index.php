<?php

require('functions.php');
require('Database.php');
//require('router.php');
$config = require('config.php');

// connect to our MySQL database
$db = new Database($config['database']);

$id = $_GET['id'];
$query_str = "select * from posts where id= :id";

$posts = $db->query($query_str, ['id' => $id])->fetch();

dd($posts);
//foreach ($posts as $post) {
//    echo '<li>' . $post['title'] . '</li>';
//}