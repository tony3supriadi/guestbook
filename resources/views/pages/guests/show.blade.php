@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-people"></span>
            Show - Guest
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td><strong>{{ $guest->id }}</strong></td>
                        </tr>
                        <tr>
                            <th>Guest Name</th>
                            <td>{{ $guest->fullname }}</td>
                        </tr>
                        <tr>
                            <th>From</th>
                            <td>{{ $guest->from }}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{ $guest->phonenumber }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $guest->email }}</td>
                        </tr>
                        <tr>
                            <th>Note</th>
                            <td>{{ $guest->note }}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ $guest->created_at->isoFormat('DD MMM YYYY HH:mm') }}</td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td>{{ $guest->updated_at->isoFormat('DD MMM YYYY HH:mm') }}</td>
                        </tr>
                    </tbody>
                </table>

                <a href="{{ route('admin.guests.index') }}" 
                    class="btn btn-primary">
                    <span class="bi bi-arrow-left"></span>
                    Back
                </a>
            </div>
        </div>
    </section>
</div>
@endsection