<!DOCTYPE html>
<html lang="en">
    

<head>




@include('admin.includes.head')
<!--CSS Files -->

<style type="text/css">
         div[role=status]{
  display:none;
}

dd, h1, h2, h3, h4, h5, h6, label {
    margin-bottom: 0px;
}
/* 
.sidebar *{
    text-align:right;
} */

.sidebar .dropdown-menu .dropdown-item{
    text-align:center;
    font-size:17px;
}

    .ui-autocomplete {
            z-index: 100!important;
            position:absolute;
            cursor:default;
          


            }
    .ui-menu{
            list-style:none!important;
            background:rgba(100,100,100,0.6)!important;
            cursor:pointer;
            color:black;
             /* border:0px solid black !important;  */
            padding:10px!important;
            text-align:right;
            font-size:18px;
           
    }
    .ui-menu li{
            padding:0px 5px!important;
            color:white;
            
            background:rgba(100,100,100,0.02)!important;
            
    }

    .ui-menu-item-wrapper{
        background: rgba(100,100,100,0.02)!important;
        border:0px solid black!important;
    }

    .ui-menu li:hover{
        background:rgba(100,100,100,0.5)!important;
       
    }

    .ui-front {
    z-index: 1500 !important;
}


     </style>


@section('styles')

@show



      
</head>


            <section class="content">
               @section('main_content')
               @show
            </section>

    <body data-sa-theme="7">
        <main class="main">
             <!--Page Loader -->
             @include('admin.includes.page_loader')

             <!--Navigation -->
             @include('admin.includes.navbar')


             <!--Side bar -->
             @include('admin.includes.sidebar')


             <!--Themes -->
             @include('admin.includes.themes')

           
        </main>
         
      
       

        <!--Javascript Files -->
        @include('admin.includes.footer')

        @section('scripts')
        
        @show


        <script>
        
        // $(document).ready(function(){
        //     $('#searchTerm').autocomplete({
        //         source: 'http://localhost:8000/admin/generalSuggest'
        //     });
        // });
        
        
        </script>
     
    </body>


</html>