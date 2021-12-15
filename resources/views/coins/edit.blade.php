<html>
<head>
    <meta charset="UTF-8"/>
    <title>修改區塊鏈資料</title>
</head>>
<body>
修改所有區塊鏈資料
<form method="post" action="/coins/{{$coin->id}}">
    @method("put")
    @csrf
    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{$coin->id}}</td>
        </tr>>
        <tr>
            <td>幣種</td>
            <td><input type="text" name="name" value="{{$coin->name}}"/></td>
        </tr>
        <tr>
            <td>區塊鏈</td>
            <td><input type="text" name="cid" value="{{$coin->cid}}"/></td>
        </tr>
        <tr>
            <td>分類</td>
            <td><input type="text" name="kind" value="{{$coin->kind}}"/></td>

        </tr>
        <tr>
            <td>鎖倉量(B)</td>
            <td><input type="text" name="lockup" value="{{$coin->lockup}}"/></td>

        </tr>
        <tr>
            <td>最高</td>
            <td><input type="text" name="highest" value="{{$coin->highest}}"/></td>

        </tr>
        <tr>
            <td>最低</td>
            <td><input type="text" name="lowest" value="{{$coin->lowest}}"/></td>

        </tr>
        <tr>
            <td>發行日期</td>
            <td><input type="text" name="publish" value="{{$coin->publish}}"/></td>

        </tr>


    </table>
    <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
