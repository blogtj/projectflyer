<?php

namespace App\Http\Controllers;

use App\Flyer;

use Illuminate\Http\Request;

use App\Http\Requests\FlyerRequest;

class FlyersController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //flash()->overlay("hello word","xthis is the message");
        return view('flyers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request|FlyerRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FlyerRequest $request)
    {
        //validate the form
        Flyer::create($request->all());

        flash()->success('Success', 'Your flyer has been created');
        //flash messaging


        //redirect
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($zip, $street)
    {
        $flyer = Flyer::locatedAt($zip, $street)->first();
        return view('flyers.show', compact('flyer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
