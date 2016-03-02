<div class="container">

    <table class="table">
        <tr>
            <th>Login</th>
            <th>Password</th>
        </tr>
        <?php

        //recuperation de la session
        /*$login = $this->session->userdata("login");
        $pass = $this->session->userdata("pass");
        echo "Login : ".$login.", Password : ".$pass;*/

        //recupere le tableau renvoyer par le modele UserModel avec la liste de tous les users
        $result = $this->user->selectAll();
        foreach($result as $key => $value){
            echo "<tr><td>".$value['login']."</td><td>".$value['password']."</td></tr>";
        }

        ?>
    </table>
</div>