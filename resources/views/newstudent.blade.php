@extends('home')
@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="Header_wrapper">
                    <h1>New Student Form</h1>
                </div>
                <div class="inner_wrapper">
                    <a href="studentlist" class="btn btn-success">View student list</a>
                    <br>
                    <br>

                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif

                    @if(Session::get('fail'))
                    <div class="alert alert-success">
                        {{Session::get('fail')}}
                    </div>
                    @endif
                    <form action="createNewstudentrecord" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="full_name"
                                value="{{old('full_name')}}" placeholder="Enter Full Name">
                            <span style="color:red;">@error ('full_name'){{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Address</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="address"
                                value="{{old('address')}}" placeholder="Enter Address">
                            <span style="color:red;">@error ('address'){{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="phone_number"
                                value="{{old('phone_number')}}" placeholder="Enter Phone Number">
                            <span style="color:red;">@error ('phone_number'){{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                                value="{{old('email')}}" placeholder="Enter Email">
                            <span style="color:red;">@error ('email'){{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Select Image</label>
                            <input type="file" class="form-control" id="exampleFormControlInput1" name="file"
                                value="{{old('file')}}" placeholder="Enter Email">
                            <span style="color:red;">@error ('file'){{$message}} @enderror</span>
                        </div>
                        <div class="mb-3 control-group increment">
                            <label for="exampleFormControlInput1" class="form-label">Select Image for gallery</label>
                            <input type="file" name="filename[]" class="form-control">
                            <div class="input-group-btn">
                                <button class="btn btn-success" type="button"><i
                                        class="glyphicon glyphicon-plus"></i>Add</button>
                            </div>
                            <span style="color:red;">@error ('file'){{$message}} @enderror</span>
                        </div>
                        <div class="clone hide">
                            <div class="control-group input-group" style="margin-top:10px">
                                <input type="file" name="filename[]" class="form-control">
                                <div class="input-group-btn">
                                    <button class="btn btn-danger" type="button"><i
                                            class="glyphicon glyphicon-remove"></i> Remove</button>
                                </div>
                            </div>
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
@section('footer_scripts')
<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
@stop