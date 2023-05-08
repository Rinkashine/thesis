<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <div  class="flex mr-auto">
            <img alt="Go Dental Logo" class="w-12" src="{{asset('dist/images/MainLogo.png')}}" data-action="zoom">
        </div>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-white/[0.08] py-5 hidden">
        <!-- -->
        <li>
            <a href="{{ Route('home') }}" class="menu">
                <div class="menu__icon"> <i class="fa-solid fa-house"></i> </div>
                <div class="menu__title"> Home  </div>
            </a>
        </li>
        <li>
            <a href="{{Route('product')}}" class="menu">
                <div class="menu__icon"> <i class="fa-brands fa-product-hunt"></i> </div>
                <div class="menu__title"> Product  </div>
            </a>
        </li>
        @if(!Auth::guard('customer')->check())
        <li>
            <a href="{{Route('CLogin.index')}}" class="menu">
                <div class="menu__icon"> <i class="fa-solid fa-right-to-bracket"></i> </div>
                <div class="menu__title"> Login  </div>
            </a>
        </li>
        <li>
            <a href="{{Route('register.index')}}" class="menu">
                <div class="menu__icon"> <i class="fa-solid fa-user-plus"></i> </div>
                <div class="menu__title"> Sign Up  </div>
            </a>
        </li>
        @endif
    </ul>
</div>
