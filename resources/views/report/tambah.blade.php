
@extends('layouts.app')
@section('content')
<div class="card-header">
<h3 class="card-title">
<i class="fas fa-edit"></i>
Tambah Laporan
</h3>
</div>
<div class="col-lg-10" id="c_sndmsg" data-select2-id="c_sndmsg">
    <div class="row">
        <div class="col-md-4">
               

<div class="form-group">
                    <label>Tanggal:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span> 
                                <input type="text" data-inputmask-alias="datetime" inputformat="08/02/2023" data-mask="08/02/2023" inputmode="numeric"> 
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
            
<div>             
<label>Jenis laporan</label>
<select name="id_target" class="form-control select2 select2-hidden-accessible" id="id_ktj" required="" fdprocessedid="eqtj6" data-select2-id="id_ktj" tabindex="-1" aria-hidden="true">
<option value="1" selected="selected">Kegiatan Tugas Jabatan</option>
<option value="1" selected="selected">Laporan Kehadiran Karyawan</option>
<option value="1" selected="selected">Laporan Izin atau Sakit</option>
</select></div><div class="" id="pil_ktj" data-select2-id="pil_ktj">
<label>Kegiatan Tugas jabatan</label>
<select name="id_target" class="form-control select2 select2-hidden-accessible" id="id_ktj" required="" fdprocessedid="eqtj6" data-select2-id="id_ktj" tabindex="-1" aria-hidden="true">
<option value="1" selected="selected">Mengumpulkan,menganalisa,dan membuat tugas pegawai</option>
</select></div><div class="" id="pil_ktj" data-select2-id="pil_ktj">
<span class="dropdown-wrapper" aria-hidden="true">
</span>
</div>
<br>
<input type="text" name="" value="Target This Month 100%" class="form-control col-xs-12 hide" readonly="" id="sat_target">
<br>
<div class="row form-group" id="c_selisihjam">
    <div class="col-md-4">
      
            <label>Waktu Mulai</label>
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
                                            </div></div></div><div class="col-md-4"><div class="form-group"><label>Waktu selesai</label><div class="bootstrap-timepicker"><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a href="#" data-action="incrementHour"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementSecond"><i class="glyphicon glyphicon-chevron-up"></i></a></td></tr><tr><td><span class="bootstrap-timepicker-hour">19</span></td> <td class="separator">:</td><td><span class="bootstrap-timepicker-minute">41</span></td> <td class="separator">:</td><td><span class="bootstrap-timepicker-second">45</span></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="decrementSecond"><i class="glyphicon glyphicon-chevron-down"></i></a></td></tr></tbody></table></div>
                                                <div class="input-group"><input type="text" name="selesai" value="" class="form-control timepicker2" required="" id="end" fdprocessedid="y3tiwb"><div class="input-group-addon"><i class="fa fa-clock-o"> </i></div>
                                                </div>
                                            </div></div></div><div class="col-md-4"><div class="form-group"><label>Lama Pengerjaan</label><div class="input-group"><input type="text" name="lama" value="0" class="form-control" id="diff" readonly="" fdprocessedid="4tlf4"><div class="input-group-addon">Minute</div>
                                            </div></div></div><div class="control-label hide emsgjam"><div class="alert alert-confirm text-warning"><i class="fa fa-exclamation"></i> Zero Minute Running Time</div></div></div><div class="form-group has-feedback">
                                                <label>Keterengan</label><textarea name="kegiatan" cols="40" rows="10" class="form-control" style="height: 70px" required=""></textarea></div><div class="row" id="c_output"><div class="col-md-6">
        <br><a href="/home"  class="btn btn-danger btn-md btn-form-cancel d-noprint" type="button">Cancel</a>
        
		<a href="/report/reportverified" class="btn btn-success btn-md btn-save-act pull-right d-noprint" fdprocessedid="203w3e">Save</a>
                                          
@endsection
