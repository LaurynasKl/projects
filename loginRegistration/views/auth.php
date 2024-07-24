<div class="container" >
    <div class="row" id="signInForm"">
        <div class="col">
            <form action="<?= URL ?>/main" method="post">
                <h1>Sign In</h1>
                <div class="col">
                    <label for="email">Email</label>
                    <input type="text" id="emailSignIn" name="email" placeholder="Email">
                </div>
                <div class="col">
                    <label for="password">Password</label>
                    <input type="password" id="passwordSignIn" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-success">Sing In</button>
            </form>
            <div class="links">
                <p>Dont have account?</p>
                <a class="btn btn-info" id="signUp">Sign Up</a>
            </div>
        </div>
    </div>

    <div class="row" id="signUpForm" style="display: none;">
        <div class="col">
            <form action="" method="post">
                <h1>Sign Up</h1>
                <div class="col">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="col">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="col">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-danger">Sign Up</button>
            </form>
            <div class="links">
                <p>Already have account?</p>
                <a class="btn btn-info" id="signIn">Sign In</a>
            </div>
        </div>
    </div>

    </div>

