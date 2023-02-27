@extends('admin.body.adminmaster')

@section('admin')

<div class="card-deck mb-4">
  <div class="card col-3">

    <div class="card-body">
      <h4 class="card-title" style="color:#a70064" >Total Registered Users</h5>
        <p class="text-black mb-1">
          Users who have not Updated Profile 
            </p>
        <p class="h6">
          {{$registers->count()}}
        </p>
      
    </div>
  </div>
 
  </div>
 
 


<div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3">
         <div class="d-flex justify-content-between align-items-center" >
            <h5 class="" style="color:#a70064">Register List</h5>
          
           <div>
           
        </div>
       
        </div>
        </div>
        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush table-hover mb-5"  id="example">
            <thead class="thead-light">
              <tr>
                <th>Sr.No.</th>
            
                <th>Email</th>
                <th>Free Hit left/ Total Free Hit</th>
                <th>Created At</th>
              
              </tr>
            </thead>
            <tbody >
              @foreach ($registers as $key=>$item)
                
         
                    <tr>
                       <td>{{$key +1}}</td>

                       <td>{{$item->email}}</td>

                       <td>@if($item->hit_remaining < 0)
                       
                       
                       0/{{$item->free_hit}}
                       
                       @else
                       
                        {{$item->hit_remaining}}/{{$item->free_hit}}
                        
                        @endif
                       
                       
                       </td>

                       <td>{{$item->created_at}}</td>
                        
                    
                    </tr>
                  @endforeach
                   
            </tbody>
          </table>
        
        </div>

      </div>
    </div>
  </div>

@endsection


@section('custom_JS')

@endsection