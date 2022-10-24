@extends('layouts.header')

@section('content')
    <div class="container page-body-wrapper mt-3">
        <div class="main-panel">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 text-center">
                                            <h4 class="card-title">Web Applications</h4>
                                            <hr>
                                        </div>
                                        <div class="col-xl-8 mb-3">
                                            <span class="badge badge-pill badge-outline-success text-success mb-2">Link 1</span> - Link Inside PMI Tower <br>
                                            <span class="badge badge-pill badge-outline-info text-info">Link 2</span> - Link Outside PMI Tower
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                           
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" id="Search"
                                                    onkeyup="myFunction()" placeholder="Search" aria-label="search"
                                                    aria-describedby="search">
                                            </div>
                                          
                                        </div>
                                    </div>
                                    <div class="row portfolio-grid ">
                                   
                                            @foreach($portals as $portal)
                                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-12 target">
                                                    <figure >
                                                        <img src="{{URL::asset($portal->image)}}" alt="image" class="img-thumbnail" title='{{$portal->title}}'/>
                                                        
                                                        <span style='display:none;'>{{$portal->title}}</span>
                                                        
                                                        <div class='row p-2'>
                                                            <div class='col-12'>
                                                                <a href="{{$portal->link}}" target='_blank'><button type="button" class="btn btn-outline-success btn-sm btn-block">Link 1</button></a>
                                                            </div>
                                                        </div>
                                                        <div class='row p-2'>
                                                            <div class='col-12'>
                                                                <a href="{{$portal->outside_link}}" target='_blank'><button type="button" class="btn btn-outline-info btn-sm btn-block">Link 2</button></a>
                                                            </div>
                                                        </div>
                                                        
                                                      
                                                    </figure>
                                                    
                                                </div>
                                            @endforeach
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
