@extends('admin.layouts.app')

@section('styles')

@endsection()


@section('main_content')

<div class="card">
                        <div class="card-body">
                            <h4 class="card-title">New Projects</h4>
                            <h6 class="card-subtitle">Click the buttons below to create, show projects</h6>

                            <div class="btn-demo">
                            <a class="btn btn-light"  href="{{route('project.create')}}" aria-expanded="false" aria-controls="collapseExample">
                                    New Project
                                </a> 
                                <a class="btn btn-light" data-toggle="collapse" href="" aria-expanded="false" aria-controls="collapseExample">
                                    Closed Project
                                </a> 
                                <a class="btn btn-light" data-toggle="collapse" href="" aria-expanded="false" aria-controls="collapseExample">
                                    Ongoing 
                                </a> 
                                <!-- <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Button with data-target
                                </button> -->
                            </div>

                            <div class="collapse" id="collapseExample">
                                <hr>
                                <div class="card">
                                <div class="card-body">
                                        <h4 class="card-title" style="font-size:25px;text-align:center">Program / New Project Entry Form</h4>
                                                        <!-- <h6 class="card-subtitle">A plugin to make masks on form fields for better instant validations.</h6> -->
                                                    <hr>
                                                    <br>
                                                    <form method="post"  action="" enctype="multipart/form-data" >
                                                    {{csrf_field()}}
                            
                                                    <!-- @foreach($errors->all() as $error)
                                                
                                                    @endforeach -->
                                                        <div class="row">
                            
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>Project Name</label>
                                                                    <input type="text" class="form-control input-mask {{$errors->has('stakeholder_name') ? 'is-invalid':''}}" value="{{old('stakeholder_name')}}" name="stakeholder_name" id="stakeholder_name" data-mask="00/00/0000" placeholder="">
                                                                    <i class="form-group__bar"></i>
                                                                    @if($errors->has('stakeholder_name'))
                                                                   <strong style="color:#dc3545">{{$errors->first('stakeholder_name')}}</strong>
                                                                   @endif
                                                                </div>
                                                            </div>
                            
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>Code</label>
                                                                    <input type="text" class="form-control input-mask {{$errors->has('agency') ? 'is-invalid':''}}" value="{{old('agency')}}" name="agency" id="agency" data-mask="00/00/0000" placeholder="">
                                                                    <i class="form-group__bar"></i>
                                                                    @if($errors->has('agency'))
                                                                   <strong style="color:#dc3545">{{$errors->first('agency')}}</strong>
                                                                   @endif
                                                                </div>
                                                            </div>
                            
                                                           
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>Donor</label>
                                                                    <input type="text" class="form-control input-mask {{$errors->has('id_number') ? 'is-invalid':''}}" value="{{old('id_number')}}" name="id_number" id="id_number" data-mask="" placeholder="">
                                                                    <i class="form-group__bar"></i>
                                                                    @if($errors->has('id_number'))
                                                                   <strong style="color:#dc3545">{{$errors->first('id_number')}}</strong>
                                                                   @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>Location</label>
                                                                    <input type="text" class="form-control input-mask {{$errors->has('id_number') ? 'is-invalid':''}}" value="{{old('id_number')}}" name="id_number" id="id_number" data-mask="" placeholder="">
                                                                    <i class="form-group__bar"></i>
                                                                    @if($errors->has('id_number'))
                                                                   <strong style="color:#dc3545">{{$errors->first('id_number')}}</strong>
                                                                   @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <h3 class="card-title" style="text-align:center">Beneficires IDP</h4>
                                                                <hr>
                                                            </div>
                                                            </div>

                                                        <div class="col-sm-3">
                                                                <div class="form-group">
                                                                <label>Male</label>
                                                                        <div class="demo-inline-wrapper"> 
                                                                        <label class="custom-control custom-control--char">
                                                                            <input class="custom-control-input" type="checkbox">
                                                                            <span class="custom-control--char__helper"><i>M</i></span>
                                                                        </label>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                <label>Female</label>
                                                                        <div class="demo-inline-wrapper"> 
                                                                        <label class="custom-control custom-control--char">
                                                                            <input class="custom-control-input" type="checkbox">
                                                                            <span class="custom-control--char__helper"><i>F</i></span>
                                                                        </label>
                                                                        </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                <label>Boy</label>
                                                                        <div class="demo-inline-wrapper"> 
                                                                        <label class="custom-control custom-control--char">
                                                                            <input class="custom-control-input" type="checkbox">
                                                                            <span class="custom-control--char__helper"><i>B</i></span>
                                                                        </label>
                                                                        </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                <label>Girls</label>
                                                                        <div class="demo-inline-wrapper"> 
                                                                        <label class="custom-control custom-control--char">
                                                                            <input class="custom-control-input" type="checkbox">
                                                                            <span class="custom-control--char__helper"><i>G</i></span>
                                                                        </label>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <hr>
                                                                <h5 class="card-title" style=" text-align:center">Beneficires Returnees </h4>
                                                                <hr>
                                                            </div>
                                                            </div>

                                                            <div class="col-sm-3">
                                                            <div class="form-group">
                                                            <label>Male</label>
                                                                    <div class="demo-inline-wrapper"> 
                                                                    <label class="custom-control custom-control--char">
                                                                        <input class="custom-control-input" type="checkbox">
                                                                        <span class="custom-control--char__helper"><i>M</i></span>
                                                                    </label>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                            <label>Female</label>
                                                                    <div class="demo-inline-wrapper"> 
                                                                    <label class="custom-control custom-control--char">
                                                                        <input class="custom-control-input" type="checkbox">
                                                                        <span class="custom-control--char__helper"><i>F</i></span>
                                                                    </label>
                                                                    </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-3">
                                                        <div class="form-group">
                                                        <label>Boy</label>
                                                                <div class="demo-inline-wrapper"> 
                                                                <label class="custom-control custom-control--char">
                                                                    <input class="custom-control-input" type="checkbox">
                                                                    <span class="custom-control--char__helper"><i>B</i></span>
                                                                </label>
                                                                </div>
                                                        </div>
                                                    </div>

                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                            <label>Girls</label>
                                                                    <div class="demo-inline-wrapper"> 
                                                                    <label class="custom-control custom-control--char">
                                                                        <input class="custom-control-input" type="checkbox">
                                                                        <span class="custom-control--char__helper"><i>G</i></span>
                                                                    </label>
                                                                    </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <hr>
                                                                <h5 class="card-title" style=" text-align:center">Beneficires Refugees </h4>
                                                                <hr>
                                                            </div>
                                                            </div>

                                                            <div class="col-sm-3">
                                                            <div class="form-group">
                                                            <label>Male</label>
                                                                    <div class="demo-inline-wrapper"> 
                                                                    <label class="custom-control custom-control--char">
                                                                        <input class="custom-control-input" type="checkbox">
                                                                        <span class="custom-control--char__helper"><i>M</i></span>
                                                                    </label>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                            <label>Female</label>
                                                                    <div class="demo-inline-wrapper"> 
                                                                    <label class="custom-control custom-control--char">
                                                                        <input class="custom-control-input" type="checkbox">
                                                                        <span class="custom-control--char__helper"><i>F</i></span>
                                                                    </label>
                                                                    </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-3">
                                                        <div class="form-group">
                                                        <label>Boy</label>
                                                                <div class="demo-inline-wrapper"> 
                                                                <label class="custom-control custom-control--char">
                                                                    <input class="custom-control-input" type="checkbox">
                                                                    <span class="custom-control--char__helper"><i>B</i></span>
                                                                </label>
                                                                </div>
                                                        </div>
                                                    </div>

                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                            <label>Girls</label>
                                                                    <div class="demo-inline-wrapper"> 
                                                                    <label class="custom-control custom-control--char">
                                                                        <input class="custom-control-input" type="checkbox">
                                                                        <span class="custom-control--char__helper"><i>G</i></span>
                                                                    </label>
                                                                    </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <hr>
                                                                <h5 class="card-title" style=" text-align:center">Beneficires Host Community </h4>
                                                                <hr>
                                                            </div>
                                                            </div>

                                                            <div class="col-sm-3">
                                                            <div class="form-group">
                                                            <label>Male</label>
                                                                    <div class="demo-inline-wrapper"> 
                                                                    <label class="custom-control custom-control--char">
                                                                        <input class="custom-control-input" type="checkbox">
                                                                        <span class="custom-control--char__helper"><i>M</i></span>
                                                                    </label>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                            <label>Female</label>
                                                                    <div class="demo-inline-wrapper"> 
                                                                    <label class="custom-control custom-control--char">
                                                                        <input class="custom-control-input" type="checkbox">
                                                                        <span class="custom-control--char__helper"><i>F</i></span>
                                                                    </label>
                                                                    </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-3">
                                                        <div class="form-group">
                                                        <label>Boy</label>
                                                                <div class="demo-inline-wrapper"> 
                                                                <label class="custom-control custom-control--char">
                                                                    <input class="custom-control-input" type="checkbox">
                                                                    <span class="custom-control--char__helper"><i>B</i></span>
                                                                </label>
                                                                </div>
                                                        </div>
                                                    </div>

                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                            <label>Girls</label>
                                                                    <div class="demo-inline-wrapper"> 
                                                                    <label class="custom-control custom-control--char">
                                                                        <input class="custom-control-input" type="checkbox">
                                                                        <span class="custom-control--char__helper"><i>G</i></span>
                                                                    </label>
                                                                    </div>
                                                            </div>
                                                        </div>

                                                <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <hr>
                                                            </div>
                                                </div>


                                                <div class="col-sm-3">
                                                        <label>Budget</label>
                                                            <div class="form-group">
                                                                <div class="select" >
                                                                    <select class="form-control" value="{{old('gender')}}" name="gender" id="gender">
                                                                        <option style="color:black" value="USD">USD</option>
                                                                        <option style="color:black" value="AFG">AFG</option> 
                                                                        <option style="color:black" value="Pound">Pound</option> 
                                                                        <option style="color:black" value="EUR">EUR</option> 
                                                                    </select>
                                                                </div>
                                                            </div>
                                                </div>
                                                                            
                                                <div class="col-sm-3">
                                                <label>Sector</label>
                                                    <div class="form-group" >
                                                            <div class="select">
                                                                <select class="form-control" value="{{old('province')}}" id="province" name="province" >
                                                                    <option value="" >Choose Option</option>
                                                                 
                                                                    <option value="">Engineering/ Wash</option> 
                                                             
                                                                </select>
                                                            </div>
                                                    </div>
                                                </div>


                                                <div class="col-sm-3">
                                                <label>Project Type</label>
                                                    <div class="form-group" >
                                                            <div class="select">
                                                                <select class="form-control" value="{{old('district')}}" name="district" id="district">
                                                                <option value="" >Choose Option</option>
                                                                <option value="">Emergency </option> 
                                                                </select>
                                                            </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label></label>
                                                                    <input type="text" class="form-control input-mask {{$errors->has('agency') ? 'is-invalid':''}}" value="{{old('agency')}}" name="agency" id="agency" data-mask="00/00/0000" placeholder="">
                                                                    <i class="form-group__bar"></i>
                                                                    @if($errors->has('agency'))
                                                                   <strong style="color:#dc3545">{{$errors->first('agency')}}</strong>
                                                                   @endif
                                                                </div>
                                                </div>

                                                <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>DRR</label>
                                                                    <input type="text" class="form-control input-mask {{$errors->has('agency') ? 'is-invalid':''}}" value="{{old('agency')}}" name="agency" id="agency" data-mask="00/00/0000" placeholder="">
                                                                    <i class="form-group__bar"></i>
                                                                    @if($errors->has('agency'))
                                                                   <strong style="color:#dc3545">{{$errors->first('agency')}}</strong>
                                                                   @endif
                                                                </div>
                                                </div>

                                                <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>Protection</label>
                                                                    <input type="text" class="form-control input-mask {{$errors->has('agency') ? 'is-invalid':''}}" value="{{old('agency')}}" name="agency" id="agency" data-mask="00/00/0000" placeholder="">
                                                                    <i class="form-group__bar"></i>
                                                                    @if($errors->has('agency'))
                                                                   <strong style="color:#dc3545">{{$errors->first('agency')}}</strong>
                                                                   @endif
                                                                </div>
                                                </div>

                                                <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>Health</label>
                                                                    <input type="text" class="form-control input-mask {{$errors->has('agency') ? 'is-invalid':''}}" value="{{old('agency')}}" name="agency" id="agency" data-mask="00/00/0000" placeholder="">
                                                                    <i class="form-group__bar"></i>
                                                                    @if($errors->has('agency'))
                                                                   <strong style="color:#dc3545">{{$errors->first('agency')}}</strong>
                                                                   @endif
                                                                </div>
                                                </div>

                                                <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>Media and Advocacy</label>
                                                                    <input type="text" class="form-control input-mask {{$errors->has('agency') ? 'is-invalid':''}}" value="{{old('agency')}}" name="agency" id="agency" data-mask="00/00/0000" placeholder="">
                                                                    <i class="form-group__bar"></i>
                                                                    @if($errors->has('agency'))
                                                                   <strong style="color:#dc3545">{{$errors->first('agency')}}</strong>
                                                                   @endif
                                                                </div>
                                                </div>
                                                <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>Start Date</label>
                                                                    <input type="text" class="form-control input-mask {{$errors->has('agency') ? 'is-invalid':''}}" value="{{old('agency')}}" name="agency" id="agency" data-mask="00/00/0000" placeholder="">
                                                                    <i class="form-group__bar"></i>
                                                                    @if($errors->has('agency'))
                                                                   <strong style="color:#dc3545">{{$errors->first('agency')}}</strong>
                                                                   @endif
                                                                </div>
                                                </div>

                                                <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>End Date</label>
                                                                    <input type="text" class="form-control input-mask {{$errors->has('agency') ? 'is-invalid':''}}" value="{{old('agency')}}" name="agency" id="agency" data-mask="00/00/0000" placeholder="">
                                                                    <i class="form-group__bar"></i>
                                                                    @if($errors->has('agency'))
                                                                   <strong style="color:#dc3545">{{$errors->first('agency')}}</strong>
                                                                   @endif
                                                                </div>
                                                </div>

                                                <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>Status</label>
                                                                    <input type="text" class="form-control input-mask {{$errors->has('agency') ? 'is-invalid':''}}" value="{{old('agency')}}" name="agency" id="agency" data-mask="00/00/0000" placeholder="">
                                                                    <i class="form-group__bar"></i>
                                                                    @if($errors->has('agency'))
                                                                   <strong style="color:#dc3545">{{$errors->first('agency')}}</strong>
                                                                   @endif
                                                                </div>
                                                </div>
                                                <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>Budget Holder</label>
                                                                    <input type="text" class="form-control input-mask {{$errors->has('agency') ? 'is-invalid':''}}" value="{{old('agency')}}" name="agency" id="agency" data-mask="00/00/0000" placeholder="">
                                                                    <i class="form-group__bar"></i>
                                                                    @if($errors->has('agency'))
                                                                   <strong style="color:#dc3545">{{$errors->first('agency')}}</strong>
                                                                   @endif
                                                                </div>
                                                </div>

                                                <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label> Project Goals (Number of Staff)</label>
                                                                    <input type="text" class="form-control input-mask {{$errors->has('agency') ? 'is-invalid':''}}" value="{{old('agency')}}" name="agency" id="agency" data-mask="00/00/0000" placeholder="">
                                                                    <i class="form-group__bar"></i>
                                                                    @if($errors->has('agency'))
                                                                   <strong style="color:#dc3545">{{$errors->first('agency')}}</strong>
                                                                   @endif
                                                                </div>
                                                </div>

                                                
                                                <div class="col-sm-4">
                                                <label>Technical Support</label>
                                                    <div class="form-group">
                                                        <div class="select" >
                                                            <select class="form-control" value="{{old('gender')}}" name="gender" id="gender">
                                                                <option style="color:black" value="Male">Male</option>
                                                                <option style="color:black" value="Female">Female</option> 
                                                            </select>
                                                    </div>

                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                <label>Support Staff</label>
                                                    <div class="form-group">
                                                        <div class="select" >
                                                            <select class="form-control" value="{{old('gender')}}" name="gender" id="gender">
                                                                <option style="color:black" value="Male">Male</option>
                                                                <option style="color:black" value="Female">Female</option> 
                                                            </select>
                                                    </div>

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
                            </div>
                        </div>
                    </div>   



