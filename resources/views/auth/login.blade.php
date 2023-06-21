@extends('layouts.auth')

@section('main')
    <main>
        <div class="container-xl px-4">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0      rounded-lg mt-5">
                        <div class="card-header justify-content-center "><h3 class="fw-light my-3-center"><img src="/admin/assets/img/illustrations/account.png" width="45"> Account Log in</h3></div>
                        <div class="card-body">
                            @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}    
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}    
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            <form action="/login" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="small mb-1" for="email">Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}" placeholder="Enter email address" autofocus required/>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="password">Password</label>
                                    <input class="form-control" id="password" name="password" type="password" placeholder="Enter password" required/>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="#">
                                        
                                    </a>
                                    <button type="submit" class="btn btn-success">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="small">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection