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
                        <li class="list-group-item"><b>Money:</b> <?= $account->money ?> eur </li>

                        <form class="mt-2" action="<?= URL ?>/crud/update/<?= $account->id ?>" method="post">
                            <label for="money"></label>
                            <input type="text" name="money">
                            <button type="submit" class="btn btn-success">Add money</button>
                        </form>

                        <form class="mt-2" action="<?= URL ?>/crud/updateMinus/<?= $account->id ?>" method="post">
                            <label for="money"></label>
                            <input type="text" name="money">
                            <button type="submit" class="btn btn-secondary">Remove money</button>
                        </form>
                    </ul>
                    <?php if ($account->money <= 0) : ?>
                        <form action="<?= URL ?>/crud/destroy/<?= $account->id ?>" method="post">
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>