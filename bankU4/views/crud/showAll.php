<?php require ROOT . 'views/header.php'; ?>

<div class="container">
    <div class="row  justify-content-center">
        <div class="col-7">
            <div class="card bg-primary-subtle">
                <h5 class="card-header bg">All accounts</h5>
                <div class="card-body">
                    <?php foreach ($accounts as $account) : ?>
                        <ul class="list-group mb-3">
                            <li class="list-group-item"><b>Name:</b> <?= $account->name ?></li>
                            <li class="list-group-item"><b>Last name:</b> <?= $account->surname ?></li>
                            <li class="list-group-item"><b>Personal code:</b> <?= $account->code ?></li>
                            <form action="<?= URL ?>/crud/show/<?=$account->id?>" method="post">
                                <button class="btn btn-info mt-3" style="width: 100px;">Show</button>
                            </form>
                        </ul>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>