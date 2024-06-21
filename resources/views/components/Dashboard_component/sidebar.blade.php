    <!-- sidebar @s -->
    <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
        <div class="nk-sidebar-element nk-sidebar-head">
            <div class="nk-sidebar-brand">
                <a href="/dashboard" class="logo-link nk-sidebar-logo">
                    <img class="logo-light logo-img" src="{{ asset('img') }}/LogoEPIM.png" srcset="{{ asset('img') }}/LogoEPIM.png" alt="logo">
                    <img class="logo-dark logo-img" src="{{ asset('img') }}/LogoEPIM.png" srcset="{{ asset('img') }}/LogoEPIM.png" alt="logo-dark">
                    <img class="logo-small logo-img logo-img-small" src="{{ asset('img') }}/LogoEPIM.png" srcset="{{ asset('img') }}/LogoEPIM.png" alt="logo-small">
                </a>
            </div>
            <div class="nk-menu-trigger me-n2">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
        </div><!-- .nk-sidebar-element -->
        <div class="nk-sidebar-element">
            <div class="nk-sidebar-content">
                <div class="nk-sidebar-menu" data-simplebar>
                    <ul class="nk-menu">
                        <li class="nk-menu-item">
                            <a href="/dashboard" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                <span class="nk-menu-text">Dashboard</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-heading">
                            <h6 class="overline-title text-primary-alt">Menu</h6>
                        </li><!-- .nk-menu-heading -->
                        {{-- <li class="nk-menu-item">
                            <a href="html/pricing-table.html" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-article"></em></span>
                                <span class="nk-menu-text">Sponsors</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-item">
                            <a href="html/pricing-table.html" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-article"></em></span>
                                <span class="nk-menu-text">MedParts</span>
                            </a>
                        </li>
                        <!-- .nk-menu-item --> --}}
                        <li class="nk-menu-item nk-menu-dropdown">
                          <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span>
                                <span class="nk-menu-text">Tim Lomba</span>
                            </a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.website') }}" class="nk-menu-link">
                                      <span class="nk-menu-text">Tim Web Programing</span>
                                    </a>
                                  </li>
                                  <li class="nk-menu-item">
                                    <a href="{{ route('admin.timdesign') }}" class="nk-menu-link">
                                      <span class="nk-menu-text">Tim Design Package</span>
                                    </a>
                                  </li>
                                  <li class="nk-menu-item">
                                    <a href="{{ route('admin.timposter') }}" class="nk-menu-link">
                                      <span class="nk-menu-text">Tim Poster</span>
                                    </a>
                                  </li>
                                  <li class="nk-menu-item">
                                    <a href="{{ route('admin.timvideo') }}" class="nk-menu-link">
                                      <span class="nk-menu-text">Tim Videografi</span>
                                    </a>
                                  </li>
                            </ul><!-- .nk-menu-sub -->
                        </li>

                        <li class="nk-menu-item">
                            <a href="{{ route('Pengaturan.index') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-article"></em></span>
                                <span class="nk-menu-text">Pengaturan</span>
                            </a>
                        </li>

                    
                        
                        <form action="/Logout" method="POST">
                            @csrf
                            <li class="nk-menu-item">
                                <a href="/Logout" type="submit" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-signout"></em></span>
                                    <span class="nk-menu-text">Logout</span>
                                </a>
                            </li>
                        </form>
                    </div>

                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Silahkan pilih Logout untuk keluar dari halaman website</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout
                                    </button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                        <!-- .nk-menu-item -->
                        {{-- <li class="nk-menu-item">
                            <a href="/Logout" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-book-read"></em></span>
                                <span class="nk-menu-text">logout</span>
                            </a>
                        </li><!-- .nk-menu-item --> --}}
                        {{-- <li class="nk-menu-item">
                            <a href="html/pricing-table.html" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                <span class="nk-menu-text">Logout</span>
                            </a>
                        </li><!-- .nk-menu-item --> --}}
                        {{-- <li class="nk-menu-item">
                            <a href="html/pricing-table.html" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-setting-alt"></em></span>
                                <span class="nk-menu-text">Web Profile</span>
                            </a>
                        </li><!-- .nk-menu-item --> --}}
                    </ul><!-- .nk-menu -->
                </div><!-- .nk-sidebar-menu -->
            </div><!-- .nk-sidebar-content -->
        </div><!-- .nk-sidebar-element -->
    </div>
    <!-- sidebar @e -->