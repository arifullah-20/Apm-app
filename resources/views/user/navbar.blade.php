@extends('user.layout')
@section('navbar')

<div id="bbar-wrapper">
    <div class="container">
        <div class="column dt-sc-one-half first">
            <p class="contact"> Call-us on : <span>845.180.1530</span> </p>
        </div>

        <div class="column dt-sc-one-half alignright">
            <div class="buttons">
                <a href="login-page.html" title="">Login <i class="fa fa-caret-right"></i></a>
                <a href="register.html" title="">Register <i class="fa fa-caret-right"></i></a>
            </div>
        </div>
    </div>
</div> <!-- **Header Top Bar Ends** -->

<!-- **Header Wrapper** -->
<div id="header-wrapper">
    <!-- **Header** -->
    <header id="header" class="header5">
        <div class="container">
            <!-- **Logo** -->
            <div id="logo">
                <a href="index.html"> <img src="{{asset ('assets1/images/logo.png')}}" alt="logo"> </a>
            </div><!-- **Logo Ends** -->

            <!-- **Main-Menu Navigation** -->
            <div id="primary-menu">
                <div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span>
                </div>
                <nav id="main-menu">
                    <ul id="menu-main-menu" class="menu">
                        <li class="current_page_item menu-item-simple-parent menu-item-depth-0"> <a
                                href="/user" title=""> <span class="menu-icon fa fa-home"> </span> Beranda
                            </a>
                        </li>

                        <li class="menu-item-simple-parent menu-item-depth-0"> <a href="about.html" title="">
                                <span class="menu-icon fa fa-book"> </span> Tentang Kami </a>
                        </li>
                        <li class="menu-item-simple-parent menu-item-depth-0"> <a href="about.html" title="">
                                <span class="menu-icon fa fa-book"> </span> Berita </a>
                        </li>

                        <li class="menu-item-simple-parent menu-item-depth-0"> <a href="contact.html" title="">
                                <span class="menu-icon fa fa-envelope"> </span> Informasi </a>
                            <ul class="sub-menu">
                                <li> <a href="contact.html" title=""> FAQ</a> </li>
                                <li> <a href="contact2.html" title=""> Informasi Packing </a> </li>
                            </ul>
                        </li>
                        <li class="menu-item-simple-parent menu-item-depth-0"> <a href="about.html" title="">
                                <span class="menu-icon fa fa-book"> </span> Kontak </a>
                        </li>
                    </ul>
                </nav>
            </div> <!-- **Main-Menu Navigation Ends** -->
        </div>
    </header> <!-- **Header Ends** -->
</div> <!-- **Header Wrapper Ends** -->

@endsection













