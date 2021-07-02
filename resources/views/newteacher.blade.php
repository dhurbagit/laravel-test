@extends('home')
@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="Header_wrapper">
                    <h1>New Teacher Form</h1>
                </div>
                <div class="inner_wrapper">
                    @include('sessionmessage.sessioninfo')
                    <form action="newteacherfrom" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="full_name"
                                value="{{old('full_name')}}" placeholder="Enter Full Name">
                            <span style="color:red;">@error ('full_name') {{$message}} @enderror</span>

                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Address</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="address"
                                value="{{old('address')}}" placeholder="Enter Address">
                                <span style="color:red;">@error ('address') {{$message}} @enderror</span>

                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="phone_number"
                                value="{{old('phone_number')}}" placeholder="Enter Phone Number">
                                <span style="color:red;">@error ('phone_number') {{$message}} @enderror</span>

                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                                value="{{old('email')}}" placeholder="Enter Email">
                                <span style="color:red;">@error ('email') {{$message}} @enderror</span>

                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Education</label>
                            <select class="form-select form-control" aria-label="Default select example" name="education">
                                <option selected>Open this select menu</option>
                                <option value="+2">+2</option>
                                <option value="Bachelor Degree">Bachelor Degree</option>
                                <option value="Master Degree">Master Degree</option>
                                <option value="More">More</option>
                            </select>
                            <span style="color:red;">@error ('education') {{$message}} @enderror</span>


                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')