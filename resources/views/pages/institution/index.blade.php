@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-building"></span>
            Institution
        </h3>
    </div>

    <a href="{{ route('admin.institution.create') }}" 
        class="btn btn-primary mb-3">
        <span class="bi bi-plus-circle"></span>
        Create New
    </a>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Intitution Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($institutions as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <a href="{{ route('admin.institution.show', $item->id) }}" 
                                        class="btn btn-outline-secondary btn-sm me-1">
                                        <span class="bi bi-eye"></span>
                                        Show
                                    </a>
                                    <a href="{{ route('admin.institution.edit', $item->id) }}" 
                                        class="btn btn-secondary btn-sm me-1">
                                        <span class="bi bi-pencil"></span>
                                        Edit
                                    </a>
                                    <a href="javascript:;" onClick="handleDelete('{{ route('admin.institution.destroy', $item->id) }}', '{{ $item->name }}')" class="btn btn-danger btn-sm me-1">
                                        <span class="bi bi-trash"></span>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<form id="form-delete" action="" method="POST">
    @csrf
    @method('DELETE')
</form>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('/vendors/simple-datatables/style.css')}}">
<link rel="stylesheet" href="{{ asset('/vendors/sweetalert2/sweetalert2.min.css')}}">
@endpush

@push('scripts')
<script src="{{ asset('/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('/js/extensions/sweetalert2.js')}}"></script>
<script src="{{ asset('/vendors/sweetalert2/sweetalert2.all.min.js')}}"></script>
<script>
    // Simple Datatable
    let datatable = document.querySelector('#datatable');
    new simpleDatatables.DataTable(datatable);

    function handleDelete(url, name) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('form-delete').setAttribute('action', url);
                document.getElementById('form-delete').submit();
            }
        })
    }
</script>
@endpush