<!-- @if(auth()->user()->is_admin == 1) -->
<li class="">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-asterisk"></i>
        <span class="menu-text">
                   System-Info
                </span>
        <b class="arrow fa fa-angle-down"></b>
    </a>
    <b class="arrow"></b>
    <ul class="submenu">
        <li class="{{ $routeName === 'admin.order.index' ? 'open' : ''}}">
            <a href="{{ route('admin.order.index') }}">
                <i class="menu-icon fa fa-caret-right"></i>
                System Controller
            </a>
            <b class="arrow"></b>
        </li>
    </ul>
    
    <ul class="submenu">
        <li class="{{ $routeName === 'admin.category.sub-category.index' ? 'open' : ''}}">

            {{--                    <a href="{{ route('admin.category.sub-category.index') }}">--}}
            <a href="#">
                <i class="menu-icon fa fa-caret-right"></i>
                Manage-System
            </a>
            <b class="arrow"></b>
        </li>
    </ul>
</li>
<!-- @endif -->




<!-- {{--        <li class="{{ strpos($routeName, 'backend.admin') === 0 ? 'active open' : ''}}">--}} -->

<!-- @if(auth()->user()->is_controller == 101 && auth()->user()->name == "arman") -->
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-asterisk"></i>
                <span class="menu-text">
                   System-Info
                </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ $routeName === 'admin.category.index' ? 'open' : ''}}">
                    <a href="">
                        <i class="menu-icon fa fa-caret-right"></i>
                        System Controller
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>

             <ul class="submenu">
                <li class="{{ $routeName === 'admin.category.index' ? 'open' : ''}}">
                    <a href="{{ route('admin.system.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Hospital list
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>

            <ul class="submenu">
                <li class="{{ $routeName === 'admin.category.index' ? 'open' : ''}}">
                    <a href="">
                    
                        <i class="menu-icon fa fa-caret-right"></i>
                        Create Hospital
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>

            <ul class="submenu">
                <li class="{{ $routeName === 'admin.category.sub-category.index' ? 'open' : ''}}">

{{--                    <a href="{{ route('admin.category.sub-category.index') }}">--}}
                    <a href="#">
                        <i class="menu-icon fa fa-caret-right"></i>
                         Manage-System
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

<!-- @endif -->


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





<!-- {{--Oder mamo--}} -->

<!-- @if(auth()->user()->is_admin == 1) -->
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
<!-- @endif -->



<!-- @if(auth()->user() && auth()->user()->status == 1) -->

{{--        <li class="{{ strpos($routeName, 'backend.admin') === 0 ? 'active open' : ''}}">--}}
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-asterisk"></i>
                <span class="menu-text">
                   Test-Info
                </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ $routeName === 'admin.testModule.index' ? 'open' : ''}}">
                    <a href="{{ route('admin.testModule.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        All Test Group
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
            <ul class="submenu">
                <li class="{{ $routeName === 'admin.category.sub-category.index' ? 'open' : ''}}">

{{--                    <a href="{{ route('admin.category.sub-category.index') }}">--}}
                    <a href="#">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Manage-Test Group
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

<!-- @endif -->


{{--        <li class="{{ strpos($routeName, 'backend.admin') === 0 ? 'active open' : ''}}">--}}
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-asterisk"></i>
                <span class="menu-text">
                   Doctor-Info
                </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ $routeName === 'admin.doctor.index' ? 'open' : ''}}">
                    <a href="{{ route('admin.doctor.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Doctor List
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
            <ul class="submenu">
                <li class="{{ $routeName === 'admin.category.sub-category.index' ? 'open' : ''}}">

{{--                    <a href="{{ route('admin.category.sub-category.index') }}">--}}
                    <a href="#">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Manage-Doctor
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>



<!-- @if(auth()->user() && auth()->user()->status == 1) -->


       <li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								ODP Info 
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

                        <ul class="submenu">
                            <li class="{{ $routeName === 'admin.doctor.index' ? 'open' : ''}}">
                                <a href="{{ route('admin.doctor.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Add Patient
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>

						<ul class="submenu">
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Outdoor Patient List
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="top-menu.html">
											<i class="menu-icon fa fa-caret-right"></i>
											All Patient List
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="mobile-menu-3.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Paid Patient List
										</a>

										<b class="arrow"></b>
									</li>

                                    <li class="">
										<a href="mobile-menu-3.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Due Patient List
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>

							<li class="">
								<a href="typography.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Typography
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</li>


<!-- @endif -->







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
