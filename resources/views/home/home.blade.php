<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
    <script>
        (function(w, i, g) {
            w[g] = w[g] || [];
            if (typeof w[g].push == 'function') w[g].push(i)
        })
        (window, 'GTM-WHH7CJ83', 'google_tags_first_party');
    </script>
    <script>
        (function(w, d, s, l) {
            w[l] = w[l] || [];
            (function() {
                w[l].push(arguments);
            })('set', 'developer_id.dYzg1YT', true);
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s);
            j.async = true;
            j.src = '/wzrt/';
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer');
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE v4 | Dashboard</title>

    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->

    <!--begin::Primary Meta Tags-->
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta name="description"
        content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS. Fully accessible with WCAG 2.1 AA compliance." />
    <meta name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard, accessible admin panel, WCAG compliant" />
    <!--end::Primary Meta Tags-->

    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <meta name="supported-color-schemes" content="light dark" />
    <link rel="preload" href="./css/adminlte.css" as="style" />
    <!--end::Accessibility Features-->

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" media="print"
        onload="this.media='all'" />
    <!--end::Fonts-->

    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
        crossorigin="anonymous" />
    <!--end::Third Party Plugin(OverlayScrollbars)-->

    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        crossorigin="anonymous" />
    <!--end::Third Party Plugin(Bootstrap Icons)-->

    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="./css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->

    <!-- apexcharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
        integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous" />

    <!-- jsvectormap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
        integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous" />
    <script data-cfasync="false" nonce="f56d40e6-480d-476e-b143-08f54efcdd2e">
        try {
            (function(w, d) {
                ! function(bH, bI, bJ, bK) {
                    if (bH.zaraz) console.error("zaraz is loaded twice");
                    else {
                        bH[bJ] = bH[bJ] || {};
                        bH[bJ].executed = [];
                        bH.zaraz = {
                            deferred: [],
                            listeners: []
                        };
                        bH.zaraz._v = "5876";
                        bH.zaraz._n = "f56d40e6-480d-476e-b143-08f54efcdd2e";
                        bH.zaraz.q = [];
                        bH.zaraz._f = function(bL) {
                            return async function() {
                                var bM = Array.prototype.slice.call(arguments);
                                bH.zaraz.q.push({
                                    m: bL,
                                    a: bM
                                })
                            }
                        };
                        for (const bN of ["track", "set", "debug"]) bH.zaraz[bN] = bH.zaraz._f(bN);
                        bH.zaraz.init = () => {
                            var bO = bI.getElementsByTagName(bK)[0],
                                bP = bI.createElement(bK),
                                bQ = bI.getElementsByTagName("title")[0];
                            bQ && (bH[bJ].t = bI.getElementsByTagName("title")[0].text);
                            bH[bJ].x = Math.random();
                            bH[bJ].w = bH.screen.width;
                            bH[bJ].h = bH.screen.height;
                            bH[bJ].j = bH.innerHeight;
                            bH[bJ].e = bH.innerWidth;
                            bH[bJ].l = bH.location.href;
                            bH[bJ].r = bI.referrer;
                            bH[bJ].k = bH.screen.colorDepth;
                            bH[bJ].n = bI.characterSet;
                            bH[bJ].o = (new Date).getTimezoneOffset();
                            if (bH.dataLayer)
                                for (const bR of Object.entries(Object.entries(dataLayer).reduce((bS, bT) => ({
                                        ...bS[1],
                                        ...bT[1]
                                    }), {}))) zaraz.set(bR[0], bR[1], {
                                    scope: "page"
                                });
                            bH[bJ].q = [];
                            for (; bH.zaraz.q.length;) {
                                const bU = bH.zaraz.q.shift();
                                bH[bJ].q.push(bU)
                            }
                            bP.defer = !0;
                            for (const bV of [localStorage, sessionStorage]) Object.keys(bV || {}).filter(bX => bX
                                .startsWith("_zaraz_")).forEach(bW => {
                                try {
                                    bH[bJ]["z_" + bW.slice(7)] = JSON.parse(bV.getItem(bW))
                                } catch {
                                    bH[bJ]["z_" + bW.slice(7)] = bV.getItem(bW)
                                }
                            });
                            bP.referrerPolicy = "origin";
                            bP.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bH[bJ])));
                            bO.parentNode.insertBefore(bP, bO)
                        };
                        ["complete", "interactive"].includes(bI.readyState) ? zaraz.init() : bH.addEventListener(
                            "DOMContentLoaded", zaraz.init)
                    }
                }(w, d, "zarazData", "script");
                window.zaraz._p = async bc => new Promise(bd => {
                    if (bc) {
                        bc.e && bc.e.forEach(be => {
                            try {
                                const bf = d.querySelector("script[nonce]"),
                                    bg = bf?.nonce || bf?.getAttribute("nonce"),
                                    bh = d.createElement("script");
                                bg && (bh.nonce = bg);
                                bh.innerHTML = be;
                                bh.onload = () => {
                                    d.head.removeChild(bh)
                                };
                                d.head.appendChild(bh)
                            } catch (bi) {
                                console.error(`Error executing script: ${be}\n`, bi)
                            }
                        });
                        Promise.allSettled((bc.f || []).map(bj => fetch(bj[0], bj[1])))
                    }
                    bd()
                });
                zaraz._p({
                    "e": ["(function(w,d){})(window,document)"]
                });
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
    <!--begin::App Wrapper-->
   
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
        crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="./js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
  
    <!--end::OverlayScrollbars Configure-->

    <!-- OPTIONAL SCRIPTS -->

    <!-- sortablejs -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js" crossorigin="anonymous"></script>

  

    <!-- apexcharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
        integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script>

    <!-- ChartJS -->
   

    <!-- jsvectormap -->
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
        integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
        integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY=" crossorigin="anonymous"></script>

    <!-- jsvectormap -->
    <script>
        // World map by jsVectorMap
        new jsVectorMap({
            selector: '#world-map',
            map: 'world',
        });

        // Sparkline charts
        const option_sparkline1 = {
            series: [{
                data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
            }, ],
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: 'straight',
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ['#DCE6EC'],
        };

        const sparkline1 = new ApexCharts(document.querySelector('#sparkline-1'), option_sparkline1);
        sparkline1.render();

        const option_sparkline2 = {
            series: [{
                data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
            }, ],
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: 'straight',
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ['#DCE6EC'],
        };

        const sparkline2 = new ApexCharts(document.querySelector('#sparkline-2'), option_sparkline2);
        sparkline2.render();

        const option_sparkline3 = {
            series: [{
                data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
            }, ],
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: 'straight',
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ['#DCE6EC'],
        };

        const sparkline3 = new ApexCharts(document.querySelector('#sparkline-3'), option_sparkline3);
        sparkline3.render();
    </script>
    <!--end::Script-->
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516"
        integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg=="
        data-cf-beacon='{"version":"2024.11.0","token":"2437d112162f4ec4b63c3ca0eb38fb20","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>
<!--end::Body-->

</html>
