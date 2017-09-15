@extends('layouts.main')

@section('styles')

    <link href="css/Redy/message-settings.css" rel="stylesheet">

@endsection

@section('content')

               <br>

               <div id="profile-content">
               <div class="row" id="title-Row">
                    <div class="col-lg-4">
                        <p id="page-title">SMS Settings</p>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4" >
                    </div>
                </div>
                </div>

                <br>


                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12 col-md-offset-2">
                        <div class="card">
                            <div class="card-block">

                                @foreach($sms as $message)

                                <form method="post" action="">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-8">

                                                <label>In-progress Message</label>
                                                <br><br>
                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <textarea class="form-control" name="progress" id="progress" >{{$message->progress}}</textarea>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <br>
                                                        <button style="  color: #FFFFFF; background-color: #FF5A5F" class="btn btn-default" name="progress_edit" id="progress_edit">Edit</button>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <button style="background-color: #00aa88; color: #FFFFFF; " class="btn" name="progress_save" id="progress_save">Save</button>
                                                    </div>
                                                </div>

                                        </div>
                                    </div>

                                    <br><hr><br>

                                    <form method="post" action="">

                                        {{csrf_field()}}

                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Redy Message</label>
                                            <br><br>
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" name="redy" id="redy" ></textarea>
                                                </div>
                                                <div class="col-lg-3">
                                                    <br>
                                                    <button style="color: #FFFFFF; background-color: #FF5A5F" class="btn btn-default" name="redy_edit" id="redy_edit">Edit</button>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <button style="background-color: #00aa88; color: #FFFFFF;" class="btn" name="redy_save" id="redy_save">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    </form>

                                    <br><hr><br>

                                    <form method="post" action="">

                                        {{csrf_field()}}

                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Due Message</label>
                                            <br><br>
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" name="due" id="due" ></textarea>
                                                </div>
                                                <div class="col-lg-3">
                                                    <br>
                                                    <button style="color: #FFFFFF; background-color: #FF5A5F" class="btn btn-default" name="due_edit" id="due_edit">Edit</button>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <button style="background-color: #00aa88; color: #FFFFFF; " class="btn" name="due_save" id="due_save">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    </form>

                                    <br><hr><br>

                                    <form method="post" action="">

                                        {{csrf_field()}}

                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Delivered Message</label>
                                            <br><br>
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" name="deliver" id="deliver" ></textarea>
                                                </div>
                                                <div class="col-lg-3">
                                                    <br>
                                                    <button style="  color: #FFFFFF; background-color: #FF5A5F" class="btn btn-default" name="deliver_edit" id="deliver_edit">Edit</button>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <button style="background-color: #00aa88; color: #FFFFFF;" class="btn" name="deliver_save" id="deliver_save">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    </form>

                                    <br><br>

                                </form>

                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>

@endsection