@extends('layouts.app')
@section('content')
<section class="content">
<h1> Laporan Sasaran Kinerja pegawai</h1>
<br>
           <div class="row on-hide" id="form-box">
    <div class="col-md-10">
      <div class="box box-warning">
            <!-- <div class="box-header with-border d-noprint">
                <i class="fa fa-paint-brush fa-btn"></i><h3 class="box-title" id="form-title"> Jm</h3>
            </div> -->
            <div class="box-body">
                <!-- <div id="form-content"> <p> Memuat Konten dari Form ... </p></div> -->
            </div>
            <!-- <div class="overlay on-hide" id="form-overlay" style="display: none;">
                <i class="fa fa-refresh fa-spin"></i>
            </div> -->
      </div>
    </div>
</div>  
           <script type="text/javascript">
var $myParam='YTozOntzOjQ6ImtvZGUiO3M6MTE6ImJ1bGFuYW5fc2twIjtzOjc6ImlkX3VuaXQiO3M6NDoiMjAwNiI7czoxMjoidGdsX3Nla2FyYW5nIjtzOjEwOiIyMDIzLTAzLTIwIjt9';

function etgl($dt){
    bln=['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des'];
    var $e=$dt.split('-');
  return $e[2]+' '+bln[parseInt($e[1])]+' '+$e[0];
}

function jax($param){
    $(".tabelnya").html('... Tunggu, sedang proses ...');
    $('.overlay').show();
    $.ajax({
        dataType: "json",
        method: "POST",  
        url: 'https://simpeg.palangkaraya.go.id/kinerja2/kinerja_palka/bulan_skp',
        data: $param,
        success: function(dat) {
            /*console.log('OK='+dat.data);
            $(".tabelnya").html('-');*/
            /*console.log('param='+$myParam+'|'+dat.param);*/
        },
        error: function(x, t, m) {
            $('.overlay').hide();
             /*console.log('err='+x+ t+m);*/
            /*if(t==="timeout") {
                $("#box_message").html(excl+'<div class="pull-left">Timeout</div><div class="clear"></div>').addClass('alert alert-danger').show();
            } else {
                $("#box_message").html(excl+'<div class="pull-left">'+t+'</div><div class="clear"></div>').addClass('alert alert-danger').show();
            }*/
        }
   })
   
   .done(function (dat){
        //console.log('OK='+dat.data);
        $(".tabelnya").html(dat.data);
        /*$myVal=end.format('YYYY-MM-DD');*/
        $myParam=dat.param;
        /*console.log('param='+$myParam);*/
        $('.overlay').hide();
   });
}

function gantitglb(parm_tgl,$id_pegawai){
    /*console.log(parm_tgl);*/
    jax({out_tabel:"1",tgl_sekarang:parm_tgl,id_pegawai:$id_pegawai});
   //,tahun_sekarang:start.format('YYYY')//"0" end.format('YYYY-MM-DD')
}

function gantitgl(parm_tgl,$id_unit){
    /*console.log(parm_tgl);*/
    jax({out_tabel:"1",tgl_sekarang:parm_tgl,id_unit:$id_unit});
   //,tahun_sekarang:start.format('YYYY')//"0" end.format('YYYY-MM-DD')
}

function gantitahun(parm_tahun,$id_unit){
    /*console.log(parm_tahun);*/
    jax({out_tabel:"1",tahun_sekarang:parm_tahun,id_unit:$id_unit});
   //,tahun_sekarang:start.format('YYYY')//"0" end.format('YYYY-MM-DD')
}


