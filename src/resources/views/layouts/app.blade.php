<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
</head>

<body>
    <div class="app">
        <header class="header">
            <h1 class="header__heading">PiGLy</h1>
            <form class="header__btn" action="/logout" method="post">
                @csrf
                <a class="weight-setting" href="{{url('/weight_logs/{:weightLogId}/update')}}">目標体重設定</a>
                <input class="header__link" type="submit" value="ログアウト">
            </form>
        </header>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>

</html>