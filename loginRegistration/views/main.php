<div class="container">
    <div class="row">
        <div class="col">
            <h1>Congratulations <?= $user->name ?></h1>
            <div class="welcome"> You are sign in</div>
            <form action="<?= URL ?>/logout" method="post">
                <button type="submit" class="btn btn-success">Logout</button>
            </form>
        </div>
    </div>
</div>