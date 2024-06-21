@extends('components.Dashboard_component.main')
@section('Title','dashboard')
@section('content')

<table class="table table-striped table-hover table-akuhh">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Ketua</th>
                <th>Email ketua</th>
                <th>Nama Sekolah</th>
                <th>No.tlp ketua</th>
                <th>Kategori Lomba</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($pendaftar as $a)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$a->nama}}</td>
                <td>{{$a->email}}</td>
                <td>{{$a->asal_sekolah}}</td>
                <td>{{$a->nope}}</td>
                <td>
                  @if ($a->id_lomba == 1)
                      webpro
                  @elseif ($a->id_lomba == 2)
                      despack
                  @endif
              </td>
              
                <td>
                    <button class="btn btn-info btn-sm" > 
                      <a href="/buku-edit/{{$a->id}}"><i class="fa fa-wrench text-white"></i></a>
                    </button>
                    <button class="btn btn-danger btn-sm">
                      <a href="buku-delete/{{$a->id}}" onclick="return confirm('Yakin ingin menghapus ?');"> <i class="fa fa-trash text-white"></i></a>
                    </button>
                </td>
              </tr>
              @endforeach
            </tbody>
      </table>
@endsection