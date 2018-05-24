<div class="sidebar-wrapper">
    <div class="logo">
        <a href="{{ url('/administrator') }}" class="simple-text">
            CosmoMag
        </a>
    </div>

    <ul class="nav">
        <li class="active">
            <a href="{{ url('/administrator') }}">
                <i class="pe-7s-graph"></i>
                <p>Dashboard</p>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.messages') }}">
                <i class="pe-7s-graph"></i>
                <p>Messages</p>
            </a>
        </li>

        <li>
            <a href="https://us18.admin.mailchimp.com/lists/members/?id=10907#p:1-s:10-so:null" target="_blank">
                <i class="pe-7s-graph"></i>
                <p>Newsletter</p>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#vente" aria-expanded="true">
                <i class="pe-7s-graph"></i>
                <p>
                    Vente
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="vente" style="">
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('admin.vente.commades') }}">
                            <i class="pe-7s-graph"></i>
                            <span class="sidebar-normal">Commandes</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">
                            <i class="pe-7s-graph"></i>
                            <span class="sidebar-normal">Factures</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">
                            <i class="pe-7s-graph"></i>
                            <span class="sidebar-normal">Panier</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
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
        </li>

        {{--<li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#produits" aria-expanded="true">
                <i class="pe-7s-graph"></i>
                <p>
                    Produits
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="produits" style="">
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('admin.brands.index') }}">
                            <i class="pe-7s-graph"></i>
                            <span class="sidebar-normal">Liste des marques</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="#">
                            <i class="pe-7s-graph"></i>
                            <span class="sidebar-normal">Liste des produits</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
--}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="true">
                <i class="pe-7s-graph"></i>
                <p>
                    Compte utilisateurs
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="users" style="">
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('admin.members.index') }}">
                            <i class="pe-7s-graph"></i>
                            <span class="sidebar-normal">Membres</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('admin.bloggers.index') }}">
                            <i class="pe-7s-graph"></i>
                            <span class="sidebar-normal">Blogueuses</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('admin.partenaires.index') }}">
                            <i class="pe-7s-graph"></i>
                            <span class="sidebar-normal">Partenaires</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>

    </ul>
</div>