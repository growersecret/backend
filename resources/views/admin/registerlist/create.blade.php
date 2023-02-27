@extends('admin.body.adminmaster')

@section('admin')

<div class="card col-lg-12 mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 " style="color:#a70064">Register User</h6>
      <a href="{{route('updatedregisterlist')}}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i>Back </a> 
    </div>

    <div class="card-body">
    <form action="{{ isset($user) ? route('userUpdate',$user->id) :route('userStore')}}" method="post" enctype="multipart/form-data">
       @csrf

       @isset($user)
          @method('PATCH')
       @endisset


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control"  name="name"  value="{{isset($user) ? $user->name: old('name')}}">
                @error('name')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control"  name="email"  value="{{isset($user) ? $user->email: old('email')}}">
              
                @error('email')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control"  name="address"  value="{{isset($user) ? $user->address: old('address')}}">
                @error('address')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="number">Phone</label>
                <input type="text" class="form-control"  name="number"  value="{{isset($user) ? $user->number: old('number')}}">
              
                @error('number')
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


 @section('custom_JS')



<script>

</script>

@endsection