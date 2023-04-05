@extends('admin.layouts.app')

@section('styles')

<style>
 option{
    color:black;
}

</style>

@endsection()


@section('main_content')

<form method="post"  action="{{ route('project.store') }}" enctype="multipart/form-data" >
                        {{csrf_field()}}



                <!--Project Mangement Check List-->
                <div class="card" id="project_mangement_checklist" style="display:none">
                        <div class="card-body">
                            <h4 class="card-title">Project Mangement Checklist</h4>
                          

                            <div class="accordion" role="tablist">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne" style="background:rgba(138, 132, 222, 0.36);">
                                        <a data-toggle="collapse"  href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                             Program Initiation and Design  
                                        </a>
                                    </div>

                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <table class="table mb-0">
                                            <thead>
                                            <td>Document List</td>
                                                <th>Yes  &nbsp;&nbsp;&nbsp;&nbsp;No&nbsp;&nbsp;&nbsp;&nbsp;N/A</th>
                                            
                                                <th>Upload Document</th>
                                        
                                                <th>Remarks</th>
                                            
                                            </thead>
                                        <tbody>
                                    
                                        
                                            @foreach($phase1 as $ph1)
                                            <tr>
                                            <td>
                                            <input type="hidden" style="display:none" value="{{ $ph1->name }}" name="statement_1[]" />
                                            <p>  {{ $ph1->name }} </p></td>
                                                <td> 
                                                    <div class="btn-group btn-group--colors" data-toggle="buttons">
                                                        <label class="btn"><input type="checkbox" name="status_1[]" autocomplete="off" value="1" id="first"></label>
                                                        <label class="btn "><input type="checkbox" name="status_1[]" autocomplete="off" value="2"></label>
                                                        <label class="btn "><input type="checkbox" name="status_1[]" autocomplete="off" value="3"></label>
                                                    </div>
                                                </td>
                                                <td><input type="file" name="files_1[]" multiple/></td>
                                                <td>
                                                    <div class="form-group">
                                                        <textarea name="remarks_1[]" class="form-control"></textarea>
                                                    </div>
                                                </td>
                                            
                                            </tr>

                                            @endforeach


                                        </tbody>
                                    </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo" style="background: #28a74594">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Design starts with goal based on impact
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                                        <div class="card-body">
                                        <table class="table mb-0">
                                            <thead>
                                            <td>Document List</td>
                                                <th>Yes  &nbsp;&nbsp;&nbsp;&nbsp;No&nbsp;&nbsp;&nbsp;&nbsp;N/A</th>
                                            
                                                <th>Upload Document</th>
                                        
                                                <th>Remarks</th>
                                            
                                            </thead>
                                        <tbody>
                                    
                                        
                                            @foreach($phase2 as $ph2)
                                            <tr>
                                            <td>
                                            <input type="hidden" style="display:none" value="{{ $ph2->name }}" name="statement_2[]"/>
                                            <p>  {{ $ph2->name }} </p></td>
                                                <td> 
                                                    <div class="btn-group btn-group--colors" data-toggle="buttons">
                                                        <label class="btn"><input type="checkbox" name="status_2[]" autocomplete="off" value="1"></label>
                                                        <label class="btn "><input type="checkbox" name="status_2[]" autocomplete="off" value="2"></label>
                                                        <label class="btn "><input type="checkbox" name="status_2[]" autocomplete="off" value="3"></label>
                                                    </div>
                                                </td>
                                                <td><input type="file" name="files_2[]" multiple/></td>
                                                <td>
                                                    <div class="form-group">
                                                        <textarea name="remarks_2[]" class="form-control"></textarea>
                                                    </div>
                                                </td>
                                            
                                            </tr>

                                            @endforeach


                                        </tbody>
                                    </table>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree" style="    background: #99a1f31a;">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Set Up and Implementation 
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                        <table class="table mb-0">
                                            <thead>
                                            <td>Document List</td>
                                                <th>Yes  &nbsp;&nbsp;&nbsp;&nbsp;No&nbsp;&nbsp;&nbsp;&nbsp;N/A</th>
                                            
                                                <th>Upload Document</th>
                                        
                                                <th>Remarks</th>
                                            
                                            </thead>
                                        <tbody>
                                    
                                        
                                            @foreach($phase3 as $ph3)
                                            <tr>
                                            <td>
                                            <input type="hidden" style="display:none" value="{{ $ph3->name }}" name="statement_3[]"/>
                                            <p>  {{ $ph3->name }} </p></td>
                                                <td> 
                                                    <div class="btn-group btn-group--colors" data-toggle="buttons">
                                                        <label class="btn"><input type="checkbox" name="status_3[]" autocomplete="off" value="1"></label>
                                                        <label class="btn "><input type="checkbox" name="status_3[]" autocomplete="off" value="2"></label>
                                                        <label class="btn "><input type="checkbox" name="status_3[]" autocomplete="off" value="3"></label>
                                                    </div>
                                                </td>
                                                <td><input type="file" name="files_3[]" multiple/></td>
                                                <td>
                                                    <div class="form-group">
                                                        <textarea name="remarks_3[]" class="form-control"></textarea>
                                                    </div>
                                                </td>
                                            
                                            </tr>

                                            @endforeach


                                        </tbody>
                                    </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingFour" style="background: #17a2b896">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Controlling (Monitoring & Evaluation) 
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body">
                                        <table class="table mb-0">
                                            <thead>
                                            <td>Document List</td>
                                                <th>Yes  &nbsp;&nbsp;&nbsp;&nbsp;No&nbsp;&nbsp;&nbsp;&nbsp;N/A</th>
                                            
                                                <th>Upload Document</th>
                                        
                                                <th>Remarks</th>
                                            
                                            </thead>
                                        <tbody>
                                    
                                        
                                            @foreach($phase4 as $ph4)
                                            <tr>
                                            <td>
                                            <input type="hidden" style="display:none" value="{{ $ph4->name }}" name="statement_4[]"/>
                                            <p>  {{ $ph4->name }} </p></td>
                                                <td> 
                                                    <div class="btn-group btn-group--colors" data-toggle="buttons">
                                                        <label class="btn"><input type="checkbox" name="status_4[]" autocomplete="off" value="1"></label>
                                                        <label class="btn "><input type="checkbox" name="status_4[]" autocomplete="off" value="2"></label>
                                                        <label class="btn "><input type="checkbox" name="status_4[]" autocomplete="off" value="3"></label>
                                                    </div>
                                                </td>
                                                <td><input type="file" name="files_4[]" multiple/></td>
                                                <td>
                                                    <div class="form-group">
                                                        <textarea name="remarks_4[]" class="form-control"></textarea>
                                                    </div>
                                                </td>
                                            
                                            </tr>

                                            @endforeach


                                        </tbody>
                                    </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingFive" style="background:#dc354547">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                           End of Project Transition 
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body">
                                        <table class="table mb-0">
                                            <thead>
                                            <td>Document List</td>
                                                <th>Yes  &nbsp;&nbsp;&nbsp;&nbsp;No&nbsp;&nbsp;&nbsp;&nbsp;N/A</th>
                                            
                                                <th>Upload Document</th>
                                        
                                                <th>Remarks</th>
                                            
                                            </thead>
                                        <tbody>
                                    
                                        
                                            @foreach($phase5 as $ph5)
                                            <tr>
                                            <td>
                                            <input type="hidden" style="display:none" value="{{ $ph5->name }}" name="statement_5[]"/>
                                            <p>  {{ $ph5->name }} </p></td>
                                                <td> 
                                                    <div class="btn-group btn-group--colors" data-toggle="buttons">
                                                        <label class="btn"><input type="checkbox" name="status_5[]" autocomplete="off" value="1"></label>
                                                        <label class="btn "><input type="checkbox" name="status_5[]" autocomplete="off" value="2"></label>
                                                        <label class="btn "><input type="checkbox" name="status_5[]" autocomplete="off" value="3"></label>
                                                    </div>
                                                </td>
                                                <td><input type="file" name="files_5[]" multiple/></td>
                                                <td>
                                                    <div class="form-group">
                                                        <textarea name="remarks_5[]" class="form-control"></textarea>
                                                    </div>
                                                </td>
                                            
                                            </tr>

                                            @endforeach


                                        </tbody>
                                    </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div  class="col-sm-12" style="text-align:center!important">
                                <h4 style=" text-align:center">Project Status  </h4>
                                <hr>
                            </div>

                        <div class="col-sm-12 text-center">

                                <label>Ongoing</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Closed</label>

                        </div>

                       


                        <div class="col-sm-12 text-center">

                            
                        


                       
                        
                        <div class="btn-group btn-group--colors" data-toggle="buttons">
                            
                                &nbsp;&nbsp;<label class="btn "><input type="radio" name="project_status" autocomplete="off" value="1"></label>&nbsp;&nbsp;&nbsp;&nbsp;
                           &nbsp;&nbsp;&nbsp;&nbsp;
                           <label class="btn "><input type="radio" name="project_status" autocomplete="off" value="2"></label>
                        </div>

                    </div>

                    

                        

                    
                         <br>
                        <div class="col-sm-12">
                                  
                                  <div class="form-group text-center">
                                   <div class="btn-demo">
                                        <button type="button" id="back" class="btn btn-success " style="width:100px;cursor:pointer"> Back</button>

                                        <button type="submit"  class="btn btn-primary " style="width:100px;cursor:pointer"> Save</button>
                                       
                                    </div>
                                    </div>
                        </div>

                    </div>

                   <!--End Project Management Checklist -->

