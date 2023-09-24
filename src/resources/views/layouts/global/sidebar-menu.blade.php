<ul class="navbar-nav pt-lg-3">

    @foreach( $menu as $item )
        @if(isset($item['childs']) and count($item['childs']) > 0)
            @can($item['permission'])
            <li class="nav-item dropdown @if(\Illuminate\Support\Facades\Route::is($item['route'])) show  active @endif">
                <a class="nav-link dropdown-toggle" href="#navbar-user" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="true">
                          <span class="nav-link-icon d-md-none d-lg-inline-block">
                              {!! $item['icon'] !!}
                          </span>
                    <span class="nav-link-title">
                            {{ $item['title'] }}
                          </span>
                </a>
                <div class="dropdown-menu @if(\Illuminate\Support\Facades\Route::is($item['route'])) show @endif " data-bs-popper="none">
                    @foreach($item['childs'] as $child_item)
                        @can($child_item['permission'])
                            <a class="dropdown-item @if(\Illuminate\Support\Facades\Route::is($child_item['route'])) active @endif" href="{{ route($child_item['route']) }}">
                              <span class="nav-link-icon d-md-none d-lg-inline-block">
                                  {!! $child_item['icon'] !!}
                              </span>

                                {{ $child_item['title'] }}
                            </a>
                        @endcan
                    @endforeach
                </div>
            </li>
            @endcan
        @else
            @can($item['permission'])
            <li class="nav-item @if(\Illuminate\Support\Facades\Route::is($item['route'])) active @endif">
                <a class="nav-link" href="{{ route($item['route']) }}" >
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                        {!! $item['icon'] !!}
                                    </span>
                    <span class="nav-link-title">
                                      {{ $item['title'] }}
                                    </span>
                </a>
            </li>
            @endcan
        @endif


    @endforeach

    @if(config('modules.wallet'))
        <li class="nav-item @if(\Illuminate\Support\Facades\Route::is('panel.wallet.index')) active @endif">
            <a class="nav-link" href="{{ route('panel.wallet.index') }}" >
                <svg xmlns="http://www.w3.org/2000/svg" class="nav-link-icon d-md-none d-lg-inline-block" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12"></path>
                    <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4"></path>
                </svg>
                <span class="nav-link-title">
                                      {{ __('bap.wallet') }}
                            </span>
            </a>
        </li>
    @endif
    @includeIf('layouts.custom.panel')

    @if(config('modules.support'))
        <li class="nav-item dropdown @if(\Illuminate\Support\Facades\Route::is('panel.support.*')) show active @endif">
            <a class="nav-link dropdown-toggle" href="#navbar-support" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="true">
                                  <span class="nav-link-icon d-md-none d-lg-inline-block">
	                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="9" /><path d="M10 16.5l2 -3l2 3m-2 -3v-2l3 -1m-6 0l3 1" /><circle cx="12" cy="7.5" r=".5" fill="currentColor" /></svg>
                                  </span>
                <span class="nav-link-title">
                                    {{ __('bap.support') }}
                                  </span>
            </a>
            <div class="dropdown-menu @if(\Illuminate\Support\Facades\Route::is('panel.support.*')) show @endif " data-bs-popper="none">

                <a class="dropdown-item @if(\Illuminate\Support\Facades\Route::is('panel.support.ticket.index')) active @endif @if(\Illuminate\Support\Facades\Route::is('panel.support.ticket.view')) active @endif" href="{{ route('panel.support.ticket.index') }}">
                    {{ __('bap.tickets') }}
                </a>

                <a class="dropdown-item @if(\Illuminate\Support\Facades\Route::is('panel.support.ticket.create')) active @endif" href="{{ route('panel.support.ticket.create') }}">
                    {{ __('bap.create_ticket') }}
                </a>

            </div>
        </li>
    @endif

</ul>
