<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />

</head>
<div class="register-form">
    <div class="register-form__inner">
        <h1 class="register-form__heading content__heading">PiGLy</h1>
        <h2 class="register-form__title">新規会員登録</h2>
        <div class="register-form__step2">STEP2 体重データの登録</div>
        <form class="register-form__form" action="/register" method="post">
            @csrf
            <div class="register-form__group">
                <label class="register-form__label" for="start_weight">現在の体重</label>
                <input class="register-form__input" type="text" name="start_weight" id="start_weight" placeholder="現在の体重を入力">
                <p class="register-form__error-message">
                    @error('name')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="goal_weight">目標の体重</label>
                <input class="register-form__input" type="mail" name="goal_weight" id="goal_weight" placeholder="目標の体重を入力">
                <p class="register-form__error-message">
                    @error('email')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <input class="register-form__btn btn" type="submit" value="アカウント作成">
        </form>
    </div>
</div>