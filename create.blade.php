@extends('layouts.apps')
@section('content')
    <div class="card mt-3 mb-4">
        <div class="card-header font-weight-bold text-center">
            <div class="card-title pt-2 text-uppercase">
                buat data pengawasan syariat islam
            </div>
        </div>
        <div class="card-body">
            <form class="mt-4 mb-4" action="" method="POST" enctype="multipart/form-data">
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
                            <label for="">Lokasi</label>
                            <select name="" id="" class="form-control" required>
                                <option value="">Pilih Lokasi</option>
                            </select>
                            <span class="small text-danger">* Tidak boleh kosong</span>
                        </div>
                        <div class="form-group">
                            <label for="">Kegiatan</label>
                            <select name="" id="" class="form-control" required>
                                <option value="">Pilih Kegiatan</option>
                            </select>
                            <span class="small text-danger">* Tidak boleh kosong</span>
                        </div>
                        <div class="form-group">
                            <label for="">Qanun/Perda</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Qanun/Perda</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kasus_id">Kasus</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Kasus</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tahun</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Tahun</option>
                            </select>
                            <span class="small text-danger">* Tidak boleh kosong</span>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Uraian Kegiatan</label>
                            <textarea type="text" class="form-control" name="" id="summernote" required></textarea>
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
                                <input onchange="showFile2(event)" type="file" name="image2" id="image2"
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
                                <input onchange="showFile3(event)" type="file" name="image3" id="image3"
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
                                <input onchange="showFile4(event)" type="file" name="image4" id="image4"
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
                    <a href="" class="btn btn-secondary  mt-4 ml-2 font-weight-bold">KEMBALI</a>
                </div>
            </form>
        </div>
</div @endsection
