<?php
helper('form');

function printUserForm(array $user = null, $title = 'create user', $readOnly = null){
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" style="margin-bottom: 30px;">
                        <h5 class="card-title text-uppercase mb-0"><?= $title ?></h5>
                    </div>
                    <div class="col-md-12">
                        <?= form_open() ?>
                        <div class="form-group row">
                            <?= form_label("Username", "username", [
                                'class' => 'col-sm-2'
                            ]) ?>
                            <div class="col-sm-10">
                                <?php

                                $usernameOptions = [
                                    'name'  => 'username',
                                    'id'    => 'username',
                                    'value' => $user['username'] ?? '',
                                    'class' => 'form-control'
                                ];

                                //If we append a false value it is shown as readonly
                                if($readOnly){
                                    $usernameOptions["readonly"] = $readOnly;
                                }

                                echo form_input($usernameOptions)
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <?= form_label("First Name", "first_name", [
                                'class' => 'col-sm-2'
                            ]) ?>
                            <div class="col-sm-10">
                                <?php

                                $firstNameOptions = [
                                    'name'  => 'first_name',
                                    'id'    => 'first_name',
                                    'value' => $user['firstName'] ?? '',
                                    'class' => 'form-control'
                                ];

                                if($readOnly){
                                    $firstNameOptions["readonly"] = $readOnly;
                                }

                                echo form_input($firstNameOptions);
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <?= form_label("Last Name", "last_name", [
                                'class' => 'col-sm-2'
                            ]) ?>
                            <div class="col-sm-10">
                                <?php

                                $lastNameOptions = [
                                    'name'  => 'last_name',
                                    'id'    => 'last_name',
                                    'value' => $user['lastName'] ?? '',
                                    'class' => 'form-control'
                                ];

                                if($readOnly){
                                    $lastNameOptions['readonly'] = $readOnly;
                                }

                                echo form_input($lastNameOptions);
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <?= form_label("Email", "email", [
                                'class' => 'col-sm-2'
                            ]) ?>
                            <div class="col-sm-10">
                                <?php

                                $emailOptions = [
                                    'name'  => 'email',
                                    'id'    => 'email',
                                    'value' => $user['email'] ?? '',
                                    'class' => 'form-control'
                                ];

                                if($readOnly){
                                    $emailOptions['readonly'] = $readOnly;
                                }

                                echo form_input($emailOptions); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <?php
                                //We assume that if it's readonly it is to delete
                                $btnClass = $readOnly ? 'btn btn-danger' : 'btn btn-primary';
                                $btnText = $readOnly ? 'Delete' : 'Submit';

                                echo form_submit('submit', $btnText, [
                                    'class' => $btnClass
                                ]) ?>
                            </div>
                            <div class="col-sm-4"><a href="<?= base_url("/") ?>" class="btn btn-secondary text-white"><i class="fa fa-chevron-left"></i> Go Back</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } //end of printUserForm