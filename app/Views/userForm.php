<?php

function printUserForm(array $user = null){
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-0">Edit Users</h5>
                    </div>
                    <div class="col-md-12">
                        <?= form_open() ?>
                        <div class="form-group">
                            <?= form_label("Username", "username") ?>
                            <?= form_input([
                                'name'  => 'username',
                                'id'    => 'username',
                                'value' => $user['username'] ?? '',
                                'class' => 'form-control'
                            ]) ?>
                        </div>
                        <div class="form-group">
                            <?= form_label("First Name", "first_name") ?>
                            <?= form_input([
                                'name'  => 'first_name',
                                'id'    => 'first_name',
                                'value' => $user['firstName'] ?? '',
                                'class' => 'form-control'
                            ]) ?>
                        </div>
                        <div class="form-group">
                            <?= form_label("Last Name", "last_name") ?>
                            <?= form_input([
                                'name'  => 'last_name',
                                'id'    => 'last_name',
                                'value' => $user['lastName'] ?? '',
                                'class' => 'form-control'
                            ]) ?>
                        </div>
                        <div class="form-group">
                            <?= form_label("Email", "email") ?>
                            <?= form_input([
                                'name'  => 'email',
                                'id'    => 'email',
                                'value' => $user['email'] ?? '',
                                'class' => 'form-control'
                            ]) ?>
                        </div>
                        <div class="form-group">
                            <?= form_submit('submit', 'Submit', [
                                'class' => 'btn btn-primary'
                            ]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } //end of printUserForm