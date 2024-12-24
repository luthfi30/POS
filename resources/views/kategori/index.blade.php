@extends('app')

@section('title')
    Kategori
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header with-border">
                        <button onclick="addForm('{{ route('kategori.store') }}')" class="btn btn-success btn-md btn-flat"><i
                                class="fa fa-plus-circle"></i> Tambah</button>
                    </div>
                    <div class="box-body table-responsive">
                        <table id="kategori-table" class="table table-stiped table-bordered">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Kategori</th>
                                    <th width="15%"><i class="fa fa-cog"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->nama_kategori }}</td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-md btn-flat"
                                                type="button">Edit</a>
                                            <a href="" class="btn btn-danger btn-md btn-flat"
                                                type="button">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@push('scripts')
    <script>
        let table;
        table = $('.table').DataTable()
    </script>
@endpush
