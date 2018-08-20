<div class="sidebar" data-background-color="white" data-active-color="danger">
    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->
    <div class="sidebar-wrapper">

        @php
            $currentPath = basename(request()->path());
            $active = "active";
        @endphp

        <a href="http://eventos.ifrn.edu.br/sitcang/">
            <div id="image-header" class="logo" style="background-image: url(img/bg-01.jpg);height: 130px; width: auto; ">
                <span>II SIT Cang</span>
            </div>
        </a>

        <ul class="nav">
            @php
                // Template = ['tag' => '', 'routePath' => '', 'iconClass' => ''];
                $liArgs = [
                    ['Início', 'index', 'fa-home'],
                    ['Perfil', 'perfil', 'fa-user'],
                    ['Credenciamento', 'credenciamento', 'fa-id-badge']
                ];
            @endphp

            @foreach ($liArgs as $liArg)
                <li class="{{ ($currentPath == $liArg[1]) ? 'active' : '' }}">
                    <a href="{{ route($liArg[1]) }}">
                        <i class="fas {{ $liArg[2] }}"></i>
                        <p>{{ $liArg[0] }}</p>
                    </a>
                </li>
            @endforeach

            <li>
                <a href="logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <p>Sair</p>
                </a>
            </li>

        </ul>
    </div>
</div>
