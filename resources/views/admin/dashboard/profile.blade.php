@extends('admin.layout.app')

@section('content')
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                        @include('admin.layout.alert')
                            <h6 class="mb-4">My Profile</h6>
                            <form action='{{route('profile')}}' method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-floating mb-3">
                                @if(auth()->user()->name)
                                    <input type="text" name="name" value="{{auth()->user()->name}}" class="form-control" id="floatingName"
                                        placeholder="Name">
                                        @endif
                                    <label for="floatingName">Name</label>
                                    @error('name')
                                        <div class='error'>{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" name="emial" class="form-control" id="floatingInput"
                                        placeholder="name@example.com" value ="{{auth()->user()->email}}" Readonly>
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" value="{{auth()->user()->password}}" class="form-control" id="floatingPassword"
                                        placeholder="Password" Readonly>
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="phone" value="{{auth()->user()->phone}}" class="form-control" id="floatingPhone"
                                        placeholder="Name">
                                    <label for="floatingPhone">Phone</label>
                                    @error('phone')
                                        <div class='error'>{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="file" name="image" accept='image/*' value="{{auth()->user()->image}}" class="form-control" id="floatingimage"
                                        placeholder="Name">
                                    <label for="floatingPhone">Image</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <img src="{{ asset('storage/img/' . auth()->user()->image) }}" alt="User Image" width="150">

                                    {{-- <img src="{{ Storage::url('public/img/' . auth()->user()->image) }}" alt="User Image" width="150"> --}}
                                    
                                </div>
                                <div class="form-floating mb-3">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

@endsection