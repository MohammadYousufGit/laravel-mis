<?php

namespace App\Http\Controllers\Admin;
use App\Model\admin\project\dips;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
class DIPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DIP=dips::all();
        return view('admin.DIP.dip_list',compact('DIP'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.DIP.dip_create');
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
            
                        'monthly_report'=>'required',
                        'status_achieved'=>'required',
                        'status_not_achieved'=>'required',
                        'status_reason'=>'required',
                        'comments_remarks'=>'required',
                        'date'=>'required'
                   
                    ]);

                     $dip_documentss='';
                    
                             if($request->dip_documents){
                    
                                $dip_documentss=uniqid().'.'.$request->dip_documents->getClientOriginalExtension();
                                $request->dip_documents->move(public_path('dip_documents'),$dip_documentss);
                             }
                                        
                            $dips=new dips;
                            $dips->monthly_report=$request->monthly_report;
                            $dips->status_achieved=$request->status_achieved;
                            $dips->status_not_achieved=$request->status_not_achieved;
                            $dips->status_reason=$request->status_reason;
                            $dips->comments_remarks=$request->comments_remarks;
                            $dips->date=$request->date;
                            $dips->dip_documents=$dip_documentss;
                            $dips->save();
                            return redirect(route('beneficiary.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DIP  $dIP
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $DIP=dips::find($id);
        return view('admin.DIP.dip_show',compact('DIP'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DIP  $dIP
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $DIP=dips::find($id);
        return view('admin.DIP.dip_edit',compact('DIP'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DIP  $dIP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[

                    'monthly_report'=>'required',
                    'status_achieved'=>'required',
                    'status_not_achieved'=>'required',
                    'status_reason'=>'required',
                    'comments_remarks'=>'required',
                    'date'=>'required'  
                    ]);

                     $dip_documentss='';
                    
                             if($request->dip_documents){
                    
                                $dip_documentss=uniqid().'.'.$request->dip_documents->getClientOriginalExtension();
                                $request->dip_documents->move(public_path('dip_documents'),$dip_documentss);
                             }
                                        
                            $dips=dips::find($id);
                            $dips->monthly_report=$request->monthly_report;
                            $dips->status_achieved=$request->status_achieved;
                            $dips->status_not_achieved=$request->status_not_achieved;
                            $dips->status_reason=$request->status_reason;
                            $dips->comments_remarks=$request->comments_remarks;
                            $dips->date=$request->date;
                            $dips->dip_documents=$dip_documentss;
                            $dips->save();
                            return redirect(route('DIP.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DIP  $dIP
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DIP=dips::find($id);
        $DIP->delete();
                unlink(public_path('dip_documents/'.$DIP->dip_documents));
                return redirect(route('DIP.index'));
    }
}

