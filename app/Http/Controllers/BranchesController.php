<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\branches;
use App\Models\User;


class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = branches::all();
        return view('dashboard.pages.admin.forms.branches.index', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator=\Validator::make(
            $request->all(),[
                'group_name'=>'required',
                'branch_name'=>'required',
                'branch_address'=>'required',
            ]
        );
        if($validator->fails())
        {
            $messages = $validator->getMessageBag();
            return redirect()->back()->with('error', $messages->first());
        }
        $branches = new branches();
        $branches->group_name=$request->group_name;
        $branches->branch_name=$request->branch_name;
        $branches->branch_address=$request->branch_address;
        $branches->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $branches=branches::find($id);
        $validator=\Validator::make(
            $request->all(),[
                'group_name'=>'required',
                'branch_name'=>'required',
                'branch_address'=>'required',
            ]
        );
        if($validator->fails())
        {
            $messages = $validator->getMessageBag();
            return redirect()->back()->with('error', $messages->first());
        }
        $branches->group_name=$request->group_name;
        $branches->branch_name=$request->branch_name;
        $branches->branch_address=$request->branch_address;
        $branches->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
