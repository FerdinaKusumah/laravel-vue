<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.member.index');
    }

    public function api()
    {
        $members = Member::all();
        $datatables = datatables()->of($members)->addIndexColumn();

        return $datatables->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
            'name' => 'required|max:64',
            'gender' => 'required',
            'phone_number' => 'required|max:15',
            'address' => 'required',
            'email' => 'required|email'
        ]);

        Member::create($request->all());

        return redirect('admin/members')->with('success', 'Data Telah Ditambahkan!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('pages.admin.member.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
            $request->validate([
            'name' => 'required|max:64',
            'gender' => 'required',
            'phone_number' => 'required|max:15',
            'address' => 'required',
            'email' => 'required|email'
        ]);

        $member->update($request->all());
        return redirect('admin/members')->with('success', 'Data Telah Diupdate!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete($member->id);

        return redirect('admin/members')->with('success', 'Data Telah Dihapus!!');
    }
}