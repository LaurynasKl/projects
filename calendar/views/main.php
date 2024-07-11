<?php require ROOT . '/views/top.php' ?>

<div class="container ">
    <div class="row mt-5  justify-content-center">
        <div class="col-7 border">
            <div class="card text-center">

                <div class="card-body bg-danger">
                    <?php foreach ($calendar as $key => $value) : ?>
                        <div class="row">
                            <div class="col bg-info">
                                <p><?= $value['year'] ?> <?= $value['month'] ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>

                    <?php require ROOT . '/views/days.php' ?>
                    
                </div>

            </div>
        </div>
    </div>
</div>







<?php require ROOT . '/views/bottom.php' ?>