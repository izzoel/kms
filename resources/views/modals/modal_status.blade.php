<!-- Modal Edit-->

@foreach ($kegiatans as $kegiatan)
    <div class="modal fade" id="editStatus{{ $kegiatan->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header pb-1">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        <h2>Edit <span class="badge bg-warning text-dark">Status</span></h2>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" action="{{ route('store-struktur') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-4">
                            <div class="col p-0">
                                <div class="form-group">
                                    <label class="control-label col-md-4 ">Status</label>
                                    <div class="col-md-8 ">
                                        <select id="kategori" name="kategori" class="form-control p-2">
                                            @foreach (['Ditinjau', 'Disetujui', 'Ditolak'] as $status)
                                                <option value="{{ $status }}"
                                                    {{ $kegiatan->status == $status ? 'selected' : '' }}>
                                                    {{ $status }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col p-0">
                                <div class="form-group">
                                    <label class="control-label col-md-4 ">Keterangan</label>
                                    <div class="col-md-8 ">
                                        <textarea class="resizable_textarea form-control rounded" placeholder="..." name="keterangan" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id_ormawa" value="{{ auth()->user()->id }}">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach