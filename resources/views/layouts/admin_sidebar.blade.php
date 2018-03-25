<div class="sidebar-wrapper">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
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
            <a class="nav-link" data-toggle="collapse" href="#categories" aria-expanded="true">
                <i class="pe-7s-graph"></i>
                <p>
                    Catégories
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="categories" style="">
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="#">
                            <i class="pe-7s-graph"></i>
                            <span class="sidebar-normal">Liste des catégories</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
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
                        <a class="nav-link" href="#">
                            <i class="pe-7s-graph"></i>
                            <span class="sidebar-normal">Liste des produits</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

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
                        <a class="nav-link" href="#">
                            <i class="pe-7s-graph"></i>
                            <span class="sidebar-normal">Partenaires</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>

    </ul>
</div>