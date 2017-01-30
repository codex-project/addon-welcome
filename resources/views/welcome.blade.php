@extends(codex()->view('layout'))
@push('head')
    {!! app('codex.web-app-manifest')->generateLink();  !!}
@endpush
@section('body')
    
    <!--[if lt IE 10]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div id="page-loader">
    <div class="loader loader-page"></div>
</div>

<div id="app" v-cloak="" class="page-welcome">
    <c-theme :class="classes">
        <c-header ref="header" :show-toggle="false">
            <div slot="menu">
                @include('codex-welcome::partials.welcome-nav-items')
            </div>
        </c-header>
        <div ref="page" class="c-page">
            <!-- CAROUSEL / SLIDER-->
            <c-section id="welcome" :full-width="true" class="scrollspy c-section-light">
                <c-carousel ref="carousel" :height="carouselHeight" :interval="5500" :controls="true" control-bottom="#open-source" :indicators="false" class="scrollspy">
                    <c-carousel-item img="{{ asset('vendor/codex') }}/img/slides/slide-typewriter.jpg">
                        <div class="carousel-caption">
                            <p>Completely customizable and dead simple to use to create beautiful documentation.</p>
                        </div>
                    </c-carousel-item>
                    <c-carousel-item img="{{ asset('vendor/codex') }}/img/slides/slide-html.png">
                        <div class="carousel-caption">
                            <p>Seamless integration of PHPDoc, Github/Bitbucket and more!</p>
                        </div>
                    </c-carousel-item>
                </c-carousel>
            </c-section>
            <!-- OPEN SOURCE-->
            <c-section id="open-source" data-wow-duration="2s" class="scrollspy wow fadeIn c-section-dark">
                <div class="awesome">
                    <div class="awesome-title"> Open Source</div>
                    <div class="awesome-text">Codex is available on<a href="#"> GitHub</a> under the<a href="#"> MIT license</a></div>
                    <div class="awesome-divider"></div>
                </div>
            </c-section>
            <!-- FEATURES-->
            <c-section id="features" title="Features" class="scrollspy c-section-light">
                <header>
                    <h2 class="section-title">Features</h2>
                    <hr>
                </header>
                <div class="row">
                    <!-- Plugins-->
                    <div data-wow-duration="1.5s" data-wow-delay="0s" class="feature-column col-lg-4 wow fadeIn slideInUp">
                        <img src="{{ asset('vendor/codex') }}/img/features/fa-puzzle-piece-140x140-37474f.png" alt="Plugins" class="feature-image ml-lg">
                        <h3 class="feature-heading">Plugins</h3>
                        <p class="lead">Using a plugin based approach, Codex can easily be extended. Check out<a href="#"> existing plugins</a> or<a href="#"> create something custom</a>.
                        </p>
                    </div>
                    <!-- Laravel-->
                    <div data-wow-duration="1.5s" data-wow-delay="0.15s" class="feature-column col-lg-4 wow fadeIn slideInUp"><img src="{{ asset('vendor/codex') }}/img/features/laravel.svg" alt="Laravel" class="feature-image">
                        <h3 class="feature-heading">Laravel</h3>
                        <p class="lead">Codex is a file-based documentation platform built on top of Laravel 5.3. Use it as stand-alone or integrate it into your own application!
                        </p>
                    </div>
                    <!-- Responsive-->
                    <div data-wow-duration="1.5s" data-wow-delay="0.3s" class="feature-column col-lg-4 wow fadeIn slideInUp"><img src="{{ asset('vendor/codex') }}/img/features/responsive.png" alt="Responsive" class="feature-image">
                        <h3 class="feature-heading">Responsive</h3>
                        <p class="lead">Documentation should be readable on all devices. Reading documents in Codex on a mobile phone or tablet device is actually enjoyable.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <!-- Flexible-->
                    <div data-wow-duration="1.5s" data-wow-delay="0.75s" class="feature-column col-lg-4 wow fadeIn slideInUp"><img src="{{ asset('vendor/codex') }}/img/features/transgender-alt-140x140-263238.png" alt="Flexible" class="feature-image">
                        <h3 class="feature-heading">Flexible</h3>
                        <p class="lead">Use Markdown, AsciiDoc, Creole or any other lightweight markup language. Use custom parsers to add support for other LML's.
                        </p>
                    </div>
                    <div data-wow-delay="0.60s" data-wow-duration="1.5s" class="feature-column col-lg-4 wow slideInUp fadeIn"><img src="https://placeholdit.imgix.net/~text?txtsize=30&amp;txt=140x140&amp;w=140&amp;h=140" alt="Generic placeholder image" width="140" height="140" class="feature-image">
                        <h3 class="feature-heading">Feature</h3>
                        <p class="lead">Ferox bullas ducunt ad visus. Demissio de domesticus valebat, visum heuretes! Fluctuis sunt sagas de azureus nixus.</p>
                    </div>
                    <div data-wow-delay="0.45s" data-wow-duration="1.5s" class="feature-column col-lg-4 wow slideInUp fadeIn"><img src="https://placeholdit.imgix.net/~text?txtsize=30&amp;txt=140x140&amp;w=140&amp;h=140" alt="Generic placeholder image" width="140" height="140" class="feature-image">
                        <h3 class="feature-heading">Feature</h3>
                        <p class="lead">Domesticus urbs nunquam contactuss axona est. Alter, camerarius buxums interdum transferre de domesticus, barbatus orgia.</p>
                    </div>
                </div>
            </c-section>
            <!-- FEATURES-->
            <c-section id="overview" scheme="dark" class="scrollspy">
                <header>
                    <h2 class="section-title">Overview</h2>
                    <hr>
                </header>
                <div class="feature-row row">
                    <div class="col-md-7 text-md-right">
                        <h3 class="feature-heading wow slideInLeft fadeIn">Create Beautiful<span class="text-muted"> Documentation</span></h3>
                        <p class="lead wow slideInUp fadeIn">Documentation is incredibly important that can make or break even the best development projects. Codex is completely customizable and dead simple to use to create beautiful documentation.</p>
                    </div>
                    <div class="col-md-5 text-center">
                        <c-carousel :height="500" :interval="15500" :controls="false" :indicators="true" class="scrollspy">
                            <c-carousel-item img="{{ asset('vendor/codex') }}/img/ss-codex-document.png">
                                <div class="carousel-caption">
                                    <p>Document</p>
                                </div>
                            </c-carousel-item>
                            <c-carousel-item img="{{ asset('vendor/codex') }}/img/ss-codex-phpdoc.png">
                                <div class="carousel-caption">
                                    <p>PHPDoc</p>
                                </div>
                            </c-carousel-item>
                        </c-carousel>
                    </div>
                </div>
                <hr class="section-divider section-divider-light">
                <div class="feature-row row">
                    <div class="col-md-7 push-md-5">
                        <h3 class="feature-heading wow slideInRight fadeIn">Addons<span class="text-muted"> See for yourself.</span></h3>
                        <p class="lead wow slideInUp fadeIn">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5 pull-md-7 text-center"><img src="{{ asset('vendor/codex') }}/img/ss-codex-phpdoc.png" alt="Codex PHPDoc" data-wow-delay="0.30s" data-wow-duration="1.5s" class="feature-image img-fluid mx-auto wow fadeIn"></div>
                </div>
            </c-section>

            <!-- FEATURES 2-->
            <c-section class="scrollspy wow fadeIn" id="getting-started" scheme="light">
                <header>
                    <h2 class="section-title">Getting Started</h2>
                    <hr>
                </header>
                <div class="row">
                    <div class="col-md-9">
                        <h3>Composer</h3>
                        <p>Installation using composer</p>
                        <h4>Stable Release</h4>
                        <p>This is the preferred release if you're looking to use Codex for your documentation needs.</p>
                        <pre class="language-bash"><code>composer create-project codex/codex [directory] --stability=stable</code></pre>
                        <h4>Dev Release</h4>
                        <p>As this is an open source project, you are free to download the development branch as well. Just please note that while this is the bleeding edge in terms of features and functionality, it comes at the price that things may be broken.</p>
                        <pre class="language-bash"><code>composer create-project codex/codex [directory] --stability=dev</code></pre>
                        <h4>Integrate Codex</h4>
                        <p>Tbd</p>
                        <pre class="language-bash"><code>composer require codex/core</code></pre>
                    </div>
                    <div class="col-md-2">
                        <h3>Download</h3><a class="btn btn-block btn-success" href="#">Latest Stable Release</a><a class="btn btn-block btn-warning" href="#">Latest Dev Release</a><a class="btn btn-block btn-light" href="#">Legacy (v1.x)</a>
                    </div>
                </div>
            </c-section>
            <c-section class="scrollspy wow fadeIn" id="documentation" scheme="dark">
                <header>
                    <h2 class="section-title">Documentation</h2>
                    <hr>
                </header>
                <div class="row">
                    <div class="col-md-4"><a class="btn btn-success btn-block" href="{{ route('codex.document') }}">Latest Stable Version</a></div>
                    <div class="col-md-4"><a class="btn btn-warning btn-block" href="{{ route('codex.document') }}">Latest Dev Version</a></div>
                    <div class="col-md-4"><a class="btn btn-dark btn-block" href="{{ route('codex.document', ['project' => 'codex', 'ref' => 'v1']) }}">Legacy (v1.x)</a></div>
                </div>
            </c-section>
            <c-footer ref="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="section-title">Navigation</h4>
                            <hr class="section-title-divider">
                            <ul class="nav nav-footer">
                                <li class="nav-item"><a class="nav-link" href="#welcome" v-scroll-to:href="{ offset: -50 }">Welcome</a></li>
                                <!--li.nav-item: a.nav-link(href='#open-source', v-scroll-to:href='{ offset: -50 }') Open Source-->
                                <li class="nav-item"><a class="nav-link" href="#features" v-scroll-to:href="{ offset: -50 }">Features</a></li>
                                <li class="nav-item"><a class="nav-link" href="#overview" v-scroll-to:href="{ offset: -50 }">Overview</a></li>
                                <li class="nav-item"><a class="nav-link" href="#documentation" v-scroll-to:href="{ offset: -50 }">Documentation</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4 class="section-title">Social</h4>
                            <hr class="section-title-divider">
                            <ul class="nav nav-footer-social">
                                <li class="nav-item"><a class="nav-link" href="#welcome" v-scroll-to:href="{ offset: -50 }"><i class="fa fa-github"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="#welcome" v-scroll-to:href="{ offset: -50 }"><i class="fa fa-facebook"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="#welcome" v-scroll-to:href="{ offset: -50 }"><i class="fa fa-google-plus"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="#welcome" v-scroll-to:href="{ offset: -50 }"><i class="fa fa-twitter"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="#welcome" v-scroll-to:href="{ offset: -50 }"><i class="fa fa-slack"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="#welcome" v-scroll-to:href="{ offset: -50 }"><i class="fa fa-linkedin"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="#welcome" v-scroll-to:href="{ offset: -50 }"><i class="fa fa-youtube"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="#welcome" v-scroll-to:href="{ offset: -50 }"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4 class="section-title">Related</h4>
                            <hr class="section-title-divider">
                            <ul class="nav nav-footer">
                                <li class="nav-item"><a class="nav-link" href="#welcome" v-scroll-to:href="{ offset: -50 }">Packagist</a></li>
                                <li class="nav-item"><a class="nav-link" href="#welcome" v-scroll-to:href="{ offset: -50 }">NPM</a></li>
                                <li class="nav-item"><a class="nav-link" href="#welcome" v-scroll-to:href="{ offset: -50 }">MIT License</a></li>
                                <li class="nav-item"><a class="nav-link" href="#welcome" v-scroll-to:href="{ offset: -50 }">Contributing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <p>copyright codex 2017</p>
                        </div>
                    </div>
                </div>
            </c-footer>
        <c-scroll-to-top></c-scroll-to-top>
    </c-theme>
</div>
@stop
