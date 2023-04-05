<?php

namespace App\Http\Controllers\Admin;
use App\Model\admin\project\stakeholder;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
class StakeholderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stakeholder=stakeholder::all();
        return view('admin.stakeholder.stakeholder_list',compact('stakeholder'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = DB::table("provinces")->pluck("name","id");
        return view('admin.stakeholder.stakeholder_create',compact('provinces'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            
                        'stakeholder_name'=>'required',   
                        'agency'=>'required',   
                        'gender'=>'required',   
                        'id_number'=>'required',   
                        'personal_mobile_number'=>'required',   
                        'family_mobile_number'=>'required',   
                        'age'=>'required',   
                        'province'=>'required',   
                        'district'=>'required',
                        'village'=>'required',
                        'project'=>'required',
                        'role_in_the_project'=>'required',
                        'data_contaced'=>'required',
                        'feedback'=>'required',
                        'remarks'=>'required'
                        
                    ]);

                     $stakeholder_documentss='';
                    
                             if($request->stakeholder_documents){
                    
                                $stakeholder_documentss=uniqid().'.'.$request->stakeholder_documents->getClientOriginalExtension();
                                $request->stakeholder_documents->move(public_path('stakeholder_documents'),$stakeholder_documentss);
                             }
                                        
                            $stakeholder=new stakeholder;
                            $stakeholder->stakeholder_name=$request->stakeholder_name;
                            $stakeholder->agency=$request->agency;
                            $stakeholder->gender=$request->gender;
                            $stakeholder->id_number=$request->id_number;
                            $stakeholder->personal_mobile_number=$request->personal_mobile_number;
                            $stakeholder->family_mobile_number=$request->family_mobile_number;
                            $stakeholder->age=$request->age;
                            $stakeholder->province=$request->province;
                            $stakeholder->district=$request->district;
                            $stakeholder->village=$request->village;
                            $stakeholder->project=$request->project;
                            $stakeholder->role_in_the_project=$request->role_in_the_project;
                            $stakeholder->data_contaced=$request->data_contaced;
                            $stakeholder->feedback=$request->feedback;
                            $stakeholder->remarks=$request->remarks;
                            $stakeholder->stakeholder_documents=$stakeholder_documentss;
                            $stakeholder->save();
                            return redirect(route('stakeholder.index'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\stakeholder  $stakeholder
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $stakeholder=stakeholder::find($id);
        // return view('admin.stakeholder.stakeholder_show',compact('stakeholder'));
        $stakeholder=stakeholder::find($id);
        $province=DB::table('provinces')->where('name',$stakeholder->province)->first();
        $district=DB::table('districts')->where('name',$stakeholder->district)->first();

        $provinces = DB::table("provinces")->where("name",'!=',$stakeholder->province)->pluck("name","id");
        $districts = DB::table("districts")->where("name",'!=',$stakeholder->district)->pluck("name","id");
        $villages = DB::table("villages")->where("name",'!=',$stakeholder->village)->pluck("name","id");
        return view('admin.stakeholder.stakeholder_show',compact('stakeholder','provinces','districts','villages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\stakeholder  $stakeholder
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stakeholder=stakeholder::find($id);
        $province=DB::table('provinces')->where('name',$stakeholder->province)->first();
        $district=DB::table('districts')->where('name',$stakeholder->district)->first();

        $provinces = DB::table("provinces")->where("name",'!=',$stakeholder->province)->pluck("name","id");
        $districts = DB::table("districts")->where("name",'!=',$stakeholder->district)->pluck("name","id");
        $villages = DB::table("villages")->where("name",'!=',$stakeholder->village)->pluck("name","id");
        return view('admin.stakeholder.stakeholder_edit',compact('stakeholder','provinces','districts','villages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\stakeholder  $stakeholder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            
                        'stakeholder_name'=>'required',   
                        'agency'=>'required',   
                        'gender'=>'required',   
                        'id_number'=>'required',   
                        'personal_mobile_number'=>'required',   
                        'family_mobile_number'=>'required',   
                        'age'=>'required',   
                        'province'=>'required',   
                        'district'=>'required',
                        'village'=>'required',
                        'project'=>'required',
                        'role_in_the_project'=>'required',
                        'data_contaced'=>'required',
                        'feedback'=>'required',
                        'remarks'=>'required'
                        
                    ]);

                     $stakeholder_documentss='';
                    
                             if($request->stakeholder_documents){
                    
                                $stakeholder_documentss=uniqid().'.'.$request->stakeholder_documents->getClientOriginalExtension();
                                $request->stakeholder_documents->move(public_path('stakeholder_documents'),$stakeholder_documentss);
                             }
                                        
                            $stakeholder=stakeholder::find($id);
                            $stakeholder->stakeholder_name=$request->stakeholder_name;
                            $stakeholder->agency=$request->agency;
                            $stakeholder->gender=$request->gender;
                            $stakeholder->id_number=$request->id_number;
                            $stakeholder->personal_mobile_number=$request->personal_mobile_number;
                            $stakeholder->family_mobile_number=$request->family_mobile_number;
                            $stakeholder->age=$request->age;
                            $stakeholder->province=$request->province;
                            $stakeholder->district=$request->district;
                            $stakeholder->village=$request->village;
                            $stakeholder->project=$request->project;
                            $stakeholder->role_in_the_project=$request->role_in_the_project;
                            $stakeholder->data_contaced=$request->data_contaced;
                            $stakeholder->feedback=$request->feedback;
                            $stakeholder->remarks=$request->remarks;

                            if($stakeholder_documentss){
                            $stakeholder->stakeholder_documents=$stakeholder_documentss;
                            }

                            $stakeholder->save();
                            return redirect(route('stakeholder.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\stakeholder  $stakeholder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stakeholder=stakeholder::find($id);
        
                $stakeholder->delete();
        
                unlink(public_path('stakeholder_documents/'.$stakeholder->stakeholder_documents));
                return redirect(route('stakeholder.index'));
    }

    public function getDistrictList(Request $request)
    {
        $province=DB::table('provinces')->where('name',$request->province_id)->first();
       
        $districts = DB::table("districts")->where("province_id",$province->id)->pluck("name","id");
        return response()->json($districts);
    }

    public function getVillageList(Request $request)
    {
        $district=DB::table('districts')->where('name',$request->district_id)->first();
        $villages = DB::table("villages")->where("district_id",$district->id)->pluck("name","id");
        return response()->json($villages);
    }
}
