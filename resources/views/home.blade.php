@extends('layouts.app')
@section('header')
<h5>
    Dashboard
</h5>

@endsection
@section('content')
   

                   

<div class="nav-tabs-custom"><ul class="nav nav-tabs pull-right ui-sortable-handle"><li><a href="#grafik" data-toggle="tab" id="gfx" act="/report/addReport"><li class="active"><a href="#laporan" data-toggle="tab"></a></li></ul><div class="tab-content no-padding"><div class="tab-pane active" id="laporan"><div class="row"><div class="col-lg-3 col-xs-6">
              <div class="small-box bg-navy"><a href="/report/addReport" class="btn btn-success btn-lg pull-right btn-edit" act="/report/addReport" style="z-index: 999;position: inherit;margin: 5px;" title="Buat Laporan" alt="Buat Laporan"><i class=></i></a>
              <div class="inner">
                  <h3>0</h3>
                  <p>Add Report</p>
                </div>
                <div class="icon"><i class="fa fa-book"></i></div>
                     <a href="/report/addReport" class="small-box-footer">Next <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div></div>
            
            <div class="row"><div class="col-lg-3 col-xs-6">
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3>0</h3>
                  <p>Report Pending Verification</p>
                </div>
                <div class="icon"><i class="fa fa-archive"></i></div>
                     <a href="/report/reportverification" class="small-box-footer">View Report <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-green">
                <div class="inner">
                  <h3> 100 </h3>
                  <p>Verified Report</p>
                </div>
                <div class="icon"><i class="fa fa-archive"></i></div>
                     <a href="/report/reportverified" class="small-box-footer">View Report <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>0</h3>
                  <p>Report Rejected</p>
                </div>
                <div class="icon"><i class="fa fa-archive"></i></div>
                     <a href="/report/reportrejected" class="small-box-footer">View Report <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div></div><div style="display:none">

@endsection
