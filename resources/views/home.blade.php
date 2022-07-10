<?php
    use Illuminate\Support\Facades\Auth;
    use App\Services\Data\DAO\UserDao;
    use Illuminate\Support\Facades\Redirect;

    if (!Auth::check()) { Redirect::to('home')->send();}
    $DAO = new UserDao();
    $user = $DAO->getUser(Auth::ID());
?>
@if($user->getRoleId() != 2)
    @include('role-member.memberDashboard')
@else
    @include('role-admin.adminDashboard')
@endif

