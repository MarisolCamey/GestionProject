<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login </title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    
    
    <link rel="stylesheet" href="css/style.css">
	
	<style>
	
        
        body{

            background-image: url(./images/ofi7.jpg);
            background-repeat: no-repeat;
            background-size:cover, contain;
            backdrop-filter: blur(7px);
            -webkit-backdrop-filter: blur(8px);
        }
        
        .welcome{
            width: 100%;
            max-width: 600px;
            margin: auto;
            margin-top: 100px;
            background: #22222221;
            text-align: center;
            padding: 20px;
        }
        
        

        .welcome h1{
            font-size: 50px;
            color: white;
            font-weight: 100;
            margin-top: 20px;
        }
        
        .welcome a{
            display: block;
            margin-top: 40px;
            font-size: 20px;
            padding: 10px;
            border: 1px solid rgba(0, 0, 0, 0);
        }
        
        .welcome a:hover{
            color: black;
            background: white;
        }
        
    
    </style>

    
</head>
<body>
  

        <div class="welcome">
		
		
            
            <div class="menu">
                <a href="login.php"><li class="module-login">Login</li></a>
                <a href="register.php"><li class="module-register active">Register</li></a>
            </div>
       
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
        
            <div class="welcome-form" ><h1  align="center">Bienvenido</h1></div>
            <div class="user line-input">
                <label class="lnr lnr-envelope"></label>
                <input type="text" placeholder="Correo" name="correo">
            </div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Nombre Usuario" name="usuario">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Contraseña" name="clave">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Confirmar contraseña" name="clave2">
            </div>
            
            <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
            <button type="submit" align="center">Registrarse<label class="login100-form validate-form"></label></button>
			
               
    </form>
    

    
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>