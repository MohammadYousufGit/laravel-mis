@extends('admin.layouts.app')

@section('styles')

@endsection()


@section('main_content')


<div class="card">
    <div class="card-body">
            <h4 class="card-title" style="font-size:25px;text-align:center">Program / DIP New Entry Form</h4>
                            <!-- <h6 class="card-subtitle">A plugin to make masks on form fields for better instant validations.</h6> -->
                        <hr>
                        <br>
                        <form method="post"  action="{{route('DIP.update',$DIP->id)}}" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        {{method_field('put')}}

                        <!-- @foreach($errors->all() as $error)
                    
                        @endforeach -->
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Monthly Report</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('monthly_report') ? 'is-invalid':''}}" value="{{old('monthly_report',$DIP->monthly_report)}}" name="monthly_report" id="monthly_report" data-mask="00/00/0000" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('monthly_report'))
                                       <strong style="color:#dc3545">{{$errors->first('monthly_report')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Status (Achieved)</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('agency') ? 'is-invalid':''}}" value="{{old('status_achieved',$DIP->status_achieved)}}" name="status_achieved" id="status_achieved" data-mask="00/00/0000" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('status_achieved'))
                                       <strong style="color:#dc3545">{{$errors->first('status_achieved')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Status (Not Achieved)</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('status_not_achieved') ? 'is-invalid':''}}" value="{{old('status_not_achieved',$DIP->status_not_achieved)}}" name="status_not_achieved" id="status_not_achieved" data-mask="00/00/0000" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('status_not_achieved'))
                                       <strong style="color:#dc3545">{{$errors->first('status_achieved')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Status (Reason)</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('status_reason') ? 'is-invalid':''}}" value="{{old('status_reason',$DIP->status_reason)}}" name="status_reason" id="status_reason" data-mask="00/00/0000" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('status_reason'))
                                       <strong style="color:#dc3545">{{$errors->first('status_reason')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Status (Comments/Remarks)</label>
                                        <input type="text" class="form-control input-mask {{$errors->has('comments_remarks') ? 'is-invalid':''}}" value="{{old('comments_remarks',$DIP->comments_remarks)}}" name="comments_remarks" id="comments_remarks" data-mask="00/00/0000" placeholder="">
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('comments_remarks'))
                                       <strong style="color:#dc3545">{{$errors->first('comments_remarks')}}</strong>
                                       @endif
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label>Date</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="form-group">
                                            <input type="text" class="form-control date-picker"  class="form-control input-mask {{$errors->has('date') ? 'is-invalid':''}}" value="{{old('date',$DIP->date)}}" name="date" id="date" placeholder="Pick a date">
                                            <i class="form-group__bar"></i>
                                            @if($errors->has('date'))
                                           <strong style="color:#dc3545">{{$errors->first('date')}}</strong>
                                           @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <!-- <label>Stakeholder's Documents</label> -->
                                        <input type="file" style="padding-top:22px;"  class="form-control input-mask {{$errors->has('dip_documents') ? 'is-invalid':''}}" name="dip_documents" id="dip_documents" data-mask="" placeholder="">
                                        <label style="text-align:right;">Previouse documents</label><a href="{{asset('dip_documents/'.$DIP->dip_documents)}}" Disabled style="margin-bottom:30px;text-align:left!important;" target="_blank" class="form-control">{{$DIP->dip_documents}}</a><i class="form-group__bar"></i>
                                        <i class="form-group__bar"></i>
                                        @if($errors->has('dip_documents'))
                                       <strong style="color:#dc3545">{{$errors->first('dip_documents')}}</strong>
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
                    
<!-- <script type="text/javascript">
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
</script> -->



@endsection


