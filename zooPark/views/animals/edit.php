<?php require ROOT . 'views/header.php'; ?>

<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-7">
            <div class="card ">
                <div class="card-header text-center">
                    Adding animal
                </div>

                <form action="<?= URL ?>/animals/update/<?= $animal->id ?>" method="post">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <label for="animalName" class="form-label">Animal name</label>
                                <input type="text" class="form-control" id="animalName" name="animalName" value="<?=$animal->animalName ?>" style="width: 200px;">
                            </div>
                            <div class="col-6">
                                <label for="howMany" class="form-label">Right now in zoo</label>
                                <input  type="number" class="form-control" id="howMany" name="howMany" value="<?=$animal->howMany ?>" style="width: 200px;">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-body-secondary text-center">
                        <button class="btn btn-info">update</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<?php require ROOT . 'views/footer.php'; ?>