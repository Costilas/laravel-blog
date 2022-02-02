<div class="sidebar">
    @if(!Request::is('/'))
        <div class="widget-no-style">
            <div class="newsletter-widget text-center align-self-center">
                <h3>Subscribe Today!</h3>
                <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                <form class="form-inline" method="post">
                    <input type="text" name="email" placeholder="Add your email here.." required class="form-control" />
                    <input type="submit" value="Subscribe" class="btn btn-default btn-block" />
                </form>
            </div><!-- end newsletter -->
        </div>
    @endif
    <div class="widget">
        <h2 class="widget-title">Recent Posts</h2>
        <div class="blog-list-widget">
            <div class="list-group">
                @foreach($recentPosts as $recentPost)
                    <a href="{{route('posts.single', ['slug' => $recentPost->slug])}}"
                       class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 justify-content-between">
                            <img src="{{$recentPost->getImage()}}" alt=""
                                 class="img-fluid float-left">
                            <h5 class="mb-1">{{$recentPost->title}} </h5>
                            <small>{{$recentPost->getPostDate()}} |</small>
                            <small><i class="fa fa-eye"></i>{{$recentPost->views}}</small>
                        </div>
                    </a>
                @endforeach
            </div>
        </div><!-- end blog-list -->
    </div><!-- end widget -->

    <div class="widget">
        <h2 class="widget-title">Popular Posts</h2>
        <div class="blog-list-widget">
            <div class="list-group">
                @foreach($popularPosts as $popularPost)
                    <a href="{{route('posts.single', ['slug' => $popularPost->slug])}}"
                       class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 justify-content-between">
                            <img src="{{$popularPost->getImage()}}" alt=""
                                 class="img-fluid float-left">
                            <h5 class="mb-1">{{$popularPost->title}} </h5>
                            <small>{{$popularPost->getPostDate()}} |</small>
                            <small><i class="fa fa-eye"></i>{{$popularPost->views}}</small>
                        </div>
                    </a>
                @endforeach
            </div>
        </div><!-- end blog-list -->
    </div><!-- end widget -->

    <div class="widget">
        <h2 class="widget-title">Popular Categories</h2>
        <div class="link-widget">
            <ul>
                @foreach($categoryList as $category)
                    @if($category->posts_count)
                        <li><a href="{{route('categories.single', ['slug' => $category->slug])}}">{{$category->title}} <span>({{$category->posts_count}})</span></a></li>
                    @endif
                @endforeach
            </ul>
        </div><!-- end link-widget -->
    </div><!-- end widget -->
</div><!-- end sidebar -->
