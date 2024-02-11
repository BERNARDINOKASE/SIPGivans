@extends('layouts.guest1')
@section('title', 'Lupa password')
@section('content')
<section class="login-form">
    <div class="container">
        <div class="login-area">
            <div class="row">
                <div class="login-form card">
                        <div class="col-lg-12">
                            <div class="text-center mt-10 mb-2">
                                <h3 class="login-title mb-2">
                                    Lupa password
                                </h3>
                                <p class="card-title">Silahkan masukan email yang anda daftarkan dan kami akan mengirim<br>link agar anda dapat mereset password dengan yang baru</p>
                            </div>
                        </div>
                        <div class="text-danger text-center">
                            @if ($errors->any())
                                @foreach ($errors->all() as $item)
                                    Email anda tidak terdaftar
                                @endforeach
                            @endif
                        </div>
                        <form method="POST" action="{{route('password.email')}}">
                            @csrf
                            <label for="email">Email</label>
                            <input class="mb-2" type="text" name="email" placeholder="Email anda" />
                            <div class="login-footer">
                                <button type="submit" class="btn btn-primary w-100">Kirim email reset password</button>
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