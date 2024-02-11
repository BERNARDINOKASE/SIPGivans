@extends('layouts.guest1')

@section('title', 'Daftar akun')

@section('content')
<section class="login-form">
    <div class="container">
        <div class="login-area">
            <div class="row">
                <div class="login-form card">
                        <div class="col-lg-12">
                            <div class="text-center mt-10">
                                <h3 class="login-title">
                                    Daftar akun
                                </h3>
                            </div>
                        </div>
                        <div class="text-danger text-center">
                            @if ($errors->any())
                                @foreach ($errors->all() as $item)
                                    {{$item}}
                                @endforeach
                            @endif
                        </div>
                        <form method="POST" action="{{route('register.store')}}">
                            @csrf
                            <div class="mb-2">
                                <label for="nis/nip">NIS/NIP</label>
                                <input type="number" name="nis" placeholder="NIS/NIP anda"/>
                            </div>
                            <div class="mb-2">
                                <label for="name">Nama</label>
                                <input type="text" name="name" placeholder="Nama anda"/>
                            </div>
                            <div class="mb-2">
                                <label for="phone_number">No Hp</label>
                                <input type="number" name="phone_number" placeholder="No hp anda"/>
                            </div>
                            <div class="mb-2">
                                <label for="email">Alamat Email</label>
                                <input type="text" name="email" placeholder="Alamat email anda"/>
                            </div>
                            <div class="mb-2">
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="Password anda"/>
                            </div>
                            <div class="mb-2">
                                <label for="password_confirmation">Konfirmasi password</label>
                                <input type="password" name="password_confirmation" placeholder="Konfirmasi password anda"/>
                            </div>
                            <div class="login-footer">
                                <button type="submit" class="btn btn-primary w-100 mb-2">Daftar</button>
                                {{-- <div class="text-center m-2">Atau</div> --}}
                                <a href="{{route('login')}}" class="tex-primary text-end w-100">Sudah Punya Akun ?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!-- row -->
        </div>
    </div>
</section>
@endsection