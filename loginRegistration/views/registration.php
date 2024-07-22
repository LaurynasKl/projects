<div class="container">
    <div class="row border border-2 border-black shadow-lg p-3 mb-5 rounded-5">
        <h1 class="text-center">Registration</h1>
        <div class="col text-center p-3">
            <label for="name">Name</label>
            <input type="text" id="name" name="name">

            <label for="surname">Surname</label>
            <input type="text" id="surname" name="surname">

            <label for="username">Username</label>
            <input type="text" id="username" name="username">

            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        <form action="#" method="post">
            <button class="btn btn-success" type="submit">Registration</button>
        </form>
        <div class="signup">
            <p>If you already have account Login</p>
            <a href="<?= URL ?>/login"> here</a>
        </div>
    </div>
</div>