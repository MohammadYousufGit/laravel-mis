<aside class="sidebar">
<div class="scrollbar-inner" >

    <div class="user">
        <div class="user__info" data-toggle="dropdown">
            <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
            <div>
                <div class="user__name"  style="float:left">Fawad Qasimi</div>
                <div class="user__email" style="float:left">Qasimi@gmail.com</div>
            </div>
        </div>

        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">View Profile</a>
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Logout</a>
        </div>
    </div>
    
    <ul class="navigation" >
    <li class="navigation__active"><a href="{{route('admin.home')}}" ><i class="zmdi zmdi-home"></i> Home</a></li>
    <li class="navigation__sub">
                <a href="#"  ><i class="zmdi zmdi-collection-add"></i> Program</a>
                
                <ul>
                     <li>
                     <a href="{{route('project.index')}}" ><i class="zmdi zmdi-plus-box"></i> Projects</a>
                    </li> 

                    <li>
                    <a href="{{route('stakeholder.index')}}" ><i class="zmdi zmdi-plus-box"></i>  Stakeholder's Profile</a>
                    </li>

                    <li>
                    <a href="{{route('beneficiary.index')}}" ><i class="zmdi zmdi-plus-box"></i>  Beneficiary's Profile</a>
                    </li>

                    <li>
                    <a href="{{route('DIP.index')}}" ><i class="zmdi zmdi-plus-box"></i>  DIP</a>
                    </li>
                </ul>   


                <a href="#"  ><i class="zmdi zmdi-collection-text"></i> Report</a>
                <!-- <ul>
                    <li>
                    <a href="" ><i class="zmdi zmdi-file"></i>  Project</a>
                    </li>
                </ul>
                 -->


                 <a href=""><i class="zmdi zmdi-library"></i>Library</a>
                <!-- <ul>
              
                </ul>  -->

                <a href="#"  ><i class="zmdi zmdi-accounts"></i> User Management</a>
                <!-- <ul>
                    <li>
                    <a href="" ><i class="zmdi zmdi-file"></i>  Project</a>
                    </li>
                </ul>
                 -->

                <a href=""><i class="zmdi zmdi-help"></i>Help</a>
                <!-- <ul>
              
                </ul>  -->
    </li>

</div>
</aside>