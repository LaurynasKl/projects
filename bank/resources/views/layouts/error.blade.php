@if (session('error'))
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="alert alert-danger" role="alert">
                    {{session('error')}}
                </div>
            </div>
        </div>
    </div>
@endif
