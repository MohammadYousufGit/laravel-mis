<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\project_checklist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ProjectChecklistController extends Controller
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


        $phase1=DB::table('project_phase_1')->get();
        $phase2=DB::table('project_phase_2')->get();
        $phase3=DB::table('project_phase_3')->get();
        $phase4=DB::table('project_phase_4')->get();
        $phase5=DB::table('project_phase_5')->get();
        return view('admin.project-phase.create',compact('phase1','phase2','phase3','phase4','phase5'));
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
        return $request->document_list;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\admin\project_checklist  $project_checklist
     * @return \Illuminate\Http\Response
     */
    public function show(project_checklist $project_checklist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\admin\project_checklist  $project_checklist
     * @return \Illuminate\Http\Response
     */
    public function edit(project_checklist $project_checklist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\admin\project_checklist  $project_checklist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project_checklist $project_checklist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\admin\project_checklist  $project_checklist
     * @return \Illuminate\Http\Response
     */
    public function destroy(project_checklist $project_checklist)
    {
        //
    }
}
