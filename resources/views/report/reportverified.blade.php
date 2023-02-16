@extends('layouts.app')
@section('content')
<section class="content-header">
    <h1>Laporan Kinerja Harian</h1>
   <ol class="breadcrumb">
        </ol>
</section>

<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
    <li class="active">
                <a>Yang Bersangkutan</a></li><li>
                <a href=></a></li>    </ul>
        <div class="box-header with-border">
    <div class="row">
        <div class="col-md-6"> 
            <a href="/report/addReport" class="btn  btn-success btn-edit" title="Buat Laporan" act="/report/addReport">
                <i class="fa fa-plus">
                </i> Laporan</a>
            </div>
        <div class="col-md-6">
            <form action="/report/reportverified" id="form_tgl" method="post" accept-charset="utf-8">
                <div class="row">
                    <div class="col-md-8 pull-right">
                    <div class="input-group">
                        <input type="date" name="tgl1" value="13/02/2023" class="form-control" id="tgl1" style="height: 49px;min-width: 95px;" fdprocessedid="nqb6xl">
                        <span class="input-group-addon">s/d </span>
                        <input type="date" name="tgl2" value="13/02/2023" class="form-control" id="tgl2" style="height: 49px;min-width: 95px;" fdprocessedid="cvulzr">
                        <span class="input-group-addon"><button name="btn-search" type="submitform" class="btn btn-search searchbtn btn-default" fdprocessedid="4lwzqh">
                            <i class="fa fa-search"></i></button></span></div></div></div></form></div>	    </div>
</div><!-- /.box-header -->
<div class="box-body">

    <div class="" id="lavoran">
        <div style="padding: 20px 0"> EDDY SUPRIATNO S.Pd<br>NIP.196802211995121003</div>
        <div class="alert">Belum Ada Data</div><div style="display:none">
    </div></div></div>

@endsection
