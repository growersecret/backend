@extends('admin.body.adminmaster')

@section('admin')

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3">
                <div class="d-flex justify-content-between align-items-center" >
                    <h5 class="text-primary">Free Hit Management</h5> 
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('freehit.update', $freehit->id )}}" method="post" enctype="multipart/form-data">
                    @csrf
             
                    @isset($freehit)
                       @method('PUT')
                    @endisset
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="number" class="form-control"  name="freecount"  value="{{isset($freehit) ? $freehit->freecount: old('freecount')}}">
                            @error('freecount')
                            <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-inner">
                            <button type="submit" class="btn btn-primary btn-icon-split btn-md">Set</button>
                        </div>
                    </div>
                </div>

            </form>
                <small class="">
            
                        <h6>Free Hit : {{$freehit->freecount}}</h6>
                        Last updated : {{$freehit->updated_at}}
                </small>   
            </div>  
        </div>
      </div>
    </div>
</div>


@endsection