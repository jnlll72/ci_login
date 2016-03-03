
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
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($allUsers as $value){
                echo"<tr><td>".$value['login']."</td><td>".$value['email']."</td>";

                if($value['admin'] == 1){
                    echo"<td>Admin</td></tr>";
                }else{
                    echo"<td>User</td></tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>