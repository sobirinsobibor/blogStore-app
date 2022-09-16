<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use App\Http\Requests\StorePostModelRequest;
use App\Http\Requests\UpdatePostModelRequest;

class PostModelController extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostModel  $postModel
     * @return \Illuminate\Http\Response
     */
    public function show(PostModel $postModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostModel  $postModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PostModel $postModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostModelRequest  $request
     * @param  \App\Models\PostModel  $postModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostModelRequest $request, PostModel $postModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostModel  $postModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostModel $postModel)
    {
        //
    }
}
