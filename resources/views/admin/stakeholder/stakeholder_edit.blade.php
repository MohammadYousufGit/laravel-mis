@extends('admin.layouts.app')

@section('styles')

@endsection()


@section('main_content')


<div class="card">
    <div class="card-body">
            <h4 class="card-title" style="font-size:25px;text-align:center">Program / Stakeholder's Profile Edit Form</h4>
                            <!-- <h6 class="card-subtitle">A plugin to make masks on form fields for better instant validations.</h6> -->
                        <hr>
                        <br>
                        <form method="post"  action="{{route('stakeholder.update',$stakeholder->id)}}" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        {{method_field('put')}}

                        <!-- @foreach($errors->all() as $error)
                    
                        @endforeach -->
                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Stakeholder's Name</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('stakeholder_name') ? 'is-invalid':''}}" value="{{old('stakeholder_name',$stakeholder->stakeholder_name)}}" name="stakeholder_name" id="stakeholder_name" data-mask="00/00/0000" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('stakeholder_name'))
                                       <strong style="color:#dc3545">{{$errors->first('stakeholder_name')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Agency</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('agency') ? 'is-invalid':''}}" value="{{old('agency',$stakeholder->agency)}}" name="agency" id="agency" data-mask="00/00/0000" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('agency'))
                                       <strong style="color:#dc3545">{{$errors->first('agency')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                <label>Gender</label>
                                    <div class="form-group">
                                        <div class="select" >
                                            <select class="form-control"  name="gender" id="gender">
                                                <option style="color:black" value="Male" {{$stakeholder->gender=='Male'?'selected':''}} >Male</option>
                                                <option style="color:black" value="Female" {{$stakeholder->gender=='Female'?'selected':''}}>Female</option> 
                                            </select>
                                    </div>

                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>ID Number</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('id_number') ? 'is-invalid':''}}" value="{{old('id_number',$stakeholder->id_number)}}" name="id_number" id="id_number" data-mask="" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('id_number'))
                                       <strong style="color:#dc3545">{{$errors->first('id_number')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Personal Mobile Number</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('personal_mobile_number') ? 'is-invalid':''}}" value="{{old('personal_mobile_number',$stakeholder->personal_mobile_number)}}" name="personal_mobile_number" id="personal_mobile_number" data-mask="" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('personal_mobile_number'))
                                       <strong style="color:#dc3545">{{$errors->first('personal_mobile_number')}}</strong>
                                       @endif
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Family Mobile Number</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('family_mobile_number') ? 'is-invalid':''}}" value="{{old('family_mobile_number',$stakeholder->family_mobile_number)}}" name="family_mobile_number" id="family_mobile_number" data-mask="" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('family_mobile_number'))
                                       <strong style="color:#dc3545">{{$errors->first('family_mobile_number')}}</strong>
                                       @endif
                                    </div>
                                </div>


                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Age</label> 
                                        <input type="text" class="form-control input-mask {{$errors->has('age') ? 'is-invalid':''}}" value="{{old('age',$stakeholder->age)}}" name="age" id="age" data-mask="" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('age'))
                                       <strong style="color:#dc3545">{{$errors->first('age')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                <label>Province</label>
                                    <div class="form-group" >
                                            <div class="select">
                                                <select class="form-control" id="province" name="province" >
                                                    <option value="{{$stakeholder->province}}" >{{$stakeholder->province}}</option>
                                                    @foreach($provinces as  $province)
                                                    <option value="{{$province}}">{{$province}}</option> 
                                                    @endforeach
                                                </select>
                                            </div>
                                    </div>
                                </div>


                                <div class="col-sm-3">
                                <label>District</label>
                                    <div class="form-group" >
                                            <div class="select">
                                                <select class="form-control"  name="district" id="district">
                                                <option value="{{$stakeholder->district}}" >{{$stakeholder->district}}</option>
                                                    @foreach($districts as  $district)
                                                    <option value="{{$district}}">{{$district}}</option> 
                                                    @endforeach
                                                </select>
                                            </div>
                                    </div>
                                </div>


                                <div class="col-sm-3">
                                <label>Village</label>
                                    <div class="form-group" >
                                            <div class="select">
                                                <select class="form-control"  name="village" id="village">
                                                <option value="{{$stakeholder->village}}" >{{$stakeholder->village}}</option>
                                                    @foreach($villages as  $villages)
                                                    <option value="{{$villages}}">{{$villages}}</option> 
                                                    @endforeach   
                                                </select>
                                            </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Project</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('project') ? 'is-invalid':''}}" value="{{old('project',$stakeholder->project)}}"  name="project" id="project" data-mask="" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('project'))
                                       <strong style="color:#dc3545">{{$errors->first('project')}}</strong>
                                       @endif
                                    </div>
                                </div>


                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Role In the Project</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('role_in_the_project') ? 'is-invalid':''}}"  value="{{old('role_in_the_project',$stakeholder->role_in_the_project)}}" name="role_in_the_project" id="role_in_the_project" data-mask="" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('role_in_the_project'))
                                       <strong style="color:#dc3545">{{$errors->first('role_in_the_project')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <label>Date Contacted</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="form-group">
                                            <input type="text" class="form-control date-picker"  class="form-control input-mask {{$errors->has('data_contaced') ? 'is-invalid':''}}" value="{{old('data_contaced',$stakeholder->data_contaced)}}" name="data_contaced" id="data_contaced" placeholder="Pick a date">
                                            <i class="form-group__bar"></i>
                                            @if($errors->has('data_contaced'))
                                           <strong style="color:#dc3545">{{$errors->first('data_contaced')}}</strong>
                                           @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Feedback</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('feedback') ? 'is-invalid':''}}"  value="{{old('feedback',$stakeholder->feedback)}}" name="feedback" id="feedback" data-mask="" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('feedback'))
                                       <strong style="color:#dc3545">{{$errors->first('feedback')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Remarks</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('qarardad_date') ? 'is-invalid':''}}" value="{{old('remarks',$stakeholder->remarks)}}" name="remarks" id="remarks" data-mask="" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('remarks'))
                                       <strong style="color:#dc3545">{{$errors->first('remarks')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <!-- <label>Stakeholder's Documents</label> -->
                                        <input type="file" style="padding-top:22px;"  class="form-control input-mask {{$errors->has('stakeholder_documents') ? 'is-invalid':''}}" name="stakeholder_documents" id="stakeholder_documents" data-mask="" placeholder="">
                                        <label style="text-align:right;">Previouse documents</label><a href="{{asset('stakeholder_documents/'.$stakeholder->stakeholder_documents)}}" Disabled style="margin-bottom:30px;text-align:left!important;" target="_blank" class="form-control">{{$stakeholder->stakeholder_documents}}</a>                                        <i class="form-group__bar"></i>
                                        @if($errors->has('stakeholder_documents'))
                                       <strong style="color:#dc3545">{{$errors->first('stakeholder_documents')}}</strong>
                                       @endif
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                     <div class="btn-demo">
                                          <button type="submit" class="btn btn-success">Save</button>
                                          <a href="{{route('stakeholder.index')}}" class="btn btn-danger">Cancel</a>
                                      </div>
                                      </div>
                                </div>

                                
                            </div>
                        </form>
                        </div>
                    </div>


@endsection

@section('scripts')
                    
<script type="text/javascript">
    $('#province').change(function(){
    var provinceID = $(this).val();    
    if(provinceID){
        $.ajax({
           type:"GET",
           url:"{{url('get-district-list')}}?province_id="+provinceID,
           success:function(res){    
                        
            if(res){

                $("#district").empty();
                $("#district").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#district").append('<option value="'+value+'">'+value+'</option>');
                });
           
            }else{
               $("#district").empty();
            }
           }
        });
    }else{
        $("#district").empty();
        $("#village").empty();
    }      
   });
    $('#district').on('change',function(){
    var districtID = $(this).val();    
    if(districtID){
        $.ajax({
           type:"GET",
           url:"{{url('get-village-list')}}?district_id="+districtID,
           success:function(res){               
            if(res){
                $("#village").empty();
                $.each(res,function(key,value){
                    $("#village").append('<option value="'+value+'">'+value+'</option>');
                });
           
            }else{
               $("#village").empty();
            }
           }
        });
    }else{
        $("#village").empty();
    }
        
   });
</script>



@endsection


