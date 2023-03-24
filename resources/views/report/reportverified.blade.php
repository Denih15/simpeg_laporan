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
      
    <div class="" id="lavoran">
        <div style="padding: 20px 0"> DENIH S.Pd<br>NIP.140919992028802122</div>
        <div class="alert">Belum ada data</div><div style="display:none">
    </div></div></div>
    </div>
    </div>
@endsection
