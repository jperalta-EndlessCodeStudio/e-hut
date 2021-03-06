<?php

namespace App\Http\Controllers;

use App\Cabin;
use Illuminate\Http\Request;

class CabinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        return response()->json(Cabin::where('is_deleted', '0')->limit($request->perPage)->offset($request->perPage * ($request->currentPage - 1))->get());
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Cabin $cabin
     * @return Cabin
     */
    public function show(Cabin $cabin)
    {
        return $cabin;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Cabin $cabin
     * @return \Illuminate\Http\Response
     */
    public function edit(Cabin $cabin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Cabin $cabin
     * @return Cabin
     */
    public function update(Request $request, Cabin $cabin)
    {
//        return $request->data;
        $cabin->update($request->data);

        return $cabin;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Cabin $cabin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cabin $cabin)
    {
        //
    }
}
