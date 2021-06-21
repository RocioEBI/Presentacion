    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                            <div class="brand-logo"></div>
                            <h2 class="brand-text mb-0">Tiyapuy</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
                </ul>
            </div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include ../../../includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" >
                   
                    <li class="nav-item <?php echo ($active == 'proceso1') ? 'active' : ''; ?> "><a class="dropdown-toggle nav-link" href="er-suelo.php"><i class="feather icon-list"></i><span data-i18n="Apps">1. E/P Suelo</span></a>
                    </li>
                    <li class="nav-item <?php echo ($active == 'proceso2') ? 'active' : ''; ?>"><a class="dropdown-toggle nav-link" href="2-sembrar.php"><i class="feather icon-droplet"></i><span data-i18n="UI Elements">2. Sembrar</span></a>
                        
                    </li>
                    <li class="nav-item <?php echo ($active == 'proceso3') ? 'active' : ''; ?>"><a class="dropdown-toggle nav-link" href="3-cultivar.php"><i class="feather icon-grid"></i><span data-i18n="Forms &amp; Tables">3. Manejar Cultivo</span></a>
                       
                    </li>
                    <li class="nav-item <?php echo ($active == 'proceso4') ? 'active' : ''; ?>"><a class="dropdown-toggle nav-link" href="4-cosechar.php"><i class="feather icon-file"></i><span data-i18n="Pages">4. Cosechar</span></a>
                       
                    </li>
                    <li class="nav-item <?php echo ($active == 'proceso5') ? 'active' : ''; ?>"><a class="dropdown-toggle nav-link" href="5-acopiar.php"><i class="feather icon-layers"></i><span data-i18n="Charts &amp; Maps">5. Acopiar y Procesar</span></a>
                        
                    </li>
                    <li class="nav-item <?php echo ($active == 'proceso6') ? 'active' : ''; ?>"><a class="dropdown-toggle nav-link" href="6-procesar.php"><i class="feather icon-briefcase"></i><span data-i18n="Others">6. Producir</span></a>
                        
                    </li>
                </ul>
            </div>
        </div>
    </div>