@extends('index.layouts.main')
@section('content')
    <div class="uk-section uk-section-muted uk-flex " style="height: 90vh;">
        <div class="uk-width-1-1">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="uk-container">
                <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                    <div class="uk-width-1-1@m">
                        <div class="card">
                            <div
                                class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
                                <h3 class="uk-card-title uk-text-center">Добро Пожаловать!</h3>
                                <form method="post" action="{{ route('login') }}">
                                    @csrf
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                            <input class="uk-input uk-form-large @error('email') uk-form-danger @enderror" name="email" type="text"
                                                   placeholder="Эл. Почта">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                            <input class="uk-input uk-form-large @error('password') uk-form-danger @enderror" name="password" type="password"
                                                   placeholder="Пароль">
                                        </div>
                                    </div>

                                    <input id="checkboxlogin" type="checkbox" class="uk-checkbox" name="remember">
                                    <label class="uk-input-la uk-margin-small-left" for="checkboxlogin">Запомнить</label>
                                    <div class="uk-margin">
                                        <button
                                            class="uk-button uk-button-primary uk-button-large uk-width-1-1">Войти</button>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
