<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
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
            </div><!-- end col -->

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
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
            </div><!-- end col -->

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
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
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <br>
                <div class="copyright">&copy; Markedia. Design: <a href="http://html.design">HTML Design</a>.</div>
            </div>
        </div>
    </div><!-- end container -->
</footer><!-- end footer -->
