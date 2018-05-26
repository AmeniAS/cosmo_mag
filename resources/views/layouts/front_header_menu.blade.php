<div class="main-menu">

    <nav>

        <ul>

            <li><a href="#">Démarche GOSMOMAG</a></li>

            <li><a href="{{ route('categories.index') }}">Gatégories</a></li>

            <li><a href="{{ route('brands.index') }}">Marques</a></li>

            <li><a href="#">Blogueurs</a></li>

            <li><a href="#">Beauté</a></li>

            <li><a href="{{ url('/forums') }}">Forum</a></li>

            {{--<li class="dropdown mega-dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Page <span class="caret"></span></a>

                <ul class="dropdown-menu mega-dropdown-menu">

                    <li class="col-sm-4">

                        <ul>

                            <li class="dropdown-header">Home Version</li>

                            <li><a href="#">Home 1</a></li>

                            <li><a href="#">Home 2</a></li>

                        </ul>

                    </li>

                    <li class="col-sm-4">

                        <ul>

                            <li class="dropdown-header">Shop Page</li>

                            <li><a href="#">Shop 1</a></li>

                        </ul>

                    </li>

                    <li class="col-sm-4">

                        <ul>

                            <li class="dropdown-header">Other Pages</li>

                            <li><a href="#">shipping</a></li>

                        </ul>

                    </li>

                </ul>

            </li>--}}

            <li><a href="{{ route('contact') }}">Contact</a></li>

        </ul>

    </nav>

</div>