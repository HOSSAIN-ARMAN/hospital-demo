
{{--        <li class="{{ strpos($routeName, 'backend.admin') === 0 ? 'active open' : ''}}">--}}
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-asterisk"></i>
                <span class="menu-text">
                   Category-Info
                </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ $routeName === 'admin.category.index' ? 'open' : ''}}">
                    <a href="{{ route('admin.category.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Category
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
            <ul class="submenu">
                <li class="{{ $routeName === 'admin.category.sub-category.index' ? 'open' : ''}}">

{{--                    <a href="{{ route('admin.category.sub-category.index') }}">--}}
                    <a href="#">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Manage-Category
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>


{{--Oder mamo--}}

@if(auth()->user()->is_admin == 1)
<li class="">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-asterisk"></i>
        <span class="menu-text">
                   Order-Info
                </span>
        <b class="arrow fa fa-angle-down"></b>
    </a>
    <b class="arrow"></b>
    <ul class="submenu">
        <li class="{{ $routeName === 'admin.order.index' ? 'open' : ''}}">
            <a href="{{ route('admin.order.index') }}">
                <i class="menu-icon fa fa-caret-right"></i>
                Order
            </a>
            <b class="arrow"></b>
        </li>
    </ul>
    <ul class="submenu">
        <li class="{{ $routeName === 'admin.category.sub-category.index' ? 'open' : ''}}">

            {{--                    <a href="{{ route('admin.category.sub-category.index') }}">--}}
            <a href="#">
                <i class="menu-icon fa fa-caret-right"></i>
                Manage-Order
            </a>
            <b class="arrow"></b>
        </li>
    </ul>
</li>
@endif

























{{--        <li class="{{ strpos($routeName, 'backend.admin') === 0 ? 'active open' : ''}}">--}}
{{--<li class="">--}}
{{--    <a href="#" class="dropdown-toggle">--}}
{{--        <i class="menu-icon fa fa-product-hunt"></i>--}}
{{--        <span class="menu-text">--}}
{{--                   Product--}}
{{--                </span>--}}
{{--        <b class="arrow fa fa-angle-down"></b>--}}
{{--    </a>--}}
{{--    <b class="arrow"></b>--}}
{{--    <ul class="submenu">--}}
{{--         <li class="{{ $routeName === 'admin.product.index' ? 'open' : ''}}">--}}
{{--            <a href="{{ route('admin.product.index') }}">--}}
{{--                <i class="menu-icon fa fa-caret-right"></i>--}}
{{--                Add-Product--}}
{{--            </a>--}}
{{--            <b class="arrow"></b>--}}
{{--        </li>--}}
{{--    </ul>--}}

{{--    <ul class="submenu">--}}
{{--        --}}{{--                <li class="{{ $routeName === 'backend.admin.index' ? 'open' : ''}}">--}}
{{--        <li class="">--}}
{{--            --}}{{--                    <a href="{{ route('backend.admin.index') }}">--}}
{{--            <a href="#">--}}
{{--                <i class="menu-icon fa fa-caret-right"></i>--}}
{{--                Display-Product--}}
{{--            </a>--}}
{{--            <b class="arrow"></b>--}}
{{--        </li>--}}
{{--    </ul>--}}

{{--</li>--}}
