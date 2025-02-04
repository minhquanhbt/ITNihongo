<div class="banner-area banner-inner-1 bg-black" id="banner">
    <!-- banner area start -->
    <div class="banner-inner pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="thumb after-left-top">
                        <img style="width: 100%" src="{{$bannerPost[0]->main_img_path}}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="banner-details mt-4 mt-lg-0">
                        <div class="post-meta-single">
                            <ul>
                                <li><a class="tag-base tag-red" href="#">Hot</a></li>
                                <li class="date"><i class="fa fa-clock-o"></i>{{$bannerPost[0]->getCreatedAttribute()}}
                                </li>
                            </ul>
                        </div>
                        <h2>{{$bannerPost[0]->title}}</h2>
                        <div class="row">
                            <div class="col text-truncate" style="max-height: 120px;">
                                {!!$bannerPost[0]->content!!}
                            </div>
                        </div>

                        <a class="btn btn-blue" href="{{route('sharing.single-post',['id'=> $bannerPost[0]->id])}}">Read
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-post-wrap style-white">
                    <div class="thumb">
                        <img src="{{asset('nextpage-lite/assets/img/post/1.png')}}" alt="img">
                        <a class="tag-base tag-blue" href="#">Tech</a>
                    </div>
                    <div class="details">
                        <h6 class="title"><a href="#">The FAA will test drone detecting technologies in airports this
                                year</a></h6>
                        <div class="post-meta-single mt-3">
                            <ul>
                                <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-post-wrap style-white">
                    <div class="thumb">
                        <img src="{{asset('nextpage-lite/assets/img/post/2.png')}}" alt="img">
                        <a class="tag-base tag-orange" href="#">Food</a>
                    </div>
                    <div class="details">
                        <h6 class="title"><a href="#">Rocket Lab will resume launches no sooner than August 27th</a>
                        </h6>
                        <div class="post-meta-single mt-3">
                            <ul>
                                <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-post-wrap style-white">
                    <div class="thumb">
                        <img src="{{asset('nextpage-lite/assets/img/post/3.png')}}" alt="img">
                        <a class="tag-base tag-blue" href="#">Tech</a>
                    </div>
                    <div class="details">
                        <h6 class="title"><a href="#">Google Drive flaw may attackers fool you into install malware</a>
                        </h6>
                        <div class="post-meta-single mt-3">
                            <ul>
                                <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-post-wrap style-white">
                    <div class="thumb">
                        <img src="{{asset('nextpage-lite/assets/img/post/4.png')}}" alt="img">
                        <a class="tag-base tag-orange" href="#">Food</a>
                    </div>
                    <div class="details">
                        <h6 class="title"><a href="#">TikTok will sue the US over threatened ban</a></h6>
                        <div class="post-meta-single mt-3">
                            <ul>
                                <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
