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
        <th>操作一</th>
        <th>操作二</th>
        <th>操作三</th>
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
            <td>
                <a href="chains/{{$chain->id}}/edit">
                    修改
                </a>
            </td>
            <td>
                <form method="post" action="chains/{{$chain->id}}">
                    @csrf
                    @method("delete")
                    <input type="submit" value="刪除"/>
                </form>
            </td>>
        </tr>
    @endforeach

</table>


</body>
</html>
