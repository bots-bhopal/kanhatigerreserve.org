@extends('frontend.frontend-page-master')
@section('site-title')
    {{ get_static_option('link_page_' . $user_select_lang_slug . '_name') }}
@endsection
@section('page-title')
    {{ get_static_option('link_page_' . $user_select_lang_slug . '_name') }}
@endsection
@section('page-meta-data')
    <meta name="description" content="{{ get_static_option('link_page_' . $user_select_lang_slug . '_meta_description') }}">
    <meta name="tags" content="{{ get_static_option('link_page_' . $user_select_lang_slug . '_meta_tags') }}">
    {!! render_og_meta_image_by_attachment_id(get_static_option('link_page_' . $user_select_lang_slug . '_meta_image')) !!}
@endsection
@section('content')
    <section class="blog-content-area padding-60">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-10 offset-lg-1">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h4 class="text-white mb-0">
                            {{ get_static_option('announcement_board_title_' . $user_select_lang_slug. '_announcement_board_title_text') }}
                            </h4>
                        </div>
                        <div class="card-body">
                            @forelse ($links as $link)
                                <p class="card-text text-justify" style="padding: 4px 4px;">
                                    @if ($link->url)
                                        <img src="{{ asset('assets/frontend/img/www.png') }}" width="30"
                                            class="img-circle" />
                                        <a href="{{ $link->url }}" target="_blank"
                                            style="color:#135e2a; font-weight: 600!important;">{{ $link->title }}</a>
                                        @if ($link->expired_at > Carbon\Carbon::now()->toDateTimeString())
                                            <img src="{{ asset('assets/frontend/img/new.gif') }}" class="img-circle" />
                                        @endif
                                    @endif

                                    @if ($link->file_extension == 'pdf')
                                        <img src="{{ asset('assets/frontend/img/pdf.png') }}" width="30"
                                            class="img-circle" />
                                        <a href="{{ route('user.download', $link->original_filename) }}" target="_blank"
                                            style="color:#135e2a; font-weight: 600!important;">{{ $link->title }}</a>
                                        @if ($link->expired_at > Carbon\Carbon::now()->toDateTimeString())
                                            <img src="{{ asset('assets/frontend/img/new.gif') }}" class="img-circle" />
                                        @endif
                                    @endif

                                    @if ($link->file_extension == 'doc' || $link->file_extension == 'docx')
                                        <img src="{{ asset('assets/frontend/img/word.png') }}" width="30"
                                            class="img-circle" />
                                        <a href="{{ route('user.download', $link->original_filename) }}" target="_blank"
                                            style="color:#135e2a; font-weight: 600!important;">{{ $link->title }}</a>
                                        @if ($link->expired_at > Carbon\Carbon::now()->toDateTimeString())
                                            <img src="{{ asset('assets/frontend/img/new.gif') }}" class="img-circle" />
                                        @endif
                                    @endif

                                    @if ($link->file_extension == 'xls' || $link->file_extension == 'xlsx')
                                        <img src="{{ asset('assets/frontend/img/excel.png') }}" width="30"
                                            class="img-circle" />
                                        <a href="{{ route('user.download', $link->original_filename) }}" target="_blank"
                                            style="color:#135e2a; font-weight: 600!important;">{{ $link->title }}</a>
                                        @if ($link->expired_at > Carbon\Carbon::now()->toDateTimeString())
                                            <img src="{{ asset('assets/frontend/img/new.gif') }}" class="img-circle" />
                                        @endif
                                    @endif
                                </p>
                            @empty
                                <p class="card-text" style="padding: 4px 4px 0 4px;">
                                <h4 style="font-weight: 800; text-align: center; color:red;">
                                    {{ get_static_option('announcement_board_message_' . $user_select_lang_slug. '_announcement_board_message_text') }}
                                </p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
