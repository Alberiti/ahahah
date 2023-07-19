<?php #header("Refresh:3"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url(123.jpg);
        }
        .entered{
            
            width: 500px;
            height: 300px;
            padding-top: 15%;
            padding-left: 35%;
        }
        .form_entered {
            background: rgba(205, 214, 219, 0.15);
            background-image: url(img1.jpg);
            width: 100%;
            height: 100%;
        } 

        .login_ent{
            font: italic 1.2em "Fira Sans", serif;
            color: #30ce36;
            text-align: center;
            padding-top: 85px;
            
        }
        .pass_ente{
            font: italic 1.2em "Fira Sans", serif;
            color: #30ce36;
            text-align: center;
            padding-top: 10px;
            
        }

        .btn_subm {
            text-align: center;
            margin-top: 30px;
            margin-left: 47%;
        }

        .registr{
            font: italic 1.2em "Fira Sans", serif;
            color: #e1ff00;
            
            margin-top: 10px;
            margin-left: 25%;
        }
        .floating-button {
  text-decoration: none;
  display: inline-block;
  width: 140px;
  height: 45px;
  line-height: 45px;
  border-radius: 45px;
  margin: 10px 20px;
  margin-left: 40%;
  font-family: 'Montserrat', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  text-align: center;
  letter-spacing: 3px;
  font-weight: 600;
  color: #524f4e;
  background: white;
  box-shadow: 0 8px 15px rgba(0, 0, 0, .1);
  transition: .3s;
}
.floating-button:hover {
  background: #30ce36;
  box-shadow: 0 15px 20px rgba(46, 229, 157, .4);
  color: white;
  
}
    </style>
</head>
<body>
    <div class="entered">

        <form class="form_entered">
        <p class="login_ent"> <?php echo "Login"; ?> &nbsp;&nbsp;&nbsp;&nbsp; <input type = "text"></p>  
        <p class="pass_ente"> Password <input type = "text"></p>  
        <a class="registr">Регистрация на сайте с малинкой</a>
        <input class="floating-button" type="submit" value ="Войти">

        
        </form>
    
    </div>
</body>
</html>