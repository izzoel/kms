<div class="x_title">
    <h2>Pengajuan <span class="badge bg-primary text-white">Kegiatan</span></h2>
    <ul class="nav navbar-right panel_toolbox" style="min-width: 0px">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
    </ul>
    <div class="clearfix"></div>
</div>
<div class="x_content">
    <div class="row">
        <table id="kegiatan" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
            width="100%">
            <thead>
                <tr>
                    <th class="col-auto">#</th>
                    <th class="col-auto">Ormawa</th>
                    <th class="col-auto">Rentang Tanggal</th>
                    <th class="col-auto">Nama Kegiatan</th>
                    <th class="col-auto">Jumlah Anggaran</th>
                    <th class="col-auto">Proposal Kegiatan</th>
                    <th class="col-auto">Status</th>
                    <th class="col-auto">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kegiatans as $kegiatan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kegiatan->ormawa->nama }}</td>
                        <td>{{ $kegiatan->tanggal }}</td>
                        <td>{{ $kegiatan->nama }}</td>
                        <td>{{ $kegiatan->anggaran }}</td>
                        <td>
                            <a href="{{ asset('storage/' . $kegiatan->berkas) }}" target="_blank"><i
                                    class="fa fa-file"></i> {{ substr($kegiatan->berkas, 9) }}</a>
                        </td>
                        <td>
                            <span
                                class="badge badge-{{ $kegiatan->status === 'pending' ? 'warning' : ($kegiatan->status === 'approved' ? 'success' : 'danger') }}">{{ $kegiatan->status }}</span>
                            <input type="checkbox" class="custom-control-input" id="approved{{ $kegiatan->id }}"
                                name="approved" {{ $kegiatan->status === 'approved' ? 'checked' : '' }}>
                        </td>
                        <td>
                            <div class="btn-group mr-2" role="group">
                                <a href="{{ route('delete-kegiatan', $kegiatan->id) }}"
                                    class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                            <div class="btn-group mr-2" role="group">
                                <button class="btn btn-sm btn-warning text-dark" data-toggle="modal"
                                    data-target="#edit-kegiatan{{ $kegiatan->id }}">Edit</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@include('modals.modal_kegiatan')
