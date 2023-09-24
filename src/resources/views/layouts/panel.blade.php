@php
    $menu = [
        [
            'route' => 'panel.dashboard.index',
            'permission' => 'admin_dashboard_index',
            'title' => __('Главная'),
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="13" r="2" /><line x1="13.45" y1="11.55" x2="15.5" y2="9.5" /><path d="M6.4 20a9 9 0 1 1 11.2 0z" /></svg>',
        ],
        [
            'route' => 'panel.company.index',
            'permission' => 'company_index',
            'title' => __('Компании'),
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-factory" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M4 21c1.147 -4.02 1.983 -8.027 2 -12h6c.017 3.973 .853 7.98 2 12"></path>
   <path d="M12.5 13h4.5c.025 2.612 .894 5.296 2 8"></path>
   <path d="M9 5a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1"></path>
   <path d="M3 21l19 0"></path>
</svg>',
        ],

        [
            'route' => 'admin.user.*',
            'permission' => 'admin_user_management',
            'title' => __('Доступы'),
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z"></path>
   <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
   <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
</svg>',
            'childs' => [
                [
                    'route' => 'admin.user.index',
                    'permission' => 'admin_user_index',
                    'title' => __('Пользователи'),
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
   <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
</svg>',
                ],
                [
                    'route' => 'admin.user.team.index',
                    'permission' => 'admin_user_teams',
                    'title' => __('Команды'),
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users-group" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
   <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1"></path>
   <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
   <path d="M17 10h2a2 2 0 0 1 2 2v1"></path>
   <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
   <path d="M3 13v-1a2 2 0 0 1 2 -2h2"></path>
</svg>',
                ],
                [
                    'route' => 'admin.user.role.index',
                    'permission' => 'admin_user_roles',
                    'title' => __('Роли'),
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-binary-tree-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M14 6a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z"></path>
   <path d="M7 14a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z"></path>
   <path d="M21 14a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z"></path>
   <path d="M14 18a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z"></path>
   <path d="M12 8v8"></path>
   <path d="M6.316 12.496l4.368 -4.992"></path>
   <path d="M17.684 12.496l-4.366 -4.99"></path>
</svg>',
                ],
                [
                    'route' => 'admin.user.permission.index',
                    'permission' => 'admin_user_permissions',
                    'title' => __('Разрешения'),
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
</svg>',
                ],
            ]
        ],

/*        [
            'route' => 'panel.dashboard.index',
            'title' => __('bap.dashboard'),
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="13" r="2" /><line x1="13.45" y1="11.55" x2="15.5" y2="9.5" /><path d="M6.4 20a9 9 0 1 1 11.2 0z" /></svg>',
        ],*/
    ];
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ __('bap.direction') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if(isset($title)){{ $title }} - @endif{{ config('bap.name', 'BAP') }}</title>

    @include('sitebill-livewire::layouts.global.favicon')


    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Styles -->
    @livewireStyles

