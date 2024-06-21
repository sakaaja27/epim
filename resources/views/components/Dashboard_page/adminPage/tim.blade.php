@extends('components.Dashboard_component.main')
@section('Title', 'dashboard')
@section('content')
    <div class="row">
        <div class="col-md-3 mb-2">
            @if (!empty($datas[0]))
                @if ($datas[0]->id_lomba == 1)
                    <form action="{{ route('admin.website') }}" method="GET">
                        <select name="sort_by" id="sort_by" onchange="this.form.submit()" class="form-select form-select-sm"
                            aria-label="Small select example">
                            <option value="">Sortir</option>
                            <option value="uploaded" {{ $request->input('sort_by') == 'uploaded' ? 'selected' : '' }}>Tim
                                upload proposal</option>
                            <option value="not_uploaded"
                                {{ $request->input('sort_by') == 'not_uploaded' ? 'selected' : '' }}>
                                Tim
                                belum upload proposal</option>
                        </select>
                    </form>
                @elseif ($datas[0]->id_lomba == 2)
                    <form action="{{ route('admin.timdesign') }}" method="GET">
                        <select name="sort_by" id="sort_by" onchange="this.form.submit()"
                            class="form-select form-select-sm" aria-label="Small select example">
                            <option value="">Sortir</option>
                            <option value="uploaded" {{ $request->input('sort_by') == 'uploaded' ? 'selected' : '' }}>Tim
                                upload proposal</option>
                            <option value="not_uploaded"
                                {{ $request->input('sort_by') == 'not_uploaded' ? 'selected' : '' }}>
                                Tim
                                belum upload proposal</option>
                        </select>
                    </form>
                @elseif ($datas[0]->id_lomba == 3)
                    <form action="{{ route('admin.timvideo') }}" method="GET">
                        <select name="sort_by" id="sort_by" onchange="this.form.submit()"
                            class="form-select form-select-sm" aria-label="Small select example">
                            <option value="">Sortir</option>
                            <option value="uploaded" {{ $request->input('sort_by') == 'uploaded' ? 'selected' : '' }}>Tim
                                upload
                                Video</option>
                            <option value="not_uploaded"
                                {{ $request->input('sort_by') == 'not_uploaded' ? 'selected' : '' }}>
                                Tim
                                belum upload Video</option>
                        </select>
                    </form>
                @elseif ($datas[0]->id_lomba == 4)
                    <form action="{{ route('admin.timposter') }}" method="GET">
                        <select name="sort_by" id="sort_by" onchange="this.form.submit()"
                            class="form-select form-select-sm" aria-label="Small select example">
                            <option value="">Sortir</option>
                            <option value="uploaded" {{ $request->input('sort_by') == 'uploaded' ? 'selected' : '' }}>Tim
                                upload
                                Poster</option>
                            <option value="not_uploaded"
                                {{ $request->input('sort_by') == 'not_uploaded' ? 'selected' : '' }}>
                                Tim
                                belum upload Poster</option>
                        </select>
                    </form>
                @endif
            @endif
        </div>

    </div>

    <table class="datatable-init table table-bordered" style="font-size: 12px">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bidang Lomba</th>
                <th>Nama Tim</th>
                <th>Nama Guru Pembimbing</th>
                <th>Asal Sekolah</th>
                <th>Nama Ketua</th>
                <th>Bukti Pembayaran</th>
                <th>
                    @if (!empty($datas[0]))
                        @if ($datas[0]->id_lomba == 3)
                            Download Video
                        @elseif($datas[0]->id_lomba == 4)
                            Download Poster
                        @else
                            Download Proposal
                        @endif
                    @endif
                </th>
                <th>Dirubah Jam</th>
                <th>Status Lolos</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_lomba }}</td>
                    <td>{{ $data->nama_tim }}</td>
                    <td>{{ $data->guru_pembimbing }}</td>
                    <td>{{ $data->asal_sekolah }}</td>
                    <td>{{ $data->nama_ketua }}</td>
                    @if ($data->upload_bayar != null)
                        <td><a href="{{ route('proposal.download', $data->upload_bayar) }}" class="btn btn-warning"><em
                                    class="icon ni ni-download"></em><em class="icon ni ni-money"></em></a></td>
                    @else
                        <td></td>
                    @endif

                    @if ($data->proposal != null)
                        @if ($data->id_lomba == 3 || $data->id_lomba == 4)
                            <td><a href="{{ $data->proposal }}" target="_blank" class="btn btn-danger"><em
                                        class="icon ni ni-download"></em><em class="icon ni ni-file-pdf"></em></a></td>
                        @else
                            <td><a href="{{ route('proposal.download', $data->proposal) }}" target="_blank"
                                    class="btn btn-danger"><em class="icon ni ni-download"></em><em
                                        class="icon ni ni-file-pdf"></em></a></td>
                        @endif
                    @else
                        <td></td>
                    @endif
                    <td>{{ \Carbon\Carbon::parse($data->updated_at)->format('d-M-y H:i') }}</td>

                    <td>
                        @if ($data->status_lolos == 0)
                            <a href="#" class="btn btn-danger btn-sm"
                                onclick="return confirmLolos({{ $data->id_pendaftar }})">Belum Lolos</a>
                        @else
                            <a href="#" class="btn btn-success btn-sm">Lolos</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('tim.show', $data->id_pendaftar) }}" class="btn btn-warning btn-sm"><em
                                class="icon ni ni-eye-alt"></em></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        function confirmLolos(id) {
            if (confirm("Apakah Anda yakin ingin mengubah status tim ini menjadi Lolos?")) {
                window.location.href = "{{ route('admin.lolos', ':id') }}".replace(':id', id);
            }
            return false;
        }
    </script>
@endsection
