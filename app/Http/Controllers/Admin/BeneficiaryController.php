<?php
namespace App\Http\Controllers\Admin;
use App\Model\admin\project\beneficiary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;


class BeneficiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $beneficiary=beneficiary::all();
        return view('admin.beneficiary.beneficiary_list',compact('beneficiary'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = DB::table("provinces")->pluck("name","id");
        return view('admin.beneficiary.beneficiary_create',compact('provinces'));
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
            
                        'beneficiary_name'=>'required',   
                        'father_name'=>'required',   
                        'gender'=>'required',   
                        'id_number'=>'required',   
                        'personal_mobile_number'=>'required',   
                        'family_mobile_number'=>'required',   
                        'age'=>'required',   
                        'province'=>'required',   
                        'district'=>'required',
                        'village'=>'required',
                        'head_of_the_village_council_name'=>'required',
                        'head_of_the_village_council_mobile_number'=>'required',
                        'project'=>'required',
                        'type_of_assistant_receiving_from_coar_office'=>'required',
                        'beneficiary_date'=>'required'
                        
                        
                    ]);

                     $beneficiary_documentss='';
                    
                             if($request->beneficiary_documents){
                    
                                $beneficiary_documentss=uniqid().'.'.$request->beneficiary_documents->getClientOriginalExtension();
                                $request->beneficiary_documents->move(public_path('beneficiary_documents'),$beneficiary_documentss);
                             }
                                        
                            $beneficiary=new beneficiary;
                            $beneficiary->beneficiary_name=$request->beneficiary_name;
                            $beneficiary->father_name=$request->father_name;
                            $beneficiary->gender=$request->gender;
                            $beneficiary->id_number=$request->id_number;
                            $beneficiary->personal_mobile_number=$request->personal_mobile_number;
                            $beneficiary->family_mobile_number=$request->family_mobile_number;
                            $beneficiary->age=$request->age;
                            $beneficiary->province=$request->province;
                            $beneficiary->district=$request->district;
                            $beneficiary->village=$request->village;
                            $beneficiary->head_of_the_village_council_name=$request->head_of_the_village_council_name;
                            $beneficiary->head_of_the_village_council_mobile_number=$request->head_of_the_village_council_mobile_number;
                            $beneficiary->project=$request->project;
                            $beneficiary->type_of_assistant_receiving_from_coar_office=$request->type_of_assistant_receiving_from_coar_office;
                            $beneficiary->beneficiary_date=$request->beneficiary_date;
                            $beneficiary->beneficiary_documents=$beneficiary_documentss;
                            $beneficiary->save();
                            return redirect(route('beneficiary.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beneficiary=beneficiary::find($id);
        $province=DB::table('provinces')->where('name',$beneficiary->province)->first();
        $district=DB::table('districts')->where('name',$beneficiary->district)->first();

        $provinces = DB::table("provinces")->where("name",'!=',$beneficiary->province)->pluck("name","id");
        $districts = DB::table("districts")->where("name",'!=',$beneficiary->district)->pluck("name","id");
        $villages = DB::table("villages")->where("name",'!=',$beneficiary->village)->pluck("name","id");
        return view('admin.beneficiary.beneficiary_show',compact('beneficiary','provinces','districts','villages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beneficiary=beneficiary::find($id);
        $province=DB::table('provinces')->where('name',$beneficiary->province)->first();
        $district=DB::table('districts')->where('name',$beneficiary->district)->first();

        $provinces=DB::table("provinces")->where("name",'!=',$beneficiary->province)->pluck("name","id");
        $districts=DB::table("districts")->where("name",'!=',$beneficiary->district)->pluck("name","id");
        $villages=DB::table("villages")->where("name",'!=',$beneficiary->village)->pluck("name","id");
        return view('admin.beneficiary.beneficiary_edit',compact('beneficiary','provinces','districts','villages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            
                        'beneficiary_name'=>'required',   
                        'father_name'=>'required',   
                        'gender'=>'required',   
                        'id_number'=>'required',   
                        'personal_mobile_number'=>'required',   
                        'family_mobile_number'=>'required',   
                        'age'=>'required',   
                        'province'=>'required',   
                        'district'=>'required',
                        'village'=>'required',
                        'head_of_the_village_council_name'=>'required',
                        'head_of_the_village_council_mobile_number'=>'required',
                        'project'=>'required',
                        'type_of_assistant_receiving_from_coar_office'=>'required',
                        'beneficiary_date'=>'required'
                        
                        
                    ]);

                     $beneficiary_documentss='';
                    
                             if($request->beneficiary_documents){
                    
                                $beneficiary_documentss=uniqid().'.'.$request->beneficiary_documents->getClientOriginalExtension();
                                $request->beneficiary_documents->move(public_path('beneficiary_documents'),$beneficiary_documentss);
                             }
                                        
                            $beneficiary=beneficiary::find($id);
                            $beneficiary->beneficiary_name=$request->beneficiary_name;
                            $beneficiary->father_name=$request->father_name;
                            $beneficiary->gender=$request->gender;
                            $beneficiary->id_number=$request->id_number;
                            $beneficiary->personal_mobile_number=$request->personal_mobile_number;
                            $beneficiary->family_mobile_number=$request->family_mobile_number;
                            $beneficiary->age=$request->age;
                            $beneficiary->province=$request->province;
                            $beneficiary->district=$request->district;
                            $beneficiary->village=$request->village;
                            $beneficiary->head_of_the_village_council_name=$request->head_of_the_village_council_name;
                            $beneficiary->head_of_the_village_council_mobile_number=$request->head_of_the_village_council_mobile_number;
                            $beneficiary->project=$request->project;
                            $beneficiary->type_of_assistant_receiving_from_coar_office=$request->type_of_assistant_receiving_from_coar_office;
                            $beneficiary->beneficiary_date=$request->beneficiary_date;

                            if($beneficiary_documentss){
                                $beneficiary->beneficiary_documents=$beneficiary_documentss;
                                }
                          
                            $beneficiary->save();
                            return redirect(route('beneficiary.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beneficiary=beneficiary::find($id);
        
                $beneficiary->delete();
        
                unlink(public_path('beneficiary_documents/'.$beneficiary->beneficiary_documents));
                return redirect(route('beneficiary.index'));
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
