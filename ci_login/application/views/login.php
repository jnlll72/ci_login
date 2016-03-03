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
			<li><a href="<?php echo base_url().'signup/'?>"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;sign up</a></li>
		</ul>
	</div>
</nav>


<div class="container">

    <?php
    $attributes = array("class"=>"form-horizontal","id"=>"myform");
    echo form_open('VerifyLogin',$attributes);
    ?>
    <!--<form class="form-horizontal">-->
    <fieldset>
        <!-- Form Name -->
        <legend>CONNECTION</legend>

        <?php echo form_error('txt_login') ?>
        <?php echo form_error('txt_pass') ?>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="txt_login">Login : </label>  
            <div class="col-md-4">
                <input id="txt_login" name="txt_login" type="text" class="form-control input-md"/>
            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="txt_pass">Password :</label>
            <div class="col-md-4">
                <input id="txt_pass" name="txt_pass" type="password" class="form-control input-md"/>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="btn_submit"></label>
            <div class="col-md-4">
                <input id="btn_submit" type="submit" name="btn_submit" class="btn btn-primary" value="Submit"/>
            </div>
        </div>
    </fieldset>
    </form>
</div>