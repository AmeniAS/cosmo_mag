<div class="sidebar-wrapper">
    <div class="logo">
        <a href="{{ route('partners_admin.brands.index') }}" class="simple-text">
            CosmoMag
        </a>
    </div>

    <ul class="nav">
        <li class="active">
            <a href="{{ route('partners_admin.brands.index') }}">
                <i class="pe-7s-graph"></i>
                <p>Liste des marques</p>
            </a>
        </li>

        <li class="nav-item ">
            <a class="nav-link" href="{{ route('partners_admin.products.index') }}">
                <i class="pe-7s-graph"></i>
                <span class="sidebar-normal">Liste des produits</span>
            </a>
        </li>

        {{--<li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#commerce" aria-expanded="true">
                <i class="pe-7s-graph"></i>
                <p>
                    Commerce
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="commerce" style="">
                <ul class="nav">

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('admin.categories.index') }}">
                            <i class="pe-7s-graph"></i>
                            <span class="sidebar-normal">Liste des catégories</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('admin.brands.index') }}">
                            <i class="pe-7s-graph"></i>
                            <span class="sidebar-normal">Liste des marques</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('admin.stores.index') }}">
                            <i class="pe-7s-graph"></i>
                            <span class="sidebar-normal">Liste des magasins</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('admin.products.index') }}">
                            <i class="pe-7s-graph"></i>
                            <span class="sidebar-normal">Liste des produits</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>--}}

    </ul>
</div>