$(document).ready(function(){
        $("#cek").click(function(){
            $('.overlay').show();
            $.ajax({
              method: "POST",  
              url: 'https://simpeg.palangkaraya.go.id/defaults/rekapan',
              data: {out_tabel:"1",tahun_sekarang:"0"}
            })
            .done(function (dat){
                $(".tabelnya").html(dat);
                $('.overlay').hide();
            });
        });
        
        // $('#cetak').click(function (){
        //     window.open('cetak/'+$myParam,'cetak','',false);
        //     return false;
        // });
        // $('#excel').click(function (){
        //     window.open('excel/'+$myParam,'excel','',false);
        //     return false;
        // });
        /*$('#grafik').click(function (){
            window.open('chart/'+$myParam,'cetak','');
            return false;
        });*/
        
});
    
    
        $(document).ready(function(){ 
            $('#pilih_unker').select2({
            ajax: {
                url: 'https://simpeg.palangkaraya.go.id/kinerja2/autocomplete/unker',
                dataType: 'json',
                type: 'POST',
                delay: 250,
                cache: true,
                data: function (params) {
                        console.log(params);
                      return {                      
                        q: params.term, 
                        page: params.page
                      };
                    },
                processResults: function (data, params) {
                      params.page = params.page || 1;
                      return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.data,
                                id: item.id
                            }
                        })
                      };
                    },
              }, width: '500px'
        });
        $('#pilih_unker').on('change', function (e) { console.log( e.currentTarget.value);
            gantitgl($('#tgl').val(),e.currentTarget.value);
             });        
    });
    $(document).ready(function(){ 
        var currentDate = new Date();
        $('#airtgl').datepicker({
            language: 'id',
            onSelect: function (fd, d,picker) {
                dy=new Date(d);
                console.log(dy.getFullYear());
                $('#tgl').val(dy.getFullYear()+'-'+(dy.getMonth()+1)+'-01');
                gantitgl($('#tgl').val(),$('#pilih_unker').val());
                return false;
            }
        }).data('datepicker').selectDate(new Date(currentDate.getFullYear(), currentDate.getMonth(), 1));
        });
        </script>

<div class="box" id="box-main">
    <div class="box-header with-border">
        <div class="row">
            <div class="col-md-5">
            <!-- <div class="btn-group pull-left" style="margin-left: 5px;"><div class="btn btn-default pull-left" id="btnrefs" title="Hapus cache" alt="Hapus cache" act="https://simpeg.palangkaraya.go.id/kinerja2/ukur/clear_riw/eJyrVspMiU9JLElUslIyNrIwtTBUqgUAQjUFvA--"><i class="fa fa-refresh"></i></div><a class="btn btn-warning dropdown-toggle" data-toggle="dropdown" href="#" style="margin: 0 0 0 5px">
                <i class="fa fa-print"></i> <span class="caret"></span>
                 -->
            
            </a><ul class="dropdown-menu pull-right">
                <li><a href="#" target="_blank" id="cetak"><i class="fa fa-print"></i> Cetak</a></li>
                <li><a href="#" target="_blank" id="excel"><i class="fa fa-file-excel-o"></i> Ekspor Excel</a></li>
                </ul></div>  
            <!-- <div class="input-group-btn pull-left"> -->
            
            <!-- <div class="form-group">
                
                <div class="input-group date">
                <div class="input-group-addon"> : </div>
                <input class="form-control" id="airtgl" type="text" data-language="id" data-min-view="months" data-view="months" data-date-format="MM yyyy" value="Maret 2023" style="width: 120px;" fdprocessedid="a7lo8h">
                <input type="hidden" id="tgl" value="2023-3-01">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            </div> -->
          <!-- </div>                        </div> -->
            
            <div class="clear"></div>
            </div>
                    
            <div class="col-md-7">
                <div class="box-tools  hide">

</select>

