<?php
if (isset($_SESSION['success']) || isset($_SESSION['error'])) : ?>

    <?php if (isset($_SESSION['success'])) : ?>
        <div style="background-color:green;">
            <?= $_SESSION['success'] ?>
        </div>
        <?php unset($_SESSION['success']) ?>
    <?php endif ?>

    <?php if (isset($_SESSION['error'])) : ?>
        <div style="background-color:red;">
            <?= $_SESSION['error'] ?>
        </div>
        <?php unset($_SESSION['error']) ?>
    <?php endif ?>
<?php endif ?>