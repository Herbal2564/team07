<?php

namespace App\Http\Controllers;
use App\Models\Chain;
use Illuminate\Http\Request;

class ChainsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chains = Chain::all();
        return view('chains.index')->with(['chains'=>$chains]);
        //return chains::all()->toArray();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $chain = chain ::findOrFail($id);
        return view('chains.show')->with(['chain'=>$chain]);
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
        $chain = chain ::findOrFail($id);
        return view('chains.edit')->with(['chain'=>$chain]);
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
        //
        $chain = Chain::findOrFail($id);

        $chain->name = $request ->input('name');
        $chain->value = $request ->input('value');
        $chain->publish = $request ->input('publish');



        $chain->save();
        return redirect('chains');
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
        $chain=Chain::findorFail($id);
        $chain->delete();
        return redirect('chains');
    }
}
