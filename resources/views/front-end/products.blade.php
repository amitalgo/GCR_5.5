@extends('front-end.layouts.frontLayout')
@section('banner-image',asset($banner['banner']))
@section('content')
    <div class="container">
	<!--<div class="flt">-->
	<!--	<h2>Products</h2>-->
	<!--<hr>-->
	<!--</div>-->
	<div class="row">
		<div class="col-md-2 col-sm-2 col-xs-12"></div>
	<div class="col-md-8 col-sm-3 col-xs-12">
	<div class="brdCum">
					<ul>
						<li><a href="{{route('home')}}">Home</a>/</li>
						<li><a href="{{isset($solutionId)&&null!=$solutionId?route('solution.index',['id'=>$solutionId]):route('solution.show',['id'=>$tagId])}}">Solutions</a>/</li>
						<li> Products</li>
					</ul>
				</div></div>
	<div class="col-md-2 col-sm-2 col-xs-12"></div>
	</div>
	
        <div class="">
        	<div class="col-md-2 col-sm-3 col-md-12">
        		@if(!$producttags->isEmpty())
				<form class="form-horizontal" role="form" id="filterForm" action="{{route('solution.filterproducts',['id'=>$id])}}" method="POST">
					{{ csrf_field() }}
					<div class="leftDrop">
						<h3>Refine by</h3>
						<div class="pdn">						
							<h4>Product</h4>
							@foreach($producttags as $producttag)
								<div class="checkbox">
						          <label>
						            <input type="checkbox" value="{{$producttag->getId()}}" name="product-filter[]" {{isset($selectedTags)&&in_array($producttag->getId(), $selectedTags)?'checked':''}}>
										<span class="cr"><i class="cr-icon fa fa-check" aria-hidden="true"></i></span>
										{{$producttag->getTagName()}}
									</label>
						        </div>
							@endforeach
						</div>
					</div>
					<div class="filtr-btn">
						<button type="submit" class="btn btn-sm btn-primary pull-right">Search</button>
					</div>
				</form>
				@endif
			</div>
			<div class="col-md-8 col-sm-8 col-md-12">
				@if($scenarioProducts)
				    <div class="row">
				        <div class="col-md-12"><h4>{{$scenarioProducts[0]->getScenarioId()->getName()}}</h4></div>
				    </div>

					@foreach($scenarioProducts as $scenarioProduct)
					<div class="row Products">
							<div class="col-md-4 col-sm-4 col-md-12">
								<div class="Products scroller">
							@forelse($scenarioProduct->getProductId()->getProductAttachment() as $attachment)
								<li>
								<a href="{{$attachment->getScenarioImg()}}" data-title="{{$scenarioProduct->getProductId()->getName()}}" >
									<img src="{{$attachment->getScenarioImg()}}" class="img-responsive" alt="{{$attachment->getType()}}">
								</a>
								</li>
							@empty
							@endforelse
						</div>
					</div>
							<div class="col-md-8 col-sm-8 col-md-12">
								<h1>{{$scenarioProduct->getProductId()->getName()}}</h1>
								<h2>By {{$scenarioProduct->getProductId()->getVender()}}</h2>
								<p>{!! \Illuminate\Support\Str::words($scenarioProduct->getProductId()->getDescription(), 40,' ...')!!}... <a style="cursor: pointer;" type="button" class="more-btn" data-attr="{{$scenarioProduct->getProductId()->getDescription()}}">more</a> </p>
								<div>
									<button type="button" class="btn btn-primary inquire-btn" data-pid="{{$scenarioProduct->getProductId()->getId()}}">Inquire Now</button>
								</div>
							</div>
								<hr>
						</div>
						
					@endforeach
				@else
					<div class="row">
						<p>No products found..</p>
					</div>
				@endif
			</div>
			<div class="col-md-2 col-md-12 hidden-sm hidden-xs">
                        @component('front-end.component.ads',['ads'=>$ads])
                            @endcomponent
					</div>
		</div>





	</div>
@endsection