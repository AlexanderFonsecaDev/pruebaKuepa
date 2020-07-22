@extends('layouts.main')

@section('content')
    <div class="card">
        <form method="POST" action="{{ route('login') }}" class="text-black-50">
            @csrf
            <div class="card-body">
                <h1 class="h3 mb-3 font-weight-normal">Inicia sesión</h1>
                <label for="email" class="sr-only">Correo electrónico</label>
                <input id="email" type="email" placeholder="Correo electrónico"
                       class="mb-4 form-control @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
                <label for="password" class="sr-only">Contraseña</label>
                <input id="password" type="password" placeholder="Contraseña"
                       class="mb-4 form-control @error('password') is-invalid @enderror" name="password" required
                       autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror

            </div>
            <div class="card-footer">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar</button>
            </div>
        </form>
    </div>
@endsection
