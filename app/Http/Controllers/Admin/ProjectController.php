<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\admin\project_checklist;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $closed_projects=Project::where('project_status',2)->get();
        $ongoing_projects=Project::where('project_status',1)->get();
        return view('admin.project.project-list',compact('closed_projects','ongoing_projects'));
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

        return view('admin.project.create_project',compact('phase1','phase2','phase3','phase4','phase5'));
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

        

        

        
        
        $this->validate($request,[
            'project_code'=>'required',
            'project_name'=>'required',
            'project_goal'=>'required',
            'project_objectives'=>'required',
            'project_donor'=>'required|string',
            'project_location'=>'required|string',
            'total_number_of_families'=>'required|numeric',
            'project_start_date'=>'required',
            'project_end_date'=>'required',
            'project_status'=>'required',
            'project_budget_holder'=>'required',
            'p_technical_staff_male'=>'required|numeric',
            'p_technical_staff_female'=>'required|numeric',
            'p_support_staff_male'=>'required|numeric',
            'p_support_staff_female'=>'required|numeric',
            'main_sector'=>'required',
            'p_budget'=>'required|numeric',
            'p_budget_currency'=>'required',
            'p_budget_in_usd'=>'required|numeric',
            'p_idp_male'=>'required|numeric',
            'p_idp_female'=>'required|numeric',
            'p_idp_girls'=>'required|numeric',
            'p_idp_boys'=>'required|numeric',
            'p_ret_male'=>'required|numeric',
            'p_ret_female'=>'required|numeric',
            'p_ret_boys'=>'required|numeric',
            'p_ret_girls'=>'required|numeric',
            'p_ref_male'=>'required|numeric',
            'p_ref_female'=>'required|numeric',
            'p_ref_boys'=>'required|numeric',
            'p_ref_girls'=>'required|numeric',
            'p_host_community_male'=>'required|numeric',
            'p_host_community_female'=>'required|numeric',
            'p_host_community_boys'=>'required|numeric',
            'p_host_community_girls'=>'required|numeric',
            
        ]);



        $project=new Project;
        $project->project_code=$request->project_code;
        $project->project_name=$request->project_name;
        $project->project_goal=$request->project_goal;
        $project->project_objectives=$request->project_objectives;
        $project->project_donor=$request->project_donor;
        $project->project_location=$request->project_location;
        $project->p_budget=$request->p_budget;
        $project->p_budget_currency=$request->p_budget_currency;
        $project->p_budget_in_usd=$request->p_budget_in_usd;
        $project->main_sector=$request->main_sector;
        $project->sub_sector=$request->sub_sector;
        $project->project_start_date=$request->project_start_date;
        $project->project_end_date=$request->project_end_date;
        $project->project_status=$request->project_status;
        $project->project_budget_holder=$request->project_budget_holder;

        $project->p_technical_staff_male=$request->p_technical_staff_male;
        $project->p_technical_staff_female=$request->p_technical_staff_female;
        $project->p_support_staff_male=$request->p_support_staff_male;
        $project->p_support_staff_female=$request->p_support_staff_female;

        $project->p_idp_male=$request->p_idp_male;
        $project->p_idp_female=$request->p_idp_female;
        $project->p_idp_boys=$request->p_idp_boys;
        $project->p_idp_girls=$request->p_idp_girls;

        $project->p_ret_male=$request->p_ret_male;
        $project->p_ret_female=$request->p_ret_female;
        $project->p_ret_boys=$request->p_ret_boys;
        $project->p_ret_girls=$request->p_ret_girls;
        
        $project->p_ref_male=$request->p_ref_male;
        $project->p_ref_female=$request->p_ref_female;
        $project->p_ref_boys=$request->p_ref_boys;
        $project->p_ref_girls=$request->p_ref_girls;


        $total_beneficiaries=$request->p_ref_male+$request->p_ref_female+$request->p_ref_boys+
                            $request->p_ref_boys+$request->p_ret_male+$request->p_ret_female+
                            $request->p_ret_boys+$request->p_ret_girls+
                            $request->p_idp_girls+$request->p_idp_boys+
                            $request->p_idp_male+$request->p_idp_female+
                            $request->p_host_community_male+$request->p_host_community_female+
                            $request->p_host_community_boys+$request->p_host_community_girls;

            
        $project->p_host_community_male=$request->p_host_community_male;
        $project->p_host_community_female=$request->p_host_community_female;
        $project->p_host_community_boys=$request->p_host_community_boys;
        $project->p_host_community_girls=$request->p_host_community_girls;


        $project->total_number_of_families=$request->total_number_of_families;

        $project->total_number_of_beneficiaries=$total_beneficiaries;

        $project->save();

        $project_id=$project->id;


        $files_1_keys=array();
        $files_2_keys=array();
        $files_3_keys=array();
        $files_4_keys=array();
        $files_5_keys=array();
        $remarks_1_keys=array();
        $remarks_2_keys=array();
        $remarks_3_keys=array();
        $remarks_4_keys=array();
        $remarks_5_keys=array();


       
        
        if($request->files_1){
            $files_1_keys=array_keys($request->files_1);
        }

        if($request->remarks_1){
            $remarks_1_keys=array_keys($request->remarks_1);
        }

        if($request->files_2){
            $files_2_keys=array_keys($request->files_2);
        }

        if($request->remarks_2){
            $remarks_2_keys=array_keys($request->remarks_2);
        }

        if($request->files_3){
            $files_3_keys=array_keys($request->files_3);
        }

        if($request->remarks_3){
            $remarks_3_keys=array_keys($request->remarks_3);
        }

        if($request->remarks_4){
            $remarks_4_keys=array_keys($request->remarks_4);
        }

        if($request->remarks_5){
            $remarks_5_keys=array_keys($request->remarks_5);
        }

        if($request->files_4){
            $files_4_keys=array_keys($request->files_4);
        }

        if($request->files_5){
            $files_5_keys=array_keys($request->files_5);
        }

        
       
        
       
       

        
        


         

        for($i=0;$i<count($request->statement_1);$i++){
            $project_checklist=new project_checklist;

            
           if($i<count($files_1_keys)){
                $file_name=uniqid().'.'.$request->files_1[$files_1_keys[$i]]->getClientOriginalExtension();
                $request->files_1[$files_1_keys[$i]]->move(public_path('project_checklist_documents'),$file_name);
                $project_checklist->document=$file_name;
           }
            
           
            
            $project_checklist->statement=$request->statement_1[$i];
            $project_checklist->status=$request->status_1[$i];
            $project_checklist->phase=1;

            if($i<count($remarks_1_keys)){
                $project_checklist->remarks=$request->remarks_1[$remarks_1_keys[$i]];
            }

            

            $project_checklist->project_id=$project_id;
            $project_checklist->save();

        }


        for($i=0;$i<count($request->statement_2);$i++){
            $project_checklist=new project_checklist;

            if($i<count($files_2_keys)){
                    $file_name=uniqid().'.'.$request->files_2[$files_2_keys[$i]]->getClientOriginalExtension();
                    $request->files_2[$files_2_keys[$i]]->move(public_path('project_checklist_documents'),$file_name);
                    $project_checklist->document=$file_name;
                
            }
           
            
            $project_checklist->statement=$request->statement_2[$i];
            $project_checklist->status=$request->status_2[$i];
            $project_checklist->phase=2;


            if($i<count($request->remarks_2)){
                $project_checklist->remarks=$request->remarks_2[$remarks_2_keys[$i]];
            }
           

            $project_checklist->project_id=$project_id;
            $project_checklist->save();

        }


        for($i=0;$i<count($request->statement_3);$i++){
            $project_checklist=new project_checklist;

            if($i<count($files_3_keys)){
                $file_name=uniqid().'.'.$request->files_3[$files_3_keys[$i]]->getClientOriginalExtension();
                $request->files_3[$files_3_keys[$i]]->move(public_path('project_checklist_documents'),$file_name);
                $project_checklist->document=$file_name;
            
             }
           
            
            $project_checklist->statement=$request->statement_3[$i];
            $project_checklist->status=$request->status_3[$i];
            $project_checklist->phase=3;

            if($i<count($remarks_3_keys)){
                $project_checklist->remarks=$request->remarks_3[$remarks_3_keys[$i]];
            }
           

            $project_checklist->project_id=$project_id;
            $project_checklist->save();

        }


        for($i=0;$i<count($request->statement_4);$i++){
            $project_checklist=new project_checklist;

            if($i<count($files_4_keys)){
                $file_name=uniqid().'.'.$request->files_4[$files_4_keys[$i]]->getClientOriginalExtension();
                $request->files_4[$files_4_keys[$i]]->move(public_path('project_checklist_documents'),$file_name);
                $project_checklist->document=$file_name;
            
             }
           
            
            
            $project_checklist->statement=$request->statement_4[$i];
            $project_checklist->status=$request->status_4[$i];
            $project_checklist->phase=4;

            if($i<count($remarks_4_keys)){
                $project_checklist->remarks=$request->remarks_4[$remarks_4_keys[$i]];
            }
           

            $project_checklist->project_id=$project_id;
            $project_checklist->save();

        }


        for($i=0;$i<count($request->statement_5);$i++){
            $project_checklist=new project_checklist;

            if($i<count($files_5_keys)){
                $file_name=uniqid().'.'.$request->files_5[$files_5_keys[$i]]->getClientOriginalExtension();
                $request->files_5[$files_5_keys[$i]]->move(public_path('project_checklist_documents'),$file_name);
                $project_checklist->document=$file_name;
            
             }
           
           
            
            $project_checklist->statement=$request->statement_5[$i];
            $project_checklist->status=$request->status_5[$i];
            $project_checklist->phase=5;
            if($i<count($remarks_5_keys)){
                $project_checklist->remarks=$request->remarks_5[$remarks_5_keys[$i]];
            }
            

            $project_checklist->project_id=$project_id;
            $project_checklist->save();

        }


          return redirect(route('project.index'));



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\admin\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\admin\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $project=Project::find($id);

        $phase1=project_checklist::where('phase',1)->where('project_id',$project->id)->get();
        $phase2=project_checklist::where('phase',2)->where('project_id',$project->id)->get();
        $phase3=project_checklist::where('phase',3)->where('project_id',$project->id)->get();
        $phase4=project_checklist::where('phase',4)->where('project_id',$project->id)->get();
        $phase5=project_checklist::where('phase',5)->where('project_id',$project->id)->get();
         return view('admin.project.edit-project',compact('project','phase1','phase2','phase3','phase4','phase5'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\admin\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        


        $this->validate($request,[
            'project_code'=>'required',
            'project_name'=>'required',
            'project_goal'=>'required',
            'project_objectives'=>'required',
            'project_donor'=>'required|string',
            'project_location'=>'required|string',
            'total_number_of_families'=>'required|numeric',
            'project_start_date'=>'required',
            'project_end_date'=>'required',
            'project_status'=>'required',
            'project_budget_holder'=>'required',
            'p_technical_staff_male'=>'required|numeric',
            'p_technical_staff_female'=>'required|numeric',
            'p_support_staff_male'=>'required|numeric',
            'p_support_staff_female'=>'required|numeric',
            'main_sector'=>'required',
            'p_budget'=>'required|numeric',
            'p_budget_currency'=>'required',
            'p_budget_in_usd'=>'required|numeric',
            'p_idp_male'=>'required|numeric',
            'p_idp_female'=>'required|numeric',
            'p_idp_girls'=>'required|numeric',
            'p_idp_boys'=>'required|numeric',
            'p_ret_male'=>'required|numeric',
            'p_ret_female'=>'required|numeric',
            'p_ret_boys'=>'required|numeric',
            'p_ret_girls'=>'required|numeric',
            'p_ref_male'=>'required|numeric',
            'p_ref_female'=>'required|numeric',
            'p_ref_boys'=>'required|numeric',
            'p_ref_girls'=>'required|numeric',
            'p_host_community_male'=>'required|numeric',
            'p_host_community_female'=>'required|numeric',
            'p_host_community_boys'=>'required|numeric',
            'p_host_community_girls'=>'required|numeric',
            
        ]);



        

        // $project_check_list_ids=$project->project_checklists->pluck('id');


        // return $project_check_list_ids;
        $project->project_code=$request->project_code;
        $project->project_name=$request->project_name;
        $project->project_goal=$request->project_goal;
        $project->project_objectives=$request->project_objectives;
        $project->project_donor=$request->project_donor;
        $project->project_location=$request->project_location;
        $project->p_budget=$request->p_budget;
        $project->p_budget_currency=$request->p_budget_currency;
        $project->p_budget_in_usd=$request->p_budget_in_usd;
        $project->main_sector=$request->main_sector;
        $project->sub_sector=$request->sub_sector;
        $project->project_start_date=$request->project_start_date;
        $project->project_end_date=$request->project_end_date;
        $project->project_status=$request->project_status;
        $project->project_budget_holder=$request->project_budget_holder;

        $project->p_technical_staff_male=$request->p_technical_staff_male;
        $project->p_technical_staff_female=$request->p_technical_staff_female;
        $project->p_support_staff_male=$request->p_support_staff_male;
        $project->p_support_staff_female=$request->p_support_staff_female;

        $project->p_idp_male=$request->p_idp_male;
        $project->p_idp_female=$request->p_idp_female;
        $project->p_idp_boys=$request->p_idp_boys;
        $project->p_idp_girls=$request->p_idp_girls;

        $project->p_ret_male=$request->p_ret_male;
        $project->p_ret_female=$request->p_ret_female;
        $project->p_ret_boys=$request->p_ret_boys;
        $project->p_ret_girls=$request->p_ret_girls;
        
        $project->p_ref_male=$request->p_ref_male;
        $project->p_ref_female=$request->p_ref_female;
        $project->p_ref_boys=$request->p_ref_boys;
        $project->p_ref_girls=$request->p_ref_girls;


        $total_beneficiaries=$request->p_ref_male+$request->p_ref_female+$request->p_ref_boys+
                            $request->p_ref_boys+$request->p_ret_male+$request->p_ret_female+
                            $request->p_ret_boys+$request->p_ret_girls+
                            $request->p_idp_girls+$request->p_idp_boys+
                            $request->p_idp_male+$request->p_idp_female+
                            $request->p_host_community_male+$request->p_host_community_female+
                            $request->p_host_community_boys+$request->p_host_community_girls;

            
        $project->p_host_community_male=$request->p_host_community_male;
        $project->p_host_community_female=$request->p_host_community_female;
        $project->p_host_community_boys=$request->p_host_community_boys;
        $project->p_host_community_girls=$request->p_host_community_girls;


        $project->total_number_of_families=$request->total_number_of_families;

        $project->total_number_of_beneficiaries=$total_beneficiaries;


    

        $project->save();

        $project_check_list_ids=$project->project_checklists->pluck('id');

        $project_id=$project->id;


        $counter=0;


        $files_1_keys=array();
        $files_2_keys=array();
        $files_3_keys=array();
        $files_4_keys=array();
        $files_5_keys=array();
        $remarks_1_keys=array();
        $remarks_2_keys=array();
        $remarks_3_keys=array();
        $remarks_4_keys=array();
        $remarks_5_keys=array();


       
        
        if($request->files_1){
            $files_1_keys=array_keys($request->files_1);
        }

        if($request->remarks_1){
            $remarks_1_keys=array_keys($request->remarks_1);
        }

        if($request->files_2){
            $files_2_keys=array_keys($request->files_2);
        }

        if($request->remarks_2){
            $remarks_2_keys=array_keys($request->remarks_2);
        }

        if($request->files_3){
            $files_3_keys=array_keys($request->files_3);
        }

        if($request->remarks_3){
            $remarks_3_keys=array_keys($request->remarks_3);
        }

        if($request->remarks_4){
            $remarks_4_keys=array_keys($request->remarks_4);
        }

        if($request->remarks_5){
            $remarks_5_keys=array_keys($request->remarks_5);
        }

        if($request->files_4){
            $files_4_keys=array_keys($request->files_4);
        }

        if($request->files_5){
            $files_5_keys=array_keys($request->files_5);
        }

        
       
        
       
       

        
        


         

        for($i=0;$i<count($request->statement_1);$i++){
            $project_checklist=project_checklist::find($project_check_list_ids[$counter]);
            $counter++;

            
           if($i<count($files_1_keys)){
                $file_name=uniqid().'.'.$request->files_1[$files_1_keys[$i]]->getClientOriginalExtension();
                $request->files_1[$files_1_keys[$i]]->move(public_path('project_checklist_documents'),$file_name);
                $project_checklist->document=$file_name;
           }
            
           
            
            $project_checklist->statement=$request->statement_1[$i];
            $project_checklist->status=$request->status_1[$i];
            $project_checklist->phase=1;

            if($i<count($remarks_1_keys)){
                $project_checklist->remarks=$request->remarks_1[$remarks_1_keys[$i]];
            }

            

            $project_checklist->project_id=$project_id;
            $project_checklist->save();

        }


        for($i=0;$i<count($request->statement_2);$i++){
            $project_checklist=project_checklist::find($project_check_list_ids[$counter]);
            $counter++;


            if($i<count($files_2_keys)){
                    $file_name=uniqid().'.'.$request->files_2[$files_2_keys[$i]]->getClientOriginalExtension();
                    $request->files_2[$files_2_keys[$i]]->move(public_path('project_checklist_documents'),$file_name);
                    $project_checklist->document=$file_name;
                
            }
           
            
            $project_checklist->statement=$request->statement_2[$i];
            $project_checklist->status=$request->status_2[$i];
            $project_checklist->phase=2;


            if($i<count($request->remarks_2)){
                $project_checklist->remarks=$request->remarks_2[$remarks_2_keys[$i]];
            }
           

            $project_checklist->project_id=$project_id;
            $project_checklist->save();

        }


        for($i=0;$i<count($request->statement_3);$i++){
            $project_checklist=project_checklist::find($project_check_list_ids[$counter]);
            $counter++;


            if($i<count($files_3_keys)){
                $file_name=uniqid().'.'.$request->files_3[$files_3_keys[$i]]->getClientOriginalExtension();
                $request->files_3[$files_3_keys[$i]]->move(public_path('project_checklist_documents'),$file_name);
                $project_checklist->document=$file_name;
            
             }
           
            
            $project_checklist->statement=$request->statement_3[$i];
            $project_checklist->status=$request->status_3[$i];
            $project_checklist->phase=3;

            if($i<count($remarks_3_keys)){
                $project_checklist->remarks=$request->remarks_3[$remarks_3_keys[$i]];
            }
           

            $project_checklist->project_id=$project_id;
            $project_checklist->save();

        }


        for($i=0;$i<count($request->statement_4);$i++){
            $project_checklist=project_checklist::find($project_check_list_ids[$counter]);
            $counter++;


            if($i<count($files_4_keys)){
                $file_name=uniqid().'.'.$request->files_4[$files_4_keys[$i]]->getClientOriginalExtension();
                $request->files_4[$files_4_keys[$i]]->move(public_path('project_checklist_documents'),$file_name);
                $project_checklist->document=$file_name;
            
             }
           
            
            
            $project_checklist->statement=$request->statement_4[$i];
            $project_checklist->status=$request->status_4[$i];
            $project_checklist->phase=4;

            if($i<count($remarks_4_keys)){
                $project_checklist->remarks=$request->remarks_4[$remarks_4_keys[$i]];
            }
           

            $project_checklist->project_id=$project_id;
            $project_checklist->save();

        }


        for($i=0;$i<count($request->statement_5);$i++){
            $project_checklist=project_checklist::find($project_check_list_ids[$counter]);
            $counter++;


            if($i<count($files_5_keys)){
                $file_name=uniqid().'.'.$request->files_5[$files_5_keys[$i]]->getClientOriginalExtension();
                $request->files_5[$files_5_keys[$i]]->move(public_path('project_checklist_documents'),$file_name);
                $project_checklist->document=$file_name;
            
             }
           
           
            
            $project_checklist->statement=$request->statement_5[$i];
            $project_checklist->status=$request->status_5[$i];
            $project_checklist->phase=5;
            if($i<count($remarks_5_keys)){
                $project_checklist->remarks=$request->remarks_5[$remarks_5_keys[$i]];
            }
            

            $project_checklist->project_id=$project_id;
            $project_checklist->save();

        }

          return redirect(route('project.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\admin\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
