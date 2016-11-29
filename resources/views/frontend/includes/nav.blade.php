<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand shadowfilter" href="{{route('frontend.index')}}">
                    <img id="logo-navbar-middle"
                         src="img/website/Utility-Picnic-Logo.png"
                         onmouseout="this.src='img/website/Utility-Picnic-Logo.png'"
                         onmouseover="this.src='img/website/Utility-Picnic-Logo2.png'"
                         width="200"
                         alt="Utility Picnic logo">
            </a>
        </div>
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav">
                <li  class="{{ isActiveRoute('frontend.ump') }}">{{ link_to_route('frontend.ump', trans('navs.frontend.ump')) }}</li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li  class="{{ isActiveRoute('frontend.water') }}">{{ link_to_route('frontend.water', trans('navs.frontend.water')) }}</li>
                        <li  class="{{ isActiveRoute('frontend.gas') }}">{{ link_to_route('frontend.gas', trans('navs.frontend.gas')) }}</li>
                        <li  class="{{ isActiveRoute('frontend.electricity') }}">{{ link_to_route('frontend.electricity', trans('navs.frontend.electricity')) }}</li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li  class="{{ isActiveRoute('frontend.about') }}">{{ link_to_route('frontend.about', trans('navs.frontend.about')) }}</li>
                <li  class="{{ isActiveRoute('frontend.contact') }}">{{ link_to_route('frontend.contact', trans('navs.frontend.contact')) }}</li>
            </ul>
        </div>
    </div>
</nav>