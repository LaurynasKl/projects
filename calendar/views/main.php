<?php require ROOT . '/views/top.php' ?>

<div class="container ">
    <div class="row justify-content-center ">
        <div class="col-5 mt-5">
            <div class="text-center border shadow p-3 mb-5 bg-body-tertiary rounded">

                <div class="body m-3 ">
                    <?php foreach ($this->data as $key => $value) : ?>
                        <div class="row">
                            <div class="col ">
                                <form action="<?= URL ?>'/views/months" method="get">
                                    <button class="btn border-black mb-4"><?= $value['year'] ?> <?= $value['month'] ?></button>
                                </form>
                            </div>
                        </div>

                        <?php require ROOT . '/views/days.php' ?>


                        <div class="row">
                            <?php for ($i = 1; $i <= date('t'); $i++) : ?>
                                <div class="days col-2 " name='<?= $i ?>'>

                                    <?php if ($i == $value['day']) : ?>
                                        <button class="selected btn btn-outline-info border-light"> <?= $i ?> </button>
                                    <?php else : ?>
                                        <button class="btn btn-outline-success border-light"> <?= $i ?> </button>
                                    <?php endif ?>
                                </div>
                            <?php endfor ?>

                        </div>


                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>







<?php require ROOT . '/views/bottom.php' ?>