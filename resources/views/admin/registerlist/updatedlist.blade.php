@extends('admin.body.adminmaster')

@section('admin')

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