@extends('admin.layout.app')
@section('content')
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4 align-items-center">
                            <h6 class="mb-4">Add</h6>
                            <form action="{{route('add')}}" method="post" enctype="multipart/form-data">
                             @csrf
                            <div class="col-sm-12" style="display:flex;">
                                <div class="form-floating mb-3 col-sm-6" style='margin-right: 4px;'>
                                    <input type="text" name="name" value="" class="form-control" id="Name"
                                        placeholder="Name">
                                    <label for="floatingName">Name</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-6">
                                    <input type="text" name="designation" value="" class="form-control" id="Designation"
                                        placeholder="Name">
                                    <label for="floatingDesignation">Designation</label>
                                </div>
                            </div>
                            <div class="col-sm-12" style="display:flex;">
                                <div class="form-floating mb-3 col-sm-6" style='margin-right: 4px;'>
                                    <input type="email" name="email" value="" class="form-control" id="email"
                                        placeholder="Email">
                                    <label for="floatingName">Email</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-6">
                                    <input type="text" name="phone" value="" class="form-control" id="phone"
                                        placeholder="Phone">
                                    <label for="phone">Phone</label>
                                </div>
                            </div>
                            <div class="col-sm-12" style="display:flex;">
                                <div class="form-floating mb-3 col-sm-6" style='margin-right: 4px;'>
                                    <input type="file" name="image" accept="image/*"  class="form-control" id="image" placeholder="Image">
                                    <label for="floatingImage">Image</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-6" >
                                    <input type="file" name="cv" accept="pdf/*"  class="form-control" id="cv" placeholder="CV">
                                    <label for="floatingCV">CV</label>
                                </div>
                            </div>
                            <div class="col-sm-12" style="display:flex;">
                                <div class="form-floating mb-3 col-sm-6" style='margin-right: 4px;'>
                                    <input type="text" name="age" value="" class="form-control" id="age"
                                        placeholder="Age">
                                    <label for="floatingAge">Age</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-6">
                                    <input type="text" name="residence" value="" class="form-control" id="residence"
                                        placeholder="Residence">
                                    <label for="floatingResidence">Residence</label>
                                </div>
                            </div>
                            <div class="col-sm-12" style="display:flex;">
                                <div class="form-floating mb-3 col-sm-6" style='margin-right: 4px;'>
                                    <input type="text" name="freelance" value="" class="form-control" id="freelance"
                                        placeholder="Freelance">
                                    <label for="floatingFreelance">Freelance</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-6">
                                    <input type="text" name="address" value="" class="form-control" id="address"
                                        placeholder="Address">
                                    <label for="floatingAddress">Address</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-floating mb-3 ">
                                    <textarea class="form-control" name="descreption" placeholder="Leave a Descreption here" id="descreption" style="height: 150px;"></textarea>
                                    <label for="floatingDescreption">Descreption</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href='{{route('about-us')}}'>
                                <button type="button" class="btn btn-danger">Cancel</button>
                            </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection