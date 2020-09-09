<?php
require 'header.php';

require 'userForm.php';

//Could've been using a switch with an action a la Redux

//Delete an User
if(isset($user) && isset($title) && isset($readOnly)){
    printUserForm($user, $title, $readOnly);
//Update an User
} elseif (isset($user) && isset($title)) {
    printUserForm($user, $title);
//Create an User
} elseif (isset($title)) {
    printUserForm(null, $title);
}

require 'footer.php';
