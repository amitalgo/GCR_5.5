@extends('front-end.layouts.frontLayout')

@section('banner-image',asset($banner->getImage()))

    @section('content')
        <style>.overlay p{color:#fff!important}</style>

        <section class="secMrgTop">
            <div class="feature" style="padding:10px 0;">
                <div class="container">
                    <div class="col-md-2 col-md-12 hidden-sm hidden-xs">
						<img src="{{asset('images/front-images/fb-plugin.jpg')}}" class="img-responsive" alt="socail-vsit">
					</div>
					<div class="col-md-8 col-md-12 col-pdn">
						<div class="flt">
						<h2>GCR Eco System</h2>
							<hr>
						</div>	
						<div class="flt">
                            <p>{!! $content->getDescription() !!}</p>
                        </div>
						
						<div class="grid">
                    <div class="text-center">
					
					<div class="bx-wrapper">
                    <div style=" float: left; margin-right: 10px;"> 
						<img src="{{asset('images/front-images/vart-text.png')}}" class="img-responsive solumobhide" alt="socail-vsit">
					</div>
					<div class="owl-carousel owl-theme">
                        @forelse($solutions as $solution)
                                <div class="item">
                                 <div class="fortSolut" >
                                <div class="hi-icon-wrap hi-icon-effect wow" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <a href="{{route('solution.index',['solutionId'=>$solution->getId()])}}" >
                                    <figure class="effect-zoe toggler">
                                    @php $images =  json_decode($solution->getVerticalImages()->getImage(),true);@endphp
                                    <img src="{{asset($images['tiles'])}}" class="img-responsive" alt="vertical tiles">
                                    <figcaption>
                                    <h2>{{$solution->getName()}}</h2>
                                    {{--<p>{!! \Illuminate\Support\Str::words($solution->getDescription(),10,'...') !!}</p>--}}
                                </figcaption>   
                            </figure>
                                    </a>
                          </div>
                         </div>
                     </div>
                     @empty
                     @endforelse  
                    </div>
					</div>
					</div>
				 <div class="clearfix"></div>
				 <div class="og-expander">
					<div class="row">
					<a title="Close" class="fancybox-item closebtn fancybox-close" href="javascript:;">X</a>
						<div class="col-md-12 col-sm-12 col-xs-12 ">
						<p><a href="#">Content</a></p>
						</div>
					</div>
				 </div>
				</div>
					</div>
					<div class="col-md-2 col-md-12 hidden-sm hidden-xs">
                        @component('front-end.component.ads',['ads'=>$ads])
                            @endcomponent
					</div>
            </div>
</div>



        </section>



        <div class="about">
            <div class="container">
                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">

<div id="example" class="video">
<h2>Our Videos</h2><hr/>
  <carousel-3d :controls-visible="true" :controls-prev-html="'&#10092;'" :controls-next-html="'&#10093;'" 
               controls-width="30" :controls-height="60" :clickable="false">
			   @forelse($videos as $key=>$video)
				<slide :index="{{$key}}">
				  <figure>
					<iframe width="100%" height="270" src="  {!! $video->getMediaUrl() !!}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				  </figure>
			   </slide>
			   @empty-
			   @endforelse
  </carousel-3d>

               
	</div>			
						
					
					
					
				
<!------ Video Code---------->


                </div>

            </div>
        </div>
<div class="clearfix"></div>
        <div class="lates">
		<div class="container">
            <div class="col-md-2 col-xs-12"></div>
			<div class="col-md-8 col-xs-12">
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
			<div class="testMonil">
                    <h1>Customer Testimonial <br/><hr/></h1>
                    <div class="clearfix"></div>
                    <div id="myCarousel" class="carousel slide " data-ride="carousel">

                        <div class="carousel-inner">
                            @forelse($testimonials as $key=>$testimonial)
                            <div class="item testi {{$key==0?'active':''}}">
                                <div class="tesHeg">
                                    <p>{!! $testimonial->getTestimonial() !!}</p>
                                    <div class="arrow-down"></div>
                                </div>
                                <div class="profile-circle">
                                    <img src="{{asset($testimonial->getImage())}}" alt="client-img">
                                    <h3>{{$testimonial->getName()}}</h3>
                                    <p>{{$testimonial->getDesignation()}}</p>
                                </div>

                            </div>
                            @empty
                            @endforelse
                        </div>
                        <!--<div class="carousel-inner">
                           <div class="test"></div>
                            <div class="item active">

                                <img src="http://placehold.it/760x400/cccccc/ffffff">
                                <div class="carousel-caption">
                                <h4><a href="#">Lorem ipsum dolor sit amet consetetur sadipscing</a></h4>


                                </div>
                            </div>

                            <div class="item">
                                <img src="http://placehold.it/760x400/999999/cccccc">
                                <div class="carousel-caption">
                                <h4><a href="#">consetetur sadipscing elitr, sed diam nonumy eirmod</a></h4>

                                </div>
                            </div>

                            <div class="item">

                                <img src="http://placehold.it/760x400/dddddd/333333">
                                <div class="carousel-caption">
                                <h4><a href="#">tempor invidunt ut labore et dolore</a></h4>

                                </div>

                            </div>

                           </div>-->

                        <!--<ul class="list-group col-md-3 carousel-indicators">

                             <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                             <li data-target="#myCarousel" data-slide-to="1" ></li>
                             <li data-target="#myCarousel" data-slide-to="2" ></li>

                     </ul>-->
                    </div>
                </div>
               </div>
			   
			   <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
			   <div class="testMonil">
				<h1>Let’s Get Social<br/><hr/></h1>
					
                    <div class="clearfix"></div>
                    <img src="{{asset('images/front-images/socail-vsit.jpg')}}" class="img-responsive" alt="socail-vsit">
			   </div>
			   </div>
			</div>
			<div class="col-md-2 col-xs-12"></div>
			</div>
        </div>
<div class="clearfix"></div>
        <section id="partner">
            <div class="container">
                <div class="wow fadeInDown">
                    <h2>Our Platform Ecosystem Partners</h2>
					<hr/ style=" width:100px;">
                    <p>(Explore the information below to learn more)</p>
                </div>

             <div class="">
			 <div id="demo5" class="scroll-img">
      <ul>
	   @forelse($partners as $partner)
        <li><a href="#" ><img class=""  src="{{asset($partner->getLogo())}}"></a></li>
        @empty
        @endforelse
      </ul>
    </div>
			 
			 <!--<div class="center slider">
			 @forelse($partners as $partner)
				<div>
					<img class="img-responsive wow"  src="{{asset($partner->getLogo())}}">
				</div>
				@empty
                        @endforelse
			 </div>
			 
                    <div class="nbs-flexisel-container-one">
                            <div class="nbs-flexisel-inner-one" style="width:100%;">
                                <ul id="flexiselDemo7" class="nbs-flexisel-ul" style="display: block; left: -219.6px;">
                                    @forelse($partners as $partner)
                        <li><a href="#"><img class="img-responsive wow"  src="{{asset($partner->getLogo())}}"></a></li>
                            @empty
                        @endforelse
                                </ul>
                            </div>

                        </div>-->
                </div>
                
                
                
                
                
            </div>
            
            
            
        </section>
        
        
       
  
</div>
        <!--/#partner-->
        @endsection