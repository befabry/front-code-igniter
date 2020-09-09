<?php require 'header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase mb-0">Manage Users</h5>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap user-table mb-0">
                        <thead>
                        <tr>
                            <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">Username</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">First Name</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">Last Name</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">Email</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">Manage</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach($userList as $user){ ?>
                                <tr>
                                    <td class="pl-4"><?= $user["id"] ?></td>
                                    <td>
                                        <h5 class="font-medium mb-0"><?= $user["username"] ?>
                                    </td>
                                    <td>
                                        <span class="text-muted"><?= $user["firstName"] ?></span>
                                    </td>
                                    <td>
                                        <span class="text-muted"><?= $user["lastName"] ?></span>
                                    </td>
                                    <td>
                                        <span class="text-muted"><?= $user["email"] ?></span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-info btn-lg"><i class="fa fa-trash"></i> </button>
                                        <button type="button" class="btn btn-outline-info btn-lg"><i class="fa fa-edit"></i> </button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php' ?>
