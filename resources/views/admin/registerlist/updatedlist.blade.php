@extends('admin.body.adminmaster')

@section('admin')


<div class="card-deck mb-4">
  <div class="card col-3">

    <div class="card-body">
      <h4 class="card-title" style="color:#a70064" >Total Updated Users</h5>
        <p class="text-black mb-1">
          Users who have Updated Profile 
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
            <h5 class="" style="color:#a70064">Total Updated List</h5>
          
           <div>

        </div>
       
        </div>
        </div>
        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush table-hover mb-5" id="example" >
            <thead class="thead-light">
              <tr>
                <th>Sr.No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Created At</th>
        
              </tr>
            </thead>
            <tbody id="myTable">
              @foreach ($registers as $key=>$item )
                  
      
                    <tr>
                       <td>{{$key +1}}</td>

                       <td>{{$item->name}}</td>

                       <td>{{$item->email}}</td>

                       <td>{{$item->number}}</td>
                        
                       <td>{{$item->address}}</td>
                           
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