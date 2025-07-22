@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/update.css')}}">
@endsection

@section('content')
<div class="update-form">
    <h2 class="update-form__heading">目標体重設定</h2>
    <div class="update-form__inner">
        <input type="number" id="weight" name="weight">
        <span>Kg</span>
    </div>
    <div class="add-data">
        <a href="/weight_logs" class="back">戻る</a>
        <input class="add-btn" type="submit" value="更新">
    </div>
</div>
@endsection