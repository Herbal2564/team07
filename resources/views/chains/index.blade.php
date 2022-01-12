@extends('app')

@section('title,顯示幣種')

@section('coin_contents')
    <meta charset="UTF-8"/>
    <title>顯示所有區塊鏈資料</title>

    <br>
    顯示所有區塊鏈資料</br>
    <select onchange="location = this.options[this.selectedIndex].value;">
        <option value="#">請選擇</option>
        <option value="http://127.0.0.1:8000/chains"> 顯示所有區塊鏈資料</option>
        <option value="{{route('chains.date')}}"> 顯示老區塊鏈</option>


    </select>


    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
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
    <a href =https://memeprod.sgp1.digitaloceanspaces.com/meme/4ba453e5bc5d80a6790ce60411e738ce.png>Smile</a>
@endsection
