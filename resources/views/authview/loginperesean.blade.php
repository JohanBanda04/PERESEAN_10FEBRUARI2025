<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta20
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>PERESEAN (Pengunggahan Raperda Seputar NTB)</title>
    <!-- CSS files -->
    <link href="{{ asset('tabler/dist/css/tabler.min.css?1692870487') }}" rel="stylesheet"/>
    {{--ikon untuk title--}}
    <link rel="shortcut icon" href="{{ asset('assets/img/Logo Peresean_only2.png') }}" type="image/x-icon"/>
    <link href="{{ asset('tabler/dist/css/tabler-flags.min.css?1692870487') }}" rel="stylesheet"/>
    <link href="{{ asset('tabler/dist/css/tabler-payments.min.css?1692870487') }}" rel="stylesheet"/>
    <link href="{{ asset('tabler/dist/css/tabler-vendors.min.css?1692870487') }}" rel="stylesheet"/>
    <link href="{{ asset('tabler/dist/css/demo.min.css?1692870487') }}" rel="stylesheet"/>

    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>

</head>
{{--src="{{ asset('assets/img/LogoPeresean.png') }}"--}}
<body style="background-image: url({{asset('assets/img/batik.png')}}); background-size: cover; background-repeat: inherit;
        background-position: 0vh ; height: 100%;width: 100%" class="d-flex flex-column">
<script src="{{ asset('tabler/dist/js/demo-theme.min.js?1692870487') }}"></script>
<div class="page page-center">
    <div class="container container-normal py-4">
        <div class="row align-items-center g-4">
            <div class=" col-lg d-none d-lg-block">

                <div class="row ">
                    <div class="col-12">
                        <center>

                            <img src="{{ asset('assets/img/LogoPereseanBlue3.png') }}" alt="" class=""
                                 style="height: 400px; width: 900px;">

                        </center>
                    </div>
                </div>
                {{--<div class="row mt-4">--}}
                {{--<div class="col-12">--}}
                {{----}}

                {{--<img src="{{ asset('assets/img/perisai_logo_kum1.png') }}" style="height: 350px; width: 350px;"--}}
                {{--class="d-block mx-auto" alt="">--}}

                {{--</div>--}}
                {{--</div>--}}

            </div>
            <div class="col-lg">
                <div class="container-tight">
                    <div class="text-center mb-4">
                        <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36"
                                                                                    alt=""></a>
                    </div>
                    <div class="card card-md">
                        <div class="card-body">
                            <h2 class="h2 text-center mb-4">Silakan Login</h2>
                            @if(Session::get('warning'))
                                <div class="alert alert-warning">
                                    <p>{{ Session::get('warning') }}</p>
                                </div>
                            @endif
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Salah Semetonku!</strong><br>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            {{--<form action="/prosesloginsatker" method="POST" autocomplete="off" novalidate>--}}
                            <form action="{{ route('prosesloginperesean') }}" method="POST" autocomplete="off"
                                  novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Kode User</label>
                                    <input type="text" id="kode_uname" name="kode_uname" class="form-control"
                                           placeholder="Kode User" value="{{ old('kode_uname') }}"
                                           autocomplete="off">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">
                                        Password

                                    </label>
                                    <div class="input-group input-group-flat">
                                        <input type="password" name="password" id="password" class="form-control"
                                               placeholder="Password" autocomplete="off">
                                        <span class="input-group-text">
                          <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"
                                                                                      fill="none"/><path
                                        d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"/><path
                                        d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"/></svg>
                          </a>
                        </span>
                                    </div>
                                </div>
                                {{--<div class="mb-3">--}}
                                {{--<label class="form-label">Roles</label>--}}
                                {{--<select name="role_user" id="role_user" class="form-select">--}}
                                {{--<option value="">Pilih Role</option>--}}
                                {{--<option hidden value="humas_satker">Humas Satker</option>--}}
                                {{--<option value="superadmin">Administrator</option>--}}
                                {{--<option value="humas_kanwil">Humas Kanwil</option>--}}
                                {{--</select>--}}
                                {{--</div>--}}

                                @php

                                    $tahunmulai = 2023;
                                    $tahunskrg = date("Y");

                                @endphp
                                <div class="mb-3">
                                    <label class="form-label">Tahun</label>
                                    <select name="pilih_tahun" id="pilih_tahun" class="form-select">
                                        <option value="">Pilih Tahun</option>
                                        @for($tahun=$tahunmulai; $tahun<=$tahunskrg; $tahun++)
                                            <option {{ $tahun==old('pilih_tahun')?'selected':'' }} value="{{ $tahun }}">{{ $tahun }}</option>

                                        @endfor
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <div style="text-align: center; margin-bottom: 10px">

                                        <strong>Google Recaptcha</strong>
                                    </div>
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary w-100">
                                        Sign in
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>


        </div>
    </div>
</div>
<!-- Libs JS -->
<!-- Tabler Core -->
<script src="{{ asset('tabler/dist/js/tabler.min.js?1692870487') }}" defer></script>
<script src="{{ asset('tabler/dist/js/demo.min.js?1692870487') }}" defer></script>

<script>

    // document.getElementsByClassName("g-recaptcha");
    // document.getElementsByClassName('g-recaptcha').setAttribute("style","display:block;width:500px");
    // document.getElementsByClassName('g-recaptcha').style.width='1000px';
    var list, index;
    list = document.getElementsByClassName("g-recaptcha");
    for (index = 0; index < list.length; ++index) {
        list[index].setAttribute("style", "display:block;margin-left:25px");
    }
</script>
</body>
</html>