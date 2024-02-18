@if (session('ok'))
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="alert alert-primary" role="alert">
                   {{ session('ok') }}
                </div>
            </div>
        </div>
    </div>
@endif
