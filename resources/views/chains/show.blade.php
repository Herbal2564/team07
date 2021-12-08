<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一詳細區塊鏈資料</title>
</head>>
<body>
顯示單一詳細區塊鏈資料
<table border="1">
    <tr>
        <td>編號</td>
        <td>{{$chain->id}}</td>
    </tr>
    <tr>
        <td>區塊鏈</td>
        <td>{{$chain->name}}</td>
    </tr>
    <tr>
        <td>市值</td>
        <td>{{$chain->value}}</td>
    </tr>
    <tr>
        <td>發行日期</td>
        <td>{{$chain->publish}}</td>
    </tr>
</table>
</body>
</html>
