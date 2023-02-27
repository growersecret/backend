@extends('admin.body.adminmaster')

@section('admin')


{{-- <div class="card col-lg-6 mb-4">
    <div class="col-12 ">
  
      <div class="card-body">
        <h5 class="card-title" style="color:#a70064" >Name : <span class="text-black">{{Auth::user()->name}}</span></h5>
            <h5 class="card-title" style="color:#a70064" >Email : <span class="text-black">{{Auth::user()->email}}</span></h5>
        
      </div>
    </div>
   
    </div> --}}


    <div class="card col-lg-6 mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 " style="color:#a70064">Admin Profile</h6>

        </div>
    
        <div class="card-body">
        <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
    
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control"   name="name" value="{{Auth::user()->name}}" >
                    @error('name')
                    <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
      
      

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control"   name="email"  value="{{Auth::user()->email}}">
                    @error('email')
                    <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea type="text" class="form-control"   name="address" >{{Auth::user()->address}}</textarea>
                    @error('address')
                    <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control"   name="mobile"  value="{{Auth::user()->mobile}}">
                    @error('mobile')
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
  



        
        <div class="card col-lg-6 mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 " style="color:#a70064">Update Password</h6>

            </div>
        
            <div class="card-body">



                <form method="post" action="{{ route('password.update') }}">
                    @csrf
                    @method('put')
        
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">


                        <x-input-label for="current_password" :value="__('Current Password')" />
                        <input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
                        <x-input-error :messages="$errors->updatePassword->get('current_password')"  style="color: rgba(255, 0, 0, 0.626)" />


                        {{-- <label for="mobile">Current Password</label>
                        <input type="text" class="form-control"   name="current_password" >
                        @error('current_password')
                        <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                        @enderror --}}
                    </div>
                </div>
            </div>
          
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <x-input-label for="password" :value="__('New Password')" />
                        <input id="password" name="password" type="password" class="form-control" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password')"  style="color: rgba(255, 0, 0, 0.626)" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">

                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2"  style="color: rgba(255, 0, 0, 0.626)"/>
                       
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