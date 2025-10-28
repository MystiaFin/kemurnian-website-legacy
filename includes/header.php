<?php
function renderHeader($currentPage = 'home')
{
?>
<header id="main-header">
    <div class="row header-inner">
        <div class="logo">
            <a title="Home Page" class="smoothscroll" href="#hero"></a>
        </div>

        <nav id="nav-wrap">
            <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
                <span class='menu-text'>Show Menu</span>
                <span class="menu-icon"></span>
            </a>
            <a class="mobile-btn" href="#" title="Hide navigation">
                <span class='menu-text'>Hide Menu</span>
                <span class="menu-icon"></span>
            </a>

            <ul id="nav" class="nav">
                <form class="desktop-hidden" autocomplete="off" action="">
                    <div class="autocomplete" style="display: inline-block; position: relative;">
                        <input id="myInputMob" type="search" placeholder="Search">
                    </div>
                    <button title="mobile search button" id="search-button-mob" type="button" onclick="openPageMob()">
                        <img src="./images/search.png" alt="search">
                    </button>
                </form>

                <li class="<?= $currentPage === 'home' ? 'current' : '' ?>">
                    <a title="Home" class="smoothscroll" href="#hero">Home</a>
                </li>
                <li class="<?= $currentPage === 'school' ? 'current' : '' ?>">
                    <a title="School" class="smoothscroll" href="#services">School</a>
                </li>
                <li class="<?= $currentPage === 'ppdb' ? 'current' : '' ?>">
                    <a title="PPDB" class="smoothscroll" href="#ppdb">PPDB</a>
                </li>
                <li class="<?= $currentPage === 'kurikulum' ? 'current' : '' ?>">
                    <a title="Kurikulum" class="smoothscroll" href="#kurikulum">Kurikulum</a>
                </li>
                <li class="<?= $currentPage === 'about' ? 'current' : '' ?>">
                    <a title="About" class="smoothscroll" href="#about">About</a>
                </li>
                <li class="<?= $currentPage === 'news' ? 'current' : '' ?>">
                    <a title="News" class="smoothscroll" href="#journal">News</a>
                </li>
                <li class="<?= $currentPage === 'contact' ? 'current' : '' ?>">
                    <a title="Contact" class="smoothscroll" href="#contact">Contact</a>
                </li>

                <form class="mobile-hidden" autocomplete="off" action="">
                    <div class="autocomplete" style="display: inline-block; position: relative;">
                        <input id="myInput" type="search" placeholder="Search">
                    </div>
                    <button title="search button" id="search-button" type="button" onclick="openPage()">
                        <img src="./images/search.png" alt="search" loading="lazy" width="51" height="51" title="search">
                    </button>
                </form>
            </ul>
        </nav>
    </div>
</header>
<?php
}
?>
