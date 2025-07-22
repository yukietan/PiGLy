@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css')}}">
@endsection

@section('content')
<div class="admin">
    <table class="admin__display">
        <tr class="admin__display-row">
            <th class=" admin__label">目標体重</th>
            <th class=" admin__label">目標まで</th>
            <th class=" admin__label">最新体重</th>
        </tr>

        <tr>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
        </tr>
    </table>

    <div class=" admin__inner">
        <form class="search-form" action="/search" method="get">
            @csrf
            <div class="search-form__actions">
                <div class="date-range-search">
                    <input type="date" name="start_date" class="date-input" value="{{ request('start_date') }}">
                    <span class="date-separator">〜</span>
                    <input type="date" name="end_date" class="date-input" value="{{ request('end_date') }}">
                </div>

                <input class="search-form__search-btn btn" type="submit" value="検索">
                <input class="search-form__reset-btn btn" type="submit" value="リセット" name="reset">
                <div class="add-data">
                    <input class="add-btn" type="submit" value="データ追加">
                </div>

            </div>
            <table class="admin__table">
                <tr class="admin__table-row">
                    <th class=" admin__label">日付</th>
                    <th class=" admin__label">体重</th>
                    <th class=" admin__label">食事接種カロリー</th>
                    <th class=" admin__label">運動時間</th>
                </tr>
                <tr class="admin__table-row">
                    <td class=" admin__date"></td>
                    <td class=" admin__weight"></td>
                    <td class=" admin__calorie"></td>
                    <td class=" admin__time"></td>
            </table>
        </form>
        @endsection