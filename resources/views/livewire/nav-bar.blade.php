 <!-- Main Content -->
 <div class="content">
    <!-- Navbar -->
    <nav>
        @persist('bx')
        <i class='bx bx-menu'></i>
        @endpersist
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Search...">
                <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
            </div>
        </form>
        @persist('p')
        <input type="checkbox" id="theme-toggle" hidden>

        <label for="theme-toggle" class="theme-toggle"></label>
        @endpersist
        <a href="#" class="notif">
            <i class='bx bx-bell'></i>
            <span class="count">12</span>
        </a>
        <a href="#" class="profile">
            <img src="images/logo.png">
        </a>
    </nav>

    <!-- End of Navbar -->