<div class="card" id="project_create" >
    <div class="card-body">
            <h4 class="card-title" style="font-size:25px;text-align:center">Program / New Project Entry Form</h4>
                            <!-- <h6 class="card-subtitle">A plugin to make masks on form fields for better instant validations.</h6> -->
                        <hr>
                        <br>
                       

                         @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Project Name</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('project_name') ? 'is-invalid':''}}" value="{{old('project_name')}}" name="project_name" id="project_name" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('project_name'))
                                       <strong style="color:#dc3545">{{$errors->first('project_name')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Project Code</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('project_code') ? 'is-invalid':''}}" value="{{old('project_code')}}" name="project_code" id="project_code"  placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('project_code'))
                                       <strong style="color:#dc3545">{{$errors->first('project_code')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <input type="text" class="form-control date-picker {{$errors->has('project_start_date') ? 'is-invalid':''}}" value="{{old('project_start_date')}}" name="project_start_date" id="project_start_date"  placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('project_start_date'))
                                       <strong style="color:#dc3545">{{$errors->first('project_start_date')}}</strong>
                                       @endif
                                    </div>
                                </div>

                            <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="text" class="form-control date-picker input-mask {{$errors->has('project_end_date') ? 'is-invalid':''}}" value="{{old('project_end_date')}}" name="project_end_date" id="project_end_date"  placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('project_end_date'))
                                       <strong style="color:#dc3545">{{$errors->first('project_end_date')}}</strong>
                                       @endif
                                    </div>
                            </div>

                               
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Donor</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('project_donor') ? 'is-invalid':''}}" value="{{old('project_donor')}}" name="project_donor" id="project_donor"  placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('project_donor'))
                                       <strong style="color:#dc3545">{{$errors->first('project_donor')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Location</label>
                                    <input type="text" class="form-control input-mask {{$errors->has('project_location') ? 'is-invalid':''}}"  value="{{old('project_location')}}" name="project_location" id="project_location"  placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('project_location'))
                                       <strong style="color:#dc3545">{{$errors->first('project_location')}}</strong>
                                       @endif
                                    </div>
                                </div>


                                <div class="col-sm-3">
                                <label>Budget</label>
                                    <div class="form-group">
                                        <div class="select" >
                                            <select class="form-control"  name="p_budget_currency" id="p_budget_currency">
                                            <option style="color:black" value="USD" {{old('p_budget_currency')=="USD"?'selected':''}}>USD</option>
                                                <option style="color:black" value="AFG" {{old('p_budget_currency')=="AFG"?'selected':''}}>AFG</option> 
                                                <option style="color:black" value="Pound" {{old('p_budget_currency')=="Pound"?'selected':''}}>Pound</option> 
                                                <option style="color:black" value="EUR" {{old('p_budget_currency')=="EUR"?'selected':''}}>EUR</option> 
                                            </select>
                                        </div>

                                        @if($errors->has('p_budget_currency'))
                                        <strong style="color:#dc3545">{{$errors->first('p_budget_currency')}}</strong>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                    <label>Budget Amount</label>
                                            <input type="text" class="form-control input-mask {{$errors->has('p_budget') ? 'is-invalid':''}}" value="{{old('p_budget')}}" name="p_budget" id="p_budget"  placeholder="">
                                            <i class="form-group__bar"></i>
                                            @if($errors->has('p_budget'))
                                            <strong style="color:#dc3545">{{$errors->first('p_budget')}}</strong>
                                            @endif

                                    </div>
                                </div>


                                <div class="col-sm-3 "  id="budget_amount_in_usd" >
                                    <div class="form-group">
                                    <label>Budget Amount In USD</label>
                                    
                                            <input type="text" class="form-control input-mask {{$errors->has('p_budget_in_usd') ? 'is-invalid':''}}" value="{{old('p_budget_in_usd')}}" name="p_budget_in_usd" id="project_budget_in_usd"  placeholder="">
                                            <i class="form-group__bar"></i>
                                            @if($errors->has('p_budget_in_usd'))
                                            <strong style="color:#dc3545">{{$errors->first('p_budget_in_usd')}}</strong>
                                            @endif
                                        </div>
                                </div>

                                <div class="col-sm-3 "  id="budget_holder" >
                                    <div class="form-group">
                                    <label>Budget Holder</label>
                                    
                                            <input type="text" class="form-control input-mask {{$errors->has('project_budget_holder') ? 'is-invalid':''}}" value="{{old('project_budget_holder')}}" name="project_budget_holder" id="budget_holder"  placeholder="">
                                            <i class="form-group__bar"></i>

                                            @if($errors->has('project_budget_holder'))
                                            <strong style="color:#dc3545">{{$errors->first('project_budget_holder')}}</strong>
                                            @endif
                                            
                                        </div>
                                </div>


                                <div class="col-sm-3">
                                <label>Sector</label>
                                    <div class="form-group">
                                        <div class="select" >
                                            <select class="form-control"  name="main_sector" id="main_sector">
                                                <option value=""></option>
                                            <option  value="Education/EiE" >Education/EiE</option>
                                                <option  value="Livelihood">Livelihood</option> 
                                                <option  value="Engineering/Wash">Engineering/Wash</option> 
                                                <option  value="Shelter">Shelter</option> 
                                                <option  value="DRR">DRR</option> 
                                                <option  value="Protection">Protection</option> 
                                                <option  value="Health">Health</option> 
                                                <option  value="Media and Advocacy">Media and Advocacy</option> 
                                                <option  value="other">Other</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-3" style="display:none" id="sub_sector_container">
                                <label>Project Type</label>
                                    <div class="form-group">
                                        <div class="select" >
                                            <select class="form-control"  name="sub_sector" id="sub_sector">
                            
                                            </select>
                                        </div>
                                    </div>
                                </div>



                    </div>



                                <br>

                    <div class="row">
                                <div  class="col-sm-12" style="text-align:center!important">
                                    <h4 style=" text-align:center">Project Beneficires  </h4>
                                    <hr>
                                </div>

                                <br>
                              

                                <div class="col-sm-12">
                                <div class="form-group">
                                    <h6   >Beneficires IDP</h6>
                                   
                                </div>
                                </div>

                            <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Male</label>
                                    <input class="form-control" type="text" name="p_idp_male" value="{{old('p_idp_male')}}" >  
                                        <i class="form-group__bar"></i>  
                                        @if($errors->has('p_idp_male'))
                                        <strong style="color:#dc3545">{{$errors->first('p_idp_male')}}</strong>
                                        @endif

                                        
                                    </div>
                            </div>
                                
                            <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Female</label>
                                    <input class="form-control" type="text"  name="p_idp_female" value="{{old('p_idp_female')}}"  > 
                                        <i class="form-group__bar"></i>   
                                        @if($errors->has('p_idp_female'))
                                        <strong style="color:#dc3545">{{$errors->first('p_idp_female')}}</strong>
                                        @endif
                                    </div>
                            </div>

                            <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Boys</label>
                                        <input class="form-control" type="text"  name="p_idp_boys"  value="{{old('p_idp_boys')}}">    
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('p_idp_boys'))
                                        <strong style="color:#dc3545">{{$errors->first('p_idp_boys')}}</strong>
                                        @endif
                                    </div>
                            </div>

                            <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Girls</label>
                                    <input class="form-control" type="text" name="p_idp_girls" value="{{old('p_idp_girls')}}"> 
                                        <i class="form-group__bar"></i>  
                                        @if($errors->has('p_idp_girls'))
                                        <strong style="color:#dc3545">{{$errors->first('p_idp_girls')}}</strong>
                                        @endif 
                                    </div>
                            </div>
                            
                                <div class="col-sm-12">
                                <div class="form-group">
                                    
                                    <h6>Beneficires Returnees </h6>
                                
                                </div>
                                </div>

                             
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Male</label>
                                    <input class="form-control" type="text" name="p_ret_male" value="{{old('p_ret_male')}}">  
                                        <i class="form-group__bar"></i>  
                                        @if($errors->has('p_ret_male'))
                                        <strong style="color:#dc3545">{{$errors->first('p_ret_male')}}</strong>
                                        @endif 
                                    </div>
                            </div>
                                
                            <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Female</label>
                                    <input class="form-control" type="text" name="p_ret_female" value="{{old('p_ret_female')}}"> 
                                        <i class="form-group__bar"></i> 
                                        @if($errors->has('p_ret_female'))
                                        <strong style="color:#dc3545">{{$errors->first('p_ret_female')}}</strong>
                                        @endif   
                                    </div>
                            </div>

                            <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Boys</label>
                                    <input class="form-control" type="text" name="p_ret_boys" value="{{old('p_ret_boys')}}">    
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('p_ret_boys'))
                                        <strong style="color:#dc3545">{{$errors->first('p_ret_boys')}}</strong>
                                        @endif 
                                    </div>
                            </div>

                            <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Girls</label>
                                    <input class="form-control" type="text" name="p_ret_girls" value="{{old('p_ret_girls')}}"> 
                                        <i class="form-group__bar"></i>   
                                        @if($errors->has('p_ret_girls'))
                                        <strong style="color:#dc3545">{{$errors->first('p_ret_girls')}}</strong>
                                        @endif 
                                    </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    
                                    <h6>Beneficires Refugees </h6>
                                    
                                </div>
                            </div>

                            <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Male</label>
                                    <input class="form-control" type="text" name="p_ref_male" value="{{old('p_ref_male')}}">  
                                        <i class="form-group__bar"></i>  
                                        @if($errors->has('p_ref_male'))
                                        <strong style="color:#dc3545">{{$errors->first('p_ref_male')}}</strong>
                                        @endif 
                                    </div>
                            </div>
                                
                            <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Female</label>
                                    <input class="form-control" type="text" name="p_ref_female" value="{{old('p_ref_female')}}"> 
                                        <i class="form-group__bar"></i>   
                                        @if($errors->has('p_ref_female'))
                                        <strong style="color:#dc3545">{{$errors->first('p_ref_female')}}</strong>
                                        @endif 
                                    </div>
                            </div>

                            <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Boys</label>
                                    <input class="form-control" type="text" name="p_ref_boys" value="{{old('p_ref_boys')}}">    
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('p_ref_boys'))
                                        <strong style="color:#dc3545">{{$errors->first('p_ref_boys')}}</strong>
                                        @endif 
                                    </div>
                            </div>

                            <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Girls</label>
                                    <input class="form-control" type="text" name="p_ref_girls" value="{{old('p_ref_girls')}}"> 
                                        <i class="form-group__bar"></i>   
                                        @if($errors->has('p_ref_girls'))
                                        <strong style="color:#dc3545">{{$errors->first('p_ref_girls')}}</strong>
                                        @endif 
                                    </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    
                                    <h6>Beneficires Host Community </h6>
                                    
                                </div>
                            </div>
                             <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Male</label>
                                    <input class="form-control" type="text" name="p_host_community_male" value="{{old('p_host_community_male')}}">  
                                        <i class="form-group__bar"></i> 
                                        @if($errors->has('p_host_community_male'))
                                        <strong style="color:#dc3545">{{$errors->first('p_host_community_male')}}</strong>
                                        @endif  
                                    </div>
                            </div>
                                
                            <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Female</label>
                                    <input class="form-control" type="text" name="p_host_community_female" value="{{old('p_host_community_female')}}"> 
                                        <i class="form-group__bar"></i>   
                                        @if($errors->has('p_host_community_female'))
                                        <strong style="color:#dc3545">{{$errors->first('p_host_community_female')}}</strong>
                                        @endif 
                                    </div>
                            </div>

                            <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Boys</label>
                                    <input class="form-control" type="text" name="p_host_community_boys" value="{{old('p_host_community_boys')}}">    
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('p_host_community_boys'))
                                        <strong style="color:#dc3545">{{$errors->first('p_host_community_boys')}}</strong>
                                        @endif 
                                    </div>
                            </div>

                            <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Girls</label>
                                    <input class="form-control" type="text" name="p_host_community_girls" value="{{old('p_host_community_girls')}}"> 
                                        <i class="form-group__bar"></i>  
                                        @if($errors->has('p_host_community_girls'))
                                        <strong style="color:#dc3545">{{$errors->first('p_host_community_girls')}}</strong>
                                        @endif  
                                    </div>
                            </div>



                </div>


                <div class="row">


                <div  class="col-sm-3">
                    <div class="form-group">
                    <label>Total Number of Families</label>
                    <input class="form-control" type="text" name="total_number_of_families" value="{{old('total_number_of_families')}}">  
                                            <i class="form-group__bar"></i> 
                                            @if($errors->has('total_number_of_families'))
                                        <strong style="color:#dc3545">{{$errors->first('total_number_of_families')}}</strong>
                                        @endif 
                    </div>
                </div>

                </div>

                
                  


                  <br><br>






                  <div class="row">


                    <div  class="col-sm-12" style="text-align:center!important">
                        <h4 style=" text-align:center">Staff </h4>
                        <hr>
                    </div>

                


              


                    <div class="col-sm-6">


                    <div class="row">

                    <div class="col-sm-12">
                                <div class="form-group">
                                    <h6>Technical Staff </h6>
                                </div>
                    </div>
                   
                    <div class="col-sm-5">
                            <div class="form-group">
                                <label>Male</label>
                            <input class="form-control" type="text" name="p_technical_staff_male" value="{{old('p_technical_staff_male')}}">    
                                <i class="form-group__bar"></i>
                                @if($errors->has('p_technical_staff_male'))
                                        <strong style="color:#dc3545">{{$errors->first('p_technical_staff_male')}}</strong>
                                @endif 
                            </div>
                    </div>

                    <div class="col-sm-5">
                            <div class="form-group">
                                <label>Female</label>
                            <input class="form-control" type="text" name="p_technical_staff_female" value="{{old('p_technical_staff_female')}}"> 
                                <i class="form-group__bar"></i> 
                                @if($errors->has('p_technical_staff_female'))
                                        <strong style="color:#dc3545">{{$errors->first('p_technical_staff_female')}}</strong>
                                @endif   
                            </div>
                    </div>


                   
                    
                    </div>

                    
                    </div>

                    <div class="col-sm-6">
                    <div class="row">

                    <div class="col-sm-12">
                                <div class="form-group">
                                    <h6>Support Staff </h6>
                                </div>
                    </div>
                   
                    <div class="col-sm-5">
                            <div class="form-group">
                                <label>Male</label>
                            <input class="form-control" type="text" name="p_support_staff_male" value="{{old('p_support_staff_male')}}">    
                                <i class="form-group__bar"></i>
                                @if($errors->has('p_support_staff_male'))
                                <strong style="color:#dc3545">{{$errors->first('p_support_staff_male')}}</strong>
                        @endif 
                            </div>
                    </div>

                    <div class="col-sm-5">
                            <div class="form-group">
                                <label>Female</label>
                            <input class="form-control" type="text" name="p_support_staff_female" value="{{old('p_support_staff_female')}}"> 
                                <i class="form-group__bar"></i> 
                                @if($errors->has('p_support_staff_female'))
                                <strong style="color:#dc3545">{{$errors->first('p_support_staff_female')}}</strong>
                               @endif   
                            </div>
                    </div>


                   
                    
                    </div>
                    </div>

                  



                 
                

                    <div class="col-sm-12">
                    <div class="form-group">
                                        <label> Project Goal</label>
                    <textarea name="project_goal" rows="5" class="form-control">{{old('project_goal')}}</textarea>
                                        <i class="form-group__bar"></i>

                                        @if($errors->has('project_goal'))
                                        <strong style="color:#dc3545">{{$errors->first('project_goal')}}</strong>
                                       @endif 


                                       
                                    </div>
                    </div>


                    <div class="col-sm-12">
                                    <div class="form-group">
                                        <label> Project Objectives</label>
                                    <textarea name="project_objectives" rows="5" class="form-control">{{old('project_objectives')}}</textarea>
                                        <i class="form-group__bar"></i>

                                        @if($errors->has('project_objectives'))
                                        <strong style="color:#dc3545">{{$errors->first('project_objectives')}}</strong>
                                       @endif 
                                       
                                    </div>
                    </div>






                    
                   

                    
                    


                    
                                <div class="col-sm-12">
                                  
                                    <div class="form-group text-center">
                                     <div class="btn-demo">
                                         
                                          <a href="{{route('project.index')}}" class="btn btn-danger" style="width:100px">Cancel</a>
                                          <button type="button" id="next" class="btn btn-success " style="width:100px;cursor:pointer"> Next</button>
                                      </div>
                                      </div>
                                </div>

                                
                            </div>
                       
                        </div>
                    </div>



                    </form>

