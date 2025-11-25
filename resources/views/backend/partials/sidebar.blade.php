<div class="section-menu-left">
    <div class="box-logo">
        <a href="{{ route('dashboard') }}" id="site-logo-inner">
            <img class="" id="logo_header" alt="" src="{{ asset('backend/assets/images/logo/logo.png') }}"
                data-light="{{ asset('backend/assets') . "/images/logo/logo.png" }}"
                data-dark="{{ asset('backend/assets') . "/images/logo/logo.png" }}"  >
        </a>
        <div class="button-show-hide">
            <i class="icon-menu-left"></i>
        </div>
    </div>
    <div class="center">
        <div class="center-item">
            <div class="center-heading">Main Home</div>
            <ul class="menu-list">
                <li class="menu-item">
                    <a href="{{ route('dashboard') }}" class="">
                        <div class="icon"><i class="icon-grid"></i></div>
                        <div class="text">Dashboard</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="center-item">
            <ul class="menu-list">
                <li class="menu-item ">
                 
                    <a href="{{ route('product') }}" class="menu-item-button">
                        <div class="icon"><i class="icon-shopping-cart"></i></div>
                        <div class="text">Products</div>
                    </a>
                </li>
                 <li class="menu-item">
                    <a href="{{ route('category') }}" class="menu-item-button">
                        <div class="icon"><i class="icon-layers"></i></div>
                        <div class="text">Category</div>
                    </a>
                </li>
                 <li class="menu-item">
                   <a href="{{ route('order') }}" class="menu-item-button">
                        <div class="icon"><i class="icon-file-plus"></i></div>
                        <div class="text">Order</div>
                    </a>
                </li>
                
               
                <li class="menu-item">
                    <a href="{{ route('slider') }}" class="">
                        <div class="icon"><i class="icon-image"></i></div>
                        <div class="text">Slider</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('dashboard') }}" class="">
                        <div class="icon"><i class="icon-grid"></i></div>
                        <div class="text">Coupns</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('user') }}" class="">
                        <div class="icon"><i class="icon-user"></i></div>
                        <div class="text">User</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="" class="">
                        <div class="icon"><i class="icon-settings"></i></div>
                        <div class="text">Settings</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>