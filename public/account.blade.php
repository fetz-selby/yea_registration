@extends('layout.master')

@section('content')

<div class="content-wrapper">        
    <div class="container-full">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title"><i class="mdi mdi-home-outline"></i> Dashboard /</h4>
                    <div class="d-inline-block">
                        <nav style="margin-right: 20px">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page"><a href="#"></a> Employees</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div style="float: right">
                    <button type="button" class="waves-effect waves-light btn btn-dark mb-5" data-bs-toggle="modal" data-bs-target="#modal-fill">Save Changes</button>&nbsp;
                    <button type="button" class="waves-effect waves-light btn btn-outline btn-success mb-5">Cancel</button>

                </div>
            </div>
        </div>

        <section class="content">
            
            <div class="row fx-element-overlay">

                <div class="col-md-12 col-lg-4">
                    <div class="box" style="background-color: transparent; box-shadow:none;">
                        <div class="fx-card-item">
                            <div class="fx-card-avatar fx-overlay-1" style="max-height: 300px;"> <img height="300" width="300" src="../images/card/1.jpg" alt="user">
                                <div class="fx-overlay">
                                    <ul class="fx-info">
                                        <li><a class="btn default btn-outline image-popup-vertical-fit" href="../images/card/1.jpg"><i class="ion-search"></i></a></li>
                                        <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="ion-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="fx-card-content">
                                <a>Change Profile image</a>
                                <br> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="box" style="width: 450px">
                        <div class="box-body">
                           <div class="row mb-3">
                              <div class="col-lg-6 col-md-12">
                                <span class="badge badge-lg badge-dot badge-success"></span>
                                <h4>Active</h4>
                              </div>
                              <div class="col-lg-6 col-md-12 fw-600">
                                <p href="#" class="text-fade hover-primary mb-1 fs-10">Annual Salary</p>
                                <h4 class="text-dark">$ 300,000</h4>
                              </div>
                           </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12 fw-600">
                                    <p href="#" class="text-fade hover-primary mb-1 fs-10">Full Name</p>
                                    <h4 class="text-dark">Lin Dalong</h4>
                                 </div>
                                <div class="col-lg-6 col-md-12 fw-600">
                                  <p href="#" class="text-fade hover-primary mb-1 fs-10">Supervisor Name</p>
                                  <h4 class="text-dark">Lin Dalong</h4>
                               </div>


                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12 fw-600">
                                    <p href="#" class="text-fade hover-primary mb-1 fs-10">Position</p>
                                    <h4 class="text-dark">Lin Dalong</h4>
                                 </div>
                                <div class="col-lg-6 col-md-12 fw-600">
                                  <p href="#" class="text-fade hover-primary mb-1 fs-10">Hourly Rate</p>
                                  <h4 class="text-dark">$95</h4>
                               </div>


                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12 fw-600">
                                    <p href="#" class="text-fade hover-primary mb-1 fs-10">Onboarding</p>
                                    <h4 class="text-dark">21.05.2021</h4>
                                 </div>
                                <div class="col-lg-6 col-md-12 fw-600">
                                  <p href="#" class="text-fade hover-primary mb-1 fs-10">Onboarding</p>
                                  <h4 class="text-dark">21.05.2021</h4>
                               </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row fx-element-overlay">

                <div class="col-md-12 col-lg-9">
                    <div class="box" style="background-color: transparent; box-shadow:none;" >
                        <div class="box-body">

                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <h4>Employee Details</h4>

                                    
                                        <div class="col-lg-12 col-md-12">
                                            <div class="row">
                                               
                                                    <p href="#" class="text-fade hover-primary mb-1 fs-9">First Name</p>
                                                    <h4 class="text-dark">Lin</h4>
                                                  
                                            </div>
                                            <div class="row">
                                              
                                                    <p href="#" class="text-fade hover-primary mb-1 fs-9">Last Name</p>
                                                    <h4 class="text-dark">Dalong</h4>
                                                
                                            </div>
                                            <div class="row">
                                              
                                                    <p href="#" class="text-fade hover-primary mb-1 fs-9">Email</p>
                                                    <h4 class="text-dark">lindalong@careintouch.com</h4>
                                                
                                            </div>
                                            <div class="row">
                                              
                                                    <p href="#" class="text-fade hover-primary mb-1 fs-9">Phone number</p>
                                                    <h4 class="text-dark">+1 355 78795487</h4>
                                                
                                            </div>
                                            <div class="row">
                                               
                                                     <p href="#" class="text-fade hover-primary mb-1 fs-9">Position</p>
                                                     <h4 class="text-dark">Nurse</h4>
                                                 
                                             </div>
                                            
        
                                        </div>
                                        
                                   
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <h4>PTO Hours|Sick Hours</h4>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="row mb-3">
                                           
                                           
                                                <label class="switch switch-border switch-primary">
                                                  <input type="checkbox" checked>
                                                  <span class="switch-indicator"></span>
                                                  <span class="switch-description"></span>
                                                  <span class="text-fade hover-primary mb-1 fs-9">Available</span>
                                                </label>
                                               
                                            
                                              
                                        </div>
                                        <div class="row mb-3">
                                          
                                            <label class="switch switch-border switch-primary">
                                                <input type="checkbox" checked>
                                                <span class="switch-indicator"></span>
                                                <span class="switch-description"></span>
                                                <span class="text-fade hover-primary mb-1 fs-9">Used</span>
                                              </label>
                                            
                                        </div>
                                        <div class="row mb-3">
                                          
                                            <label class="switch switch-border switch-primary">
                                                <input type="checkbox" checked>
                                                <span class="switch-indicator"></span>
                                                <span class="switch-description"></span>
                                                <span class="text-fade hover-primary mb-1 fs-9">Date Approved</span>
                                              </label>
                                            
                                        </div>
                                        <div class="row mb-3">
                                          
                                            <label class="switch switch-border switch-primary">
                                                <input type="checkbox" checked>
                                                <span class="switch-indicator"></span>
                                                <span class="switch-description"></span>
                                                <span class="text-fade hover-primary mb-1 fs-9">Date Pending</span>
                                              </label>
                                            
                                        </div>
                                        <div class="row mb-3">
                                           
                                            <label class="switch switch-border switch-primary">
                                                <input type="checkbox" checked>
                                                <span class="switch-indicator"></span>
                                                <span class="switch-description"></span>
                                                <span class="text-fade hover-primary mb-1 fs-9">Date Used</span>
                                              </label>
                                             
                                         </div>
                                        
    
                                    </div>
                                </div>
                            </div>

                          
                           
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-12 col-lg-4">
                    <div class="box" style="width: 450px">
                        <div class="box-body">
                           <div class="row mb-3">
                              <div class="col-lg-6 col-md-12">
                                <h4>Active</h4>
                              </div>
                              <div class="col-lg-6 col-md-12 fw-600">
                                <p href="#" class="text-fade hover-primary mb-1 fs-10">Annual Salary</p>
                                <h4 class="text-dark">$ 300,000</h4>
                              </div>
                           </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12 fw-600">
                                    <p href="#" class="text-fade hover-primary mb-1 fs-10">Full Name</p>
                                    <h4 class="text-dark">Lin Dalong</h4>
                                 </div>
                                <div class="col-lg-6 col-md-12 fw-600">
                                  <p href="#" class="text-fade hover-primary mb-1 fs-10">Supervisor Name</p>
                                  <h4 class="text-dark">Lin Dalong</h4>
                               </div>


                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12 fw-600">
                                    <p href="#" class="text-fade hover-primary mb-1 fs-10">Position</p>
                                    <h4 class="text-dark">Lin Dalong</h4>
                                 </div>
                                <div class="col-lg-6 col-md-12 fw-600">
                                  <p href="#" class="text-fade hover-primary mb-1 fs-10">Hourly Rate</p>
                                  <h4 class="text-dark">$95</h4>
                               </div>


                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12 fw-600">
                                    <p href="#" class="text-fade hover-primary mb-1 fs-10">Onboarding</p>
                                    <h4 class="text-dark">21.05.2021</h4>
                                 </div>
                                <div class="col-lg-6 col-md-12 fw-600">
                                  <p href="#" class="text-fade hover-primary mb-1 fs-10">Onboarding</p>
                                  <h4 class="text-dark">21.05.2021</h4>
                               </div>


                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="row">
                <div class="box position-static" style="max-width: 80%">
                    <div class="box-header">
                        <h4 class="box-title"></h4>
                        <div class="box-controls pull-right">
                            <input class="form-control no-border bg-lightest" id="e" type="date">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table">
                                <thead>
                                    <tr>

                                        {{--                                            <th style="border: 0;"></th>--}}
                                        <th style="border: 0">Pay Period</th>
                                        <th style="border: 0">Gross Pay</th>
                                        <th style="border: 0">Employee Taxes</th>
                                        <th style="border: 0">Employer Taxes</th>
                                        <th style="border: 0">Reimbursements</th>
                                        <th style="border: 0">Net Pay</th>

                                    </tr>
                                </thead>
                                <tbody>
                                <tr>

                                         {{--                       <td>--}}
                                         {{--                           <a class="box-hover-shadow" href="#">--}}
                                         {{--                               <div class="flexbox align-items-start">--}}
                                         {{--                                   <img class="avatar avatar-lg" src="{{ asset('images/lynda_kuyt.png') }}" alt="...">--}}
                                         {{--                               </div>--}}
                                         {{--                           </a>--}}
                                         {{--                       </td>--}}

                                    <td>2/12/2022</td>
                                    <td>1000.00</td>
                                    <td>500.00</td>
                                    <td>250.00</td>
                                    <td>350.00</td>
                                    <td>180.00</td>

                                </tr>
                                <tr>

                                         {{--                       <td>--}}
                                         {{--                           <a class="box-hover-shadow" href="#">--}}
                                         {{--                               <div class="flexbox align-items-start">--}}
                                         {{--                                   <img class="avatar avatar-lg" src="{{ asset('images/lynda_kuyt.png') }}" alt="...">--}}
                                         {{--                               </div>--}}
                                         {{--                           </a>--}}
                                         {{--                       </td>--}}

                                    <td>2/12/2022</td>
                                    <td>1000.00</td>
                                    <td>500.00</td>
                                    <td>250.00</td>
                                    <td>350.00</td>
                                    <td>180.00</td>

                                </tr>
                                <tr>
                                 
                                         {{--                       <td>--}}
                                         {{--                           <a class="box-hover-shadow" href="#">--}}
                                         {{--                               <div class="flexbox align-items-start">--}}
                                         {{--                                   <img class="avatar avatar-lg" src="{{ asset('images/lynda_kuyt.png') }}" alt="...">--}}
                                         {{--                               </div>--}}
                                         {{--                           </a>--}}
                                         {{--                       </td>--}}

                                    <td>2/12/2022</td>
                                    <td>1000.00</td>
                                    <td>500.00</td>
                                    <td>250.00</td>
                                    <td>350.00</td>
                                    <td>180.00</td>

                                </tr>
                                <tr>

                                         {{--                       <td>--}}
                                         {{--                           <a class="box-hover-shadow" href="#">--}}
                                         {{--                               <div class="flexbox align-items-start">--}}
                                         {{--                                   <img class="avatar avatar-lg" src="{{ asset('images/lynda_kuyt.png') }}" alt="...">--}}
                                         {{--                               </div>--}}
                                         {{--                           </a>--}}
                                         {{--                       </td>--}}

                                    <td>2/12/2022</td>
                                    <td>1000.00</td>
                                    <td>500.00</td>
                                    <td>250.00</td>
                                    <td>350.00</td>
                                    <td>180.00</td>

                                </tr>
                                <tr>
 
                                         {{--                       <td>--}}
                                         {{--                           <a class="box-hover-shadow" href="#">--}}
                                         {{--                               <div class="flexbox align-items-start">--}}
                                         {{--                                   <img class="avatar avatar-lg" src="{{ asset('images/lynda_kuyt.png') }}" alt="...">--}}
                                         {{--                               </div>--}}
                                         {{--                           </a>--}}
                                         {{--                       </td>--}}

                                    <td>2/12/2022</td>
                                    <td>1000.00</td>
                                    <td>500.00</td>
                                    <td>250.00</td>
                                    <td>350.00</td>
                                    <td>180.00</td>

                                </tr>

                               

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
       </div>
        </section>
    </div>
</div>




@endsection