@extends('layouts.admin')

@section('content')
    <div class="cui__layout__content" >
        <div class="cui__utils__content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cui__utils__heading">
                        <strong class="text-uppercase font-size-16">Add New User</strong>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                @include('includes.error_mesage')
                                <div class="card-body">
                                    <form action="/admin/user/store" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">User Name</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="User Name" name="name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Email</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="User Email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Password</label>
                                            <div class="col-md-6">
                                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success px-5">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
