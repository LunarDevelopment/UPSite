<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">
                    <img id="logo-navbar-middle"
                         src="img/website/Utility-Picnic-Logo.png"
                         onmouseout="this.src='img/website/Utility-Picnic-Logo.png'"
                         onmouseover="this.src='img/website/Utility-Picnic-Logo2.png'"
                         width="200"
                         alt="Utility Picnic logo">
            </a>
        </div>

        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav navbar-right">
                <li>{{ link_to_route('frontend.macros', trans('navs.frontend.macros')) }}</li>
                <li>{{ link_to_route('frontend.macros', trans('navs.frontend.macros')) }}</li>
                <li>{{ link_to_route('frontend.macros', trans('navs.frontend.macros')) }}</li>
                <li>{{ link_to_route('frontend.macros', trans('navs.frontend.macros')) }}</li>
                <li>{{ link_to_route('frontend.macros', trans('navs.frontend.macros')) }}</li>
            </ul>
        </div>
    </div>
</nav>