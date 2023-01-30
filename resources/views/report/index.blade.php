@extends('layouts.app')
@section('header')
<h5>
    Reports
</h5>

@endsection
@section('content')
   
<div class="box">
            <div class="box-body">

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table bordered">
                <tbody>
                    <tr>
                        <td width="300">
                            <b>Informasi Pegawai</b>
                            </td>
                            <td colspan="2">:</td></tr><tr><td>Nama</td><td>:</td><td>EDDY SUPRIATNO S.Pd</td></tr><tr><td>NIP</td><td>:</td><td>196802211995121003</td></tr><tr><td>Jabatan</td><td>:</td><td>GURU MADYA </td></tr><tr><td>Kelas Jabatan</td><td>:</td><td>WALI KELAS 12 IPS 1</td></tr><tr><td>Besaran TPP<button</td><td>:</td><td><span class="on-hide btpp">Rp 0,00</span></td></tr><tr><td>Akumulasi Jam Kerja</td><td>:</td><td>13.5 Jam</td></tr><tr><td>Kekurangan jam kerja dari 112,5 jam</td><td>:</td><td>99 Jam</td></tr><tr><td> </td></tr></tbody></table></div><script type="text/javascript">
            $(document).ready(function(){
                    
                $('#shwtpp').click(function() {
                    var ifa=$('#shwtpp > i.fa');
                    $('.btpp').toggle();
                    if(ifa.hasClass('fa-times-circle')){
                        ifa.addClass('fa-sign-in').removeClass('fa-times-circle');
                    }else{
                        ifa.addClass('fa-times-circle').removeClass('fa-sign-in');
                    }
                    return false;                
                });
            
                    }); 
            </script></div></div></div></div>

<div class="nav-tabs-custom"><ul class="nav nav-tabs pull-right ui-sortable-handle"><li><a href="#grafik" data-toggle="tab" id="gfx" act="/report/addReport"><li class="active"><a href="#laporan" data-toggle="tab">Report</a></li></ul><div class="tab-content no-padding"><div class="tab-pane active" id="laporan"><div class="row"><div class="col-lg-3 col-xs-6">
              <div class="small-box bg-navy"><a href="/report/addReport" class="btn btn-success btn-lg pull-right btn-edit" act="/report/addReport" style="z-index: 999;position: inherit;margin: 5px;" title="Buat Laporan" alt="Buat Laporan"><i class="fa fa-plus"></i></a>
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
                  <h3> 0 </h3>
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
                     <a href="#" class="small-box-footer">View Report <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-red">
                <div class="inner">
                  <h3> 0 </h3>
                  <p>Report Rejected</p>
                </div>
                <div class="icon"><i class="fa fa-archive"></i></div>
                     <a href="/report/reportrejected" class="small-box-footer">View Report <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div></div><div style="display:none"><!-- eJzlj8tqwkAARfcF~_GS1UzJwkyKwsQs0jhiII2QR8VVHOtoJr5CHnRR~HdfC1f9Au~qwoXDPZLb~E~zvtNwxvrcSEQo~BT_LItS8k7LAzb16UDQqL36abHuKjOYkKaVbde4FrxojHa7x8jF2EtFnmSfxM~iWyfURBClIv72Qgyv84KavTf8E2Y_mBTLR1kCk3j2hZ0_qrqUVdXlhay1PGI_FbGAXudVKVeuNRh82PcfQRJlYUiuFylogd9C1epJc2EZjubWC4iymyh7AVHbcM4XOh~HpA-- --></div></div><div class="tab-pane" id="grafik"></div></div></div>
    <!-- <div class="container-fluid">
    <div class="row">
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pgwmodal">
                               minggu ini
                            </button>
                            &nbsp &nbsp &nbsp
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pgwmodal">
                                bulan ini
                            </button>

                            <div class="row"><div class="col-lg-3 col-xs-6">
              <div class="small-box bg-aqua"><a href="/report/addReport" class="btn btn-success btn-lg pull-right btn-edit" act="#" style="z-index: 999;position: inherit;margin: 5px;" title="Buat Laporan" alt="Buat Laporan"><i class="fa fa-plus"></i></a><div class="inner">
                  <h3>0</h3>
                  <p>Add Report</p>
                </div>
                <div class="icon"><i class="fa fa-book"></i></div>
                     <a href="/report/addReport" class="small-box-footer">Next <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div></div> -->
                            <!-- <div class="card-footer">
                    <div style="right: 0%">
                        <span class="badge btn-success" style="float: right">
                            <a href="/report/addReport" style="color: aliceblue">add report</a>
                        </span>
                    </div> -->
                           
   <!-- </div>

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
                    <!-- </div>
                </div>
 -->

<!-- </div> -->

@endsection
