


        <aside class="left-sidebar bg-sidebar" >
            <div id="sidebar" class="sidebar sidebar-with-footer">
              <!-- Aplication Brand -->
              <a class="app-brand" href="{{route('dashboard')}}">
            
                  <img src="{{asset('img/logo2.png')}}" class="logo" alt="" srcset="" style="height: 75px; object-fit:contain">
               
              </a>
              <!-- begin sidebar scrollbar -->
              <div class="sidebar-scrollbar">

                <!-- sidebar menu -->
                <ul class="nav sidebar-inner" id="sidebar-menu">



                    <li  class="has-sub active expand" >
                      <a class="sidenav-item-link" href="{{route('dashboard')}}">
                        <i class="mdi mdi-view-dashboard-outline" style="color:#a70064"></i>
                        <span class="nav-text">Admin Dashboard</span> 
                      </a>
                      <ul  class="collapse show"  id="dashboard"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">

{{-- //start --}}

                      <li  class="has-sub" >
                         <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pagedet"
                            aria-expanded="false" aria-controls="pagedet">
                                 <span class="nav-text">User List</span> <b class="caret"></b>
                             </a>
                       <ul  class="collapse"  id="pagedet">
                           <div class="sub-menu">
                            <li>
                            <a href="{{route('registerlist')}}">Registered users</a>
                             </li>
                        
                            
                            <li>
                              <a href="{{route('updatedregisterlist')}}">Updated users</a>
                             </li>


                             <li>
                              <a href="{{route('addUser')}}">Add users</a>
                             </li>



                          
                        
{{-- //end --}}


                           </div>
                           </ul>
                           </li>



                          <li  class="has-sub" >
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pagedetail"
                              aria-expanded="false" aria-controls="pagedetail">
                              <span class="nav-text">Fertilizer</span> <b class="caret"></b>
                            </a>
                            <ul  class="collapse"  id="pagedetail">
                              <div class="sub-menu">

                                <li >
                                  <a href="{{route('catalogue.index')}}">Fertilizer List</a>
                                </li>
                                <li >
                                  <a href="{{route('catalogue.create')}}">Add Fertilizer</a>
                                </li>
{{-- //end --}}


                              </div>
                            </ul>
                          </li>

                          <li  class="has-sub" >
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pagedetai"
                              aria-expanded="false" aria-controls="pagedetai">
                              <span class="nav-text">Free Hit Count</span> <b class="caret"></b>
                            </a>
                            <ul  class="collapse"  id="pagedetai">
                              <div class="sub-menu">

                                <li >
                                  <a href="{{route('freehit.index')}}">Free Hit</a>
                                </li>
                              
{{-- //end --}}


                              </div>
                            </ul>
                          </li>

                       
   
                             <li  class="has-sub" >
                               <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#detail"
                                 aria-expanded="false" aria-controls="detail">
                                 <span class="nav-text">More Nutrients</span> <b class="caret"></b>
                               </a>
                               <ul  class="collapse"  id="detail">
                                 <div class="sub-menu">
   
                                   <li >
                                     <a href="{{route('morenutrient.index')}}">Nutrient List</a>
                                   </li>
                                   <li >
                                     <a href="{{route('morenutrient.create')}}">Nutrient Add</a>
                                   </li>
   {{-- //end --}}
   
   
                                 </div>
                               </ul>
                             </li>


                        </div>
                      </ul>
                    </li>

{{-- 
                    <li  class="has-sub" >
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pagedet"
                         aria-expanded="false" aria-controls="pagedet">
                              <span class="nav-text">Registered User</span> <b class="caret"></b>
                          </a>
                    <ul  class="collapse"  id="pagedet">
                        <div class="sub-menu">
                         <li>
                         <a href="{{route('registerlist')}}">Register user</a>
                          </li>
                     
                         
                         <li>
                           <a href="{{route('updatedregisterlist')}}">Updated Register user</a>
                          </li>
                     



                        </div>
                        </ul>
                        </li> --}}



                    
{{-- 
                    <li  class="has-sub" >
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                        aria-expanded="false" aria-controls="pages">
                        <i class="mdi mdi-image-filter-none"></i>
                        <span class="nav-text">Pages</span> <b class="caret"></b>
                      </a>
                      <ul  class="collapse"  id="pages"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">



                          <li  class="has-sub" >
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#aboutpage"
                              aria-expanded="false" aria-controls="aboutpage">
                              <span class="nav-text">Eduction & Guides</span> <b class="caret"></b>
                            </a>
                            <ul  class="collapse"  id="aboutpage">
                              <div class="sub-menu">

                                <li >
                                  <a href="">Index</a>
                                </li>

                                <li >
                                  <a href="">Create</a>
                                </li>




                              </div>
                            </ul>
                          </li> --}}

                </ul>

              </div>




            </div>
          </aside>







          
