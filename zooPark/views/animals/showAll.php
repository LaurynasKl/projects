<?php require ROOT . 'views/header.php'; ?>

<div class="container">
    <div class="row mt-5 justify-content-center ">
        <div class="col-7 ">
            <ul class="list-group ">
                <?php foreach ($showAll as $key => $value) : ?>

                    <li class="list-group-item">
                        <div class="row ">
                            <div class="col-7">
                                <div class="col-9">
                                    <p>Animal: <?= $value->animalName ?></p>
                                    <p>In zoo: <?= $value->howMany ?></p>
                                </div>
                            </div>
                            <div class="col-5">
                                <a href="<?= URL ?>/animals/edit/<?= $value->id ?>" class="btn btn-warning">Edit</a>

                                <form class="mt-1" action="<?= URL ?>/animals/destroy/<?= $value->id ?>" method="post">
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>

                    </li>

                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>

<?php require ROOT . 'views/footer.php'; ?>