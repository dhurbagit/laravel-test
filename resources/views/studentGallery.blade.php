@extends('home')
@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="Header_wrapper">
                    <h1>{{ucfirst($name)}}  Gallery</h1>
                </div>
                 
                <div class="inner_wrapper">
                <div class="row">
                <a class="btn btn-primary" href="{{ URL::previous() }}">Back</a>
                </div>
                <div class="row">
                @foreach($data as $images)
                <?php var_dump($data);?>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('/uploads/'. $images) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="stdelete/" class="btn btn-primary">Remove</a>
                        </div>
                    </div>
                    </div>
                @endforeach
                </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection