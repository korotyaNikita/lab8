<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Головна
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('license_plates.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-check"></i>
                    <p>
                        Номерні знаки
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('vehicles.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-car"></i>
                    <p>
                        Транспортні засоби
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('personal.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Особистий кабінет
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
