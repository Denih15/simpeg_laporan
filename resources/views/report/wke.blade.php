<?php 
    $totalwke = 0;
?>

@extends('layouts.app')
@section('content')

<section class="content-header">
<h1>Laporan WAKTU KERJA EFEKTIF(WKE)</h1>
          

<div id="box-main">
<div class="box">
            <div class="box-header with-border">
	    <div class="row">
			<div class="col-md-6">
                <div class="btn-group pull-left" style="margin-left: 5px;">
               <div class="form-group">
                <div class="input-group date">
                <div class="input-group-addon">Bulan : </div>
                <input class="datepicker-here form-control" id="airtgl" type="text" data-language="id" data-min-view="months" data-view="months" data-date-format="MM yyyy" value="Maret 2023" style="width: 120px;" fdprocessedid="jvby6">
                <input type="hidden" id="tgl" value="2023-3-01"> 
            </div>
          </div>
        </div>
			
<span class="dropdown-wrapper" aria-hidden="true">
</span>
</div>
</div>
</div>

<div class="box-body">
<div class="tabelnya">
    <div class="table-responsive">
        <table id="head_rpt">
            <tbody>
                <tr>
                <th width="100" style="text-align:left">NAMA</th>
                <th width="10">:</th>
                <td>DENIH S.Pd</td>
                </tr>
                <tr>
                    <th style="text-align:left">NIP</th>
                    <th width="10">:</th>
                    <td>196802211995121003</td>
                    </tr>
                    <tr>
                        <th style="text-align:left">PD</th>
                        <th width="10">:</th>
                        <td>SMAN 1 MENTHOBI RAYA</td>
                        </tr>
                        <tr>
                            <th style="text-align:left">Periode</th>
                            <th>:</th>
                            <td>Maret 2023</td>
                            </tr>
                            </tbody>
                            </table>
                            <table class="table table-striped table-bordered table-condensed"><tbody>
                                <tr>
                                    <th>No</th>
                                    <th>HARI/ TANGGAL</th>
                                    <th>WKE</th>
                                    </tr>
                                    @php
            $no = 1;
            @endphp
                                    @foreach($laporans as $laporan)
                                    <td>{{$no++}}</td>
                                            <td>{{$laporan->tanggal}}</td>
                                            <?php
                                            $a = new DateTime($laporan->selesai);
                                            $b = new DateTime($laporan->mulai);
                                            $interval = $a->diff($b);
                                            
                                            $diff= $interval->format("%H"); 
                                            $totalwke = $totalwke + $diff;
                                            
                                            ?>
                                            <td>{{@$diff}} jam</td>
                                            


                                           
                                            </tr>
                                            @endforeach
                                            @php
            $no++;
            @endphp
                                            <tr>
                                               
                                                                        <tr>
                                                                            <td colspan="2">Total Waktu Kerja Efektif bulan Maret 2023</td>
                                                                          
                                                                                <td>{{@$totalwke}} jam</td>
                                                                            
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">Waktu kerja efektif minimal / bulan = 117 jam      </td>
                                                                             
                                                                                </tr>
                                                                                </tbody>
                                                                                </table>
                                                                                
</div>
</div>
</div>
 @endsection                       