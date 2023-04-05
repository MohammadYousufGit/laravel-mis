@extends('admin.layouts.app')
@section('styles')

@endsection()


@section('main_content')

<header class="content__title">
                </header>
                
                <div class="card">
                    <div class="card-body">
                    <h2  class="card-title"  style="font-size:30px;text-align:center">Program / Stakeholder's Profile Form</h2>
                    <a class="btn btn-outline-success" style="font-size:18px;background:auto;box-shadow:2px 2px 20px auto;" href="{{route('stakeholder.create')}}">New Entry</a>
                        <div class="table-responsive">
                            <table id="data-table" class="table">
                                <thead>
                                    <tr style="font-size:20px">
                                        <th>Stakeholder Name</th>
                                        <th>Agency</th>
                                        <th>Gender</th>
                                        <th>ID Number</th>
                                        <th>Details</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($stakeholder as $stakeholder)
                                <tr>
 
                                <td>{{$stakeholder->stakeholder_name}}</td>
                                <td>{{$stakeholder->agency}}</td>
                                <td>{{$stakeholder->gender}}</td>
                                <td>{{$stakeholder->id_number}}</td>
                                 <td>
                                     <a href="{{route('stakeholder.show',$stakeholder->id)}}"><i style="color:#0043ff;font-size:18px;padding-left:25px;" class="zmdi zmdi-info zmdi-hc-fw"></i></a>
                                 </td>
                                 <td>
                                     <a href="{{route('stakeholder.edit',$stakeholder->id)}}"><i style="font-size:18px;color:green;padding-left:10px;" class="zmdi zmdi-edit zmdi-hc-fw"></i></a>
                                 </td>
                                 
                                 <td>
                                        <form  method="post" id="form_delete{{$loop->index}}" style="diplay:none;" action="{{route('stakeholder.destroy',$stakeholder->id)}}">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                        </form>
                                        <a data-target="#exampleModal{{$loop->index}}" data-toggle="modal"><i class="zmdi zmdi-delete zmdi-hc-fw" style="color:red;font-size:18px;padding-left:25px;"></i></a>
                                 </td>
                                         <div class="modal fade modal-md text-center" id="exampleModal{{$loop->index}}"  style="display: none;text-align:center!important" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                             <div class="modal-dialog" role="document">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <h5 class="modal-title " id="exampleModalLabel" >Delete Confirmation</h5>
                                                     </div>
                                                     <div class="modal-body">
                                                         <h4>Do you want to delete this record ? </h4>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <a href="{{route('stakeholder.index')}}" onclick="
                                                                 event.preventDefault();
                                                                 document.getElementById('form_delete{{$loop->index}}').submit();" 
                                                         class="btn btn-success " style="width:100px;text-align:center">Yes</a>
                                                             <button type="button" class="btn btn-danger pull-right " style="width:100px;margin-left:20px;text-align:center" data-dismiss="modal">No</button>
                                                         
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                 </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <footer class="footer hidden-xs-down">
                    <p>© Super Admin Responsive. All rights reserved.</p>

                    <ul class="nav footer__nav">
                        <a class="nav-link" href="#">Homepage</a>

                        <a class="nav-link" href="#">Company</a>

                        <a class="nav-link" href="#">Support</a>

                        <a class="nav-link" href="#">News</a>

                        <a class="nav-link" href="#">Contacts</a>
                    </ul>
                </footer>
@endsection

@section('scripts')

@endsection