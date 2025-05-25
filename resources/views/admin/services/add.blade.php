@extends('admin.layout.app')
@section('content')
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4 align-items-center">
                            <h6 class="mb-4">Add</h6>
                            <form action="{{route('services.add')}}" method="post" enctype="multipart/form-data">
                             @csrf
                            <div class="col-sm-12" style="display:flex;">
                                <div class="form-floating mb-3 col-sm-6" style='margin-right: 4px;'>
                                    <input type="text" name="name" value="" class="form-control" id="Name"
                                        placeholder="Name">
                                    <label for="floatingName">Service Name</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-6">
                                    <input type="text" name="icon" value="" class="form-control" id="icon"
                                        placeholder="Name">
                                    <label for="floatingicon">Icon</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-floating mb-3 ">
                                    <textarea class="form-control" name="description" placeholder="Leave a Descreption here" id="descreption" style="height: 150px;"></textarea>
                                    <label for="floatingDescreption">DescrIption</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href='{{route('services')}}'>
                                <button type="button" class="btn btn-danger">Cancel</button>
                            </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection