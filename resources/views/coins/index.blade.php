<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有幣種資料</title>
</head>>
<body>
顯示所有幣種資料
<table border="1">
    <tr>
        <th>編號</th>
        <th>幣種</th>
        <th>區塊鏈</th>
        <th>分類</th>
        <th>鎖倉量</th>
        <th>最高</th>
        <th>最低</th>
        <th>發行日期</th>
        <th>操作一</th>
        <th>操作二</th>
        <th>操作三</th>

        </tr>
    @foreach($coins as $coin )
        <tr>
            <td>{{$coin->id}}</td>
            <td>{{$coin->name}}</td>
            <td>{{$coin->cid}}</td>
            <td>{{$coin->kind}}</td>
            <td>{{$coin->lockup}}</td>
            <td>{{$coin->highest}}</td>
            <td>{{$coin->lowest}}</td>
            <td>{{$coin->publish}}</td>
            <td>
                <a href="coins/{{$coin->id}}">
                    詳情
                </a>
            </td>
            <td>
                <a href="coins/{{$coin->id}}/edit">
                    修改
                </a>
            </td>
            <td>
                <form method="post" action="coins/{{$coin->id}}">
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
