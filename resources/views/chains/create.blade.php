<html>
<head>
    <meta charset="UTF-8"/>
    <title>新增區塊鏈資料</title>
</head>>
<body>
新增區塊鏈資料
<form method="post" action="/chains">
    @csrf
    <table border="1">
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
            <td><input type="text" name="value" required /></td>
        </tr>
        <tr>
            <td>發行日期</td>
            <td>
                <form action="/action_page.php">

                    <input type="date"  name="publish" required>

                </form>

        </tr>


    </table>
    <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
