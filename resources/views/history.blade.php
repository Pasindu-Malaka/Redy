@extends('layouts.main')

@section('styles')

    <link href="css/Redy/history.css" rel="stylesheet">

@endsection

@section('content')

                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                                <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>





               <br>

               <div id="history-content">

               <div class="row" id="title-Row">
                    <div class="col-lg-4">
                        <p id="page-title">History</p>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4" >
                    </div>
                </div>

                </div>

                <br>

                 <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <div>
                                    <table class="table table-striped table-bordered" id="HistoryTable" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                {{--<th>Status</th>--}}
                                                <th>Job</th>
                                                <th>Received</th>
                                                <th>Handover</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($jobs as $jo)
                                            <tr>
                                                <td>{{$jo->Name}}</td>
                                                <td>{{$jo->Mobile}}</td>
                                                {{--<td><input type="text" disabled="true" class="color-show" style="background-color: red; color: #ffffff; width: 100px; text-align: center;" value="Pending"></td>--}}
                                                <td>{{$jo->Work}}</td>
                                                <td>{{$jo->created_at}}</td>
                                                <td>Handovered</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#HistoryTable').DataTable();
        } );
    </script>

@endsection