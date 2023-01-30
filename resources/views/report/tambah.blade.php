
@extends('layouts.app')
@section('content')

<section class="content-header">
            <h1>Daily Performance Report</h1>
          
                        <ol class="breadcrumb">
                <li><a href="/report">Daily Report</a>
            </li>
        </ol>
    </section>
        
        <div class="col-md-10">
      <div class="box box-warning">
            <div class="box-header with-border d-noprint">
            <h3 class="box-title" id="form-title">Tambah Laporan</h3>
            </div>
<div class="box">
    <div class="box-solid">
        <div class="box-body">
            <div id="atasn" class="table-responsive">
                <table class="table table-bordered table-condensed table-nonfluid" style="width: 100% !important;">
                <tbody>
                    <tr>
                        <td>Pegawai</td>
                        <td>Atasan</td>
                    </tr>
                    <tr>
                        <td>
                            <table class="table table-striped " style="margin-bottom: 0px;">
                            <tbody>
                                <tr>
                                    <td>NAMA</td>
                                    <td>:</td>
                                    <td> EDDY SUPRIATNO S.Pd</td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td>:</td>
                                    <td>196802211995121003</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top;">Jabatan</td>
                                    <td style="vertical-align: top;">:</td>
                                    <td style="vertical-align: top;">GURU MADYA </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td>
                        <table class="table table-striped " style="margin-bottom: 0px;"><tbody>
                            <tr>
                                <td>NAMA</td>
                                <td>:</td>
                                <td>SRI MULYANI</td>
                            </tr>
                            <tr>
                                <td>NIP</td>
                                <td>:</td>
                                <td>196204081990032010</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">Jabatan</td>
                                <td style="vertical-align: top;">:</td>
                                <td style="vertical-align: top;">GURU MADYA</td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="hidden" value="22463" name="id_pjab_ver"></td>
                        </tr>
                    </tbody>
                </table>

<div class="col-lg-10" id="c_sndmsg" data-select2-id="c_sndmsg">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>Date</label>
                <div class="input-group">
                    <input type="text" name="kapan" value="27/01/2023" class="form-control datepicker-here" id="tgl" data-language="id" required="" fdprocessedid="9oi87f">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"> </i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<div>
<label>Report Type</label>
<select name="jenis" class="form-control" id="pilih_jenis" fdprocessedid="vq2nnl">
<option value="1" selected="selected">With Work Assignments</option>
<option value="2">Additional Task</option>
</select></div><div class="" id="pil_ktj" data-select2-id="pil_ktj">
    
<label>Job Assignment activities</label>
<select name="id_target" class="form-control select2 select2-hidden-accessible" id="id_ktj" required="" fdprocessedid="eqtj6" data-select2-id="id_ktj" tabindex="-1" aria-hidden="true">
<option value="1" selected="selected"></option>
</select></div><div class="" id="pil_ktj" data-select2-id="pil_ktj">

<span class="dropdown-wrapper" aria-hidden="true">
</span>
</span>
</div>
<br>
<input type="text" name="" value="Target This Month 100%" class="form-control col-xs-12 hide" readonly="" id="sat_target">
<br>
<div class="row form-group" id="c_selisihjam">
    <div class="col-md-4">
        <div class="form-group">
            <label>Start Time</label>
            <div class="bootstrap-timepicker">
                <div class="bootstrap-timepicker-widget dropdown-menu">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#" data-action="incrementHour">
                                        <i class="glyphicon glyphicon-chevron-up"></i>
                                    </a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementSecond"><i class="glyphicon glyphicon-chevron-up"></i></a></td></tr><tr><td><span class="bootstrap-timepicker-hour">19</span></td> <td class="separator">:</td><td><span class="bootstrap-timepicker-minute">41</span></td> <td class="separator">:</td><td><span class="bootstrap-timepicker-second">45</span></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="decrementSecond"><i class="glyphicon glyphicon-chevron-down"></i></a></td></tr></tbody></table></div>
                                                <div class="input-group"><input type="text" name="mulai" value="" class="form-control timepicker" id="start" required="" fdprocessedid="eyuq2i"><div class="input-group-addon"><i class="fa fa-clock-o"> </i></div>
                                                </div>
                                            </div></div></div><div class="col-md-4"><div class="form-group"><label>Finish Time</label><div class="bootstrap-timepicker"><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a href="#" data-action="incrementHour"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementSecond"><i class="glyphicon glyphicon-chevron-up"></i></a></td></tr><tr><td><span class="bootstrap-timepicker-hour">19</span></td> <td class="separator">:</td><td><span class="bootstrap-timepicker-minute">41</span></td> <td class="separator">:</td><td><span class="bootstrap-timepicker-second">45</span></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="decrementSecond"><i class="glyphicon glyphicon-chevron-down"></i></a></td></tr></tbody></table></div>
                                                <div class="input-group"><input type="text" name="selesai" value="" class="form-control timepicker2" required="" id="end" fdprocessedid="y3tiwb"><div class="input-group-addon"><i class="fa fa-clock-o"> </i></div>
                                                </div>
                                            </div></div></div><div class="col-md-4"><div class="form-group"><label>Work Duration</label><div class="input-group"><input type="text" name="lama" value="0" class="form-control" id="diff" readonly="" fdprocessedid="4tlf4"><div class="input-group-addon">Minute</div>
                                            </div></div></div><div class="control-label hide emsgjam"><div class="alert alert-confirm text-warning"><i class="fa fa-exclamation"></i> Zero Minute Running Time</div></div></div><div class="form-group has-feedback">
                                                <label>Description</label><textarea name="kegiatan" cols="40" rows="10" class="form-control" style="height: 70px" required=""></textarea></div><div class="row" id="c_output"><div class="col-md-6">

                                                <br><a class="btn btn-danger btn-md btn-form-cancel d-noprint" type="button">Cancel</a>
		<button href="#" class="btn btn-success btn-md btn-save-act pull-right d-noprint" fdprocessedid="203w3e">Save</button>
	</form>                                             
@endsection
