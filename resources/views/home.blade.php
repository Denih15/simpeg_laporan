@extends('layouts.app')
@section('header')
<h5>
    Dashboard
</h5>

@endsection
@section('content')
   
           <style type="text/css">
</style>

<script type="text/javascript">
$(document).ready(function(){
	$('#myModal').on('hide.bs.modal', function(){
		$('#myModal').removeData();
	})
    $('.heading').parent().find('td').addClass('headings');
    
                $('#gfx').click(function() {
                    if($('#grpx').length == 0){
                        $.ajax({
                          url: $(this).attr('act'),
                          type: 'POST',                  
                          cache: false,
                          dataType: 'json',
                          data:'g=x',
                          success: function(msg) {
                              if(parseInt(msg.ret)==1){
                                $('#grafik').html(msg.data);
                              }
                          },
                          error:function(error){
                          
                          }
                        });
                    }
                });
            }); 
</script>
<div id="box-main">
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
              <td colspan="2"></td>
              </tr>
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td>DENIH S.Pd</td>
                </tr>
                <tr>
                  <td>NIP</td>
                  <td>:</td>
                  <td>089977354343445</td>
                  </tr>
                  <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>GURU MADYA </td>
                    </tr>
                    <tr>
                      <td>Kelas Jabatan</td>
                      <td>:</td>
                      <td>Wali Kelas XII IPS 1</td>
                      </tr>
                      <tr>
                        <td>Besaran TPP
                          <i class="fa fa-sign-in">
                          </i>
                          </button>
                          </td>
                          <td>:</td>
                          <td>
                            <span class="on-hide btpp">Rp 0,00</span>
                            </td>
                            </tr>
                            <tr>
                              <td>Akumulasi Jam Kerja</td>
                              <td>:</td>
                              <td>3,9 Jam</td>
                              </tr>
                              <tr>
                                <td>Kekurangan jam kerja dari 117 jam</td>
                                <td>:</td>
                                <td>0 Jam</td>
                                </tr>
                                  </tbody>
                                  </table>
                                  </div>
                                  <script type="text/javascript">
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
            </script>
            </div>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="box-body">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right ui-sortable-handle">
              <li>
                <li class="active">
                  <a href="/home" data-toggle="tab">Laporan</a>
                </li>
              </ul>
              <div class="tab-content no-padding">
                <div class="tab-pane active" id="laporan">
                  <div class="row">
                    <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-aqua">
                <a href="/report/reportverified" class="btn btn-success btn-lg pull-right btn-edit" act="/report/reportverified" style="z-index: 999;position: inherit;margin: 5px;" title="Buat Laporan" alt="Buat Laporan">
                <i class="fa fa-plus">
                </i>
              </a>
              <div class="inner">
                 
                  <p>Laporan Harian</p>
                </div>
                <div class="icon">
                  <i class="fa fa-book">
                  </i>
                </div>
                     <a href="/report/reportverified" class="small-box-footer">Lanjut <i class="fa fa-arrow-circle-right">
                     </i>
                    </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3> 2 </h3>
                  <p>Laporan menunggu verifikasi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-archive">
                  </i>
                </div>
                     <a href="/report/reportverification" class="small-box-footer">Lihat Laporan <i class="fa fa-arrow-circle-right">
                     </i>
                    </a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{{App\Models\Report::all()->where('jenis',1)->count()}}</h3>
                  <p>Laporan terverifikasi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-archive">
                  </i>
                </div>
                     <a href="/report/reportverified" class="small-box-footer">Lihat Laporan <i class="fa fa-arrow-circle-right">
                     </i>
                    </a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-red">
                <div class="inner">
                <h3>2</h3>
                
                  <p>Laporan ditolak</p>
                </div>
                <div class="icon"><i class="fa fa-archive">
                </i>
              </div>
                     <a href="/report/reportrejected" class="small-box-footer">Lihat Laporan <i class="fa fa-arrow-circle-right">
                     </i>
                    </a>
              </div>
            </div>
          </div>
          <div style="display:none"></div>
        </div>
</div>
</div>



        </section>


@endsection
