
@extends('admin.body.adminmaster')

@section('admin')



<div class="card-deck mb-4">
    <a class="card col-3" href="{{route('registerlist')}}">
  
      <div class="card-body" >
        <h4 class="card-title" style="color:#a70064" >Register User</h5>
          <p class="text-black mb-1">
        Users who have not Updated Profile 
          </p>
          <p class="h6 text-black">
            {{$registers->count()}}
          </p>
        
        </div>
      </a>
    <a class="card col-3" href="{{route('updatedregisterlist')}}">
  
      <div class="card-body">
        <h4 class="card-title" style="color:#a70064" >Updated User</h5>
          <p class="text-black mb-1">
            Users who have Updated Profile 
              </p>
          <p class="h6 text-black">
            {{$updatedregisters->count()}}
          </p>
        
      </div>
    </a>
    <a class="card col-3" href="{{route('morenutrient.index')}}">
  
      <div class="card-body">
        <h4 class="card-title" style="color:#a70064" >Other Nutrients</h5>
          <p class="text-black mb-1">
            Total No. of Other Nutrients
              </p>
          <p class="h6 text-black">
            {{$morenutrients->count()}}
          </p>
        
      </div>
    </a>
    <a class="card col-3" href="{{route('freehit.index')}}">
  
      <div class="card-body">
        <h4 class="card-title" style="color:#a70064" >Total Free Hits</h5>
          <p class="text-black mb-1">
            Total No. of Free Count
              </p>
          <p class="h6 text-black">
           {{$freehit->freecount}}
          </p>
        
      </div>
    </a>
   
    </div>
   
   


<div class="card-deck mb-4">
    <a class="card col-3" href="{{route('catalogue.index')}}">

  
      <div class="card-body">
        <h4 class="card-title" style="color:#a70064" >Dry Fertilizers</h5>
          <p class="text-black mb-1">
            Total No. of Dry Fertilizers
          </p>
          <p class="h6 text-black">
            {{$drycats->count()}}
          </p>
        
      </div>
    </a>
    <a class="card col-3" href="{{route('catalogue.index')}}">
  
      <div class="card-body">
        <h4 class="card-title" style="color:#a70064" >Liquid Fertilizers</h5>
          <p class="text-black mb-1">
            Total No. of Liquid Fertilizers
          </p>
          <p class="h6 text-black">
            {{$liquidcats->count()}}
          </p>
        
      </div>
    </a>
    <a class="card col-3" href="{{route('catalogue.index')}}">
  
      <div class="card-body">
        <h4 class="card-title" style="color:#a70064" >Mix Fertilizers</h5>
          <p class="text-black mb-1">
            Total No. of Mix Fertilizers
          </p>
          <p class="h6 text-black">
            {{$mixcats->count()}}
          </p>
        
      </div>
    </a>
    <a class="card col-3" href="{{route('catalogue.index')}}">
  
      <div class="card-body">
        <h4 class="card-title" style="color:#a70064" >Total Fertilizers</h5>
          <p class="text-black mb-1">
            Total No. of Fertilizers
          </p>
          <p class="h6 text-black">
            {{$catalogues->count()}}
          </p>
        
      </div>
    </a>
   
    </div>
   




    

<div class="card-deck mb-4">
  <a class="card col-3" href="{{route('catalogue.index')}}">


    <div class="card-body">
      <h4 class="card-title" style="color:#a70064" >Inactive Fertilizers</h5>
        <p class="text-black mb-1">
          Total No. of Inactive Fertilizers
        </p>
        <p class="h6 text-black">
          {{$notactive->count()}}
        </p>
      
    </div>
  </a>
  <a class="card col-3" href="{{route('catalogue.index')}}">

    <div class="card-body">
      <h4 class="card-title" style="color:#a70064" >Active Fertilizers</h5>
        <p class="text-black mb-1">
          Total No. of Active Fertilizers
        </p>
        <p class="h6 text-black">
          {{$active->count()}}
        </p>
      
    </div>
  </a>
  <a class="col-3" href="{{route('catalogue.index')}}">

    
  </a>
  <a class="col-3" href="{{route('catalogue.index')}}">

  
  </a>
 

 
  </div>
 

{{-- <div class="maincontainer">
     <div class="box">
         <h3 class="title">
              Articles
         </h3>
         <div class="icon">

         </div>

     </div>
     <div class="box">
        <h3 class="title">
        Question & Answer
       </h3>
       <div class="icon">

       </div>

    </div>
    <div class="box">
        <h3 class="title">
          Press Release
           </h3>
           <div class="icon">

           </div>

    </div>
    <div class="box">
        <h3 class="title">
          Education & Guides
           </h3>
           <div class="icon">

           </div>

    </div>
    <div class="box">
        <h3 class="title">
          Practice Areas
           </h3>
           <div class="icon">

           </div>

    </div>
    <div class="box">
        <h3 class="title">
          Team Members
           </h3>
           <div class="icon">

           </div>

    </div>
    <div class="box">
        <h3 class="title">
        Contact Entry
           </h3>
           <div class="icon">

           </div>

    </div>
    <div class="box">
        <h3 class="title">
        Subscribe
           </h3>
           <div class="icon">

           </div>

    </div>
</div> --}}











@endsection
