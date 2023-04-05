  @if(Session::has('message'))
                  <div class="alert alert-success text-center">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                   <h4>{{Session::get('message')}}</h4>
                  </div>
  @endif()