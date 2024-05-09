@extends('admin.partials.app')

@section('title', 'Page Title')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Kategori Produk</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Produk</a></li>
                            <li class="breadcrumb-item active">Kategori Produk</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        {{-- main content --}}
        <div class="row">
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Tambah Kategori</h4>
                        <form method="post" action="{{ route('kategori.add') }}">
                            @csrf
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="horizontal-firstname-input"
                                        placeholder="Masukan nama Kategori" name="nama_kategori">
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-9">
                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-xl-9 col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Kategori</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @if($kategori->isEmpty())
                                    <p class="text-center mb-10">Produk Tidak tersedia.</p>
                                    @else
                                    @foreach($kategori as $k)
                                    <td>{{ $k->id }}</td>
                                    <td>{{ $k->nama_kategori }}</td>
                                    <td>{{ $k->created_at }}</td>
                                    <td>{{ $k->updated_at }}</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $k->id }}">
                                            <i class="bx bx-edit"></i>
                                        </button>

                                        <a href="{{ route('kategori.delete', $k->id) }}"
                                            class="btn btn-danger waves-effect waves-light btn-sm"
                                            onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus kategori ini?')) document.getElementById('delete-form-{{ $k->id }}').submit();">
                                            <i class="bx bx-trash-alt"></i>
                                        </a>
                                        <form id="delete-form-{{ $k->id }}"
                                            action="{{ route('kategori.delete', $k->id) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>

                                <!-- Modal untuk edit kategori -->
                                <div class="modal fade" id="editModal{{ $k->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $k->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel{{ $k->id }}">Edit Kategori</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="editForm{{ $k->id }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <label for="editName{{ $k->id }}" class="form-label">Nama Kategori</label>
                                                        <input type="text" class="form-control" id="editName{{ $k->id }}" name="name" value="{{ $k->nama_kategori }}">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" onclick="submitEditForm({{ $k->id }})">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
        {{-- end main content --}}

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())

                        </script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design &amp; Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->
    @endsection
