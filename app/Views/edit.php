<?php
helper('form');
require 'header.php';

require 'userForm.php';
//not empty so PHPStorm stops its warning
//$user is passed from the view
if (!empty($user)) {
    printUserForm($user);
}

require 'footer.php';
