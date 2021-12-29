<html>
<head>
    <meta charset="UTF-8"/>
    <title>新增幣種資料</title>
</head>>
<body>
新增幣種資料
<form method="post" action="/coins">
    @csrf
    <table border="1">
        <tr>
            <td>幣種</td>
            <td><input type="text" name="name" required /></td>
        </tr>
        <tr>
            <td>區塊鏈</td>

            <td><select id="cid" name="cid">
                    <option value="1">Ethereum</option>
                    <option value="2">BSC</option>
                    <option value="3" selected>Polygon</option>
                </select></td>
        </tr>
        <tr>
            <td>分類</td>


            <td>
                 <input type="radio" name="kind" value="DEX" />
                 <label>DEX</label></br>
                 <input type="radio"name="kind" value="資產管理" />
                 <label>資產管理</label></br>
                 <input type="radio"name="kind" value="代幣" />
                 <label>代幣</label></br>
                </td>>

        </tr>
        <tr>
            <td>鎖倉量(B)</td>
            <td><input type="text" name="lockup"/></td>

        </tr>
        <tr>
            <td>最高</td>
            <td><input type="text" name="highest" required /></td>

        </tr>
        <tr>
            <td>最低</td>
            <td><input type="text" name="lowest" required /></td>

        </tr>
        <tr>
            <td>發行日期</td>
            <td>
                <form action="/action_page.php">

                    <input type="date"  name="publish" required>

                </form>

            </td>



        </tr>


    </table>
    <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
