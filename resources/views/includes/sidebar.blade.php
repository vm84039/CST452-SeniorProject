<?php
use App\Services\Data\DAO\UserDao;
use Illuminate\Support\Facades\Auth;
$UserDao = new UserDao();
if (Auth::check()) {
    $user = $UserDao->getUser(AUTH::id());
}
?>
@if (Auth::check())
    {{--        **********************Member Sidebar***************************--}}
    @if ($user->getRoleId() == '1')
        <div id="sidebar">
            <nav>
                <div class="sidebar-header">
                    <h3>Member Profile</h3>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="profile">
                            <i class="glyphicon glyphicon-home"></i>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="home">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            Games
                        </a>
                    </li>
                    <li>
                        <a href="statistics">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Game Statistics
                        </a>
                    </li>
                    <li>
                        <a href="logout">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Log Out
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
        {{--        ****************************************************************--}}
    @endif
    {{--        **********************Admin Sidebar***************************--}}
    @if ($user->getRoleId() == '2')
        <div id="sidebar">
            <nav>
                <div class="sidebar-header">
                    <h3>Administration Profile</h3>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a style="color: midnightblue" href="home">
                            <i class="glyphicon glyphicon-home"></i>
                            User Administration
                        </a>
                    </li>
                    <li>
                        <a style="color: midnightblue" href="profile">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a style="color: midnightblue" href="hangmanEdit">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Hangman Words Edit
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    @endif
@endif


        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
        <script src="https://geodata.solutions/includes/countrystate.js"></script>
