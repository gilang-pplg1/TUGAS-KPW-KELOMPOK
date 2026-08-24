@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="text-white font-weight-bold">Users</h1>
        <ol class="breadcrumb float-sm-right mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" class="text-info">Home</a></li>
            <li class="breadcrumb-item active text-white-50">Users</li>
        </ol>
    </div>
@stop

@section('content')
<div class="card card-dark">
    <!-- Header Card: Title, Search, Filter & New User Button -->
    <div class="card-header border-0 pt-3 pb-2 bg-dark">
        <div class="d-flex flex-wrap justify-content-between align-items-center">
            <h3 class="card-title font-weight-bold text-white mb-2 mb-md-0">User Directory</h3>
            
            <div class="d-flex align-items-center flex-wrap gap-2">
                <!-- Input Search -->
                <div class="input-group input-group-sm mr-2 mb-2 mb-md-0" style="width: 200px;">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-dark border-secondary text-muted"><i class="fas fa-search"></i></span>
                    </div>
                    <input type="text" class="form-control bg-dark border-secondary text-white" placeholder="Search users">
                </div>

                <!-- Select Role -->
                <select class="form-control form-control-sm bg-dark border-secondary text-white mr-2 mb-2 mb-md-0" style="width: 120px;">
                    <option value="">All roles</option>
                    <option value="administrator">Administrator</option>
                    <option value="editor">Editor</option>
                    <option value="author">Author</option>
                    <option value="subscriber">Subscriber</option>
                </select>

                <!-- Button New User -->
                <a href="#" class="btn btn-primary btn-sm font-weight-bold mb-2 mb-md-0">
                    <i class="fas fa-user-plus mr-1"></i> New user
                </a>
            </div>
        </div>
    </div>

    <!-- Table Body -->
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle m-0 border-top border-secondary">
                <thead>
                    <tr class="text-muted border-bottom border-secondary">
                        <th class="border-0">User</th>
                        <th class="border-0">Email</th>
                        <th class="border-0">Role</th>
                        <th class="border-0">Status</th>
                        <th class="border-0">Created</th>
                        <th class="border-0 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item 1 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://i.pravatar.cc/150?img=11" class="rounded-circle mr-2" width="32" height="32" alt="Avatar">
                                <span class="font-weight-bold text-white">Alexander Pierce</span>
                            </div>
                        </td>
                        <td class="text-muted">alexander.pierce@example.com</td>
                        <td><span class="badge badge-danger px-2 py-1">Administrator</span></td>
                        <td><span class="badge badge-success px-2 py-1">Active</span></td>
                        <td class="text-muted">Mar 12, 2025</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-outline-secondary btn-xs"><i class="fas fa-pen text-muted"></i></a>
                                <a href="#" class="btn btn-outline-secondary btn-xs"><i class="fas fa-trash text-danger"></i></a>
                            </div>
                        </td>
                    </tr>
                    <!-- Item 2 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://i.pravatar.cc/150?img=5" class="rounded-circle mr-2" width="32" height="32" alt="Avatar">
                                <span class="font-weight-bold text-white">Sarah Bullock</span>
                            </div>
                        </td>
                        <td class="text-muted">sarah.bullock@example.com</td>
                        <td><span class="badge badge-primary px-2 py-1">Editor</span></td>
                        <td><span class="badge badge-success px-2 py-1">Active</span></td>
                        <td class="text-muted">Apr 3, 2025</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-outline-secondary btn-xs"><i class="fas fa-pen text-muted"></i></a>
                                <a href="#" class="btn btn-outline-secondary btn-xs"><i class="fas fa-trash text-danger"></i></a>
                            </div>
                        </td>
                    </tr>
                    <!-- Item 3 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://i.pravatar.cc/150?img=13" class="rounded-circle mr-2" width="32" height="32" alt="Avatar">
                                <span class="font-weight-bold text-white">Daniel Cooper</span>
                            </div>
                        </td>
                        <td class="text-muted">daniel.cooper@example.com</td>
                        <td><span class="badge badge-info px-2 py-1">Author</span></td>
                        <td><span class="badge badge-warning px-2 py-1 text-dark">Pending</span></td>
                        <td class="text-muted">Apr 28, 2025</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-outline-secondary btn-xs"><i class="fas fa-pen text-muted"></i></a>
                                <a href="#" class="btn btn-outline-secondary btn-xs"><i class="fas fa-trash text-danger"></i></a>
                            </div>
                        </td>
                    </tr>
                    <!-- Item 4 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://i.pravatar.cc/150?img=9" class="rounded-circle mr-2" width="32" height="32" alt="Avatar">
                                <span class="font-weight-bold text-white">Nora Vans</span>
                            </div>
                        </td>
                        <td class="text-muted">nora.vans@example.com</td>
                        <td><span class="badge badge-primary px-2 py-1">Editor</span></td>
                        <td><span class="badge badge-success px-2 py-1">Active</span></td>
                        <td class="text-muted">May 9, 2025</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-outline-secondary btn-xs"><i class="fas fa-pen text-muted"></i></a>
                                <a href="#" class="btn btn-outline-secondary btn-xs"><i class="fas fa-trash text-danger"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer Card: Counter & Pagination -->
    <div class="card-footer bg-dark border-top border-secondary py-3">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <span class="text-muted small mb-2 mb-md-0">Showing 1 to 4 of 42 users</span>
            <ul class="pagination pagination-sm m-0">
                <li class="page-item"><a class="page-link bg-dark text-muted border-secondary" href="#">«</a></li>
                <li class="page-item active"><a class="page-link bg-primary border-primary" href="#">1</a></li>
                <li class="page-item"><a class="page-link bg-dark text-white border-secondary" href="#">2</a></li>
                <li class="page-item"><a class="page-link bg-dark text-white border-secondary" href="#">3</a></li>
                <li class="page-item"><a class="page-link bg-dark text-muted border-secondary" href="#">»</a></li>
            </ul>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    body, .content-wrapper {
        background-color: #1a1c23 !important;
    }
    .card-dark {
        background-color: #212430 !important;
        border: 1px solid #2d3142 !important;
        border-radius: 8px;
    }
    .table-dark {
        background-color: #212430 !important;
    }
    .table-dark td, .table-dark th {
        border-color: #2d3142 !important;
        padding: 0.85rem 1rem;
    }
    .badge-primary { background-color: #2563eb !important; }
    .badge-danger { background-color: #dc2626 !important; }
    .badge-info { background-color: #06b6d4 !important; }
    .badge-secondary { background-color: #4b5563 !important; }
    .badge-success { background-color: #16a34a !important; }
    .badge-warning { background-color: #d97706 !important; }
</style>
@stop