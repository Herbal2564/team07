<div class="bg">
<img src="{{URL::asset('images/3.jpg')}}">
</div>
<style>
    .bg {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: -999;
        opacity: 0.6;

    }
    .bg img {
        min-height: 100%;
        width: 100%;
    }
</style>
區塊鏈幣種分類系統

<hr>
<a href="{{route('coins.index')}}">所有幣種</a></br>
<a href="{{route('chains.index')}}">所有區塊鏈</a></br>
