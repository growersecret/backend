@extends('admin.body.adminmaster')

@section('admin')

<div class="card col-lg-6 mb-4">
    <div class="col-12 ">
  
      <div class="card-body">
        <h5 class="card-title" style="color:#a70064" >Name : <span class="text-black">{{Auth::user()->name}}</span></h5>
            <h5 class="card-title" style="color:#a70064" >Email : <span class="text-black">{{Auth::user()->email}}</span></h5>
        
      </div>
    </div>
   
    </div>
        
        <div class="card col-lg-6 mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 " style="color:#a70064">Update Password</h6>

            </div>
        
            <div class="card-body">
            <form action="{{ route('password.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
        
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Current Password</label>
                        <input type="text" class="form-control"   name="current_password" >
                        @error('current_password')
                        <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
          
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">New Password</label>
                        <input type="text" class="form-control"   name="password">
                        @error('password')
                        <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Confirm Password</label>
                        <input type="text" class="form-control"   name="password_confirmation">
                        @error('password_confirmation')
                        <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
      
        
            <button class="btn btn-primary btn-icon-split btn-sm">
                Submit
              </button>
            </form>
        
            </div>
         </div>
      
    


    @endsection