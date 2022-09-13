<?php
session_start();
?>

<form method="POST" >

<input type="text" name="username" placeholder="Username"> <br><br>
<input type="password" name="password_kamu" placeholder="Password"> <br><br>
<input type="submit" name="masuk" value="LOGIN">

</form>

<?php
if(isset($_POST['masuk'])){

          $username = $_POST['username'];
          $password_kamu = $_POST['password_kamu'];

          if($username == 'Silfiya')
          
          
          
          
          {

                    if($password_kamu == '123'){

                              $_SESSION['Silfiya'] = $ussername;
                              header('location: beranda.php');

                    }else{
                              echo "
                              <script>
                              alert(' PASSWORD SALAH ... !! ');
                              </script>
                              ";
                    }

          }else{
                    echo "
                    <script>
                    alert(' USERNAME TIDAK TERDAFTAR..!!! ');
                    </script>
                    ";
          
          }
}

?>