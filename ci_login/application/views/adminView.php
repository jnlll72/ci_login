
<?php
$admin = $this->session->userdata("admin");

if($admin ==0){
    redirect("user",'refresh');
}
?>
<div class="container">
    <h3>ALL USERS</h3>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Login</th>
                <th>Email</th>
                <th>Grants</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($allUsers as $key => $value){
                echo"<tr><td>".$value['login']."</td><td>".$value['email']."</td>";

                if($value['admin'] == 1){
                    echo"<td>Admin</td>";
                }else{
                    echo"<td>User</td>";
                }
                
                if($key > 0){
                    echo"<td><input type='radio' name='optionsRadios' class='btn_radio' value=".$value['id']."></td></tr>";
                }else{
                    echo"<td></td></tr>";
                }
                
                
            }
            ?>
        </tbody>
    </table>

    <a href="#" class="btn btn-default pull-right" id="linkUpdate">MODIFIER</a>
    <a href="#" class="btn btn-default pull-right" id="linkDelete">SUPPRIMER</a>
</div>