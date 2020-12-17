@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font-weight-bold">{{ __('Post List') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Post Input Form -->
                        <div class="form-group row">
                            <div class="col-lg-3 col-md-12 col-sm-12 p-1 my-col">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Search...">
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 p-1 my-col">
                                <input type="submit" class="btn btn-primary btn-block" value="Search">
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 p-1 my-col">
                                <input type="submit" class="btn btn-primary btn-block" value="Add">
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 p-1 my-col">
                                <input type="submit" class="btn btn-primary btn-block" value="Upload">
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 p-1 my-col">
                                <button type="submit" class="btn btn-primary btn-block">Download</button>
                            </div>
                        </div>
                    </form>
                    <!-- Post List -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Post Title</th>
                                <th scope="col">Post Description</th>
                                <th scope="col">Posted User</th>
                                <th scope="col">Posted Date</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Title 1</td>
                                <td>Description 1</td>
                                <td>User 1</td>
                                <td>5/10/2019</td>
                                <td><a href="#">Edit</a></td>
                                <td><a href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Title 2</td>
                                <td>Description 2</td>
                                <td>User 2</td>
                                <td>5/10/2019</td>
                                <td><a href="#">Edit</a></td>
                                <td><a href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Title 3</td>
                                <td>Description 3</td>
                                <td>User 3</td>
                                <td>5/10/2019</td>
                                <td><a href="#">Edit</a></td>
                                <td><a href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Title 4</td>
                                <td>Description 4</td>
                                <td>User 4</td>
                                <td>5/10/2019</td>
                                <td><a href="#">Edit</a></td>
                                <td><a href="#">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="card-footer d-flex justify-content-center font-weight-bold">"This gonna be pagination"</div>
            </div>
        </div>
    </div>
</div>
@endsection