@endsection

@section('scripts')


<script>
  

  $(document).ready(function(){

        $('#next').on('click',function(){
            $('#project_create').hide(1000);
            $('#project_mangement_checklist').show(1000);
            
        });

        $('#back').on('click',function(){
            $('#project_mangement_checklist').hide(1000);
            $('#project_create').show(1000);
        
        });


        $('#main_sector').on('change',function(){
            value=$(this).val();
            if(!value || value=="DRR" || value=="Shelter" || value=="Protection" || value=="other" || value=="Health" || value=="Media and Advocacy"){
                $('#sub_sector_container').css('display','none');
            }else{
                 
                $('#sub_sector_container').css('display','block');
                $('#sub_sector').empty();
                if(value=="Education/EiE"){
                    $('#sub_sector').append('<option value="CBE">CBE</option>');
                    $('#sub_sector').append('<option value="ALC">ALC</option>');
                    $('#sub_sector').append('<option value="Pre_School">Pre-School</option>');
                    $('#sub_sector').append('<option value="Catch Up Classes">Catch Up Classes</option>');
                    $('#sub_sector').append('<option value="Capacity building and Training">Capacity building and Training</option>');
                    $('#sub_sector').append('<option value="Higher Education">Higher Education</option>');
		
                }else if(value=="Livelihood"){
                    $('#sub_sector').append('<option value="Agricalture">Agricalture</option>');
                    $('#sub_sector').append('<option value="Livestock">Livestock</option>');
                    $('#sub_sector').append('<option value="Food Security">Food Security</option>');
                    $('#sub_sector').append('<option value="Vocational Skills">Vocational Skills</option>');
                    $('#sub_sector').append('<option value="Poverity Allivation">Poverity Allivation</option>');
                    $('#sub_sector').append('<option value="Value Chain Development">Value Chain Development</option>');
                    $('#sub_sector').append('<option value="Economic Empowerment">Economic Empowerment</option>');

                }else{
                    $('#sub_sector').append('<option value="WASH in Emergency">WASH in Emergency</option>');
                    $('#sub_sector').append('<option value="WASH in Develoopment">WASH in Develoopment</option>');
                    $('#sub_sector').append('<option value="WASH in School">WASH in School</option>');
                    $('#sub_sector').append('<option value="Engeneering">Engeneering</option>');
                }
                

                
            }
            
             
        });
  });







</script>
                    
@endsection


