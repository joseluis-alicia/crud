@extends('layouts.apps')
@section('content')
    <div class="card mt-3 mb-4">
        <div class="card-header font-weight-bold text-center">
            <div class="card-title text-uppercase">
                data pengawasan syariat islam
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="mb-4 mt-2 text-uppercase">
                    <a href="" class="btn btn-primary btn-sm font-weight-bold">Buat Data</a>
                </div>
                <table class="table table-bordered table-sm" style="font-size:14px ">
                    <thead class="text-center">
                        <tr>
                            <th style="width: 3%">No</th>
                            <th style="width:50%">Uraian Kegiatan</th>
                            <th style="width: 8%">Lokasi</th>
                            <th style="width: 8%">Kegiatan</th>
                            <th style="width: 8%">Qanun/Perda</th>
                            <th style="width: 8%">Kasus</th>
                            <th style="width: 5%">Tahun</th>
                            <th style="width: 3%">Gbr</th>
                            <th style="width: 3%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td class="text-right pr-2"></td>
                                <td></td>
                                <td class="text-center">
                                    <div class="d-flex-sm"></div>
                                </td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center">
                                </td>
                                <td class="text-center">
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
