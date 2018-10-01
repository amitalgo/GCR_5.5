@extends('front-end.layouts.frontLayout')
@section('banner-image',asset($banner->getImage()))
@section('content')

<style>
	.admRtop {
    margin-bottom: 10px;
    float: right;
    width: 96%;
}
</style>
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="feature" style="background-image:none; padding:0px 0px 30px 0px">
                <div class="">
                    <div class="flt">
						<!--<h2>Experience Centre</h2><hr/>-->
					</div>
                    <div class="col-md-10 col-xs-12 col-pdn">

                        @foreach ($categories as $category)
                            <h3 class="solutionh3">{{$category->getName()}}</h3>
                            <div class="clearfix"></div>
                            <div class="col-md-12 col-xs-12 col-pdn">
                                @php $counter=1; @endphp
                                @forelse($category->getExpCategory() as $expVideo)
                                    @if($expVideo->getIsActive()==1)
                                        @if ($counter>4)
                                            @break
                                        @endif

                                        <div class="exper-Video">
                                            <iframe width="100%" height="160" src=" {{$expVideo->getMediaUrl()}}" frameborder="0" allow="autoplay" encrypted-media allowfullscreen></iframe>
                                            <div class="vidTittle">{{$expVideo->getTitle()}}</div>
                                        </div>


                                        @php $counter++; @endphp
                                    @endif
                                @empty
                                    Comming Soon .....
                                @endforelse
                                @if($counter>1)
                                    <div class="clearfix"></div>
                                    <a href="{{route('experience-centre.list',['id'=>$category->getId()])}}" class="category-btn">View More</a>
                                @else
                                @endif
                            </div>
                        @endforeach
                            
						
                    </div>
					<div class="col-md-2 col-md-12 hidden-xs" style="padding-right:0;">
                        @component('front-end.component.ads',['ads'=>$ads])
                            @endcomponent
					</div>
                </div>
            </div>
        </div>

    </div>
@endsection