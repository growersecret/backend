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
            
                <th>Email</th>
                <th>Free Hit left/ Total Free Hit</th>
                <th>Created At</th>
              
              </tr>
            </thead>
            <tbody id="myTable">
              @foreach ($registers as $key=>$item)
                
         
                    <tr>
                       <td>{{$key +1}}</td>

                       <td>{{$item->email}}</td>

                       <td>{{$item->hit_remaining}}/{{$item->free_hit}}</td>

                       <td>{{$item->created_at}}</td>
                        
                       
{{-- 
                       
                       <td>
                         <a href="" class="btn btn-primary btn-icon-split btn-sm">
                            <span class="icon text-white-50">
                               <i class="fas fa-pen"></i>
                            </span>
                            <span class="text">Edit</span>
                          </a>
                      
                        <button type="button" data-toggle="modal" data-target="#delted-modal">

                          <span class="text btn btn-danger btn-sm btn-icon-split">Delete</span>
                    </button>
                    <div class="modal fade" id="delted-modal" tabindex="-1" role="dialog" aria-labelledby="delted-modal-Label" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="delted-modal-Label"> Are you Sure Want to Delete This Inventory</h5>

                          </div>
                          
                          <div class="modal-footer">
                            <button type="button"  data-dismiss="modal"> <span class="btn btn-dark btn-sm"> Close</span></button>
                            <form action="" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit">
                               <span class="text btn btn-danger btn-icon-split btn-sm">Delete</span></button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                       </td> --}}


                    </tr>
                  @endforeach
                   
            </tbody>
          </table>
        
        </div>

      </div>
    </div>
  </div>

@endsection