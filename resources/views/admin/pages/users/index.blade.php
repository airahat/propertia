@extends('admin.layout.master')
@section('title', 'Users')

@section('content')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Users</h2>
        <a href="{{ url('/users/create') }}" class="btn btn-primary">
            <i class="fa-solid fa-user-plus me-1"></i> Add User
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <table class="table table-hover align-middle table-striped">
                <thead class="table-light">
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Static demo data --}}
                    <tr>
                        <td>1</td>
                        <td>
                            <img src="https://placehold.co/60x60" class="rounded-circle border" alt="photo" width="50" height="50">
                        </td>
                        <td>Rahim Uddin</td>
                        <td>rahim@example.com</td>
                        <td>Admin</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <img src="https://placehold.co/60x60" class="rounded-circle border" alt="photo" width="50" height="50">
                        </td>
                        <td>Farhana Akter</td>
                        <td>farhana@example.com</td>
                        <td>Agent</td>
                        <td>
                            <span class="badge bg-warning text-dark">Pending</span>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <img src="https://placehold.co/60x60" class="rounded-circle border" alt="photo" width="50" height="50">
                        </td>
                        <td>Shakil Ahmed</td>
                        <td>shakil@example.com</td>
                        <td>Employee</td>
                        <td>
                            <span class="badge bg-secondary">Inactive</span>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
