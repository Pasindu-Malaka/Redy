@extends('layouts.main')

@section('styles')

    <link href="css/Redy/my-profile.css" rel="stylesheet">

@endsection

@section('content')

               <br>

               <div id="profile-content">
               <div class="row" id="title-Row">
                    <div class="col-lg-4">
                        <p id="page-title">My Profile</p>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4" >
                    </div>
                </div>
                </div>

                <br>

                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <center class="m-t-30"> <!--<img src="assets/images/users/5.jpg" class="img-circle" width="150" />-->
                                    <h4 class="card-title m-t-10">{{\Illuminate\Support\Facades\Auth::user()->name}}</h4>
                                    <h6 class="card-subtitle">ID : {{\Illuminate\Support\Facades\Auth::user()->id}}</h6>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Business Sector</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="business-sector" value="{{\Illuminate\Support\Facades\Auth::user()->business_sector}}" id="business-sector">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-10">
                                            <input type="text" name="mobile" value="{{\Illuminate\Support\Facades\Auth::user()->telephone}}" id="mobile" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-10">
                                            <input type="text" name="email" id="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}"  class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Location</label>
                                        <div class="col-md-10">
                                            <input type="text" name="location" value="{{\Illuminate\Support\Facades\Auth::user()->location}}" id="location"  class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            {{--<button class="btn btn-success">Edit Profile</button>--}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

    @endsection