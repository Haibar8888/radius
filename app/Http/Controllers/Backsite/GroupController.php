<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// sweet alert
use RealRashid\SweetAlert\Facades\Alert;

// model
use App\Models\Group;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Group::orderBy('Groupname','asc')->get();
        
        return view('group.index',compact('datas'));
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
    //    $req = $request->all();
    //    dd($req);
       $value = $request->download .'M'.'/'.$request->upload .'M';
       
        $datas = Group::create([
            'groupname' => $request->groupname,
            'attribute' => $request->attribute,
            'op' => $request->op,
            'value' => $value
        ]);

        alert()->success('Success Message', 'Data berhasil group berhasil ditambahkan');
        return redirect()->route('group.index');
      
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
    public function edit(Group $group)
    {
        //
        $value = explode('/',$group->value);

        $down = $value[0];
        $up = $value[1];
        
        return view('group.edit',compact('group','down','up'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
        $down = $request->download; 
        $up = $request->upload;
        $value = $down . '/' . $up;
        
         $group->update([
            'groupname' => $request->groupname,
            'attribute' => $request->attribute,
            'op' => $request->op,
            'value' => $value
            ]
        );
        alert()->success('Success Message', 'Data group berhasil diedit');
        return redirect()->route('group.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
        $group->forceDelete();
        alert()->success('Success Message', 'Data Group berhasil didelete');
        return back();
    }
}
