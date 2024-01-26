<?php require ROOT. 'views/header.php'; ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            <form action="http://mybank.test/crud/store" method="post">
                <div class="card bg-primary-subtle">
                    <h5 class="card-header">Create account</h5>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName">
                        </div>
                        <div class="mb-3">
                            <label for="code" class="form-label">Personal code</label>
                            <input type="text" class="form-control" id="code" name="code">
                        </div>
                        <div class="mb-3">
                            <label for="account" class="form-label">Your new account</label>
                                <input type="text" class="form-control" id="account" name="account" value="LT2074183946403241">
                        </div>
                        <button class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>