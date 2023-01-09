@extends('admin.body.adminmaster')

@section('admin')

<div class="card col-lg-12 mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 " style="color:#a70064">More Nutrient</h6>
      <a href="{{route('morenutrient.index')}}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i>Back </a> 
    </div>

    <div class="card-body">
    <form action="{{ isset($morenutrient) ? route('morenutrient.update',$morenutrient->id) :route('morenutrient.store')}}" method="post" enctype="multipart/form-data">
       @csrf

       @isset($morenutrient)
          @method('PUT')
       @endisset


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Nutrient Name</label>
                <input type="text" class="form-control"  name="name"  value="{{isset($morenutrient) ? $morenutrient->name: old('name')}}">
                @error('name')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="percentage">Percentage</label>
                <input type="text" class="form-control"  name="percentage"  value="{{isset($morenutrient) ? $morenutrient->percentage: old('percentage')}}">
              
                @error('percentage')
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