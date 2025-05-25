@extends('admin.layout.app')
@section('content')
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Services List</h6>
                        <a class="btn btn-sm btn-primary" href="{{route('services.add')}}">+ Add</a>
                    </div>
                    {{-- ----------------Alert Massage----------------- --}}
                    @include('admin.layout.alert')
                    {{-- ----------------Alert Massage----------------- --}}
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col"><input class="form-check-input" id='allcheck' onclick='allcheck()' type="checkbox"></th>
                                    <th scope="col">Services Name</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $val)  
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox" value='{{$val->id}}'></td>
                                        <td>{{$val->name}}</td>
                                        <td>{{$val->icon}}</td>
                                        <td>{{$val->description}}</td>
                                        <td>
                                            <a class="btn btn-sm btn-success" href="{{Route('services.edit',$val->id)}}">Edit</a>
                                            {{-- <a class="btn btn-sm btn-primary" href="{{Route('edit',$val->id)}}">View</a> --}}
                                            <a class="btn btn-sm btn-danger" href="{{Route('services.delete',$val->id)}}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                        {{-- <div>
                            {{ $data->links() }}
                        </div> --}}
                    </div>
                </div>
            </div>
            <script>
            function allcheck(){
                alert();
            }
            </script>
            <!-- Recent Sales End -->
@endsection