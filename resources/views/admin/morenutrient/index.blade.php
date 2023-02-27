@extends('admin.body.adminmaster')

@section('admin')
<div class="card-deck mb-4">
  <div class="card col-3">

    <div class="card-body">
      <h4 class="card-title" style="color:#a70064" >Other Nutrients</h5>
        <p class="text-black mb-1">
          Total No. of Other Nutrients
            </p>
        <p class="h6">
          {{$morenutrients->count()}}
        </p>
      
    </div>
  </div>
 
  </div>
<div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3">
         <div class="d-flex justify-content-between align-items-center" >
        
            <h5 class="" style="color:#a70064">More Nutrient List</h5>
          
           <div>
            <a href="{{route('morenutrient.create')}}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i>Add More Nutrients </a> 
        </div>
       
        </div>
        </div>
        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush table-hover mb-5" id="example" >
            <thead class="thead-light">
              <tr>
                <th>Sr.No.</th>
                <th>Nutrient Name</th>
                <th>Created At</th>
             
                <th>Action</th>
            
              </tr>
            </thead>
            <tbody id="myTable">
                @foreach ($morenutrients as $key=>$item)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>
                   {{$item->name}}
                    </td>
                    <td>
                      {{$item->created_at}}
                       </td>

                   
                 

                    
                    <td>
                      <a href="{{route('morenutrient.edit', $item->id)}}" class="btn btn-primary btn-icon-split btn-sm">
                         <span class="icon text-white-50">
                            <i class="fas fa-pen"></i>
                         </span>
                         <span class="text">Edit</span>
                       </a>
                   
                     <button type="button" data-toggle="modal" data-target="#delted-modal-{{$item->id}}">

                       <span class="text btn btn-danger btn-sm btn-icon-split">Delete</span>
                 </button>
                 <div class="modal fade" id="delted-modal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="delted-modal-Label-{{$key + 1}}" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="delted-modal-Label-{{$key + 1}}"> Are you Sure Want to Delete</h5>

                       </div>
                       {{-- <div class="modal-body">
                           Are you Sure Want to Delete <br>
                       </div> --}}
                       <div class="modal-footer">
                         <button type="button"  data-dismiss="modal"> <span class="btn btn-dark btn-sm"> Close</span></button>
                         <form action="{{route('morenutrient.destroy', $item->id)}}" method="post">
                           @csrf
                           @method('DELETE')
                           <button type="submit">
                            <span class="text btn btn-danger btn-icon-split btn-sm">Delete</span></button>
                         </form>
                       </div>
                     </div>
                   </div>
                 </div>
                    </td>


                 </tr>
                    
               
                    
                @endforeach
              
                    
                   
            </tbody>
          </table>
        
        </div>

      </div>
    </div>
  </div>

@endsection