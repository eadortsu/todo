<?php

namespace App\Http\Controllers;

use App\ListItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list = ListItem::all();
        return $list;
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
        $data = $request->all();

        $data['user_id'] = Auth::user()->id;
        $data['status'] = '0';
        $data['starred'] = '0';
        ListItem::create($data);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ListItem  $listItem
     * @return \Illuminate\Http\Response
     */
    public function show(ListItem $listItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ListItem  $listItem
     * @return \Illuminate\Http\Response
     */
    public function edit(ListItem $listItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ListItem  $listItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $listItem = ListItem::find($id);
        $listItem->status = $request->status;
        $listItem->save();
       return $listItem;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ListItem  $listItem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $list = ListItem::find($id);
        $list->delete();
        return "ok";
    }
}
