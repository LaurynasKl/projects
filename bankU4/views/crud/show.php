<?php require ROOT . 'views/header.php'; ?>

<div class="container">
    <div class="row  justify-content-center">
        <div class="col-7">
            <div class="card bg-primary-subtle">
                <h5 class="card-header bg"> <?= $account->name . ' ' . $account->surname ?> Accounts</h5>
                <div class="card-body">
                    <ul class="list-group mb-3">
                        <!-- <li class="list-group-item"><b>Name:</b> <?= $account->name ?></li> -->
                        <!-- <li class="list-group-item"><b>Last name:</b> <?= $account->surname ?></li> -->
                        <li class="list-group-item"><b>Personal code:</b> <?= $account->code ?></li>
                        <li class="list-group-item"><b>Personal account:</b> <?= $account->account ?></li>
                        <li class="list-group-item"><b>Personal eur:</b> <?= $account->money ?> </li>
                        <form action="<?= URL ?>/crud/update" method="post">
                            
                        </form>
                    </ul>
                    <form action="<?= URL ?>/crud/destroy/<?= $account->id ?>" method="post">
                        <button type="submit" class="btn btn-danger"">DELETE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>