<?php helper('form'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <style>
        .container {
            margin-top: 30px;
        }
    </style>

</head>
<body>

<div class="container">
    <?= form_open() ?>
    <div class="form-group">
        <?= form_label("Username", "username") ?>
        <?= form_input([
            'name'  => 'username',
            'id'    => 'username',
            'value' => $user['username'],
            'class' => 'form-control'
        ]) ?>
    </div>
    <div class="form-group">
        <?= form_label("First Name", "first_name") ?>
        <?= form_input([
            'name'  => 'first_name',
            'id'    => 'first_name',
            'value' => $user['firstName'],
            'class' => 'form-control'
        ]) ?>
    </div>
    <div class="form-group">
        <?= form_label("Last Name", "last_name") ?>
        <?= form_input([
            'name'  => 'last_name',
            'id'    => 'last_name',
            'value' => $user['lastName'],
            'class' => 'form-control'
        ]) ?>
    </div>
    <div class="form-group">
        <?= form_label("Email", "email") ?>
        <?= form_input([
            'name'  => 'email',
            'id'    => 'email',
            'value' => $user['email'],
            'class' => 'form-control'
        ]) ?>
    </div>
    <?= form_submit('submit', 'Submit', [
        'class' => 'btn btn-primary'
    ]) ?>
</div>

<!-- SCRIPTS -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- -->

</body>
</html>
