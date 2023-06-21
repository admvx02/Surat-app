@extends('layouts.admin')

@section('title')
    Tambah Pengguna
@endsection

@section('container')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="user-plus"></i></div>
                                Tambah Pengguna
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto mb-3">
                            <a class="btn btn-sm btn-light text-primary" href="{{ route('user.index') }}">
                                <i class="me-1" data-feather="arrow-left"></i>
                                Kembali ke Semua Pengguna
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-xl px-4 mt-4">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card mb-4">
                        <div class="card-header">Informasi Akun</div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="name">Nama</label>
                                        <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" value="{{ old('name') }}"  required autofocus/>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message; }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="email">Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" value="{{ old('email') }}" required/>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message; }}
                                            </div>
                                        @enderror
                                    </div>   
                                </div>
                                <div class="mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="password">Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" name="password" type="password"  required/>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message; }}
                                            </div>
                                        @enderror
                                    </div>   
                                </div>
                                <button class="btn btn-primary" type="submit">
                                    Tambah Pengguna Baru
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