<span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-pilih_unker-container"><span class="select2-selection__rendered" id="select2-pilih_unker-container" role="textbox" aria-readonly="true" title="SMPN 16 PALANGKA RAYA 2017">	</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div>        </div>
    </div>
    <div class="box-body tabelnya">
        <div class="table-responsive">
            <table width="100%" id="head_rpt">
                <tbody >
                    <tr>
                        <th width="100" style="text-align:left" valign="top">INSTANSI</th>
                        <th width="10">:</th><td valign="top">	SMAN 1 MENTHOBI RAYA</tr><tr><th style="text-align:left">BULAN</th><th>:</th><td>Maret 2023</td></tr></tbody>
                        </table>
                        <table class="table table-striped table-bordered " width="100%">
                            <tbody>
                                <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Tanggal Usul</th>
                                <th>Status</th>
                                
                                 <th>Jumlah Laporan Kinerja</th>
                                 
                                
                            </tr><tr>
                                   
                                    <td>1</td>
                                    <td>FIRDAUS S.Pd</td>
                                    <td>198006182006042016</td>
                                    <td>03/01/2023</td>
                                    <td>SKP Berjalan</td>
                                    <td>11</td>
                                    <tr>
                                   
                                    <td>2</td>
                                    <td>SILVANA S.Pd</td>
                                    <td>198006182354042098</td>
                                    <td>03/01/2023</td>
                                    <td>SKP Berjalan</td>
                                    <td>3</td>
                                    <tr>
                                   
                                   <td>3</td>
                                   <td>SAPRIADI S.Pd</td>
                                   <td>198006182354042547</td>
                                   <td>03/01/2023</td>
                                   <td>SKP Berjalan</td>
                                   <td>6</td>
                                   <tr>
                                   
                                   <td>4</td>
                                   <td>SURIATI S.Pd</td>
                                   <td>198006182365540698</td>
                                   <td>03/01/2023</td>
                                   <td>SKP Berjalan</td>
                                   <td>4</td>
                                   <tr>
                                   
                                   <td>5</td>
                                   <td>RUSDAH SE</td>
                                   <td>198006182354042098</td>
                                   <td>03/01/2023</td>
                                   <td>SKP Berjalan</td>
                                   <td>7</td>
                                   <tr>
                                   
                                   <td>6</td>
                                   <td>RETNO S.Pd</td>
                                   <td>198006182354042098</td>
                                   <td>03/01/2023</td>
                                   <td>SKP Berjalan</td>
                                   <td>8</td>
                                   <tr>

                                   <td>7</td>
                                   <td> KUSANA S.Pd</td>
                                   <td>198006182354042098</td>
                                   <td>03/01/2023</td>
                                   <td>SKP Berjalan</td>
                                   <td>24</td>
                                   <tr>

                                   <td>8</td>
                                   <td>RINA  S.Pd</td>
                                   <td>198006182354042098</td>
                                   <td>03/01/2023</td>
                                   <td>SKP Berjalan</td>
                                   <td>14</td>

                                   
                                    
                                    </tr>
                                    </tbody>
                                    </table><div style="display:none"></div><script type="text/javascript">
            
        var btnref='<div class="btn btn-default pull-left" id="btnrefs" title="Hapus cache" alt="Hapus cache" ><i class="fa fa-refresh"></i></div>';
        
     
            </script><script type="text/javascript">
            $(document).ready(function(){
                    
        var btnprint=$('div.btn-group.pull-left');
        var btnr=$('#btnrefs');
        if(! btnr.length)btnprint.prepend(btnref);
        $('#btnrefs').attr('act','https://simpeg.palangkaraya.go.id/kinerja2/ukur/clear_riw/eJyrVspMiU9JLElUslIyNrIwtTBUqgUAQjUFvA--');
        $('#btnrefs').click(function() {
            $.ajax({
              url: $(this).attr('act'),
              type: 'POST',                  
              cache: false,
              dataType: 'json',
              data:'i=1',
              success: function(msg) {
                  if(parseInt(msg.ret)==1){
                    btnr.toggle();
                    gantitgl($('#tgl').val(),$('#pilih_unker').val())
                    $(this).unbind('click');
                  }
              },
              error:function(error){
              
              }
            });
        });
    
                    }); 
            </script></div><div style="display:none"><!-- 0.0010 --></div></div>
    
<div class="clear"></div>
</div>



<style type="text/css">
<!--
#reportrange{margin: 6px 2px 6px 80px;}
#head_rpt{font-size:120%;}$head_rpt tr{padding: 5px;}-->
</style>

        </section>
@endsection