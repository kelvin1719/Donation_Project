<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Love Charity Programme"/>
        <meta name="keywords" content="charity, ngo, help the poor, orphanage"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- favicon -->
        <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}"/>

        <!-- styles-->
        <link rel="stylesheet" href="{{asset('assets/css/styles.min.css')}}"/>

        <title>{{ $title ?? 'Page Title' }}</title>

        <!-- web-font loader-->
        <script>
            WebFontConfig = {
                google: {

                    families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],
                }
            }

            function font() {
                var wf = document.createElement('script')

                wf.src = ('https:' === document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
                wf.type = 'text/javascript'
                wf.async = true

                var s = document.getElementsByTagName('script')[0]

                s.parentNode.insertBefore(wf, s)
            }
            font()
        </script>
    </head>
    <body>

        <div class="page-wrapper">
            @include('components.shared.asidebar')
            @include('components.shared.header')

            <main class="main">
                {{ $slot }}


                <!-- subscribe start-->
                <section class="subscribe">
                    <div class="container">
                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <h2 class="subscribe__title">Subscribe.</h2>
                            </div>
                            <div class="col-lg-8">
                                <form class="subscribe-form" action="javascript:void(0);">
                                    <input class="subscribe-form__input" type="email" name="email" placeholder="Enter your E-mail" required="required"/>
                                    <input class="subscribe-form__submit" type="submit" value="Submit"/>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- subscribe end-->
            </main>

            @include('components.shared.footer')
        </div>

        <!-- libs-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="{{asset('assets/js/libs.min.js')}}"></script>
        <!-- scripts-->
        <script src="{{asset('assets/js/common.min.js')}}"></script>
        @include('components.shared.svg-arrow')
    </body>
</html>
