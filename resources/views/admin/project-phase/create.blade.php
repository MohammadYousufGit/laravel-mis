@extends('admin.layouts.app')

@section('styles')

@endsection()


@section('main_content')



        <form method="post" action="{{ route('project_checklist.store')}}">
            {{ csrf_field() }}

            <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Project Mangement Checklist</h4>
                          

                            <div class="accordion" role="tablist">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne" style="background:rgba(138, 132, 222, 0.36);">
                                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                             Program Initiation and Design  
                                        </a>
                                    </div>

                                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
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
                                            <input type="hidden" style="display:none" value="{{ $ph1->name }}" name="statement_1[]"/>
                                            <p>  {{ $ph1->name }} </p></td>
                                                <td> 
                                                    <div class="btn-group btn-group--colors" data-toggle="buttons">
                                                        <label class="btn"><input type="radio" name="status_1[]" autocomplete="off" value="1"></label>
                                                        <label class="btn "><input type="radio" name="status_1[]" autocomplete="off" value="2"></label>
                                                        <label class="btn "><input type="radio" name="status_1[]" autocomplete="off" value="3"></label>
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
                                                        <label class="btn"><input type="radio" name="status_2[]" autocomplete="off" value="1"></label>
                                                        <label class="btn "><input type="radio" name="status_2[]" autocomplete="off" value="2"></label>
                                                        <label class="btn "><input type="radio" name="status_2[]" autocomplete="off" value="3"></label>
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
                                                        <label class="btn"><input type="radio" name="status_3[]" autocomplete="off" value="1"></label>
                                                        <label class="btn "><input type="radio" name="status_3[]" autocomplete="off" value="2"></label>
                                                        <label class="btn "><input type="radio" name="status_3[]" autocomplete="off" value="3"></label>
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
                                                        <label class="btn"><input type="radio" name="status_4[]" autocomplete="off" value="1"></label>
                                                        <label class="btn "><input type="radio" name="status_4[]" autocomplete="off" value="2"></label>
                                                        <label class="btn "><input type="radio" name="status_4[]" autocomplete="off" value="3"></label>
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
                                                        <label class="btn"><input type="radio" name="status_5[]" autocomplete="off" value="1"></label>
                                                        <label class="btn "><input type="radio" name="status_5[]" autocomplete="off" value="2"></label>
                                                        <label class="btn "><input type="radio" name="status_5[]" autocomplete="off" value="3"></label>
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
                    </div>

























            </form>
        
                            
                                

                               
                                
                               
                            

                               

                              

                               
                               
                             
                          
                            
    
                           
                      
                        


                               

                                              

       


                                
                          
                 

@endsection

@section('scripts')

<script>

$(document).ready(function(){
   
});


</script>
                    
@endsection


