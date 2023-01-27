@extends('layouts.app')
@section('header')
<h5>
    Reports
</h5>

@endsection
@section('content')
   
    <div class="container-fluid">
    <div class="row">
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pgwmodal">
                               minggu ini
                            </button>
                            &nbsp &nbsp &nbsp
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pgwmodal">
                                bulan ini
                            </button>


                            <div class="card-footer">
                    <div style="right: 0%">
                        <span class="badge btn-success" style="float: right">
                            <a href="/report/addReport" style="color: aliceblue">add report</a>
                        </span>
                    </div>
                           
    </div>

    <div class="row">
        <div class="col">
            <div class="card">

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>NIP</th>
                                <th>NAME</th>
                                <th>REPORT</th>
                                <th>EDIT</th>
                            </tr>
                        </thead>
                        <tbody>
                     
                       
                    <tr>
                      <td>1</td>
                      <td>196802211995121003</td>
                      <td>FIRDAUS S.Pd</td>
                      
                      <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pgwmodal">
                                
                            </button></td>
                            <td>
                                    <span class="badge badge-warning">
                                        <a href="/report" style="color: aliceblue">Edit </a>
                                    </span>
    
                                    <span class="badge badge-danger">
                                        <a href="" style="color:aliceblue">Delete </a>
                                    </span>
                                </td>
                    </tr>
                 
              

                        </tbody>
                        <!-- <div class="card-footer">
                    <div style="right: 0%">
                        <span class="badge btn-success" style="float: right">
                            <a href="/report/create" style="color: aliceblue">Create</a>
                        </span> -->
                    </div>
                </div>


</div>

@endsection
