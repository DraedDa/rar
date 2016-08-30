<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;
use App\Http\Requests;

class FieldController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields = Field::all();
        return view('fields.index')->withFields($fields);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fields.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title'         =>'required|max:255',
            'description'   =>'required',
            'size'   => 'required|numeric',
            'type'  => '',
            'address' => 'required',
            'geolocalisation' => 'required'
        )); 
        $field = new Field;

        $field->title = $request->title;
        $field->description = $request->description;
        $field->size = $request->size;
        $field->type = $request->type;
        $field->address = $request->address;
        $field->geolocalisation = $request->geolocalisation;

        $field->save();

        return redirect()->route('fields.index');
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
    }
}
