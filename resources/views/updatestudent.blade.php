@extends('home')
@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="Header_wrapper">
                    <h1>Update Student Record</h1>
                </div>
                <div class="inner_wrapper">

                    <form action="{{'/updatestudent/'.$data->id}}" method="post">
                        @csrf
                        <!-- hidden field -->
                        <div class="mb-3">
                             
                            
                        </div>
                        <!-- end hidden field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="full_name" value="{{$data->full_name}}"
                                 placeholder="Enter Full Name" >
                            <span style="color:red;">@error ('full_name'){{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Address</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="address" value="{{$data->address}}"
                                placeholder="Enter Address">
                            <span style="color:red;">@error ('address'){{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="phone_number" value="{{$data->phone_number}}"
                                placeholder="Enter Phone Number">
                            <span style="color:red;">@error ('phone_number'){{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="{{$data->email}}"
                                placeholder="Enter Email">
                            <span style="color:red;">@error ('email'){{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')