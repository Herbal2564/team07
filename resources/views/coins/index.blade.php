@extends('app')

@section('title,顯示幣種詳細資料')

@section('coin_contents')
    <meta charset="UTF-8"/>
    <title>顯示所有幣種資料</title>
    </head>
    <body>
    <br>
    顯示所有幣種資料</br>
    <a href="http://127.0.0.1:8000/chains">
        顯示所有區塊鏈資料
    </a>
    <select onchange="location = this.options[this.selectedIndex].value;">
        <option value="#">請選擇</option>
        <option value="{{route('coins.index')}}"> 顯示所有幣種</option>
        <option value="{{route('coins.DEX')}}"> 顯示DEX類別的幣種</option>
        <option value="#">請選擇</option>
    </select>

    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <a href="{{route('coins.index')}}">
        顯示所有幣種
    </a>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <a href="{{route('coins.DEX')}}">
        顯示DEX類別的幣種
    </a>


    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <a href="{{route('coins.lend')}}">
        顯示借貸類別的幣種
    </a>


    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <a href="{{route('coins.token')}}">
        顯示代幣類別的幣種
    </a>

    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <a href="{{route('coins.date')}}">
        顯示老幣種
    </a>



    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <a href="coins/create">
        新增幣種資料
    </a>
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

            </th>
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
                </td>

            </tr>


        @endforeach

    </table>
    <a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ">Surprise</a>

    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;


@endsection
