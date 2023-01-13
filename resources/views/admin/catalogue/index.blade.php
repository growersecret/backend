@extends('admin.body.adminmaster')

@section('admin')

<div class="card-deck mb-4">
  <div class="card col-3">

    <div class="card-body">
      <h4 class="card-title" style="color:#a70064" >Dry Fertilizers</h5>
       
        <p class="text-black mb-1">
          Total No. of Dry Fertilizers
        </p>
        <p class="h6">
          {{$drycats->count()}}
        </p>
      
    </div>
  </div>
  <div class="card col-3">

    <div class="card-body">
      <h4 class="card-title" style="color:#a70064" >Liquid Fertilizers</h5>
        <p class="text-black mb-1">
          Total No. of Liquid Fertilizers
        </p>
        <p class="h6">
          {{$liquidcats->count()}}
        </p>
      
    </div>
  </div>
  <div class="card col-3">

    <div class="card-body">
      <h4 class="card-title" style="color:#a70064" >Mix Fertilizers</h5>
        <p class="text-black mb-1">
          Total No. of Mix Fertilizers
        </p>
        <p class="h6">
          {{$mixcats->count()}}
        </p>
      
    </div>
  </div>
  <div class="card col-3">

    <div class="card-body">
      <h4 class="card-title" style="color:#a70064" >Total Fertilizers</h5>
        <p class="text-black mb-1">
          Total No. of Fertilizers
        </p>
        <p class="h6">
          {{$catalogues->count()}}
        </p>
      
    </div>
  </div>
 
  </div>
 
<div class="card-deck mb-4">
  <div class="card col-3">

    <div class="card-body">
      <h4 class="card-title" style="color:#a70064" >Not active Fertilizers</h5>
       
        <p class="text-black mb-1">
          Total No. of not active fertilizers
        </p>
        <p class="h6">
          {{$notactive->count()}}
        </p>
      
    </div>
  </div>
  <div class="card col-3">

    <div class="card-body">
      <h4 class="card-title" style="color:#a70064" >Active Fertilizers</h5>
        <p class="text-black mb-1">
          Total No. of active fertilizers
        </p>
        <p class="h6">
          {{$active->count()}}
        </p>
      
    </div>
  </div>

 
  </div>
 

<div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3">
         <div class="d-flex justify-content-between align-items-center" >
            <h5 class="" style="color:#a70064">Fertilizer List</h5>
          
           <div>
            <a href="{{route('catalogue.create')}}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i>Add Fertilizer </a> 
        </div>
       
        </div>
        </div>
        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush table-hover mb-5" id="example" >
            <thead class="thead-light">
              <tr>
                <th>Sr.No.</th>
                <th> Name</th>
                <th>Type</th>
                <th>N</th>
                <th>P</th>
                <th>K</th>

               
                
                 <th>active</th>

                <th>Action</th>
            
              </tr>
            </thead>
            <tbody id="myTable">
                @forelse ($catalogues as $key=>$item)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>
                   {{$item->name}}
                    </td>

                    <td>
                    {{$item->type}}
                    </td>
                    <td>
                      {{$item->percent_N}}%
                      </td>
                      <td>
                        {{$item->percent_P}}%
                        </td>
                        <td>
                          {{$item->percent_K}}%
                          </td>

                   

                    <td>
                    @if ($item->active === 0)
                      Not Actvie
                    @else
                      Active
                    @endif

                    @if ($item->active === 0)
                    <a href="{{route('activeCatalogue', $item->id)}}" class="btn btn-success btn-icon-split btn-sm">
                      <span class="icon text-white-50">
                         <i class="fas fa-pen"></i>
                      </span>
                      <span class="text">Actvie</span>
                    </a>
                  @else
                  <a href="{{route('notactiveCatalogue', $item->id)}}" class="btn btn-warning btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                       <i class="fas fa-pen"></i>
                    </span>
                    <span class="text"> Not Actvie</span>
                  </a>
                  @endif
                      </td>

                    
                    <td>
                      <a href="{{route('catalogue.edit', $item->id)}}" class="btn btn-primary btn-icon-split btn-sm">
                         <span class="icon text-white-50">
                            <i class="fas fa-pen"></i>
                         </span>
                         <span class="text">Edit</span>
                       </a>
                   
                     <button type="button" data-toggle="modal" data-target="#delted-modal">

                       <span class="text btn btn-danger btn-sm btn-icon-split">Delete</span>
                 </button>
                 <div class="modal fade" id="delted-modal" tabindex="-1" role="dialog" aria-labelledby="delted-modal-Label-{{$key + 1}}" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="delted-modal-Label-{{$key + 1}}"> Are you Sure Want to Delete</h5>

                       </div>
                       
                       <div class="modal-footer">
                         <button type="button"  data-dismiss="modal"> <span class="btn btn-dark btn-sm"> Close</span></button>
                         <form action="{{route('catalogue.destroy', $item->id)}}" method="post">
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
                    
                @empty
                    
                @endforelse
              
                    
                   
            </tbody>
          </table>
        
        </div>

      </div>
    </div>
  </div>




@endsection
