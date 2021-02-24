@extends('backend.master')
@section('home')
 <div class="main-page">
   <div class="container-fluid">
      <section class="section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="panel">
                     <div class="panel-heading">
                        <div class="panel-title">
                           <h5>{{ __('Category') }}</h5>
                        </div>
                     </div>
                     <div class="panel-body">
                        <form class="form-horizontal">
                           <div class="form-group">
                              <label for="name7" class="col-sm-3 control-label">{{ __('New Category') }}</label>
                              <div class="col-sm-9">
                                 <input type="text" class="form-control" id="name7" placeholder="New Category">
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="username7" class="col-sm-3 control-label">Username</label>
                              <div class="col-sm-9">
                                 <input type="text" class="form-control" id="username7" placeholder="Enter Desired Username">
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail7" class="col-sm-3 control-label">Email address</label>
                              <div class="col-sm-9">
                                 <input type="email" class="form-control" id="exampleInputEmail7" placeholder="Enter Your Email Id">
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary pull-right mt-10">Submit</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>
@endsection
