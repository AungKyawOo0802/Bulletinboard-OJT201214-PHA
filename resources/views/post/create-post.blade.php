@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font-weight-bold">Create Post</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('post.index') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">
                                Title<span class="text-danger">*</span>
                            </label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">
                                Description<span class="text-danger">*</span>
                            </label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Confirm
                                </button>
                                <button type="button" class="btn btn-secondary px-3">
                                    Clear
                                </button>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Create Post Confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label font-weight-bold">
                                            Title
                                        </label>
                                        <label class="col-form-label">
                                            Post 1
                                        </label>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label font-weight-bold">
                                            Description
                                        </label>
                                        <label class="col-form-label">
                                            This is description for post 1
                                        </label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" data-dismiss="modal">Create</button>
                                    <button type="button" class="btn btn-secondary">Cancel</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
