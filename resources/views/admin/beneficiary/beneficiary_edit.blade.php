@extends('admin.layouts.app')

@section('styles')

@endsection()


@section('main_content')


<div class="card">
    <div class="card-body">
            <h4 class="card-title" style="font-size:25px;text-align:center">Program / Beneficiary's Profile Edit Form</h4>
                            <!-- <h6 class="card-subtitle">A plugin to make masks on form fields for better instant validations.</h6> -->
                        <hr>
                        <br>
                        <form method="post"  action="{{route('beneficiary.update',$beneficiary->id)}}" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        {{method_field('put')}}

                        <!-- @foreach($errors->all() as $error)
                    
                        @endforeach -->
                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Beneficiary's Name</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('beneficiary_name') ? 'is-invalid':''}}" value="{{old('beneficiary_name',$beneficiary->beneficiary_name)}}" name="beneficiary_name" id="beneficiary_name" data-mask="00/00/0000" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('beneficiary_name'))
                                       <strong style="color:#dc3545">{{$errors->first('beneficiary_name')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Father Name</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('father_name') ? 'is-invalid':''}}" value="{{old('father_name',$beneficiary->father_name)}}" name="father_name" id="father_name" data-mask="00/00/0000" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('father_name'))
                                       <strong style="color:#dc3545">{{$errors->first('father_name')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                <label>Gender</label>
                                    <div class="form-group">
                                        <div class="select" >
                                            <select class="form-control"  name="gender" id="gender">
                                                <option style="color:black" value="Male" {{$beneficiary->gender=='Male'?'selected':''}} >Male</option>
                                                <option style="color:black" value="Female" {{$beneficiary->gender=='Female'?'selected':''}}>Female</option> 
                                            </select>
                                    </div>

                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>ID Number</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('id_number') ? 'is-invalid':''}}" value="{{old('id_number',$beneficiary->id_number)}}" name="id_number" id="id_number" data-mask="" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('id_number'))
                                       <strong style="color:#dc3545">{{$errors->first('id_number')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Personal Mobile Number</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('personal_mobile_number') ? 'is-invalid':''}}" value="{{old('personal_mobile_number',$beneficiary->personal_mobile_number)}}" name="personal_mobile_number" id="personal_mobile_number" data-mask="" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('personal_mobile_number'))
                                       <strong style="color:#dc3545">{{$errors->first('personal_mobile_number')}}</strong>
                                       @endif
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Family Mobile Number</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('family_mobile_number') ? 'is-invalid':''}}" value="{{old('family_mobile_number',$beneficiary->family_mobile_number)}}" name="family_mobile_number" id="family_mobile_number" data-mask="" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('family_mobile_number'))
                                       <strong style="color:#dc3545">{{$errors->first('family_mobile_number')}}</strong>
                                       @endif
                                    </div>
                                </div>


                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Age</label> 
                                        <input type="text" class="form-control input-mask {{$errors->has('age') ? 'is-invalid':''}}" value="{{old('age',$beneficiary->age)}}" name="age" id="age" data-mask="" placeholder="">
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
                                                    <option value="{{$beneficiary->province}}" >{{$beneficiary->province}}</option>
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
                                                <option value="{{$beneficiary->district}}" >{{$beneficiary->district}}</option>
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
                                                <option value="{{$beneficiary->village}}" >{{$beneficiary->village}}</option>
                                                    @foreach($villages as  $villages)
                                                    <option value="{{$villages}}">{{$villages}}</option> 
                                                    @endforeach   
                                                </select>
                                            </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Head of the village council (Name)</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('head_of_the_village_council_name') ? 'is-invalid':''}}" value="{{old('head_of_the_village_council_name',$beneficiary->head_of_the_village_council_name)}}"  name="head_of_the_village_council_name" id="head_of_the_village_council_name" data-mask="" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('head_of_the_village_council_name'))
                                       <strong style="color:#dc3545">{{$errors->first('head_of_the_village_council_name')}}</strong>
                                       @endif
                                    </div>
                                </div>


                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Head of the village council (Number)</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('head_of_the_village_council_mobile_number') ? 'is-invalid':''}}"  value="{{old('head_of_the_village_council_mobile_number',$beneficiary->head_of_the_village_council_mobile_number)}}" name="head_of_the_village_council_mobile_number" id="head_of_the_village_council_mobile_number" data-mask="" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('head_of_the_village_council_mobile_number'))
                                       <strong style="color:#dc3545">{{$errors->first('head_of_the_village_council_mobile_number')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Project</label>
                                    <input type="text" class="form-control input-mask {{$errors->has('project') ? 'is-invalid':''}}" value="{{old('project',$beneficiary->project)}}"  name="project" id="project" data-mask="" placeholder="">
                                    <i class="form-group__bar"></i>
                                    @if($errors->has('project'))
                                   <strong style="color:#dc3545">{{$errors->first('project')}}</strong>
                                   @endif
                                </div>
                            </div>

                            <div class="col-sm-4">
                            <label>Date</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                <div class="form-group">
                                    <input type="text" class="form-control date-picker"  class="form-control input-mask {{$errors->has('beneficiary_date') ? 'is-invalid':''}}" value="{{old('beneficiary_date',$beneficiary->beneficiary_date)}}" name="beneficiary_date" id="beneficiary_date" placeholder="Pick a date">
                                    <i class="form-group__bar"></i>
                                    @if($errors->has('beneficiary_date'))
                                   <strong style="color:#dc3545">{{$errors->first('beneficiary_date')}}</strong>
                                   @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <!-- <label>Stakeholder's Documents</label> -->
                                <input type="file" style="padding-top:22px;"  class="form-control input-mask {{$errors->has('beneficiary_documents') ? 'is-invalid':''}}" name="beneficiary_documents" id="beneficiary_documents" data-mask="" placeholder="">
                                <label style="text-align:right;">Previouse documents</label><a href="{{asset('beneficiary_documents/'.$beneficiary->beneficiary_documents)}}" Disabled style="margin-bottom:30px;text-align:left!important;" target="_blank" class="form-control">{{$beneficiary->beneficiary_documents}}</a>
                                <i class="form-group__bar"></i>
                                @if($errors->has('beneficiary_documents'))
                               <strong style="color:#dc3545">{{$errors->first('beneficiary_documents')}}</strong>
                               @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Type of Assistant Receiving From CoAR Office</label>
                                <input type="text" class="form-control input-mask {{$errors->has('type_of_assistant_receiving_from_coar_office') ? 'is-invalid':''}}"  value="{{old('type_of_assistant_receiving_from_coar_office',$beneficiary->type_of_assistant_receiving_from_coar_office)}}" name="type_of_assistant_receiving_from_coar_office" id="type_of_assistant_receiving_from_coar_office" data-mask="" placeholder="">
                                <i class="form-group__bar"></i>
                                @if($errors->has('type_of_assistant_receiving_from_coar_office'))
                               <strong style="color:#dc3545">{{$errors->first('type_of_assistant_receiving_from_coar_office')}}</strong>
                               @endif
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                             <div class="btn-demo">
                                  <button type="submit" class="btn btn-success">Save</button>
                                  <a href="{{route('beneficiary.index')}}" class="btn btn-danger">Cancel</a>
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


