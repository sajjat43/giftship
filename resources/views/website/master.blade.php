<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>OFDEM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('Frontend/assets/img/favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css"
        integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="{{ url('Frontend/assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-icons.css%2bslick.css') }}" />
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css"
        integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ url('Frontend/assets/css/A.style.css.pagespeed.cf.LmhYJqu-1k.css') }}">
    <script>
        (function (w, d) {
            ! function (e, t, r, a, s) {
                e[r] = e[r] || {}, e[r].executed = [], e.zaraz = {
                    deferred: []
                };
                var n = t.getElementsByTagName("title")[0];
                e[r].c = t.cookie, n && (e[r].t = t.getElementsByTagName("title")[0].text), e[r].w = e.screen.width,
                    e[
                        r].h = e.screen.height, e[r].j = e.innerHeight, e[r].e = e.innerWidth, e[r].l = e.location
                    .href,
                    e[r].r = t.referrer, e[r].k = e.screen.colorDepth, e[r].n = t.characterSet, e[r].o = (new Date)
                    .getTimezoneOffset(), //
                    e[s] = e[s] || [], e.zaraz._preTrack = [], e.zaraz.track = (t, r) => e.zaraz._preTrack.push([t,
                        r
                    ]),
                    e[s].push({
                        "zaraz.start": (new Date).getTime()
                    });
                var i = t.getElementsByTagName(a)[0],
                    o = t.createElement(a);
                o.defer = !0, o.src = "../../cdn-cgi/zaraz/sd41d.js?" + new URLSearchParams(e[r]).toString(), i
                    .parentNode.insertBefore(o, i)
            }(w, d, "zarazData", "script", "dataLayer");
        })(window, document);

    </script>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>

<body>
   
    {{-- header goes here --}}
    @include('website.fixed.header')
    @yield('content')
    {{-- footer goes here --}}
    @include('website.fixed.footer')


    <script src="{{ url('Frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}">
    </script>

    <script src="{{ url('Frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script
        src="{{ url('Frontend/assets/js/popper.min.js%2bbootstrap.min.js%2bjquery.slicknav.min.js.pagespeed.jc.tZyD-FwHec.js') }}">
    </script>
    <script>
        eval(mod_pagespeed_uLS_3jiC9P);

    </script>
    <script>
        eval(mod_pagespeed_dEXX7W4Qj$);

    </script>

    <script>
        eval(mod_pagespeed_fKzsIdr7CL);

    </script>

    <script
        src="{{ url('Frontend/assets/js/owl.carousel.min.js%2bslick.min.js%2bwow.min.js%2banimated.headline.js.pagespeed.jc.wJ9RpF0nwF.js') }}">
    </script>
    <script>
        eval(mod_pagespeed_t4vdyadhrM);

    </script>
    <script>
        eval(mod_pagespeed_ZPIuHAdCMa);

    </script>

    <script>
        eval(mod_pagespeed_PbZmGjTJEF);

    </script>
    <script>
        eval(mod_pagespeed_QSDhf3cFEK);

    </script>
    <script
        src="{{ url('Frontend/assets/js/jquery.magnific-popup.js%2bjquery.scrollUp.min.js%2bjquery.nice-select.min.js%2bjquery.sticky.js%2bcontact.js%2bjquery.form.js.pagespeed.jc.lAaetcuKu4.js') }}">
    </script>
    <script>
        eval(mod_pagespeed_nqEp4ru0AF);

    </script>

    <script>
        eval(mod_pagespeed_UIGkZC$1YI);

    </script>
    <script>
        eval(mod_pagespeed_1koFnvWiqU);

    </script>
    <script>
        eval(mod_pagespeed_bh4Mt9M5Vq);

    </script>

    <script>
        eval(mod_pagespeed_qCWqHbhHjW);

    </script>
    <script>
        eval(mod_pagespeed_sO9pJ8Us7_);

    </script>
    <script
        src="{{ url('Frontend/assets/js/jquery.validate.min.js%2bmail-script.js%2bjquery.ajaxchimp.min.js%2bplugins.js%2bmain.js.pagespeed.jc.X9c6Ii-Aij.js') }}">
    </script>
    <script>
        eval(mod_pagespeed_xR93SgUb3P);

    </script>
    <script>
        eval(mod_pagespeed_IwRW_1hrVc);

    </script>
    <script>
        eval(mod_pagespeed_85KMyGu8r8);

    </script>

    <script>
        eval(mod_pagespeed_gpcplEHVUP);

    </script>
    <script>
        eval(mod_pagespeed_XKQAPPGbRm);

    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"6c488e9a3f32e9a7","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>
    <script>
        (function (window, document) {
            var loader = function () {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36)
                    .substring(
                        7);
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);

    </script>
    <script>
        $('.featured-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })

    </script>

    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel();
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>

<!-- Mirrored from preview.colorlib.com/theme/estore/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Dec 2021 05:59:04 GMT -->

</html>
