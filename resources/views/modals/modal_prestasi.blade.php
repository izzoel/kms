<!-- Modal Tambah-->
<div class="modal fade" id="tambahPrestasi" data-backdrop="static" data-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header pb-1">
                <h5 class="modal-title" id="staticBackdropLabel">
                    <h2>Daftar <span class="badge bg-primary text-white">Prestasi</span></h2>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col p-0">
                            <div class="form-group">
                                <label class="control-label col-md-4">Nama Lengkap</label>
                                <div class="col-md-8">
                                    <select id="nama" class="js-example-basic-multiple" name="nama[]"
                                        multiple="multiple" style="width: 100%;min-width: 100%;"></select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col p-0">
                            <div class="form-group">
                                <label class="control-label col-md-4">Tahun Lomba</label>
                                <div class="col-md-8">
                                    {{-- <input type="number" class="form-control rounded" name="tahun" placeholder="..."
                                        min="2000" required /> --}}
                                    <input type="text" class="form-control rounded" id="datepicker" name="tahun"
                                        placeholder="Select Year">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col p-0">
                            <div class="form-group">
                                <label class="control-label col-md-4">Nama Lomba</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control rounded" name="raihan"
                                        placeholder="..." />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col p-0">
                            <div class="form-group">
                                <label class="control-label col-md-4">Tingkat Lomba</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control rounded" name="tingkat"
                                        placeholder="..." />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col p-0">
                            <div class="form-group">
                                <label class="control-label col-md-4">Raihan Prestasi</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control rounded" name="raihan"
                                        placeholder="..." />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col p-0">
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 ">File Sertifikat</label>
                                <div class="input-group mb-3 col-md-8 col-sm-8 ">
                                    <div class="custom-file mb-0 pb-0">
                                        <input type="file" class="custom-file-input" id="sertifikat"
                                            name="sertifikat"
                                            onchange="document.getElementById('berkas-label').textContent = this.files[0].name"
                                            accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.txt,.csv,.rtf">
                                        <label class="custom-file-label" id="berkas-label" for="berkas">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col p-0">
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 ">File Dokumentasi</label>
                                <div class="input-group mb-3 col-md-8 col-sm-8 ">
                                    <div class="custom-file mb-0 pb-0">
                                        <input type="file" class="custom-file-input" id="dokumentasi"
                                            name="dokumentasi"
                                            onchange="document.getElementById('berkas-label').textContent = this.files[0].name"
                                            accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.txt,.csv,.rtf">
                                        <label class="custom-file-label" id="berkas-label" for="berkas">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col p-0">
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 ">File Pas Foto</label>
                                <div class="input-group mb-3 col-md-8 col-sm-8">
                                    <div class="custom-file mb-0 pb-0">
                                        <input type="file" class="custom-file-input" id="foto"
                                            name="foto"
                                            onchange="document.getElementById('berkas-label').textContent = this.files[0].name"
                                            accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.txt,.csv,.rtf">
                                        <label class="custom-file-label" id="berkas-label" for="berkas">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('scripts/script_prestasi')
