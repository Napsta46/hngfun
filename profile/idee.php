<?php
      if (isset($_GET['send']))  {
      $to = "idee4ril@gmail.com";
      $subject = $_GET['subject'];
      $body = $_GET['message'];    
      $config = include(dirname(dirname(__FILE__)).'/config.php');
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
            header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$body&to=$to");
        }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
        <title>Idorenyin Obong</title>
<style type="text/css">
body {
background-color:#FF6800;
margin-top:10%;
}

.left {
width:50%;
float: left;
}

p {
text-align:center
}

a {

}

h1 {
font-family:verdana;

}

h3 {font-family:tahoma;}

.right {
float: right;
width: 40%;
margin-right:8%;
}

input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}

a {
text-decoration: none;
}

a:link {
    color: red;
}

/* visited link */
a:visited {
    color: green;
}



p {
width:50%;
}

textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
}

img {
    border-radius: 50%;
}

input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}

</style>
</head>

<body>

<div class="left" style="text-align:center;">


<img  alt ="profile picture" src="http://res.cloudinary.com/dzb4ks1n6/image/upload/v1503723471/14657334_1259677607387062_8116538770825805178_n_i1hcus.jpg"/>
	
<h1>Idorenyin Obong</h1>
<h3>Slack Username- @idee</h3>
<h4>My name is Idorenyin Obong, an Android Developer from Ini LGA, Akwa Ibom State. I am a 400L student of Cross River University of Technology </h4>
<h2><a href="https://github.com/KingIdee/hng-stage1">Stage 1 project</a></h2>

</div>


<div class="right">



<h3> Contact Idorenyin! </h3>
<form action="" method="get">
  
  <input type="text" placeholder="Name" name="name" required/>
  <input type="text" placeholder="Email Subject" name="subject" required/>
 

<textarea name="message" placeholder="Message" required cols="4" rows="4" />
Hello Idee! I'll love you to create an android app for me!
</textarea>


<input type="submit" value="submit" name="send" style="width:100%;"/>

</form>


</div>



</body>



</html>
