<aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
    <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
        <div class="section-bar clearfix">
            <div class="section-title">
                <span>Phim hot</span>
            </div>
        </div>
        <section class="tab-content">
            <div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
                <div class="halim-ajax-popular-post-loading hidden"></div>
                <div id="halim-ajax-popular-post" class="popular-post">
                    @foreach ($phimhot_sidebar as $key => $phim)
                        <div class="item post-37176">
                            <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                <div class="item-link">
                                    <img src="{{ asset('uploads/movie/' . $phim->image) }}" class="lazy post-thumb"
                                        alt="{{ $phim->title }}" />
                                    <span class="is_trailer">
                                        @if ($phim->resolution == 0)
                                            HD
                                        @elseif ($phim->resolution == 1)
                                            SD
                                        @elseif ($phim->resolution == 2)
                                            HDCam
                                        @elseif ($phim->resolution == 3)
                                            CAM
                                        @elseif ($phim->resolution == 4)
                                            FullHD
                                        @elseif ($phim->resolution == 5)
                                            Trailer
                                        @endif
                                    </span>
                                </div>
                                <p class="title">{{ $phim->title }}</p>
                            </a>
                            <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                            <div style="float: left;">
                                <span class="user-rate-image post-large-rate stars-large-vang"
                                    style="display: block;/* width: 100%; */">
                                    <span style="width: 0%"></span>
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
    </div>
    <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
        <div class="section-bar clearfix">
            <div class="section-title">
                <span>Top Views</span>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link filter-sidebar" data-toggle="pill" href="#ngay" role="tab"
                            aria-controls="pills-home" aria-selected="true">Ngày</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link filter-sidebar" data-toggle="pill" href="#thang" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Tháng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link filter-sidebar" data-toggle="pill" href="#nam" role="tab"
                            aria-controls="pills-contact" aria-selected="false">Năm</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade active in" id="ngay" role="tabpanel">
                <span id="show-0"></span>
            </div>
            <div class="tab-pane fade" id="thang" role="tabpanel">
                <span id="show-1"></span>
            </div>
            <div class="tab-pane fade" id="nam" role="tabpanel">
                <span id="show-2"></span>
            </div>
        </div>
        {{-- <section class="tab-content">
            <div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
                <div class="halim-ajax-popular-post-loading hidden">
                </div>
            </div>
        </section> --}}
        <div class="clearfix"></div>
    </div>

    <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
        <div class="section-bar clearfix">
            <div class="section-title">
                <span>Phim sắp chiếu</span>
            </div>
        </div>
        <section class="tab-content">
            <div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
                <div class="halim-ajax-popular-post-loading hidden"></div>
                <div id="halim-ajax-popular-post" class="popular-post">
                    @foreach ($phimhot_trailer as $key => $phim)
                        <div class="item post-37176">
                            <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                <div class="item-link">
                                    <img src="{{ asset('uploads/movie/' . $phim->image) }}" class="lazy post-thumb"
                                        alt="{{ $phim->title }}" />
                                    <span class="is_trailer">
                                        @if ($phim->resolution == 0)
                                            HD
                                        @elseif ($phim->resolution == 1)
                                            SD
                                        @elseif ($phim->resolution == 2)
                                            HDCam
                                        @elseif ($phim->resolution == 3)
                                            CAM
                                        @elseif ($phim->resolution == 4)
                                            FullHD
                                        @elseif ($phim->resolution == 5)
                                            Trailer
                                        @endif
                                    </span>
                                </div>
                                <p class="title">{{ $phim->title }}</p>
                            </a>
                            <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                            <div style="float: left;">
                                <span class="user-rate-image post-large-rate stars-large-vang"
                                    style="display: block;/* width: 100%; */">
                                    <span style="width: 0%"></span>
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
    </div>
</aside>
