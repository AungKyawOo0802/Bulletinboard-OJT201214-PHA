@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font-weight-bold">Change Password</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="oldPassword" class="col-md-4 col-form-label text-md-right">
                                Old Password<span class="text-danger">*</span>
                            </label>
                            <div class="col-md-6">
                                <input type="oldPassword" class="form-control" id="oldPassword">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="newPassword" class="col-md-4 col-form-label text-md-right">
                                New Password<span class="text-danger">*</span>
                            </label>
                            <div class="col-md-6">
                                <input type="newPassword" class="form-control" id="newPassword">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="confirmPassword" class="col-md-4 col-form-label text-md-right">
                                Confirm New Password<span class="text-danger">*</span>
                            </label>
                            <div class="col-md-6">
                                <input type="confirmPassword" class="form-control" id="confirmPassword">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Change
                                </button>
                                <button type="button" class="btn btn-secondary">
                                    Clear
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

