@extends('home')
@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="Header_wrapper">
                    <h1>Student List</h1>
                </div>
                <div class="inner_wrapper">
                @include ('sessionmessage.sessioninfo')
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">FUll Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Images</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($memberlists as $memberlist)
                       <tr>
                            <th scope="row">{{$memberlist['id']}}</th>
                            <td>{{$memberlist['full_name']}}</td>
                            <td>{{$memberlist['address']}}</td>
                            <td>{{$memberlist['phone_number']}}</td>
                            <td>{{$memberlist['email']}}</td>
                            <td> 
                            <img style="width:54px; height:54px;" src="{{asset('/uploads/' . $memberlist['file_path'])}}" class="img-thumbnail" alt="Responsive image">
                            </td>
                            <td><a href="{{'studentgallery/'. $memberlist['id']}}">Gallery</a></td>
                            <td>
                            <a href="{{'editstudent/'. $memberlist['id']}}" data-bs-toggle="tooltip" title="Edit"><i class="far fa-edit"></i></a>&nbsp; |&nbsp;
                            <a href="{{'delete/' . $memberlist['id']}}" data-bs-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                       @endforeach
                        
                    </tbody>
                </table>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection('content')