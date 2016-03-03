<?php
//recuperation de la session
$login = $this->session->userdata("login");
$admin = $this->session->userdata("admin");
$email = $this->session->userdata("email");


if(empty($login) || empty($email)){
    redirect('form','refresh');
}
?>

<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">CodeIgniter</a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
            <?php
            if($admin == 1){
            ?>
            <li class='dropdown'>
                <a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span>&nbsp;&nbsp;&nbsp;<?php echo $login; ?><b class='caret'></b></a>
                <ul class='dropdown-menu'>
                    <li><a href='<?php echo base_url()."user"; ?>'><i class='fa fa-user'></i>&nbsp;&nbsp;&nbsp;Profil</a></li>
                    <li><a href='<?php echo base_url()."allusers";?>'><i class='fa fa-users'></i>&nbsp;&nbsp;&nbsp;See all users</a></li>
                </ul>
            </li>
            <?php
            }else{?>
            <li class='dropdown'>
                <a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span>&nbsp;&nbsp;&nbsp;<?php echo $login; ?><b class='caret'></b></a>
                <ul class='dropdown-menu'>
                    <li><a href='<?php echo base_url()."user"; ?>'><i class='fa fa-user'></i>&nbsp;&nbsp;&nbsp;Profil</a></li>
                </ul>
            </li>
            <?php
                 }
            ?>

            <li><a href="<?php echo base_url().'adminController/logOut'; ?>"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;&nbsp;log out</a></li>
        </ul>

    </div>
</nav>