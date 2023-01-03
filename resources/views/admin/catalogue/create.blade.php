@extends('admin.body.adminmaster')

@section('admin')

<div class="card col-lg-12 mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Fertilizers</h6>
      <a href="{{route('catalogue.index')}}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i>Back </a> 
    </div>

    <div class="card-body">
    <form action="{{ isset($catalogue) ? route('catalogue.update',$catalogue->id) :route('catalogue.store')}}" method="post" enctype="multipart/form-data">
       @csrf

       @isset($catalogue)
          @method('PUT')
       @endisset


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Fertilizer Name</label>
                <input type="text" class="form-control"  name="name"  value="{{isset($catalogue) ? $catalogue->name: old('name')}}">
                @error('name')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="type">Fertilizer Type</label>
                <select class="form-select" aria-label="Default select example" name="type">
                    <option selected>Select Fertilizer type</option>
                    <option value="dry fertilizer"  @isset($catalogue)@if ($catalogue->type === 'dry fertilizer') selected @endif @endisset>dry fertilizer</option>
                    <option value="liquid fertilizer" @isset($catalogue)@if ($catalogue->type === 'liquid fertilizer') selected @endif @endisset>liquid fertilizer</option>
                    <option value="mix fertilizer"  @isset($catalogue)@if ($catalogue->type === 'mix fertilizer') selected @endif @endisset>mix fertilizer</option>
                  </select>
              
                @error('type')
                <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="percent_N">Percentage of N</label>
            <input type="text" class="form-control"  name="percent_N"  value="{{isset($catalogue) ? $catalogue->percent_N: old('percent_N') }}"">
            @error('percent_N')
            <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="percent_P">Percentage of P</label>
            <input type="text" class="form-control"  name="percent_P"  value="{{isset($catalogue) ? $catalogue->percent_P: old('percent_P') }}"">
            @error('percent_P')
            <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="percent_K">Percentage of N</label>
            <input type="text" class="form-control"  name="percent_K"  value="{{isset($catalogue) ? $catalogue->percent_K: old('percent_K') }}"">
            @error('percent_K')
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

<script src="https://cdn.ckeditor.com/4.14.1/standard-all/ckeditor.js"></script>

<script>

    CKEDITOR.replace('paragraph7', {
      height: 200,
    });
</script>

@endsection