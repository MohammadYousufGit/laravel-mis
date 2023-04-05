@extends('admin.layouts.app')

@section('styles')

@endsection()


@section('main_content')

<div class="card">
        <div class="card-body">
            <h4 class="card-title text-center">List Of All Projects</h4>
                
            <div class="text-right">
            <a  href="{{route('project.create')}}" class="btn btn-success text-right" >Add New Project</a>
            </div>

            <div class="tab-container">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">Ongoing Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">Closed Projects</a>
                    </li>
                   
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade active show" id="home" role="tabpanel" aria-expanded="true">
                            <table class="table mb-0">
                                    <thead>
                                        <td>NO#</td>
                                        <th>Project Name </th>
                                        <th>Project Donor </th>
                                        <th>Project Start Date</th>
                                        <th>Project End Date</th>
                                        <th>Project Sector</th>
                                        <th>Edit</th>
                                        <th>Details</th>                                       
                                    
                                    </thead>
                                    <tbody>

                                    @foreach($ongoing_projects as $ongoing_project)
                                        <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$ongoing_project->project_name}}</td>
                                        <td>{{$ongoing_project->project_donor}}</td>
                                        <td>{{$ongoing_project->project_start_date}}</td>
                                        <td>{{$ongoing_project->project_end_date}}</td>
                                        <td>{{$ongoing_project->main_sector}}</td>
                                        <td><a href="{{route('project.edit',$ongoing_project->id)}}" class="btn "><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a></td>
                                            <td><a href="{{route('project.show',$ongoing_project->id)}}" class="btn "><i class="zmdi zmdi-receipt zmdi-hc-fw"></i></a></td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                            </table>
                            
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-expanded="false">
                            <table class="table mb-0">
                                    <thead>
                                        <td>NO#</td>
                                        <th>Project Name </th>
                                        <th>Project Donor </th>
                                        <th>Project Start Date</th>
                                        <th>Project End Date</th>
                                        <th>Project Sector</th>
    
                                        <th>Details</th>                                       
                                    
                                    </thead>
                                    <tbody>

                                    @foreach($closed_projects as $closed_project)
                                        <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$closed_project->project_name}}</td>
                                        <td>{{$closed_project->project_donor}}</td>
                                        <td>{{$closed_project->project_start_date}}</td>
                                        <td>{{$closed_project->project_end_date}}</td>
                                        <td>{{$closed_project->main_sector}}</td>
                                       
                                            <td><a href="{{route('project.show',$closed_project->id)}}" class="btn "><i class="zmdi zmdi-receipt zmdi-hc-fw"></i></a></td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                            </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


                           
                                      
                 

@endsection

@section('scripts')
                    
@endsection


