<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $error = []; 
    $subject = $_POST['subject']; 
    $to = 'udohimo@gmail.com'; 
    $body = $_POST['message']; 
    if($body == '' || $body == ' ') { 
        $error[] = 'Message cannot be empty.'; 
        } 
        if($subject == '' || $subject == ' ')  { 
            $error[] = 'Subject cannot be empty.'; 
            } 
            if(empty($error)) { 
                $config = include __DIR__ . "/../config.php";
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);

      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];

      $url = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

      header("location: $url"); } 
                    } ?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Imo Udo| HNG Intern Profile</title>
<style type="text/css">
body{background-color:#85f678;
margin-top:10%;}
.left {width:50%;
float: left;}
p {text-align:center}

a {text-align:center}

h1 {font-family:cooper;}

h2 {font-family:vernada;}
.right {float: right;
width: 40%;
margin-right:8%;}

h3 {font-family:bell mt;}
.right {float: right;
width: 40%;
margin-right:8%;}

h4 {font-family:bodini;}
.right {float: right;
width: 40%;
margin-right:8%;}

a {text-decoration: none;}

a:link {color: blue;}
/* visited link */

a:visited {color: red;}

p {width:70%;}

textarea {width: 100%;
height: 150px;
padding: 12px 20px;
box-sizing: border-box;
border: 2px solid #ccc;
border-radius: 4px;
background-color: #f8f8f8;
resize: none;}

img {border-radius: 35%;}

input[type=button], input[type=submit], input[type=reset] {
background-color: #00ffff;
border: 2px;
color: white;
padding: 16px 32px;
text-decoration: none;
margin: 4px 2px;
cursor: pointer;}

legend {text-align:center;
border-radius: 20;}
</style>
</head>

<body>

<div class="left" style="text-align:center;">
<h1>PROFILE</h1>
<img src = "https://ca.slack-edge.com/T3QLSP8HM-U6W8RGQ3U-bdf242b227f2-512"
height = "200"
width = "200"
alt = "profile picture" />
<p></p>
<fieldset>
<legend><h2> Udoh, Imo Ime</h2></legend>
<h4> I am an Akwa Ibomite and a graduate of <br>Geography and Regional Planning from <br>University of Uyo, Uyo.</h4>
<p><h4> I'm a lover of Technology and a people's person.<br>
    When faced with persistent problems, 
	<br>I like taking long walks to clear my head 
	<br>as well as taking some steps back <br>to view the bigger picture.</h4>
	</fieldset>
<fieldset><a href="https://hnginterns.slack.com/team/U6W8RGQ3U">udohimo</a>
<a href="https://github.com/udohimo/">#Stage1</a></fieldset>
</div>
<div class="right">
<fieldset>
<legend><h3> Contact Udohimo </h3></legend>

<form  action="#" method="POST"> 
<div class="container"> 
<input name="customer_mail" id="customer_mail" class="dannys-input" placeholder="Your E-mail"> <br>
<input type="text" class="input" name="fullname" placeholder="Name*" required> 
<input type="text" class="input" name="subject" placeholder="Subject*" required> 
<textarea name="message" placeholder="Type your message here*" id="message" cols="30" rows="10" style="height:100px" required>
</textarea> <button type="submit">Send</button></div>
</form>	

</fieldset></div>
</body>
</html>