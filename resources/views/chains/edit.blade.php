<html>
<head>
    <meta charset="UTF-8"/>
    <title>修改區塊鏈資料</title>
</head>>
<body>
修改所有區塊鏈資料
<form method="post" action="/chains/{{$chain->id}}">
    @method("put")
    @csrf
    <table border="1">
   <tr>
        <td>編號</td>
            <td>{{$chain->id}}</td>
   </tr>>
        <tr>
        <td>區塊鏈</td>
            <td><input type="text" name="name" value="{{$chain->name}}"/></td>
        </tr>
        <tr>
        <td>市值</td>
            <td><input type="text" name="value" value="{{$chain->value}}"/></td>
        </tr>
        <tr>
        <td>發行日期</td>
            <td><input type="text" name="publish" value="{{$chain->publish}}"/></td>

    </tr>


</table>
<input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
