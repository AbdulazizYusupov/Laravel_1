@extends('main')

@section('title', 'Admin')

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
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <p>Given tasks</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="/admin" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <p>Started</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="/admin" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <p>Progress</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="/admin" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <p>Finished and waited tasks</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="/admin" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <p>Accepted</p>
                                </div>
                                <div class="icon">
                                    <i class="ion-checkmark"></i>
                                </div>
                                <a href="/admin" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                AddTask
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Create Tasks</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="/" enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Task Title</label>
                                                    <input type="text" class="form-control" id="title"
                                                        aria-describedby="emailHelp" name="title" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="desc" class="form-label">Task Description</label>
                                                    <input type="text" class="form-control" id="desc" name="desc"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="rasm" class="form-label">Task Image</label>
                                                    <input type="file" class="form-control" id="rasm" name="rasm"
                                                        required>
                                                </div>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="user_id">
                                                </select>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="ok">Add</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <table style="width: 100%; border-collapse: collapse; border: 1px solid black;">
                                <tr>
                                    <th style="border: 1px solid black; padding: 10px; background-color: #f2f2f2;">
                                        ID</th>
                                    <th style="border: 1px solid black; padding: 10px; background-color: #f2f2f2;">
                                        Title</th>
                                    <th style="border: 1px solid black; padding: 10px; background-color: #f2f2f2;">
                                        Description</th>
                                    <th style="border: 1px solid black; padding: 10px; background-color: #f2f2f2;">
                                        Users</th>
                                    <th style="border: 1px solid black; padding: 10px; background-color: #f2f2f2;">
                                        Status</th>
                                </tr>
                                <tr>
                                    <th style="border: 1px solid black; padding: 10px;">1</th>
                                    <td style="border: 1px solid black; padding: 10px;">2</td>
                                    <td style="border: 1px solid black; padding: 10px;">3</td>
                                    <td style="border: 1px solid black; padding: 10px;">4</td>
                                    <td style="border: 1px solid black; padding: 10px;">
                                        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                                            data-bs-target="#check">
                                            Check
                                        </button>
                                        <div class="modal fade" id="check" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                            Accepting</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="" method="POST">
                                                        <div class="modal-body">
                                                            <textarea name="comment"
                                                                placeholder="Not neccesory"></textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success"
                                                                name="accept">Accept</button>
                                                            <button type="submit" class="btn btn-danger" name="reject"
                                                                class="btn btn-primary">Reject</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-success">Done</button>
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