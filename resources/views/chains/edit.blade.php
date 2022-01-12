@extends('app')

@section('title,修改幣種資料')

@section('coin_contents')
    <meta charset="UTF-8"/>
    <title>修改區塊鏈資料</title>

    <body>
    修改所有區塊鏈資料
    <form method="post" action="/chains/{{$chain->id}}">
        @method("put")
        @csrf
        <table border="1">
            <tr>
                <td>編號</td>
                <td>{{$chain->id}}</td>
            </tr>
            <tr>
                <td>區塊鏈</td>
                <td><select id="name" name="name">
                        <option value="1">Ethereum</option>
                        <option value="2">BSC</option>
                        <option value="3" selected>Polygon</option>
                    </select></td>
            </tr>
            <tr>
                <td>市值</td>
                <td><input type="text" name="value" value="{{$chain->value}}"></td>
            </tr>
            <tr>

                <td>發行日期</td>
                <td>
                    <form action="/action_page.php">

                        <input type="date"  name="publish"  value="{{$chain->publish}}" required>
                    </form>

                </td>
            </tr>


        </table>
        <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
    </form>
@endsection
