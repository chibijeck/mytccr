<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <center>
                    <img src="images/CCRO_LOGO.png" alt="logo" style="width: 80%;">
                </center>
            </li>
            <li class="sidebar-search">
                <div class="text-center">
                    WELCOME! <br>[<b>{{ $_COOKIE['employee'] }}</b>]
                </div>

                <br>
                <center><a href="/login"><button>LOGOUT</button></a></center>
                <!-- /input-group -->
            </li>
            <li>
                <a href="/admin"><i class="fa fa-edit fa-fw"></i> DASHBOARD</a>
            </li>

            @if( $_COOKIE['account_type'] == 'admin' )
                <li>
                    <a href="/appointments"><i class="fa fa-edit fa-fw"></i> APPOINTMENTS</a>
                </li>
            @endif

            <li>
                <a href="/release"><i class="fa fa-edit fa-fw"></i> RELEASE DOCUMENT</a>
            </li>

            @if( $_COOKIE['account_type'] == 'admin' )
                <li>
                    <a href="/manageuser"><i class="fa fa-edit fa-fw"></i> MANAGE USERS</a>
                </li>
            @endif
            
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->