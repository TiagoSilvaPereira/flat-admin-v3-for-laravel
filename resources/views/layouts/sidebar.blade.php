<aside class="app-sidebar" id="sidebar">
    <div class="sidebar-header">
        <a class="sidebar-brand" href="#"><span class="highlight">{{ config('app.name', 'Laravel') }}</span> Admin</a>
        <button type="button" class="sidebar-toggle">
            <i class="fa fa-times"></i>
        </button>
    </div>
    <div class="sidebar-menu">
        <ul class="sidebar-nav">
            <li class="active">
                <a href="home">
                    <div class="icon">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                    </div>
                    <div class="title">Dashboard</div>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="icon">
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                    </div>
                    <div class="title">Pages</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Admin</li>
                        <li><a href="products">Products</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="sidebar-footer">
        <ul class="menu">
            <li>
                <a href="/" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
</aside>