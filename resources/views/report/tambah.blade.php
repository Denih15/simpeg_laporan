@extends('layouts.app')
@section('content')
<section class="content-header">
    <h1>Laporan Kinerja Harian</h1>

    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-edit"></i>
            Tambah Laporan
        </h3>
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
                                    <table class="table table-striped " style="margin-bottom: 0px;">
                                        <tbody>
                                            <tr>
                                                <td>NAMA</td>
                                                <td>:</td>
                                                <td>Dra PETRIATI</td>
                                            </tr>
                                            <tr>
                                                <td>NIP</td>
                                                <td>:</td>
                                                <td>196204081990032010</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: top;">Jabatan</td>
                                                <td style="vertical-align: top;">:</td>
                                                <td style="vertical-align: top;">Guru Madya</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <input type="hidden" value="22463" name="id_pjab_ver">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-10" id="c_sndmsg">
                    <form action="{{route('addReport')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <div class="input-group">
                                        <input type="date" name="kapan" value="13/02/2023"
                                            class="form-control datepicker-here" id="tgl" data-language="id" required=""
                                            fdprocessedid="4um4y">
                                        <div class="input-group-addon">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label>Jenis Laporan</label>
                            <select name="jenis" class="form-control" id="pilih_jenis" fdprocessedid="wek9cn">
                                <option value="1" selected="selected">Kegiatan</option>
                            </select>
                        </div>
                        <div class="form-group has-feedback">
                            <label>Laporan</label>
                            <textarea name="kegiatan" cols="40" rows="10" class="form-control" style="height: 400px"
                                required="">
        </textarea>
                        </div>
    
                        <div class="row form-group" id="c_selisihjam">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Waktu Mulai</label>
                                    <div class="bootstrap-timepicker">
                                        <div class="bootstrap-timepicker-widget dropdown-menu">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#" data-action="incrementHour">
                                                                <i class="glyphicon glyphicon-chevron-up">
                                                                </i>
                                                            </a>
                                                        </td>
                                                        <td class="separator">&nbsp;</td>
                                                        <td>
                                                            <a href="#" data-action="incrementMinute">
                                                                <i class="glyphicon glyphicon-chevron-up">
                                                                </i>
                                                            </a>
                                                        </td>
                                                        <td class="separator">&nbsp;</td>
                                                        <td>
                                                            <a href="#" data-action="incrementSecond">
                                                                <i class="glyphicon glyphicon-chevron-up">
                                                                </i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="bootstrap-timepicker-hour">16</span>
                                                        </td>
                                                        <td class="separator">:</td>
                                                        <td>
                                                            <span class="bootstrap-timepicker-minute">18</span>
                                                        </td>
                                                        <td class="separator">:</td>
                                                        <td>
                                                            <span class="bootstrap-timepicker-second">00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" data-action="decrementHour">
                                                                <i class="glyphicon glyphicon-chevron-down">
                                                                </i>
                                                            </a>
                                                        </td>
                                                        <td class="separator">
                                                        </td>
                                                        <td>
                                                            <a href="#" data-action="decrementMinute">
                                                                <i class="glyphicon glyphicon-chevron-down">
                                                                </i>
                                                            </a>
                                                        </td>
                                                        <td class="separator">&nbsp;</td>
                                                        <td>
                                                            <a href="#" data-action="decrementSecond">
                                                                <i class="glyphicon glyphicon-chevron-down">
                                                                </i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="input-group">
                                            <input type="time" name="mulai" value="" class="form-control timepicker"
                                                id="start" required="" fdprocessedid="rzmgjo">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o">
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Waktu Selesai</label>
                                    <div class="bootstrap-timepicker">
                                        <div class="bootstrap-timepicker-widget dropdown-menu">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#" data-action="incrementHour"><i
                                                                    class="glyphicon glyphicon-chevron-up">
                                                                </i>
                                                            </a>
                                                        </td>
                                                        <td class="separator">&nbsp;</td>
                                                        <td>
                                                            <a href="#" data-action="incrementMinute">
                                                                <i class="glyphicon glyphicon-chevron-up">
                                                                </i>
                                                            </a>
                                                        </td>
                                                        <td class="separator">&nbsp;</td>
                                                        <td>
                                                            <a href="#" data-action="incrementSecond">
                                                                <i class="glyphicon glyphicon-chevron-up"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="bootstrap-timepicker-hour">16</span>
                                                        </td>
                                                        <td class="separator">:</td>
                                                        <td>
                                                            <span class="bootstrap-timepicker-minute">18</span>
                                                        </td>
                                                        <td class="separator">:</td>
                                                        <td>
                                                            <span class="bootstrap-timepicker-second">00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" data-action="decrementHour">
                                                                <i class="glyphicon glyphicon-chevron-down">
    
                                                                </i>
                                                            </a>
                                                        </td>
                                                        <td class="separator">
    
                                                        </td>
                                                        <td>
                                                            <a href="#" data-action="decrementMinute">
                                                                <i class="glyphicon glyphicon-chevron-down">
    
                                                                </i>
                                                            </a>
                                                        </td>
                                                        <td class="separator">&nbsp;</td>
                                                        <td>
                                                            <a href="#" data-action="decrementSecond">
                                                                <i class="glyphicon glyphicon-chevron-down">
    
                                                                </i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="input-group">
                                            <input type="time" name="selesai" value="" class="form-control timepicker2"
                                                required="" id="end" fdprocessedid="k4sng7">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o">
    
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-4">
                                <div class="form-group">
                                    <label>LamaPengerjaan</label>
                                    <div class="input-group">
                                        <div class="input-group">
                                            <input type="time" name="selesai" value="" class="form-control timepicker2"
                                                required="" id="end" fdprocessedid="k4sng7">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o">
    
                                                </i>
                                            </div>
                                        </div>
                                        <div class="input-group-addon">Menit</div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-label hide emsgjam">
                                <div class="alert alert-confirm text-warning">
                                    <i class="fa fa-exclamation">
    
                                    </i> Lama Pengerjaan nol menit atau minus
                                </div>
                            </div>
                        </div> --}}
    
                        <div class="row" id="c_output">
                            <div class="col-md-6">
                                <br>
                                <!-- <button type="submit" class="btn btn-danger">Cencel</button> -->
                                <a href="/home" class="btn btn-danger btn-md btn-form-cancel d-noprint"
                                    type="button">Cancel</a>
                                <!-- <button type="submit" class="btn btn-primary">Save</button> -->
                                <button type="submit"> SAVE </button>
                    </form>

                            @endsection