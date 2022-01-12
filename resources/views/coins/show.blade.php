@extends('app')

@section('title,顯示幣種')

@section('coin_contents')
    <meta charset="UTF-8"/>
    <title>顯示單一詳細幣種資料</title>

    <body>
    顯示單一詳細幣種資料
    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{$coin->id}}</td>
        </tr>
        <tr>
            <td>幣種</td>
            <td>{{$coin->name}}</td>
        </tr>
        <tr>
            <td>區塊鏈</td>
            <td>{{$coin->cid}}</td>
        </tr>
        <tr>
            <td>分類</td>
            <td>{{$coin->kind}}</td>
        </tr>
        <tr>
            <td>鎖倉量(B)</td>
            <td>{{$coin->lockup}}</td>
        </tr>
        <tr>
            <td>最高</td>
            <td>{{$coin->highest}}</td>
        </tr>
        <tr>
            <td>最低</td>
            <td>{{$coin->lowest}}</td>
        </tr>
        <tr>
            <td>發行時間</td>
            <td>{{$coin->publish}}</td>
        </tr>

    </table>
@endsection
