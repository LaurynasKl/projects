<h1>main calendar page</h1>
<div class="container ">
    <div class="row justify-content-center ">
        <div class="col-5 mt-5">
            <div class="text-center border shadow p-3 mb-5 bg-body-tertiary rounded">
                <div class="body m-3 ">
                    <?php foreach ($data as $key => $value) : ?>
                        <div class="row">
                            <div class="col ">
                                <a class="btn border-black mb-4" href="<?= URL ?>"> <?= $value['year'] ?> <?= $value['month'] ?></a>
                            </div>
                        </div>

                        <!-- <?php require ROOT . '/views/days.php' ?> -->

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