@extends('layouts.app')
@section('content')

<section class="content-header">
    <h1>Set Atasan &amp; Atasan dari Atasan</h1>
    <ol class="breadcrumb">
        <li>
            <div class="row on-hide" id="form-box">
                <div class="col-md-10">
                    <div class="box box-warning">
                        <div class="box-header with-border d-noprint">
                            <i class="fa fa-paint-brush fa-btn"></i> Perbaikan
                            Data
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-9">
                            <form
                                action="/report/pengaturan"
                                id="form_atasan"
                                method="post"
                                accept-charset="utf-8"
                            >
                                @csrf
                                <input
                                    type="hidden"
                                    name="id_peg_jabatan"
                                    value="16643"
                                />
                                <br />
                                <p>
                                    <label>Atasan/Pejabat Penilai</label>
                                    <br />
                                    <select
                                        name="id_atasan"
                                        class="form-control select2-hidden-accessible"
                                        style="width: 100%"
                                        id="atasan"
                                        data-select2-id="atasan"
                                        tabindex="-1"
                                        aria-hidden="true"
                                    >
                                        <option
                                            value=""
                                            data-select2-id="2"
                                        ></option>
                                        <option
                                            value="3399"
                                            selected="selected"
                                            data-select2-id="3"
                                        >
                                            MUHAMMAD SHODIQ
                                            (NIP.196204081990032010) Guru Madya
                                        </option>
                                    </select>
                                </p>
                                <p>
                                    <label
                                        >Atasan dari Atasan/Atasan Pejabat
                                        Penilai
                                    </label>
                                    <select
                                        name="id_atasan_atasan"
                                        class="form-control select2-hidden-accessible"
                                        style="width: 100%"
                                        id="atasannya"
                                        data-select2-id="atasannya"
                                        tabindex="-1"
                                        aria-hidden="true"
                                    >
                                        <option
                                            value=""
                                            data-select2-id="5"
                                        ></option>
                                        <option
                                            value="274"
                                            selected="selected"
                                            data-select2-id="6"
                                        >
                                            ALEX BAYU PRATAMA PUTRA, S.Pd, M.Pd
                                            (NIP.197005032006042008) KEPALA
                                            BIDANG PEMBINAAN KETENAGAAN DAN
                                            PENGELOLA DATA PENDIDIKAN
                                        </option>
                                    </select>
                                </p>
                                <p>
                                    <label> </label>
                                    <button
                                        type="submit"
                                        class="btn btn-success"
                                    >
                                        <i class="fa fa-save fa-btn"> </i>
                                        Simpan Perubahan
                                    </button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @endsection
        </li>
    </ol>
</section>
