@extends('layouts.app')
@section('content')
<div class="card-header">
<h3 class="card-title">
<b>Laporan Mingguan</b>
</h3>
</div>
<div class="col-lg-10" id="c_sndmsg" data-select2-id="c_sndmsg">
    <div class="row">
        <div class="col-md-4">
<tbody>
<div>
yang bersangkutan &nbsp&nbsp&nbsp Bawahan 
</div>  
</div>
</div>    
            <br><a href="/report/addReport" class="btn btn-success btn-md btn-save-act" fdprocessedid="203w3e"><i class="fas fa-plus"></i><span>Lapoaran harian</span></a>
          
            &nbsp<a href="/report/addReport" class="btn btn-success btn-md btn-save-act" fdprocessedid="203w3e"><span>Bulan ini</span></a>
            <div class="col-lg-10" id="c_sndmsg" data-select2-id="c_sndmsg">
            <div class="row">
                 <div class="col-md-4">
                 
            <br>
            <br>
            <!-- <td width="300">
                    <b>EDDY SUPRIATNO S.Pd</b>
                    <tr><td>NIP</td><td>:</td><td>196802211995121003</td>
                 </td> -->
                
                 </div>
                 </div>
                 <br>
            <br>
              
<html lang="en" class=""><head>

    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://www.jotform.com/opt/tablesorter/themes/theme.blue.css" type="text/css" media="print, projection, screen">
    <style>
        body, html{ height:100%; width:100%; margin:0px; padding:0px; overflow:auto;}
        body{ font-family:Verdana, Geneva, Arial, Helvetica, sans-serif; font-size:12px; }
        th{ background:#ddd; }
        tr:nth-child(even){ background:#f5f5f5; }
        th, td{ text-align:center; border:1px solid #bbb; }
        table{ border-collapse:collapse; margin:5px; width: calc(100% - 10px); }
        table.tablesorter thead tr th, table.tablesorter tfoot tr th { padding:5px 19px 5px 10px; }
        #thumb{position:absolute;border:1px solid #ccc;background:#333;padding:5px;display:none;color:#fff;}
   </style>
    <link rel="stylesheet" type="text/css" href="https://www.jotform.com/opt/tablesorter/addons/tooltipster/tooltipster.css">
    <link rel="stylesheet" type="text/css" href="https://www.jotform.com/opt/tablesorter/addons/fancybox/jquery.fancybox.css">
    <script type="text/javascript" src="https://www.jotform.com/js/vendor/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://www.jotform.com/opt/tablesorter/addons/tooltipster/tooltipster.js?v3=3.3.39203"></script>
    <script type="text/javascript" src="https://www.jotform.com/opt/tablesorter/addons/fancybox/jquery.fancybox.pack.js?v3=3.3.39203"></script>
    <script type="text/javascript" src="https://www.jotform.com/opt/tablesorter/jquery.tablesorter.min.js?v3=3.3.39203"></script>
    <script type="text/javascript" src="https://www.jotform.com/opt/tablesorter/jquery.tablesorter.widgets.min.js?v3=3.3.39203"></script>
    <script type="text/javascript" src="https://www.jotform.com/opt/tablesorter/addons/linkify/linkify_1.0.js?v3=3.3.39203"></script>
    <script type="text/javascript" src="https://www.jotform.com/opt/tablesorter/addons/imagemod/imageinfo.js?v3=3.3.39203"></script><script type="text/vbscript">
Function IEBinary_getByteAt(strBinary, iOffset)
	IEBinary_getByteAt = AscB(MidB(strBinary, iOffset + 1, 1))
End Function
Function IEBinary_getBytesAt(strBinary, iOffset, iLength)
  Dim aBytes()
  ReDim aBytes(iLength - 1)
  For i = 0 To iLength - 1
   aBytes(i) = IEBinary_getByteAt(strBinary, iOffset + i)
  Next
  IEBinary_getBytesAt = aBytes
End Function
Function IEBinary_getLength(strBinary)
	IEBinary_getLength = LenB(strBinary)
End Function
</script>
    <script type="text/javascript" src="https://www.jotform.com/opt/tablesorter/addons/imagemod/imagerotate.js?v3=3.3.39203"></script>
    <script type="text/javascript" src="https://www.jotform.com/opt/tablesorter/mainscript.js?v3=3.3.39203"></script>
    <script type="text/javascript" src="https://www.jotform.com/server.php?action=getListingSettings&amp;listingID=220314613722040&amp;callback=jf_Reports.tableInit"></script>
<style type="text/css">.fancybox-margin{margin-right:0px;}</style></head>
<body>
    <table id="data-table" class="tablesorter tablesorter-blue hasStickyHeaders" border="1" cellpadding="8" cellspacing="0" aria-label="[How to Create an HTML Table Listing Report]" role="grid">
<thead>
<tr class="tablesorter-headerRow" role="row">
<th nowrap="" date-format="Y-m-d H:i:s" data-column="0" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="data-table" unselectable="on" aria-sort="none" aria-label="Submission Date: No sort applied, activate to apply an ascending sort" style="user-select: none;">
<div class="tablesorter-header-inner">No</div></th><th nowrap="" data-column="1" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="data-table" unselectable="on" aria-sort="none" aria-label="First Name: No sort applied, activate to apply an ascending sort" style="user-select: none;">
<div class="tablesorter-header-inner">Tanggal</div></th><th nowrap="" data-column="2" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="data-table" unselectable="on" aria-sort="none" aria-label="Last Name: No sort applied, activate to apply an ascending sort" style="user-select: none;">
<div class="tablesorter-header-inner">Jenis</div></th><th nowrap="" data-column="3" class="tablesorter-header tablesorter-headerAsc" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="data-table" unselectable="on" aria-sort="ascending" aria-label="Email: Ascending sort applied, activate to apply a descending sort" style="user-select: none;">
<div class="tablesorter-header-inner">kegiatan tugas jabatan</div></th><th nowrap="" data-column="4" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="data-table" unselectable="on" aria-sort="none" aria-label="Phone Number: No sort applied, activate to apply an ascending sort" style="user-select: none;">
<div class="tablesorter-header-inner">Keterengan</div></th><th nowrap="" data-column="5" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="data-table" unselectable="on" aria-sort="none" aria-label="Address: No sort applied, activate to apply an ascending sort" style="user-select: none;">
<div class="tablesorter-header-inner">mulai</div></th><th nowrap="" data-column="6" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="data-table" unselectable="on" aria-sort="none" aria-label="City: No sort applied, activate to apply a descending sort" style="user-select: none;">
<div class="tablesorter-header-inner">selesai</div></th><th nowrap="" data-column="7" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="data-table" unselectable="on" aria-sort="none" aria-label="Comments: No sort applied, activate to apply an ascending sort" style="user-select: none;">
<div class="tablesorter-header-inner">lama pengerjaan</div></th><th nowrap="" data-column="8" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="data-table" unselectable="on" aria-sort="none" aria-label="File Upload: No sort applied, activate to apply an ascending sort" style="user-select: none;">
<div class="tablesorter-header-inner">aksi</div></th></tr></thead><tbody aria-live="polite" aria-relevant="all">





  <tr class="odd">
    <td >1</td>
  <td aria-label="First Name : " tabindex="0">Germane</td>
  <td aria-label="Last Name : " tabindex="0">Mooney</td>
  <td aria-label="Email : " tabindex="0">menyiapkan</td>
  <td aria-label="Phone Number : " tabindex="0">(946) 555-7134</td>
  <td aria-label="Address : " tabindex="0">74 North Old Street</td>
  <td aria-label="City : " tabindex="0">Violet City</td>
  <td aria-label="Comments : " tabindex="0">Expedita sunt enim ut sunt veniam aliquid cupidit</td>
  <td >  <span class="badge badge-warning">
                                        <a href="" style="color: aliceblue">Edit Role</a>
                                    </span>
    
                                    <span class="badge badge-danger">
                                        <a href="" style="color:aliceblue">Delete Role</a>
                                    </span></td></tr><tr class="even">
    <td>2</td>
    <td aria-label="First Name : " tabindex="0">Leandra</td>
    <td aria-label="Last Name : " tabindex="0">Buckley</td>
    <td aria-label="Email : " tabindex="0"></td>
    <td aria-label="Phone Number : " tabindex="0">(997) 555-3905</td><td aria-label="Address : " tabindex="0">210 Milton Court</td>
    <td aria-label="City : " tabindex="0">Lime Island</td>
    <td aria-label="Comments : " tabindex="0">Modi aut amet et voluptates ea libero omnis dolor</td>
    <td >  <span class="badge badge-warning">
                                        <a href="" style="color: aliceblue">Edit Role</a>
                                    </span>
    
                                    <span class="badge badge-danger">
                                        <a href="" style="color:aliceblue">Delete Role</a>
                                    </span></td></tr><tr class="even">
     <td>3</td>
        <td aria-label="First Name : " tabindex="0">Noble</td>
        <td aria-label="Last Name : " tabindex="0">Salazar</td>
        <td aria-label="Email : " tabindex="0"></td>
        <td aria-label="Phone Number : " tabindex="0">(893) 555-5459</td>
        <td aria-label="Address : " tabindex="0">56 North Green First Road</td>
        <td aria-label="City : " tabindex="0">Blue Town</td>
        <td aria-label="Comments : " tabindex="0">Ut quis eu nesciunt ullamco nobis enim placeat</td>
        <td >  <span class="badge badge-warning">
                                        <a href="" style="color: aliceblue">Edit Role</a>
                                    </span>
    
                                    <span class="badge badge-danger">
                                        <a href="" style="color:aliceblue">Delete Role</a>
                                    </span></td></tr><tr class="even">
         
</thead >             

<tr class="tablesorter-headerRow" role="row">
<th nowrap="" date-format="Y-m-d H:i:s" data-column="0" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="data-table" unselectable="on" aria-sort="none" aria-label="Submission Date: No sort applied, activate to apply an ascending sort" style="user-select: none; width: 86px;">
       </th></tr></thead></table>

</body></html>
</div>

</div>      
            
            
            
            
             <br><br><a href="/home" class="small-box-footer">back </a>

@endsection
