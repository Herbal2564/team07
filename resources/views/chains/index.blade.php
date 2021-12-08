<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有區塊鏈資料</title>
</head>>
<body>
顯示所有區塊鏈資料
<table border="1">
    <tr>
        <th>編號</th>
        <th>區塊鏈</th>
        <th>市值</th>
        <th>發行日期</th>
    </tr>
    @foreach($chains as $chain )
        <tr>
            <td>{{$chain->id}}</td>
            <td>{{$chain->name}}</td>
            <td>{{$chain->value}}</td>
            <td>{{$chain->publish}}</td>
            <td>
                <a href="chains/{{$chain->id}}">
                    詳情
                </a>
            </td>
        </tr>
    @endforeach

</table>


</body>
</html>
