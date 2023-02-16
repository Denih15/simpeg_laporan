@extends('layouts.app')
@section('content')

<section class="content-header">
<h1>Target Kinerja</h1>

<div class="row on-hide" id="form-box">
    <div class="col-md-10">
      <div class="box box-warning">
            <div class="box-header with-border d-noprint">
                <h3 class="box-title" id="form-title">
                </h3>
            </div>
            <div class="box-body">
                <div id="form-content"> 
                    <p>
                    </p>
                </div>
            </div>
            <div class="overlay on-hide" id="form-overlay">
                <i class="fa fa-refresh fa-spin">
                </i>
            </div>
      </div>
    </div>
</div>  
           <style type="text/css">
</style>

<script type="text/javascript">

                function set_total() {
                    var nilai_total = 0;
                    var tt=$('#tt').html();
                    console.log(tt);
                    $('.hit').each(function() {
                        if ($(this).val()) {
                            ni = $(this).val().replace(/\./g,'').replace(/\,/g,'.')*1;
                            nilai_total += ni;
                        }
                    });
                    
                    if (parseFloat(nilai_total) > 0) n = number_format(nilai_total,0,',','.');
                    else n = 0;
                    $('#sumall').html(n);
                    if(parseInt(tt)< parseInt(n)){
                        $('#sumall').addClass('merah');
                    }else{
                        $('#sumall').removeClass('merah');
                    }
                    console.log('zz '+(parseInt(tt)<= parseInt(n)));
                }
              
</script>
<div id="box-main">
<div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
        <li class="active">
        <a>Yang Bersangkutan</a>
    </li>
    <li>
                <a href=></a>
            </li>    
        </ul>
        <div class="box-header with-border">           
	    <div class="row">
			<div class="col-md-6">
                <div class="pull-left">
                    <div class="input-group date">
                        <div class="input-group-addon">Tahun: </div>
                        <select name="year" class="form-control" id="year">
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023" selected="selected">2023</option>
</select>
<div class="input-group-addon">
</i>
</div>
</div>
</div>
</div>
			<div class="col-md-6">
                <form action="/report/tk" id="form_search" method="post" accept-charset="utf-8">
                    <div class="input-group d-noprint">
                    <input name="search" type="text" placeholder="Pencarian ..." class="form-control pull-right" value="">
                      <div class="input-group-btn">
                        <button class="btn btn-default">
                            <i class="fa fa-search">
                            </i>
                        </button>
                      </div>
                    </div>
                </form>
            </div>	    
        </div>
    </div><!-- /.box-header -->
        <div class="box-body">

<div class="box-body table-responsive no-padding">
    <div class="alert alert-confirm">Tidak ada data</div>
</div>
<div style="display: none;">
</div>


@endsection