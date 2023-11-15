@extends('layout')
@section('content')
<main class="">
    <!-- About US Start -->
    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="row" style="width:1230px;">
                        @foreach($query as $key => $value)
                        <div class="col-lg-4">
                            <div class="single-bottom mb-35">
                                <div class="img mb-30">
                                    <img src="{{ $value->img }}" alt="" style="height:157px;width:300px">
                                </div>
                                <div class="">
                                    <span class="color1">{{ $value->cate_name }}</span>
                                    <h4 style="width:300px"><a href="{{route('details',$value->slug)}}">{{ $value->title }}</a></h4>
                                </div>
                            </div>
                        </div>
                        @endforeach




                    </div>
                </div>
            </div>
            {{$query->links('pagination::bootstrap-5')}}
            




        </div>
    </div>
    <!-- About US End -->
</main>
@endsection
