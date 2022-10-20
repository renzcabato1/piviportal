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
                                        <div class="col-xl-12 text-center">
                                            <h4 class="card-title">Web Applications</h4>
                                            <hr>
                                        </div>
                                        <div class="col-xl-3 mb-3">
                                        </div>
                                        <div class="col-xl-6 mb-3">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" id="Search"
                                                    onkeyup="myFunction()" placeholder="Search" aria-label="search"
                                                    aria-describedby="search">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row portfolio-grid ">
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-12 target">
                                            @foreach($portals as $portal)
                                            <figure>
                                                <img src="{{URL::asset($portal->image)}}" alt="image" class="img-thumbnail" />
                                            
                                                <p class="">{{$portal->title}}
                                                    <br>
                                                    Inside Tower Link : <a href="{{$portal->link}}"> Link </a> 
                                                    <br>
                                                    Outside Tower Link : <a href='{{$portal->outside_link}}'> Link </a>

                                                </p>
                                        </figure>
                                            @endforeach
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            {{-- <footer class="footer text-center">
                <div class="d-sm-flex justify-content-center justify-content-sm-between text-center">
                    <p class="text-muted text-center text-sm-center d-block d-sm-inline-block">Copyright © 2022. Designed
                        and Developed <a href="http://obananadigitalsolutions.com/" target="_blank">Obanana Digital
                            Solutions</a>. All rights reserved.</p>
                </div>
            </footer> --}}
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
@endsection
