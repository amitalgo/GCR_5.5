@extends('front-end.layouts.frontLayout')
@section('banner-image',asset($banner->getImage()))

@section('content')


    <div class="container-fluid" style=" padding-right: 0px;  padding-left:0px;">
	 <div class="container">
        <div class="col-md-10 col-sm-10 col-pdn col-xs-12">
		  <div class="col-md-12 col-sm-12 col-xs-12">
            {!! $content->getDescription() !!}
			</div>
        </div>
		<div class="col-md-2 col-md-12 hidden-sm hidden-xs">
            @component('front-end.component.ads',['ads'=>$ads])
                @endcomponent
		</div>
       {{--<div class="col-md-2 col-pdn col-md-12 hidden-sm hidden-xs">--}}
		{{--<div class="Maxhegt">--}}
			{{--<div class="qlinks">--}}
				{{--<h3>Quick links</h3>--}}
			{{--</div>--}}
			{{--<div id="boxscroll">--}}
            {{--@foreach($quickDownloadLinks as $quickDownloadLink)--}}
			{{----}}
            {{--<div class="col-md-12">--}}
			{{--<div class="pdf">--}}
				{{--<div class="col-md-3 col-pdn">--}}
					{{--<i class="{{$quickDownloadLink->getQuickLink()->getFileThumbNail()}}" aria-hidden="true"></i>--}}
                {{--</div>--}}
				{{--<div class="col-md-9 col-pdn">--}}
                    {{--<h4><a href="{{asset($quickDownloadLink->getQuickLink()->getMediaUrl())}}" target="_blank">{{$quickDownloadLink->getQuickLink()->getTitle()}}</a></h4>--}}
                {{--</div>--}}
			{{--</div>--}}
                {{----}}
                {{----}}
            {{--</div>--}}
            {{--@endforeach--}}
			{{--</div>--}}
        {{--</div>--}}
		{{--</div>--}}
    </div>
	  </div>
@endsection