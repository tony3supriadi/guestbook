@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-building"></span>
            Show - Institution
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td><strong>{{ $institution->id }}</strong></td>
                        </tr>
                        <tr>
                            <th>Institution Name</th>
                            <td>{{ $institution->name }}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ $institution->created_at->isoFormat('DD MMM YYYY HH:mm') }}</td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td>{{ $institution->updated_at->isoFormat('DD MMM YYYY HH:mm') }}</td>
                        </tr>
                    </tbody>
                </table>

                <a href="{{ route('admin.institution.index') }}" 
                    class="btn btn-primary">
                    <span class="bi bi-arrow-left"></span>
                    Back
                </a>
                
                <a href="{{ route('admin.institution.edit', $institution->id) }}" 
                    class="btn btn-secondary">
                    <span class="bi bi-pencil"></span>
                    Edit
                </a>
            </div>
        </div>
    </section>
</div>
@endsection