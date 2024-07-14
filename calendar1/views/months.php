<div class="container ">
    <div class="row justify-content-center ">
        <div class="col-5 mt-5">
            <div class="text-center border shadow p-3 mb-5 bg-body-tertiary rounded">

                <div class="body m-3 ">
                    <div class="row">
                        <div class="col ">
                            <?php foreach ($data as $key => $value) : ?>

                                <div class="row">
                                    <?php for ($i = 1; $i <= 12; $i++) : ?>
                                        <div class="col-4 p-2 " name='<?= $i ?>'>

                                                <a class="w-100 btn btn-info" href="<?= URL ?>/views/<?= $i ?>"> <?= $value['months'][$i] ?></a>
                                                
                                        </div>
                                    <?php endfor ?>
                                </div>

                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>