@extends('layouts.main')

@section('content')
    <div class="card text-black-50">
        <form method="POST" action="{{ route('register') }}">
            <div class="card-header">
                <h2>Registrate</h2>
            </div>
            <div class="card-body">

                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                    <div class="col-md-6">
                        <input id="name" type="text" placeholder="Alexander" class="form-control @error('name') is-invalid @enderror"
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Correo electrónico</label>

                    <div class="col-md-6">
                        <input id="email" type="email" placeholder="ejemplo@ejemplo.com" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                    <div class="col-md-6">
                        <input id="password" type="password" placeholder="Mínimo 8 caracteres"
                               class="form-control @error('password') is-invalid @enderror" name="password" required
                               autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm"
                           class="col-md-4 col-form-label text-md-right">Repita la contraseña </label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" placeholder="Mínimo 8 caracteres" class="form-control" name="password_confirmation"
                               required autocomplete="new-password">
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarme</button>
            </div>
        </form>
    </div>
@endsection
