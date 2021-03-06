@extends('layouts.master')
@section('title','Dakmark foods - Post') 
@section('content')

    <!-- Head Section -->
    <section class="small-section pt-60 pb-20 bg-gray-lighter">
        <div class="relative container align-left">
            <div class="row">
                <div class="col-md-8">
                @if(!empty($search_key))
                    <h1 class="hs-line-11 mb-20 mb-xs-0">@lang('common.search-results')</h1>
                    @if(count($posts)==0)
                        <div class="hs-line-4 black">
                            @lang('common.zero-search-message')&nbsp;{{$search_key}}
                        </div>
                    @endif
                    @else
                    <h1 class="hs-line-11 mb-20 mb-xs-0">{{$category->translation->name??$category->name??__('header.blogs')}}</h1>
                @endif
                </div>
            </div>
        </div>
    </section>
    <!-- End Head Section -->

    <!-- Blog Section -->

    <section class="small-section postlist">
        <div class="container relative">
            <div class="row">

                <!-- Blog Content -->
                <div class="col-md-9 col-sm-8 col-xs-12 mb-30">
                    <!-- Post -->
                    @foreach($posts as $post)
                    <div class="blog-item">
                        <!-- Post Title -->
                        <h2 class="blog-item-title"><a href="{{url('/')}}/posts/{{$post->slug}}">{{$post->translation->title??$post->title}}</a></h2>
                        <!-- Author, Categories, Comments -->
                        <div class="blog-item-data">
                            <a href="#"><i class="fa fa-clock-o"></i> {{ date('d-m-Y', strtotime($post->created_at)) }}</a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-user"></i> {{$post->author->last_name}} {{$post->author->first_name}}</a>
                            <span class="separator">&nbsp;</span>
                            <i class="fa fa-folder-open"></i>
                            {{ $post->category->name }}
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-comments"></i> {{count($post->comments)}} {{ __('blog.comment') }}</a>
                        </div>
                        <!-- Media Gallery -->
                        <div class="blog-media">
                            <img src="{{asset('/storage/images/blog/')}}/{{$post->img}}" alt="{{$post->translation->title??$post->title}}">
                        </div>
                        <!-- Text Intro -->
                        <div class="blog-item-body">
                            <p>
                                {{$post->translation->excerpt??''}}
                            </p>
                        </div>
                        <!-- Read More Link -->
                        <div class="blog-item-foot">
                            <a href="{{url('/')}}/posts/{{$post->slug}}" class="btn btn-mod btn-round  btn-small">@lang('common.read-more') <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Post -->
                    @endforeach

                    {{ $posts->links() }}
                </div>
                <!-- End Blog Content -->

                <!-- Blog Sidebar -->
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="widget">
                        {!! Form::open(array('url' => '/search', 'class' => 'form-inline form')) !!}
                        <div class="search-wrap">
                            <button class="search-button animate" type="submit" title="@lang('header.search')">
                                <i class="fa fa-search"></i>
                            </button>
                            <input type="hidden" name="searchtype" value="blog">
                            <input type="text" class="form-control search-field" id="s" name="key" placeholder="@lang('header.enter-keyword')">
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="widget cats">
                        <h5 class="widget-title">@lang('common.categories')</h5>
                        <div class="widget-body">
                            <ul class="clearlist widget-menu">
                                @foreach($categories as $cat)
                                    <li>
                                        <a href="{{url('/blog')}}/{{$cat->slug}}" title="">
                                            <i class="fa fa-circle-thin" aria-hidden="true"></i>  {{$cat->translation->name??$cat->name}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- Widget -->
                    <div class="widget">
                        <h5 class="widget-title">@lang('blog.last-posts')</h5>
                        <div class="widget-body">
                            <ul class="clearlist widget-posts">
                                @foreach($lastPosts as $recentpost)
                                    <li class="clearfix">
                                        <a href="{{url('/posts')}}/{{$recentpost->slug}}"><img src="{{ asset('images/blog/' . $recentpost->img) }}" alt="" class="widget-posts-img" /></a>
                                        <div class="widget-posts-descr">
                                            <a href="{{url('/posts')}}/{{$recentpost->slug}}" title="">{{$recentpost->translation->title??$recentpost->title}}</a>{{$recentpost->author->first_name}}&nbsp;|&nbsp;{{ date('d-m-Y', strtotime($recentpost->created_at)) }}
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- End Widget -->

                </div>
                <!-- End Blog Sidebar -->

            </div>
        </div>
    </section>


    <!-- End Blog Section -->
@endsection
@section('scripts')
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=59f8733056502d001224650a&product=sticky-share-buttons"></script>
@endsection