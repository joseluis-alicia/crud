@extends('layouts.apps')
@section('content')
    <div class="card mt-3 mb-4">
        <div class="card-header font-weight-bold text-center">
            <div class="card-title pt-2 text-uppercase">
                buat data pengawasan syariat islam
            </div>
        </div>
        <div class="card-body">
            <form class="mt-4 mb-4" action="{{ route('rutin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-md-4 font-weight-bold">
                        <div class="form-group">
                            <label for="hari">Hari/Tanggal</label>
                            <input type="date" class="form-control" name="" id="" required />
                            <span class="small text-danger">* Tidak boleh kosong</span>
                        </div>
                        <div class="form-group">
                            <label for="waktu">Waktu</label>
                            <input type="text" name="" id="" class="form-control" required />
                            <span class="small text-danger">* Tidak boleh kosong</span>
                        </div>
                        <div class="form-group">
                            <label for="lokasi_id">Lokasi</label>
                            <select name="lokasi_id" id="lokasi_id" class="form-control" required>
                                <option value="">Pilih Lokasi</option>
                                @foreach ($lokasie as $lokasi )
                                    <option value="{{ $lokasi->id }}">{{ $lokasi->lokasi }}</option>
                                @endforeach
                            </select>
                            <span class="small text-danger">* Tidak boleh kosong</span>
                        </div>
                        <div class="form-group">
                            <label for="kegiatan_id">Kegiatan</label>
                            <select name="kegiatan_id" id="kegiatan_id" class="form-control" required>
                                <option value="">Pilih Kegiatan</option>
                                @foreach ($kegiatane as $kegiatan )
                                    <option value="{{ $kegiatan->id }}">{{ $kegiatan->kegiatan }}</option>
                                @endforeach
                            </select>
                            <span class="small text-danger">* Tidak boleh kosong</span>
                        </div>
                        <div class="form-group">
                            <label for="qanun_id">Qanun/Perda</label>
                            <select name="qanun_id" id="qanun_id" class="form-control">
                                <option value="">Pilih Qanun/Perda</option>
                                @foreach ($qanune as $qanun )
                                    <option value="{{ $qanun->id }}">{{ $qanun->qanun }} - {{ $qanun->tentang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kasus_id">Kasus</label>
                            <select name="kasus_id" id="kasus_id" class="form-control">
                                <option value="">Pilih Kasus</option>
                                @foreach ($kasuse as $kasus )
                                    <option value="{{ $kasus->id }}">{{ $kasus->kasus }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tahun_id">Tahun</label>
                            <select name="tahun_id" id="tahun_id" class="form-control">
                                <option value="">Pilih Tahun</option>
                                @foreach ($tahune as $tahun )
                                    <option value="{{ $tahun->id }}">{{ $tahun->tahun }}</option>
                                @endforeach
                            </select>
                            <span class="small text-danger">* Tidak boleh kosong</span>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="uraian" class="font-weight-bold">Uraian Kegiatan</label>
                            <textarea type="text" class="form-control" name="uraian" id="summernote" required></textarea>
                            <span class="small text-danger">* Tidak boleh kosong</span>
                        </div>
                        <br/>
                        {{-- inpur gambar --}}
                        <div class="row col-md-12">
                            <div class="col-md-3">
                                <div>
                                    <label for="image1" class="font-weight-bold">Dokumentasi</label>
                                </div>
                                <input onchange="showFile1(event)" type="file" name="image1" id="image1"
                                    class="btn btn-sm btn-secondary col-sm" />
                                <img src="" width="150px"  id="file-preview1" class="mt-2 rounded mx-auto d-block" />
                                {{-- kode munculkan gambar --}}
                                <script type="text/javascript">
                                    function showFile1(event) {
                                        var input = event.target;
                                        var reader = new FileReader();
                                        reader.onload = function() {
                                            var dataURL = reader.result;
                                            var output = document.getElementById('file-preview1');
                                            output.src = dataURL;
                                        };
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                </script>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <label for="gambar2" class="font-weight-bold">Dokumentasi</label>
                                </div>
                                <input onchange="showFile2(event)" type="file" name="" id=""
                                    class="btn btn-sm btn-secondary col-sm" />
                                <img src="" width="150" id="file-preview2" class="mt-2 rounded mx-auto d-block" />
                                {{-- kode munculkan gambar --}}
                                <script type="text/javascript">
                                    function showFile2(event) {
                                        var input = event.target;
                                        var reader = new FileReader();
                                        reader.onload = function() {
                                            var dataURL = reader.result;
                                            var output = document.getElementById('file-preview2');
                                            output.src = dataURL;
                                        };
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                </script>

                            </div>
                            <div class="col-md-3">
                                <div>
                                    <label for="gambar3" class="font-weight-bold">Dokumentasi</label>
                                </div>
                                <input onchange="showFile3(event)" type="file" name="" id=""
                                    class="btn btn-sm btn-secondary col-sm" />
                                <img src="" width="150" id="file-preview3" class="mt-2 rounded mx-auto d-block" />
                                {{-- kode munculkan gambar --}}
                                <script type="text/javascript">
                                    function showFile3(event) {
                                        var input = event.target;
                                        var reader = new FileReader();
                                        reader.onload = function() {
                                            var dataURL = reader.result;
                                            var output = document.getElementById('file-preview3');
                                            output.src = dataURL;
                                        };
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                </script>

                            </div>
                            <div class="col-md-3">
                                <div>
                                    <label for="gambar4" class="font-weight-bold">Dokumentasi</label>
                                </div>
                                <input onchange="showFile4(event)" type="file" name="" id=""
                                    class="btn btn-sm btn-secondary col-sm" />
                                <img src="" width="150" id="file-preview4" class="mt-2 rounded mx-auto d-block" />
                                {{-- kode munculkan gambar --}}
                                <script type="text/javascript">
                                    function showFile4(event) {
                                        var input = event.target;
                                        var reader = new FileReader();
                                        reader.onload = function() {
                                            var dataURL = reader.result;
                                            var output = document.getElementById('file-preview4');
                                            output.src = dataURL;
                                        };
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                </script>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary  mt-4 mr-2 font-weight-bold">SIMPAN</button>
                    <a href="{{ route('rutin.index') }}"
                        class="btn btn-secondary  mt-4 ml-2 font-weight-bold">KEMBALI</a>
                </div>
            </form>
        </div>
</div @endsection
