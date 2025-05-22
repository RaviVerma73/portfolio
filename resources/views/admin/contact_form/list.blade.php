@extends('admin.layout.app')
@section('content')
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Contact Form List</h6>
                        {{-- <a class="btn btn-sm btn-primary" href="{{route('add')}}">+ Add</a> --}}
                    </div>
                    {{-- ----------------Alert Massage----------------- --}}
                    @include('admin.layout.alert')
                    {{-- ----------------Alert Massage----------------- --}}
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col"><input class="form-check-input" id='allcheck' onclick='allcheck()' type="checkbox"></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $val)  
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox" value='{{$val->id}}'></td>
                                        <td>{{$val->name}}</td>
                                        <td>{{$val->email}}</td>
                                        <td>{{$val->message}}</td>
                                        
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