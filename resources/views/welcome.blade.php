<x-guest-layout>
    	

	<!-- Start posts-entry -->
	<section class="section posts-entry">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Travel</h2>
				</div>
				<div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
			</div>
			<div class="row g-3">
				<div class="col-md-12">
					<div class="row g-3">
						@foreach ($travels as $post)
						<div class="col-md-4">
							<div class="blog-entry">
								<a href="{{route('posts.show',$post->id)}}" class="">
									<img src="{{ asset('images/' . $post->image) }}"  alt="Image" style="width:100%;height:476px;border-radius:10px;object-fit:cover">
								</a>
								<span class="date">{{$post->created_at}}</span>
								<h2><a href="{{ route('posts.edit', $post->id) }}">{{$post->title}}</a></h2>
								<p>{{$post->abstract}}</p>
								<p><a href="{{route('posts.show',$post->id)}}" class="btn btn-sm btn-outline-primary">Read More</a></p>
							</div>
						</div>
						@endforeach
						
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End posts-entry -->

	<!-- Start posts-entry -->
	<section class="section posts-entry posts-entry-sm bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="images/img_1_horizontal.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="images/img_2_horizontal.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="images/img_3_horizontal.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">UK sees highest inflation in 30 years</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="images/img_4_horizontal.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">Don’t assume your user data in the cloud is safe</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End posts-entry -->

	<!-- Start posts-entry -->
	<section class="section posts-entry">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Culture</h2>
				</div>
				<div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
			</div>
			<div class="row g-3">
				<div class="col-md-12 order-md-2">
					<div class="row g-3">
						@foreach ($culture as $post)
						<div class="col-md-6">
							<div class="blog-entry">
								<a href="{{route('posts.show',$post->id)}}" class="">
									<img src="{{asset('images/' . $post->image)}}" alt="Image" style="width:100%;height:476px;border-radius:10px;object-fit:cover">
								</a>
								<span class="date">{{$post->created_at}}</span>
								<h2><a href="{{ route('posts.edit', $post->id) }}">{{$post->title}}</a></h2>
								<p>{{$post->abstract}}</p>
								<p><a href="{{route('posts.show',$post->id)}}" class="btn btn-sm btn-outline-primary">Read More</a></p>
							</div>
						</div>
							
						@endforeach
						
					</div>
				</div>
				{{-- <div class="col-md-3">
					<ul class="list-unstyled blog-entry-sm">
						<li>
							<span class="date">Apr. 14th, 2022</span>
							<h3><a href="single.html">Don’t assume your user data in the cloud is safe</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</li>

						<li>
							<span class="date">Apr. 14th, 2022</span>
							<h3><a href="single.html">Meta unveils fees on metaverse sales</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</li>

						<li>
							<span class="date">Apr. 14th, 2022</span>
							<h3><a href="single.html">UK sees highest inflation in 30 years</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</li>
					</ul>
				</div> --}}
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">

			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Politics</h2>
				</div>
				<div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
			</div>

			<div class="row">
				@foreach ($politics as $post)
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="{{route('posts.show',$post->id)}}" class=""><img src="{{asset('images/'.$post->image)}}" alt="Image" style="width:100%;height:261px;border-radius:10px;object-fit:cover"></a>
						<div class="excerpt mt-4">
							<h2><a href="{{ route('posts.edit', $post->id) }}">{{$post->title}}</a></h2>
							

							<p>{{$post->abstract}}</p>
							<p><a href="{{route('posts.show',$post->id)}}" class="read-more">Continue Reading</a></p>
						</div>
					</div>
				</div>
					
				@endforeach
			
			</div>
			
		</div>
	</section>

	<!-- Start retroy layout blog posts -->
	<section class="section bg-light">
		<div class="container">
			<h2 class="posts-entry-title">All Posts</h2>
			<div class="row align-items-stretch retro-layout">
				@foreach ($posts as $post)
				<div class="col-md-4">
					<a href="{{route('posts.show',$post->id)}}" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url('{{ asset('images/' . $post->image) }}');"></div>

						<div class="text">
							<span class="date">{{$post->created_at}}</span>
							<h2>{{$post->title}}</h2>
						</div>
					</a>
					
				</div>
			
				@endforeach
			
				
			</div>
		</div>
	</section>
	<!-- End retroy layout blog posts -->
</x-guest-layout>