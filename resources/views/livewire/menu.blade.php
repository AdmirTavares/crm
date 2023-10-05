<!-- Sidebar -->
<div class="sidebar">
    <a href="#" class="logo">
        <i class='bx bx-code-alt'></i>
        <div class="logo-name"><span>CRM</span>Web</div>
    </a>
    <ul class="side-menu" style="padding-left: 0rem;">
        <li><a href="{{route('dashboard')}}"><i class='bx bxs-dashboard'wire:navigate></i>Dashboard</a></li>
        <li class="active"><a wire:navigate href="{{route('home')}}"
                active="{{request()->routeIs('home')}}" wire:navigate><i class='bx bx-analyse'></i>Empresa</a></li>
        <li><a wire:navigate href="/perfil" ><i class='bx bx-cog'></i>Definições</a></li>
        
    </ul>
    <ul class="side-menu" style="padding-left: 0rem;">
        <li>
            <a  wire:click='sair' href="" class="logout">
                <i class='bx bx-log-out-circle'></i>
                Sair
            </a>
        </li>
    </ul>
</div>
<!-- End of Sidebar -->