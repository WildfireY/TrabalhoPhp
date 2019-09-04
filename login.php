<!DOCTYPE html>
<html>
  <head>
    <style>
      div{
        margin-left: 550px;
        margin-right: auto;
		margin-top: 90px;
        width: 200px;
        border: 2px solid black;
        background-color: #F4EBEB;
        padding: 15px;
        border-radius: 15px;
        position: absolute;
      }
      p{
        color: black;
      }
      body{
        background-image: url("download.jpg");
      }
      input{
        border: 2.5px solid black;
        border-radius: 30px;
      }
      button{
        border: 1.5px solid black;
        border-radius: 30px;
      }
    </style>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <div>
      <?php
	  if (isset($_GET['login']))
	  {
		 $login = $_GET['login']; 
	  }
	  else
	  {
			$login = "";
	  }
	  ?>
	  <form action="valida.php" method="post">
        <center>
        <img src="logo.png">
        <b><p>Login:<input type="text" name="login" value="<?php echo $login; ?>"></p></b>
        <b><p>Senha:<input type="password" name="senha"></p></b>
        <button type="submit" name="button">Entrar</button>
		<?php
		
		if(isset($_GET['msg']))
		{
			echo "<h1>" . $_GET ['msg'] . "</h1>";
		}
		
		?>
      </center>
      </form>
    </div>
  </body>
</html>
