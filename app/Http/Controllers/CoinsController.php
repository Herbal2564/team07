<?php

namespace App\Http\Controllers;
use App\Models\Coin;
use Illuminate\Http\Request;

class CoinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        $coins = Coin::all()->sortBy('cid');
        return view('coins.index')->with(['coins'=>$coins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('coins.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request ->input('name');
        $cid = $request ->input('cid');
        $kind = $request ->input('kind');
        $lockup = $request ->input('lockup');
        $highest = $request ->input('highest');
        $lowest = $request ->input('lowest');
        $publish = $request ->input('publish');

        Coin::create(
            [
                'name'=>$name,
                'cid'=>$cid,
                'kind'=>$kind,
                'lockup'=>$lockup,
                'highest'=>$highest,
                'lowest'=>$lowest,
                'publish'=>$publish
            ]
        );
        return redirect('coins');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //return "顯示單一筆幣種的紀錄(id = " . $id .")";
        $coin = coin ::findOrFail($id);
        return view('coins.show')->with(['coin'=>$coin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return "顯示單一筆幣種的紀錄(id = " . $id .")";
        $coin = coin ::findOrFail($id);
        return view('coins.edit')->with(['coin'=>$coin]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $coin = Coin::findorFail($id);
        $coin->name = $request ->input('name');
        $coin->cid = $request ->input('cid');
        $coin->kind = $request ->input('kind');
        $coin->lockup = $request ->input('lockup');
        $coin->highest = $request ->input('highest');
        $coin->lowest = $request ->input('lowest');
        $coin->publish = $request ->input('publish');

        $coin->save();

        return redirect('coins');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $coin=Coin::findOrFail($id);
        $coin->delete();
        return redirect('coins');
    }
    //public function kind()
    //{
        //$coins = coin ::kind()->get();
        //return view('coins.index',['coins'=>$coins]);
   // }
}
