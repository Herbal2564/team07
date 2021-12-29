<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有區塊鏈資料</title>
</head>
<br>
顯示所有區塊鏈資料</br>
<a href="coins">
    顯示所有幣種資料
</a>
&emsp;&emsp;&emsp;
<a href =https://memeprod.sgp1.digitaloceanspaces.com/meme/4ba453e5bc5d80a6790ce60411e738ce.png>Smile</a>
&emsp;&emsp;&emsp;&emsp;
<a href="chains/create">
         新增區塊鏈
</a>
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
            </td>
        </tr>
    @endforeach

</table>


</body>
</html>
