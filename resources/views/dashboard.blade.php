@extends('layouts.main')

@section('styles')

    <link href="css/Redy/dashboard.css" rel="stylesheet">

    <script type="text/javascript">
        $(document).ready(function() {
            $("#myModal").modal();
        });
    </script>

@endsection

                @section('content')

               <br>

               <div id="dashboard-content">

               <div class="row" id="title-Row">
                    <div class="col-lg-4">
                        <p id="page-title">Dashboard</p>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4" style="padding-top: 20px; padding-right: 20px;">
                        <div id="date-show">
                            <div id="date-show-inner">
                                <label id="date-label" style="color: #FFFFFF; text-align: center;"><?php echo date("F,j S l Y"); ?></label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <br><br><br>

                    {{--@foreach($jobs as $p)--}}

                    <div class="col-lg-2" class="counts" id="row1">
                        <div class="counts-inner" style="border: 1.5pt solid #FEAF00;">
                            <label class="content-topic" style="color: #FEAF00;">PROGRESS</label><br>
                            <label class="content-data" style=" color: #FEAF00; line-height: 50px;  ">5</label>
                        </div>
                    </div>
                    <div class="col-lg-2" class="counts" id="row2">
                        <div class="counts-inner" style="border: 1.5pt solid #1abc9c;">
                            <label class="content-topic" style="color: #1abc9c;">REDY</label><br>
                            <label class="content-data" style="color: #1abc9c; line-height: 50px;">15</label>
                        </div>
                    </div>
                    <div class="col-lg-2" class="counts" id="row3">
                        <div class="counts-inner" style="border: 1.5pt solid #9d9e91;">
                            <label class="content-topic" style="color: #9d9e91;">DELIVERED</label><br>
                            <label class="content-data" style="color: #9d9e91; line-height: 50px;">25</label>
                        </div>
                    </div>
                    <div class="col-lg-2" class="counts" id="row4">
                        <div class="counts-inner" style="border: 1.5pt solid #ff5a5f;">
                            <label class="content-topic" style="color: #ff5a5f;">DUE</label><br>
                            <label class="content-data" style="color: #ff5a5f; line-height: 50px;">10</label>
                        </div>
                    </div>

                    {{--@endforeach--}}

                    <div class="col-lg-4" class="counts">

                            <div class="row">
                                    <div class="col-lg-11">
                                        <div style="float: right;">
                                            <label  style="float: right; font-family: VAG Rounded; font-size: 24px;">15</label>
                                            &nbsp;&nbsp;&nbsp;
                                            <label style="font-family: VAG Rounded; font-size: 24px;" >New Jobs :</label>

                                            <br><br>

                                            <label  style="float: right; font-family: VAG Rounded; font-size: 24px;">5</label>
                                            &nbsp;&nbsp;
                                            <label style="font-family: VAG Rounded; font-size: 24px;" >SMS Count :</label>
                                        </div>
                                    </div>
                            </div>
                    </div>
                </div>

                <br>

                </div>

                <br>

                 <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">

                                <div>
                                    <table class="table table-striped table-bordered" id="example" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Job</th>
                                                <th>Status</th>
                                                <th>Due Date</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jobs1 as $j)
                                                <td>{{$j->Name}}</td>
                                                <td>{{$j->Work}}</td>


                                                <form method="POST" action="{{url('/dashboard/save/'.$j->Id)}}">
                                                    {{csrf_field()}}
                                                <td><select style="height: 30px;"  name="status_option" value="{{$j->status}}" id="status_option">
                                                        <option style="color: #1abc9c;" value="Redy" @if($j->status == 'Redy') selected @endif >Redy</option>
                                                        <option style="color: #dd0f35;" value="Due" @if($j->status == 'Due') selected @endif >Due</option>
                                                        <option style="color: #c3cc4b;" value="Progress" @if($j->status == 'Progress') selected @endif >Progress</option>
                                                        <option style="color: #9d9e91;" value="Delivered" @if($j->status == 'Delivered') selected @endif >Delivered</option>
                                                    </select>
                                                    &nbsp;&nbsp;&nbsp;

                                                    <button style="background-color: #00aff0" type="submit"  class="action btn btn-primary">Save</button>
                                                </td>

                                                </form>

                                                <td>{{$j->Complete_Date}}</td>
                                                <td>

                                                    <form method="GET" action="{{url('/dashboard/sms/'.$j->Id)}}">

                                                        {{csrf_field()}}
                                                   &nbsp;&nbsp;&nbsp;<button style="background-color: #1ABC9C"  class="action btn btn-primary" data-toggle="modal" data-target="#myModal">SMS</button> &nbsp;&nbsp;&nbsp;
                                                        <div class="modal fade" id="myModal">
                                                            <div class="modal-dialog modal-sm">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h3>Confirm the SMS</h3>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Thank you for transacting with us...</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-primary" type="button" >Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>

                                                    <td>
                                                    <form method="GET" action="{{url('/dashboard/'.$j->Id.'/edit')}}">
                                                        <button style="background-color:#BDB76B" type="submit" class="action btn btn-primary">Edit</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endsection

