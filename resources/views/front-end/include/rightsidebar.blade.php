<div class="RightSideBr">
    <h1>News</h1>
    <div class="clearfix"></div>
	
	
	 
	<div class="setPos">
    @forelse($news as $new)
	<div class="news-mar-bot">
		<div class="new-img"><img src="{{asset($new->thumbnail)}}" class="img-responsive" alt="right-side-img"></div>
	<div class="even-text">
		<a href="{{route('news.list',['id'=>$new->id])}}">{{\Illuminate\Support\Str::words($new->news_heading,7,'')}} </a>
	</div>
	</div>
	<div class="clearfix"></div>
	@empty
        No News Found
    @endforelse
		<div class="seebtn"><a href="{{route('news')}}">see more</a></div>
   </div>
    
		
<div class="clearfix"></div>

<div class="event">
    <h1>Events</h1>
    <div class="clearfix"></div>
<div class="setPos">
    @forelse($events as $event)
	<div class="news-mar-bot">
	<div class="new-img"><img src="{{asset($event->thumbnail)}}" class="img-responsive" alt="right-side-img"></div>
    <div class="even-text">
		<a href="{{route('news.list',['id'=>$event->id])}}">{{\Illuminate\Support\Str::words($event->news_heading,7,'')}}</a>
	</div>
    
	</div>
	 @empty
        No Events Found
    @endforelse
		<div class="clearfix"></div>
		<span class="seebtn"><a href="{{route('news')}}">see more</a></span>
	</div>
	</div>
 
   
</div>