@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1>Edit Admin</h1>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card card-primary">
                            <form action="" method="post">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" value="{{ $getRecord->name }}" required name="name" class="form-control"
                                            placeholder="Enter Your Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" value="{{ $getRecord->email }}" required name="email" class="form-control"
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" name="password" class="form-control"
                                            placeholder="Password">
                                            <p>Do you want to change password so please add</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" required class="form-control">
                                            <option {{ ($getRecord->status == 0) ? 'selected' : ''  }} value="0">Active</option>
                                            <option {{ ($getRecord->status == 1) ? 'selected' : ''  }} value="1">Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script src="{{ url('public/assets/dist/js/pages/dashboard3.js') }}"></script>
@endsection