<!-- 
    <div class="card-body">
            <h4 class="card-title" style="font-size:25px;text-align:center">Program / Project</h4>
                        <hr>
                        <br>
                        <form action="">
                            <div class="row">
                               

                                <div class="col-sm-6">
                                    <div class="form-group">
                                     <div class="btn-demo">
                                          <button type="submit" class="btn btn-success">Save</button>
                                          <button type="reset" class="btn btn-danger">Clear Form</button>
                                      </div>
                                      </div>
                                </div>

                                
                            </div>
                        </form>
                        </div> -->
                 

@endsection

@section('scripts')
                    
@endsection



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
                             <input type="hidden" style="display:none" value="{{ $ph1->name }}" name="statement[]"/>
                             <p>  {{ $ph1->name }} </p></td>
                                <td> 
                                    <div class="btn-group btn-group--colors" data-toggle="buttons">
                                        <label class="btn"><input type="radio" name="status[]" autocomplete="off" value="1"></label>
                                        <label class="btn "><input type="radio" name="status[]" autocomplete="off" value="2"></label>
                                        <label class="btn "><input type="radio" name="status[]" autocomplete="off" value="3"></label>
                                    </div>
                                </td>
                                <td><input type="file" name="files[]" multiple/></td>
                                <td>
                                    <div class="form-group">
                                        <textarea name="remarks[]" class="form-control"></textarea>
                                    </div>
                                </td>
                               
                            </tr>

                            @endforeach

                          

                            
                            </tbody>
                        </table>