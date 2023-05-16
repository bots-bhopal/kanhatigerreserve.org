<style>
    .counter {
        display: inline-block;
        padding: 6px 6px 4px;
        border-radius: 3px;
        background: var(--construction-color);
        color: #fff;
        font-size: 20px;
        font-weight: 700;
        margin-right: -2px;
        box-shadow: 1px 1px 5px 1px #555555aa;
    }

    .visitor-name{
        border-radius: 5px;
        text-align: center;
        font-size: 20px;
        font-weight: 600;
        box-shadow: 1px 2px 2px 1px #9999;
    }
    
    .documentary {
        font-size: 22px;
        font-weight: 900;
        color: #f67307;
    }

    .documentary-title {
        font-size: 20px;
        font-weight: 900;
        color: #065e2e;
    }

    .documentary-span-title {
        color: #000;
    }

    :root {
        --minimum-width: 300px;
        --ratio: 16/9;
    }

    .image-box img {
        background: rgba(163, 163, 163, 0.10);
        border-radius: 16px;
        backdrop-filter: blur(2.7px);
        -webkit-backdrop-filter: blur(2.7px);
        border: 1px solid rgba(163, 163, 163, 0.17);
        aspect-ratio: var(--ratio);
        object-fit: contain;
        width: 100%;
    }
</style>

@php
    $home_page_variant = $home_page ?? get_static_option('home_page_variant');
@endphp
<div class="construction-support-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="support-inner">
                    <div class="left-content-wrap">
                        <img src="{{ asset('assets/uploads/kanha-logo.png') }}" alt="kanha-logo">
                    </div>
                    <div class="center-content-wrap pl-2 pr-2">
                        <img src="{{ asset('assets/uploads/kanha-banner.png') }}" alt="kanha-banner">
                    </div>
                    <div class="right-content-wrap">
                        <img src="{{ asset('assets/uploads/MPFD-Logo.png') }}" alt="MPFD-Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-style-03  header-variant-{{ $home_page_variant }}">
    <nav class="navbar navbar-area navbar-expand-lg">
        <div class="container nav-container">
            <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                <ul class="navbar-nav">
                    {!! render_frontend_menu($primary_menu) !!}
                </ul>
            </div>
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper" style="float: right; margin-right: -15px;">
                    {{-- <div class="dropdown" id="langchange">
                        @if (!empty(filter_static_option_value('language_select_option', $static_field_data)))
                        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @foreach ($all_language as $lang)
                                @if ($user_select_lang_slug == $lang->slug)
                                    {{ explode('(', $lang->name)[0] ?? $lang->name }}
                                @endif
                            @endforeach
                        </button>
                        
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach ($all_language as $lang)
                                <a class="dropdown-item" href="{{$lang->slug}}">{{ explode('(', $lang->name)[0] ?? $lang->name }}</a>
                            @endforeach
                        </div>
                        @endif
                    </div> --}}

                    <ul class="navbar-nav">
                        @if (!empty(filter_static_option_value('language_select_option', $static_field_data)))
                            <li>
                                <select id="langchange">
                                    @foreach ($all_language as $lang)
                                        <option @if ($user_select_lang_slug == $lang->slug) selected @endif
                                            value="{{ $lang->slug }}" class="lang-option">
                                            {{ explode('(', $lang->name)[0] ?? $lang->name }}</option>
                                    @endforeach
                                </select>
                            </li>
                        @endif
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
</div>

