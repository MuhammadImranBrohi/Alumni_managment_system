@extends('layouts.app')
@section('content')
    <div class="app-content-header">
        <!--start of Container-->
        <div class="container-fluid">
            <!--start of Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">admin - Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--start of App Content-->
    <div class="app-content">
        <!--start of Container-->
        <div class="container-fluid">
            <!--start of Row-->
            <div class="row mt-3">
                <div class="col-md-3">
                    <div class="card p-3 shadow-sm">
                        <h4>Total Users</h4>
                        <p>{{ $t_users }}</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 shadow-sm">
                        <h4>Total Alumni</h4>
                        <p>{{ $t_alumni }}</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 shadow-sm">
                        <h4>Departments</h4>
                        <p>{{ $t_departments }}</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 shadow-sm">
                        <h4>Events</h4>
                        <p>{{ $t_events }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-11 col-sm-11 mt-3 col-md-11">
                    <table class="table table-striped table-bordered text-capitalize">
                        <tr>
                            <th>iD</th>
                            <th>profile photo</th>
                            <th> name </th>
                            <th> email </th>
                            <th> phone number </th>
                            <th> gender </th>
                            <th>role iD</th>
                            <th>operation</th>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td> {{ $user->user_id }} </td>
                                <td>
                                    @if ($user->profile_photo)
                                        <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="photo"
                                            width="50" height="50" class="rounded-circle">
                                    @else
                                        <span class="text-muted">No Photo</span>
                                    @endif
                                </td>
                                <td> {{ $user->first_name }} {{ $user->last_name }} </td>
                                <td> {{ $user->email }} </td>
                                <td> {{ $user->phone_number }} </td>
                                <td> {{ $user->gender }} </td>
                                <td> {{ $user->role_id }} </td>
                                <td><a class="btn btn-primary" href="">Edit</a> | <a class="btn btn-danger"
                                        href=""> delete</a> </td>
                            </tr>
                        @endforeach
                    </table>
                    {{-- {{ print_r($users) }} --}}
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
@endsection
{{-- 
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#usersTable').DataTable();
        });
    </script>
@endpush --}}
