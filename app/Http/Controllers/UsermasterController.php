<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usermaster;

class UsermasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usermaster= Usermaster::all();
        return view('index2', compact('usermaster'));
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
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|numeric',
        ]);
        $usermaster = Usermaster::create($storeData);

        return redirect('/usermasters')->with('completed', 'Usermaster created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usermaster = Usermaster::findOrFail($id);
        return view('update2', compact('usermaster'));
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
        $data = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|numeric',
        ]);

        Usermaster::whereId($id)->update($data);
        return redirect('/usermasters')->with('completed', 'usermaster updated');
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
        $usermaster = Usermaster::findOrFail($id);
        $usermaster->delete();

        return redirect('/usermasters')->with('completed', 'usermaster deleted');
    }
}