<div class="header-slider-wrapper">
    <div class="header-slider-one global-carousel-init" data-loop="true" data-desktopitem="1" data-mobileitem="1"
        data-tabletitem="1" data-nav="true" data-autoplay="true" data-margin="0">
        @foreach ($all_header_slider as $data)
            <div class="header-area style-04 header-bg-04" {!! render_background_image_markup_by_attachment_id($data->image) !!}>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="header-inner style-01">
                                @if (!empty($data->title))
                                    <h1 class="title">{{ $data->title }}</h1>
                                @endif
                                 @if (!empty($data->subtitle))
                                    <h4 class="sub-title">{{ $data->subtitle }}</h4>
                                @endif
                                @if (!empty($data->description))
                                    <p class="description">{{ $data->description }}</p>
                                @endif
                                <div class="header-bottom">
                                    @if (!empty($data->btn_01_status))
                                        <div class="btn-wrapper desktop-left">
                                            <a href="{{ $data->btn_01_url }}"
                                                class="boxed-btn">{{ $data->btn_01_text }}</a>
                                        </div>
                                    @endif
                                    @if (!empty($data->video_btn_status))
                                        <div class="vdo-btn-wrap">
                                            <a class="video-play mfp-iframe" href="{{ $data->video_btn_url }}">
                                                <i class="fas fa-play"></i>{{ $data->video_btn_text }}</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@if (!empty(filter_static_option_value('home_page_about_us_section_status', $static_field_data)))
    <div class="construction-about-area padding-top-100 padding-bottom-80">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title desktop-center margin-bottom-60 industry-home">
                    <h2 class="title">
                        {{ get_static_option('title_' . $user_select_lang_slug. '_title_text') }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pull-lg-6 my-auto mt-sm-30 mt-xs-30 text-center">
                    <h3 class="documentary">A Documentary On</h3>
                    <h3 class="documentary-title">Kanha  <span class="documentary-span-title">Tiger Reserve</span></h3>
                    <iframe width="100%" height="315" src="{{ get_static_option('gallery_video_section_video_url') }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>

                    {{-- <div class="shape">
                        <img src="{{ asset('assets/frontend/img/shape/12.png') }}" alt="">
                    </div>
                    <div class="construction-video-wrap">
                        {!! render_image_markup_by_attachment_id(get_static_option('gallery_video_section_background_image')) !!}
                        <a class="video-play mfp-iframe"
                            href="{{ get_static_option('gallery_video_section_video_url') }}"><i
                                class="fas fa-play"></i></a>
                    </div> --}}
                </div>

                <div class="col-lg-6">
                    <div class="right-content-area">
                        <div class="card" style="height: 520px!important;">
                            <div class="card-header text-dark"
                                style="background-color: #fff!important; font-size: 22px; font-weight: 700;">
                                <span class="glyphicon glyphicon-list-alt"></span>
                                <b>{{ get_static_option('announcement_board_title_' . $user_select_lang_slug. '_announcement_board_title_text') }}</b>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="demo1 text-left" style="height: 520px!important;">
                                            @forelse ($all_links as $links)
                                                <li class="news-item" style="padding: 4px 4px;">
                                                        @if ($links->url)
                                                            <img src="{{ asset('assets/frontend/img/www.png') }}"
                                                                width="30" class="img-circle" />
                                                            <a href="{{ $links->url }}" target="_blank"
                                                                style="color:#135e2a; font-weight: 800!important;">{{ $links->title }}</a>
                                                            @if ($links->expired_at > Carbon\Carbon::now()->toDateTimeString())
                                                                <img src="{{ asset('assets/frontend/img/new.gif') }}"
                                                                    class="img-circle" />
                                                            @endif
                                                        @endif

                                                        @if ($links->file_extension == 'pdf')
                                                            <img src="{{ asset('assets/frontend/img/pdf.png') }}"
                                                                width="30" class="img-circle" />
                                                            <a href="{{ route('user.download', $links->original_filename) }}"
                                                                target="_blank"
                                                                style="color:#135e2a; font-weight: 800!important;">{{ $links->title }}</a>
                                                            @if ($links->expired_at > Carbon\Carbon::now()->toDateTimeString())
                                                                <img src="{{ asset('assets/frontend/img/new.gif') }}"
                                                                    class="img-circle" />
                                                            @endif
                                                        @endif

                                                        @if ($links->file_extension == 'doc' || $links->file_extension == 'docx')
                                                            <img src="{{ asset('assets/frontend/img/word.png') }}"
                                                                width="30" class="img-circle" />
                                                            <a href="{{ route('user.download', $links->original_filename) }}"
                                                                target="_blank"
                                                                style="color:#135e2a; font-weight: 800!important;">{{ $links->title }}</a>
                                                            @if ($links->expired_at > Carbon\Carbon::now()->toDateTimeString())
                                                                <img src="{{ asset('assets/frontend/img/new.gif') }}"
                                                                    class="img-circle" />
                                                            @endif
                                                        @endif

                                                        @if ($links->file_extension == 'xls' || $links->file_extension == 'xlsx')
                                                            <img src="{{ asset('assets/frontend/img/excel.png') }}"
                                                                width="30" class="img-circle" />
                                                            <a href="{{ route('user.download', $links->original_filename) }}"
                                                                target="_blank"
                                                                style="color:#135e2a; font-weight: 800!important;">{{ $links->title }}</a>
                                                            @if ($links->expired_at > Carbon\Carbon::now()->toDateTimeString())
                                                                <img src="{{ asset('assets/frontend/img/new.gif') }}"
                                                                    class="img-circle" />
                                                            @endif
                                                        @endif
                                                </li>
                                            @empty
                                                <li class="news-item" style="padding: 4px 4px 0 4px;">
                                                    <h4 style="font-weight: 800; text-align: center; color:red;">
                                                        {{ get_static_option('announcement_board_message_' . $user_select_lang_slug. '_announcement_board_message_text') }}
                                                    </h4>
                                                </li>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"
                                style="background-color: #fff!important; color: #343a40!important; font-weight: 600;">
                                <div class="btn-wrapper" style="display: inline!important;">
                                    <a href="{{ route('frontend.link') }}" class="industry-btn const-home-color">
                                        {{ get_static_option('announcement_board_button_title_' . $user_select_lang_slug. '_announcement_board_button_title_text') }}
                                        <i class="far fa-comment-alt"></i>
                                    </a>
                                </div>
                                {{-- <ul class="float-left">
                                    <li><a href="#" style="position: relative; top: 6px;">Show
                                            More.....</a>
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif


@if (!empty(filter_static_option_value('home_page_about_us_section_status', $static_field_data)))
    <div class="construction-about-area padding-top-0 padding-bottom-0">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title desktop-center margin-bottom-60 industry-home">
                    <h2 class="title">
                        {{ get_static_option('notice_title_' . $user_select_lang_slug. '_notice_title_text') }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-6">
                    <div class="left-content-area mb-5">
                        <div class="card" style="height: 520px!important;">
                            <div class="card-header text-dark"
                                style="background-color: #fff!important; font-size: 22px; font-weight: 700;">
                                <span class="glyphicon glyphicon-list-alt"></span>
                                <b>{{ get_static_option('notice_board_title_' . $user_select_lang_slug. '_notice_board_title_text') }}</b>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="demo1 text-left" style="height: 520px!important;">
                                        @forelse ($all_notices as $notice)
                                            <li class="news-item" style="padding: 4px 4px;">
                                                    @if ($notice->file_extension == 'pdf')
                                                        <img src="{{ asset('assets/frontend/img/pdf.png') }}"
                                                            width="30" class="img-circle" />
                                                        <a href="{{ route('user.notice.download', $notice->original_filename) }}"
                                                            target="_blank"
                                                            style="color:#135e2a; font-weight: 800!important;">{{ $notice->title }}</a>
                                                        @if ($notice->expired_at > Carbon\Carbon::now()->toDateTimeString())
                                                            <img src="{{ asset('assets/frontend/img/new.gif') }}"
                                                                class="img-circle" />
                                                        @endif
                                                    @endif

                                                    @if ($notice->file_extension == 'doc' || $notice->file_extension == 'docx')
                                                        <img src="{{ asset('assets/frontend/img/word.png') }}"
                                                            width="30" class="img-circle" />
                                                        <a href="{{ route('user.notice.download', $notice->original_filename) }}"
                                                            target="_blank"
                                                            style="color:#135e2a; font-weight: 800!important;">{{ $notice->title }}</a>
                                                        @if ($notice->expired_at > Carbon\Carbon::now()->toDateTimeString())
                                                            <img src="{{ asset('assets/frontend/img/new.gif') }}"
                                                                class="img-circle" />
                                                        @endif
                                                    @endif

                                                    @if ($notice->file_extension == 'xls' || $notice->file_extension == 'xlsx')
                                                        <img src="{{ asset('assets/frontend/img/excel.png') }}"
                                                            width="30" class="img-circle" />
                                                        <a href="{{ route('user.notice.download', $notice->original_filename) }}"
                                                            target="_blank"
                                                            style="color:#135e2a; font-weight: 800!important;">{{ $notice->title }}</a>
                                                        @if ($notice->expired_at > Carbon\Carbon::now()->toDateTimeString())
                                                            <img src="{{ asset('assets/frontend/img/new.gif') }}"
                                                                class="img-circle" />
                                                        @endif
                                                    @endif
                                            </li>
                                        @empty
                                            <li class="news-item" style="padding: 4px 4px 0 4px;">
                                                <h4 style="font-weight: 800; text-align: center; color:red;">
                                                    {{ get_static_option('notice_board_message_' . $user_select_lang_slug. '_notice_board_message_text') }}    
                                                </h4>
                                            </li>
                                        @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"
                                style="background-color: #fff!important; color: #343a40!important; font-weight: 600;">
                                <div class="btn-wrapper" style="display: inline!important;">
                                    <a href="{{ route('frontend.notice') }}" class="industry-btn const-home-color">
                                        {{ get_static_option('notice_board_button_title_' . $user_select_lang_slug. '_notice_board_button_title_text') }}    
                                        <i class="far fa-comment-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="col-lg-6">
                    <div class="left-content-area mb-5">
                        <div class="card border-0">
                            <div class="card-header text-dark"
                                style="background-color: #fff!important; font-size: 22px; font-weight: 700;">
                                <span class="glyphicon glyphicon-list-alt"></span>
                                <b>{{ get_static_option('notice_board_title_' . $user_select_lang_slug. '_notice_board_title_text') }}</b>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="text-justify">
                                            {!! get_static_option('notice_about_section_' . $user_select_lang_slug. '_description') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-wrapper" style="display: inline!important;">
                                <a href="{{ url('introduction') }}" class="industry-btn const-home-color">
                                    {{ get_static_option('notice_board_button_title_' . $user_select_lang_slug. '_notice_board_button_title_text') }}    
                                    <i class="far fa-comment-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>                

                <div class="col-lg-6">
                    <div class="right-content-area">
                        <div class="card border-0">
                            <div class="card-header text-dark text-center pl-0" style="background-color: #fff!important; font-size: 22px; font-weight: 700;">
                                <span class="glyphicon glyphicon-list-alt"></span>
                                <b>{{ get_static_option('visitor_month_header_title_' . $user_select_lang_slug. '_visitor_month_header_title_text') }}    </b>
                            </div>

                            
                            {{-- @foreach ($all_visitor_images as $data) --}}
                            <div class="row">
                                <div class="col-6">
                                    <div class="badge-info mt-2 mb-2 p-1 visitor-name">
                                        {{ $all_visitor_images->name }}
                                    </div>
                                </div>

                                <div class="col-4 ml-auto">
                                    <div class="badge-warning mt-2 mb-2 p-1 visitor-name">
                                        {{ $all_visitor_images->created_at->format('M - Y') }}
                                    </div>
                                </div>
                            </div>
                            {{-- @endforeach --}}

                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-sm-12">
                                        {{-- @foreach ($all_visitor_images as $data) --}}
                                            <div class="quality-img">
                                                {!! render_image_markup_by_attachment_id($all_visitor_images->image) !!}
                                            </div>
                                        {{-- @endforeach --}}
                                        {{-- <div class="quality-img"
                                            style="background-image: url(https://xgenious.com/laravel/nexelit/assets/uploads/media-uploader/051595833303.png);">
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    
                    <div class="d-flex mt-2 align-items-center justify-content-center">
                        <h4>{{ get_static_option('visitor_month_footer_title_' . $user_select_lang_slug. '_visitor_month_footer_title_text') }}     
                            : <span class="counter">{{ $all_visitors->visitors_count }}</span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if (!empty(filter_static_option_value('home_page_case_study_section_status', $static_field_data)))
    <div class="industry-project-area padding-top-0 padding-bottom-0">
        <div class="container">
            <div class="row margin-top-60">
                <div class="col-lg-8">
                    <div class="section-title industry-home">
                        <span class="subtitle">{{ filter_static_option_value('industry_project_section_' . $user_select_lang_slug . '_subtitle', $static_field_data) }}</span>
                        <h2 class="title">
                            {{ filter_static_option_value('industry_project_section_' . $user_select_lang_slug . '_title', $static_field_data) }}
                        </h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project-carousel-nav"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="global-carousel-init logistic-dots" data-loop="true" data-desktopitem="3"
                        data-mobileitem="1" data-tabletitem="1" data-dots="true" data-nav="true"
                        data-autoplay="true" data-margin="30" data-navcontainer=".project-carousel-nav">
                        @foreach ($all_gallery_images as $data)
                            <div class="single-gallery-image image-box">
                                {!! render_image_markup_by_attachment_id($data->image) !!}
                            </div>
                        @endforeach
                    </div>
                    {{-- <div class="btn-wrapper text-center mt-2">
                        <a href="{{ route('frontend.image.gallery') }}" class="industry-btn black">{{ filter_static_option_value('industry_project_section_' . $user_select_lang_slug . '_button_text', $static_field_data) }}
                            <i class="{{ filter_static_option_value('industry_about_section_button_one_icon', $static_field_data) }}"></i>
                        </a>
                    </div> --}}

                    <div class="btn-wrapper text-center mt-2">
                        <a href="{{ route('frontend.image.gallery') }}" class="industry-btn const-home-color">
                            {{ filter_static_option_value('industry_project_section_' . $user_select_lang_slug . '_button_text', $static_field_data) }}
                            <i class="far fa-comment-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if (!empty(filter_static_option_value('home_page_service_section_status', $static_field_data)))
    <div class="construction-what-we-offer-area padding-top-30 padding-bottom-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center margin-bottom-60 const-home-color">
                        <span
                            class="subtitle">{{ filter_static_option_value('construction_what_we_offer_section_' . $user_select_lang_slug . '_subtitle', $static_field_data) }}</span>
                        <h2 class="title">
                            {{ filter_static_option_value('construction_what_we_offer_section_' . $user_select_lang_slug . '_title', $static_field_data) }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($all_service as $data)
                    <div class="col-lg-4 col-md-6">
                        <div class="construction-single-what-we-cover-item margin-bottom-30">
                            @if ($data->icon_type == 'icon' || $data->icon_type == '')
                                <div class="icon">
                                    <i class="{{ $data->icon }}"></i>
                                </div>
                            @else
                                <div class="img-icon image-box">
                                    {!! render_image_markup_by_attachment_id($data->img_icon) !!}
                                </div>
                            @endif
                            <div class="content">
                                <h4 class="title mt-3"><a
                                        href="{{ route('frontend.services.single', $data->slug) }}">{{ $data->title }}</a>
                                </h4>
                                {{-- <p>{{ $data->excerpt }}</p>
                                <a href="{{ route('frontend.services.single', $data->slug) }}"
                                    class="readmore">{{ filter_static_option_value('construction_what_we_offer_section_' . $user_select_lang_slug . '_button_text', $static_field_data) }}
                                    <i class="fas fa-long-arrow-alt-right"></i></a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