</head>
<body class="antialiased" x-data="{ darkTheme: $persist(false) }" :data-bs-theme="darkTheme ? '' : 'dark'">
<div class="wrapper">
    <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
        <div class="{{ config('bap.container-panel', 'container') }}">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark">
                <a href="{{ route('home') }}">
                    <img x-show="darkTheme == 'dark'" src="{{ asset('images/logo-dark.svg') }}" width="110" height="32" alt="{{ config('app.name', 'Laravel') }}" class="navbar-brand-image">
                    <img x-show="darkTheme != 'dark'" src="{{ asset('images/logo-light.svg') }}" width="110" height="32" alt="{{ config('app.name', 'Laravel') }}" class="navbar-brand-image">
                </a>
            </h1>
            <div class="navbar-nav flex-row d-lg-none">
                @include('sitebill-livewire::layouts.global.user-navbar')
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                @include('sitebill-livewire::layouts.global.sidebar-menu', ['menu' => $menu])


                <ul class="navbar-nav pt-lg-3">
                    @can('admin_content_management')
                        <li class="nav-item dropdown @if(\Illuminate\Support\Facades\Route::is('admin.content.*')) show  active @endif">
                            <a class="nav-link dropdown-toggle" href="#navbar-user" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="true">
                                  <span class="nav-link-icon d-md-none d-lg-inline-block">
	                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" /><line x1="8" y1="8" x2="12" y2="8" /><line x1="8" y1="12" x2="12" y2="12" /><line x1="8" y1="16" x2="12" y2="16" /></svg>
                                  </span>
                                <span class="nav-link-title">
                                    {{ __('bap.content_management') }}
                                  </span>
                            </a>
                            <div class="dropdown-menu @if(\Illuminate\Support\Facades\Route::is('admin.content.*')) show @endif " data-bs-popper="none">
                                @can('admin_article_index')
                                    <a class="dropdown-item @if(\Illuminate\Support\Facades\Route::is('admin.content.article.index')) active @endif" href="{{ route('admin.content.article.index') }}">
                                        {{ __('bap.articles') }}
                                    </a>
                                @endcan
                                @can('admin_faq_index')
                                    <a class="dropdown-item @if(\Illuminate\Support\Facades\Route::is('admin.content.faq.index')) active @endif" href="{{ route('admin.content.faq.index') }}">
                                        {{ __('bap.faqs') }}
                                    </a>
                                @endcan

                                @can('admin_carousel_index')
                                    <a class="dropdown-item @if(\Illuminate\Support\Facades\Route::is('admin.content.carousel.index')) active @endif" href="{{ route('admin.content.carousel.index') }}">
                                        {{ __('bap.carousels') }}
                                    </a>
                                @endcan
                            </div>
                        </li>
                    @endcan

                    @if(config('modules.shop'))
                        @can('admin_shop_management')
                            <li class="nav-item dropdown @if(\Illuminate\Support\Facades\Route::is('admin.shop.*')) show  active @endif">
                                <a class="nav-link dropdown-toggle" href="#navbar-user" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="true">
                                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-store" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                           <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                           <path d="M3 21l18 0"></path>
                                           <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4"></path>
                                           <path d="M5 21l0 -10.15"></path>
                                           <path d="M19 21l0 -10.15"></path>
                                           <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path>
                                        </svg>
                                      </span>
                                    <span class="nav-link-title">
                                        {{ __('bap.shop_management') }}
                                      </span>
                                </a>
                                <div class="dropdown-menu @if(\Illuminate\Support\Facades\Route::is('admin.shop.*')) show @endif " data-bs-popper="none">
                                    @can('admin_product_index')
                                        <a class="dropdown-item @if(\Illuminate\Support\Facades\Route::is('admin.shop.product.index')) active @endif" href="{{ route('admin.shop.product.index') }}">
                                            {{ __('bap.products') }}
                                        </a>
                                    @endcan
                                    @can('admin_order_index')
                                        <a class="dropdown-item @if(\Illuminate\Support\Facades\Route::is('admin.shop.order.index')) active @endif" href="{{ route('admin.shop.product.index') }}">
                                            {{ __('bap.orders') }}
                                        </a>
                                    @endcan

                                </div>
                            </li>
                        @endcan
                    @endif

                    @if(config('modules.wallet'))
                        @can('admin_payment_management')
                            <li class="nav-item dropdown @if(\Illuminate\Support\Facades\Route::is('admin.payment.*')) show  active @endif">
                                <a class="nav-link dropdown-toggle" href="#navbar-user" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="true">
                                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="nav-link-icon d-md-none d-lg-inline-block" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12"></path>
                                            <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4"></path>
                                        </svg>
                                      </span>
                                    <span class="nav-link-title">
                                        {{ __('bap.payment_management') }}
                                      </span>
                                </a>
                                <div class="dropdown-menu @if(\Illuminate\Support\Facades\Route::is('admin.payment.*')) show @endif " data-bs-popper="none">
                                    @can('admin_deposit_index')
                                        <a class="dropdown-item @if(\Illuminate\Support\Facades\Route::is('admin.payment.deposit.index')) active @endif" href="{{ route('admin.payment.deposit.index') }}">
                                            {{ __('bap.deposits') }}
                                        </a>
                                    @endcan
                                    @can('admin_withdraw_index')
                                        <a class="dropdown-item @if(\Illuminate\Support\Facades\Route::is('admin.payment.withdraw.index')) active @endif" href="{{ route('admin.payment.withdraw.index') }}">
                                            {{ __('bap.withdraws') }}
                                        </a>
                                    @endcan

                                </div>
                            </li>
                        @endcan
                    @endif

                    @can('admin_setting_management')
                        <li class="nav-item dropdown @if(\Illuminate\Support\Facades\Route::is('admin.setting.*')) show  active  @endif">
                            <a class="nav-link dropdown-toggle" href="#navbar-user" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="true">
                                  <span class="nav-link-icon d-md-none d-lg-inline-block">
	                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><circle cx="12" cy="12" r="3" /></svg>
                                  </span>
                                <span class="nav-link-title">
                                    {{ __('bap.setting_management') }}
                                  </span>
                            </a>
                            <div class="dropdown-menu @if(\Illuminate\Support\Facades\Route::is('admin.setting.*')) show @endif " data-bs-popper="none">
                                @can('admin_category_index')
                                    <a class="dropdown-item @if(\Illuminate\Support\Facades\Route::is('admin.setting.category.index')) active @endif" href="{{ route('admin.setting.category.index') }}">
                                        {{ __('bap.categories') }}
                                    </a>
                                @endcan
                                @can('admin_manage_index')
                                    <a class="dropdown-item @if(\Illuminate\Support\Facades\Route::is('admin.setting.manage.index')) active @endif" href="{{ route('admin.setting.manage.index') }}">
                                        {{ __('bap.manage') }}
                                    </a>
                                @endcan
                            </div>
                        </li>
                    @endcan

                    @includeIf('layouts.custom.admin')

                    @can('admin_activitylog_index')
                        <li class="nav-item @if(\Illuminate\Support\Facades\Route::is('admin.activitylog.index')) active @endif">
                            <a class="nav-link" href="{{ route('admin.activitylog.index') }}" >
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-activity" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                           <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                           <path d="M3 12h4l3 8l4 -16l3 8h4"></path>
                                        </svg>
                                    </span>
                                <span class="nav-link-title">
                                      {{ __('Журнал событий') }}
                                    </span>
                            </a>
                        </li>
                    @endcan

                    @can('admin_support_management')
                        <li class="nav-item dropdown @if(\Illuminate\Support\Facades\Route::is('admin.support.*')) show  active  @endif">
                            <a class="nav-link dropdown-toggle" href="#navbar-user" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="true">
                                  <span class="nav-link-icon d-md-none d-lg-inline-block">
	                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="9" /><path d="M10 16.5l2 -3l2 3m-2 -3v-2l3 -1m-6 0l3 1" /><circle cx="12" cy="7.5" r=".5" fill="currentColor" /></svg>
                                  </span>
                                <span class="nav-link-title">
                                    {{ __('bap.support_management') }}
                                  </span>
                            </a>
                            <div class="dropdown-menu @if(\Illuminate\Support\Facades\Route::is('admin.support.*')) show @endif " data-bs-popper="none">
                                @can('admin_ticket_index')
                                    <a class="dropdown-item @if(\Illuminate\Support\Facades\Route::is('admin.support.ticket.index')) active @endif" href="{{ route('admin.support.ticket.index') }}">
                                        {{ __('bap.tickets') }}
                                    </a>
                                @endcan
                                @can('admin_ticket_archive')
                                    <a class="dropdown-item @if(\Illuminate\Support\Facades\Route::is('admin.support.ticket.archive')) active @endif" href="{{ route('admin.support.ticket.archive') }}">
                                        {{ __('bap.archive') }}
                                    </a>
                                @endcan
                            </div>
                        </li>
                    @endcan
                </ul>

            </div>
        </div>
    </aside>
    @include('sitebill-livewire::layouts.global.header')
    <!-- Page Content -->
    <div class="page-wrapper">
        <main class="{{ config('bap.container', 'container-fluid') }}">
            @if(isset($pretitle))
                <div class="page-pretitle">
                    {{ $pretitle }}
                </div>
            @endif
            @if(isset($title))
                <div class="page-header d-print-none">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="page-title">
                                {{ $title }}
                            </h2>
                            @if(isset($breadcrumb))
                                {{ $breadcrumb }}
                            @endif
                        </div>
                        @if(isset($actions))
                            {{ $actions }}
                        @endif
                    </div>
                </div>
            @endif
            <div class="page-body">
                {{ $slot }}
            </div>
        </main>
        @include('sitebill-livewire::layouts.global.footer', ['container' => config('bap.container-panel')])
    </div>
</div>

@include('sitebill-livewire::layouts.global.foot-js')
</body>
</html>
