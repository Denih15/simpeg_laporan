@extends('layouts.app')
@section('content')
<section class="content-header">
            <h1>Daily Performance Report Await Verification</h1>
           </section>

<script type="text/javascript">

            function docReady() {
                
                function lz(dt,count) {
                var tmp='00'+dt;
                return tmp.slice(-count);
            }
                var currentDate = new Date('2023-01-27');
                $('#tgl1').datepicker({
                    language: 'id',
                    
                }).data('datepicker').selectDate(new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate()));
                var currentDate2 = new Date('2023-01-27');
                $('#tgl2').datepicker({
                    language: 'id',
                    
                }).data('datepicker').selectDate(new Date(currentDate2.getFullYear(), currentDate2.getMonth(), currentDate2.getDate()));
                
                $('.btn-ver').click(function() {
                   var ac = $(this).attr('act');
                   var msg = $(this).attr('msg');
                   var ulng = $(this).attr('ulang');
                   var icn = $(this).attr('t_icn');
                   var tl = $(this).attr('t_text');
                   var tlbt = $(this).attr('t_btn');
                   var icn2=(icn?icn:'fa-bookmark-o');
                   var title_ver = '<i class="fa '+icn2+' fa-btn"></i> '+(tl?tl: 'Konfirmasi');
                   var btn_ver = '<i class="fa '+icn2+' fa-btn"></i> '+(tl?tl:( tlbt ? tlbt : 'Konfirmasi'));
                   $('.form-title').html(title_ver);
                   $('.form-delete-msg').html(msg);
                   if (ac) $('#form_modal_dialog').attr('action',ac);
                   console.log('ul'+(ulng)&&(ulng==1));
                   if(((ulng)&&(ulng==1))||(!ulng)){
                       $('.form-delete-url').children().html(btn_ver).show();
                       $('.form-delete-url').children().prop('type', 'submitform');
                   }else{
                        $('.form-delete-url').children().hide();
                   }
                   $('#modal-delete').modal('show');
                   return false;
                });
                $('.btn-search').prop('type', 'submitform');
                
                
                $('.btn-cat').click(function() {
                    var deficn = 'exclamation';           
                    var deficy = 'times';           
                    var deffa = 'fa fa-btn fa-';
                    var defCon = 'Konfirmasi';
                    
                    var ac = $(this).attr('act');
                    var msg = $(this).attr('msg');
                    var icn = $(this).attr('t_icn');
                    var icnb = $(this).attr('t_icnb');
                    var icyb = $(this).attr('t_icyb');
                    if(!icyb) icyb=icnb;
                    var tl = $(this).attr('t_text');
                    var tbtn = $(this).attr('t_btn');
                    var tbty = $(this).attr('t_bty');
                    var ispos = $(this).attr('is_pos');
                    
                    if(!icnb)icnb=icn;
                    $('.form-title').html('<i class="'+deffa+ (icn?icn:deficn)+'"></i> '+(tl?tl:defCon));
                    var btn_con = '<i class="'+deffa+(icnb?icnb:deficn)+'"></i> '+(tbtn?tbtn:(tl?tl:'Ya'));
                    $('.form-delete-msg').html(msg);
                    
                    var btn_cony = '<i class="'+deffa+(icyb?icyb:deficy)+'"></i> '+(tbty?tbty:" Tidak");
                    
                    $('a.form-delete-btn > button.btn').removeClass('btn-danger').addClass('btn-success');
                    $('a.form-delete-btn > button.btn').html('');
                    $('a.form-delete-btn > button.btn').prop('name','no').prop('type', 'submitform');
                    
                    
                    if(ispos){
                       if (ac) $('#form_modal_dialog').attr('action',$(this).attr('act')).attr('method','POST');
                       else $('.form-delete-url').attr('href',$(this).attr('href')).children().html(btn_con).show();
                       $('.form-delete-url').children().html(btn_con).prop('name','yes').prop('type', 'submitform').show();
                       $('#modal-delete').modal('show').removeAttr('tabindex');               
                    }else{
                       if (ac) $('.form-delete-url').attr('href',$(this).attr('act')).children().html(btn_con).show();
                       else $('.form-delete-url').attr('href',$(this).attr('href')).children().html(btn_con).show();
                       $('#modal-delete').modal('show');
                    }

            return false;
                   });
            }$(document).ready(function(){
	$('#myModal').on('hide.bs.modal', function(){
		$('#myModal').removeData();
	})
    $('.heading').parent().find('td').addClass('headings');
     docReady(); }); 
</script>
<div id="box-main">
<div class="box">
            <div class="box-header with-border">
	    <div class="row">
			<div class="col-md-6"><a href="/report" class="btn btn-danger btn-md btn-form-cancel d-noprint" type="button">Back</a>
				    </div>
    </div><!-- /.box-header -->
        <div class="box-body">

<div class="" id="lavoran">
    <div style="padding: 20px 0"> EDDY SUPRIATNO S.Pd<br>NIP.196802211995121003</div>
    <div class="alert">No Data Yet</div>
    <div style="display:none">
</div></div></div>
</div>
</div>
        @endsection
