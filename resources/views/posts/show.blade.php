<x-guest-layout>
    
  <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{asset('images/' . $post->image)}}');">
    <div class="container">
      <div class="row same-height justify-content-center">
        <div class="col-md-6">
          <div class="post-entry text-center">
            <h1 class="mb-4">{{$post->title}}</h1>
           
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section">
    <div class="container">

      <div class="row blog-entries element-animate">

        <div class="col-md-12 col-lg-8 main-content">

          <div class="post-content-body">
            {{$post->content}}
          </div>


          <div class="pt-5">
            <p>Categories:  <a href="#">{{$post->category->name}}</a></p>
          </div>


         

        </div>

        <!-- END main-content -->

        <div class="col-md-12 col-lg-4 sidebar">
          <div class="sidebar-box search-form-wrap">
            <form action="#" class="sidebar-search-form">
              <span class="bi-search"></span>
              <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
            </form>
          </div>
          <!-- END sidebar-box -->
         
          <!-- END sidebar-box -->  
          <div class="sidebar-box">
            <h3 class="heading">Related Posts</h3>
            <div class="post-entry-sidebar">
              <ul>
                @foreach ($relatePosts as $post)
                <li>
                  <a href="{{route('posts.show',$post->id)}}">
                    <img src="{{asset('images/' . $post->image)}}" alt="Image placeholder" class="me-4 rounded" width="90px" height="90px" style="object-fit: :cover">
                    <div class="text">
                      <h4>{{$post->title}}</h4>
                      <div class="post-meta">
                        <span class="mr-2">{{$post->created_at}}</span>
                      </div>
                    </div>
                  </a>
                </li>
                    
                @endforeach
               
              </ul>
            </div>
          </div>
          <!-- END sidebar-box -->

         
        <!-- END sidebar -->

      </div>
    </div>
  </section>


  <!-- Start posts-entry -->
  <section class="section posts-entry posts-entry-sm bg-light">
    <div class="container">
      <div class="row mb-4">
        <div class="col-12 text-uppercase text-black">More Blog Posts</div>
      </div>
      <div class="row">
        @foreach ($otherPosts as $post)
        <div class="col-md-6 col-lg-3">
          <div class="blog-entry">
            <a href="{{route('posts.show',$post->id)}}" class="">
              <img src="{{asset('images/' . $post->image)}}" alt="Image" style="width:100%;height:192px;object-fit:cover;border-radius:10px">
            </a>
            <span class="date">{{$post->created_at}}</span>
            <h2><a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a></h2>
            <p>{{$post->abstract}}</p>
            <p><a href="{{route('posts.show',$post->id)}}" class="read-more">Continue Reading</a></p>
          </div>
        </div>
            
        @endforeach
       
      </div>
    </div>
  </section>
  <!-- End posts-entry -->
</x-guest-layout>