@extends('layouts.app') @section('content')

<section class="content-header">
            <h1> Laporan Sudah Ditolak </h1>

        <html lang="en" class="">
            <head>
                <meta name="robots" content="noindex, nofollow" />
                <meta
                    http-equiv="Content-Type"
                    content="text/html; charset=utf-8"
                />
                <link
                    rel="stylesheet"
                    href="https://www.jotform.com/opt/tablesorter/themes/theme.blue.css"
                    type="text/css"
                    media="print, projection, screen"
                />
                <style>
                    body,
                    html {
                        height: 100%;
                        width: 100%;
                        margin: 0px;
                        padding: 0px;
                        overflow: auto;
                    }
                    body {
                        font-family: Verdana, Geneva, Arial, Helvetica,
                            sans-serif;
                        font-size: 12px;
                    }
                    th {
                        background: #ddd;
                    }
                    tr:nth-child(even) {
                        background: #f5f5f5;
                    }
                    th,
                    td {
                        text-align: center;
                        border: 1px solid #bbb;
                    }
                    table {
                        border-collapse: collapse;
                        margin: 5px;
                        width: calc(100% - 10px);
                    }
                    table.tablesorter thead tr th,
                    table.tablesorter tfoot tr th {
                        padding: 5px 19px 5px 10px;
                    }
                    #thumb {
                        position: absolute;
                        border: 1px solid #ccc;
                        background: #333;
                        padding: 5px;
                        display: none;
                        color: #fff;
                    }
                </style>
                <link
                    rel="stylesheet"
                    type="text/css"
                    href="https://www.jotform.com/opt/tablesorter/addons/tooltipster/tooltipster.css"
                />
                <link
                    rel="stylesheet"
                    type="text/css"
                    href="https://www.jotform.com/opt/tablesorter/addons/fancybox/jquery.fancybox.css"
                />
                <script
                    type="text/javascript"
                    src="https://www.jotform.com/js/vendor/jquery-1.11.1.min.js"
                ></script>
                <script
                    type="text/javascript"
                    src="https://www.jotform.com/opt/tablesorter/addons/tooltipster/tooltipster.js?v3=3.3.39203"
                ></script>
                <script
                    type="text/javascript"
                    src="https://www.jotform.com/opt/tablesorter/addons/fancybox/jquery.fancybox.pack.js?v3=3.3.39203"
                ></script>
                <script
                    type="text/javascript"
                    src="https://www.jotform.com/opt/tablesorter/jquery.tablesorter.min.js?v3=3.3.39203"
                ></script>
                <script
                    type="text/javascript"
                    src="https://www.jotform.com/opt/tablesorter/jquery.tablesorter.widgets.min.js?v3=3.3.39203"
                ></script>
                <script
                    type="text/javascript"
                    src="https://www.jotform.com/opt/tablesorter/addons/linkify/linkify_1.0.js?v3=3.3.39203"
                ></script>
                <script
                    type="text/javascript"
                    src="https://www.jotform.com/opt/tablesorter/addons/imagemod/imageinfo.js?v3=3.3.39203"
                ></script>
                <script type="text/vbscript">
                  
                </script>
                <script
                    type="text/javascript"
                    src="https://www.jotform.com/opt/tablesorter/addons/imagemod/imagerotate.js?v3=3.3.39203"
                ></script>
                <script
                    type="text/javascript"
                    src="https://www.jotform.com/opt/tablesorter/mainscript.js?v3=3.3.39203"
                ></script>
                <script
                    type="text/javascript"
                    src="https://www.jotform.com/server.php?action=getListingSettings&amp;listingID=220314613722040&amp;callback=jf_Reports.tableInit"
                ></script>
                <style type="text/css">
                    .fancybox-margin {
                        margin-right: 0px;
                    }
                </style> </head>
            <body>
                <table
                    id="data-table"
                    class="tablesorter tablesorter-blue hasStickyHeaders"
                    border="1"
                    cellpadding="8"
                    cellspacing="0"
                    aria-label="[How to Create an HTML Table Listing Report]"
                    role="grid"
                >
                    <thead>
                        <tr class="tablesorter-headerRow" role="row">
                            <th
                                nowrap=""
                                date-format="Y-m-d H:i:s"
                                data-column="0"
                                class="tablesorter-header tablesorter-headerUnSorted"
                                tabindex="0"
                                scope="col"
                                role="columnheader"
                                aria-disabled="false"
                                aria-controls="data-table"
                                unselectable="on"
                                aria-sort="none"
                                aria-label="Submission Date: No sort applied, activate to apply an ascending sort"
                                style="user-select: none"
                            >
                                <div class="tablesorter-header-inner">No</div>
                            </th>
                            <th
                                nowrap=""
                                data-column="1"
                                class="tablesorter-header tablesorter-headerUnSorted"
                                tabindex="0"
                                scope="col"
                                role="columnheader"
                                aria-disabled="false"
                                aria-controls="data-table"
                                unselectable="on"
                                aria-sort="none"
                                aria-label="First Name: No sort applied, activate to apply an ascending sort"
                                style="user-select: none"
                            >
                                <div class="tablesorter-header-inner">
                                    Tanggal
                                </div>
                            </th>
                            <th
                                nowrap=""
                                data-column="1"
                                class="tablesorter-header tablesorter-headerUnSorted"
                                tabindex="0"
                                scope="col"
                                role="columnheader"
                                aria-disabled="false"
                                aria-controls="data-table"
                                unselectable="on"
                                aria-sort="none"
                                aria-label="First Name: No sort applied, activate to apply an ascending sort"
                                style="user-select: none"
                            >
                                <div class="tablesorter-header-inner">
                                    Nama
                                </div>
                            </th>
                            <th
                                nowrap=""
                                data-column="1"
                                class="tablesorter-header tablesorter-headerUnSorted"
                                tabindex="0"
                                scope="col"
                                role="columnheader"
                                aria-disabled="false"
                                aria-controls="data-table"
                                unselectable="on"
                                aria-sort="none"
                                aria-label="First Name: No sort applied, activate to apply an ascending sort"
                                style="user-select: none"
                            >
                                <div class="tablesorter-header-inner">
                                    NIP
                                </div>
                            </th>
                            <th
                                nowrap=""
                                data-column="2"
                                class="tablesorter-header tablesorter-headerUnSorted"
                                tabindex="0"
                                scope="col"
                                role="columnheader"
                                aria-disabled="false"
                                aria-controls="data-table"
                                unselectable="on"
                                aria-sort="none"
                                aria-label="Last Name: No sort applied, activate to apply an ascending sort"
                                style="user-select: none"
                            >
                           
                         
                                <div class="tablesorter-header-inner">
                                    Keterengan
                                </div>
                            </th>
                            <th
                                nowrap=""
                                data-column="5"
                                class="tablesorter-header tablesorter-headerUnSorted"
                                tabindex="0"
                                scope="col"
                                role="columnheader"
                                aria-disabled="false"
                                aria-controls="data-table"
                                unselectable="on"
                                aria-sort="none"
                                aria-label="Address: No sort applied, activate to apply an ascending sort"
                                style="user-select: none"
                            >
                                <div class="tablesorter-header-inner">
                                    mulai
                                </div>
                            </th>
                            <th
                                nowrap=""
                                data-column="6"
                                class="tablesorter-header tablesorter-headerUnSorted"
                                tabindex="0"
                                scope="col"
                                role="columnheader"
                                aria-disabled="false"
                                aria-controls="data-table"
                                unselectable="on"
                                aria-sort="none"
                                aria-label="City: No sort applied, activate to apply a descending sort"
                                style="user-select: none"
                            >
                                <div class="tablesorter-header-inner">
                                    selesai
                                </div>
                            </th>
                   
                        </tr>
                    </thead>
                  
                    @php
            $no = 1;
            @endphp
                        @foreach($laporans as $laporan)
                        <tr class="odd">
                            <td>{{$no}}</td>
                            <td>{{$laporan->tanggal}}</td>
                            <td>{{$laporan->nama}}</td>
                            <td>{{$laporan->employee->nip}}</td>
                            <td>{{$laporan->kegiatan_tugas_jabatan}}</td>
                            <td>{{$laporan->mulai}}</td>
                            <td>{{$laporan->selesai}}</td>
                            <td>
                            <span class="badge text-bg-warning">
                                @csrf
                        <a href="/edit/{{$laporan->id}}"method="post" style="text-decoration: none; color:black" class="btn btn-info" >Edit</a>
                    </span>
                    <span class="badge text-bg-danger">
                    <form action="/delete/{{$laporan->id}}" method="post">
                        @csrf
                    
                        <button type="submit" class="btn btn-danger">Delete</button>
                            
                    </span>
                            </td>
                        </tr>  
                        @php
            $no++;
            @endphp
             @endforeach         
                    </tbody>
        </table>

<div class="col-md-6">
    <a href="/home" class="btn btn-danger btn-md btn-form-cancel d-noprint" type="button">Back</a>
	</div>
@endsection
