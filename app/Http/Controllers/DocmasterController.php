<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docmaster;

class DocmasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docmaster = Docmaster::all();
        return view('index1', compact('docmaster'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        $docmaster = Docmaster::create($storeData);

        return redirect('/docmasters')->with('completed', 'Document created!');
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
        $docmaster = Docmaster::findOrFail($id);
        return view('update1', compact('docmaster'));
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
        $data = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        Docmaster::whereId($id)->update($data);
        return redirect('/docmasters')->with('completed', 'Document updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docmaster = Docmaster::findOrFail($id);
        $docmaster->delete();

        return redirect('/docmasters')->with('completed', 'Document deleted');
    }
}
