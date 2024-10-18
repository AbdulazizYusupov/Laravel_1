@extends('main')

@section('title', 'Members')

@section('content')
<div class="wrapper">
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60"
            width="60">
    </div>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="/user" class="brand-link">
            <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="/admin" class="d-block">Admin</a>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="/admin" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Tasks
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/members" class="nav-link">
                            <i class="nav-icon fas fa-user-alt"></i>
                            <p>
                                Users
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            <i class="fas fa-sign-out-alt"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Users panel</h1>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <table style="width: 100%; border-collapse: collapse; border: 1px solid black;">
                                <tr>
                                    <th style="border: 1px solid black; padding: 10px; background-color: #f2f2f2;">
                                        ID</th>
                                    <th style="border: 1px solid black; padding: 10px; background-color: #f2f2f2;">
                                        Name</th>
                                    <th style="border: 1px solid black; padding: 10px; background-color: #f2f2f2;">
                                        Email</th>
                                    <th style="border: 1px solid black; padding: 10px; background-color: #f2f2f2;">
                                        Password</th>
                                    <th style="border: 1px solid black; padding: 10px; background-color: #f2f2f2;">
                                        Role</th>
                                    <th style="border: 1px solid black; padding: 10px; background-color: #f2f2f2;">
                                        Status</th>
                                </tr>
                                <tr>
                                    <th style="border: 1px solid black; padding: 10px;">1</th>
                                    <td style="border: 1px solid black; padding: 10px;">2</td>
                                    <td style="border: 1px solid black; padding: 10px;">3</td>
                                    <td style="border: 1px solid black; padding: 10px;">4</td>
                                    <td style="border: 1px solid black; padding: 10px;">5</td>
                                    <td style="border: 1px solid black; padding: 10px;">
                                        <button type="submit" value="true" name="true" class="btn btn-success"></button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <aside class="control-sidebar control-sidebar-dark">
                    </aside>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection