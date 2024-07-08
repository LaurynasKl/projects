<?php require ROOT . 'views/header.php'; ?>

<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-7">
            <div class="card ">
                <div class="card-header text-center">
                    Adding animal
                </div>

                <form action="<?= URL ?>/animals/store" method="post">

                    <div class="card-body bg-info">
                        <div class="row">
                            <div>
                                <label for="animalName" class="form-label">Enter animal name</label>
                                <input type="text" class="form-control" id="animalName" name="animalName" style="width: 200px;">
                            </div>
                            <div>
                                <label for="howMany" class="form-label">Enter how many you want to add</label>
                                <input  type="number" class="form-control" id="howMany" name="howMany" style="width: 200px;">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-body-secondary text-center">
                        <button class="btn btn-info">Add</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<?php require ROOT . 'views/footer.php'; ?>