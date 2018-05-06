<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Minovate - Admin Dashboard</title>
        <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- ===============================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/animate.css">
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="assets/js/vendor/animsition/css/animsition.min.css">

        <!-- project main css files -->
        <link rel="stylesheet" href="assets/css/main.css">
        <!--/ stylesheets -->



   

 <link rel="stylesheet" href="login/login.css">
  <script src="login/login.js" type="text/javascript" language="javascript"></script>
	<script language="javascript">
		$(document).ready(function()
		{
			$("#login_form").submit(function()
		{
		//remove all the class add the messagebox classes and start fading
		$("#msgbox").removeClass().addClass('messagebox').text('Validation....').fadeIn(1000);
		//check the username exists or not from ajax
		$.post("login/login.php",{ login:$('#input-username').val(),password:$('#input-password').val(),rand:Math.random() } ,function(data)
        {
		  if(data!='no') //if correct login detail
		  {
		  	$("#msgbox").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  
			  $(this).html('Bienvenu.....').addClass('messageboxok').fadeTo(900,1,
              function()
			  { 
			  	 //redirect to secure page
				 document.location=data;
			  });
			  
			});
		  }
		  else 
		  {
		  	$("#msgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Erreur d`authentification...').addClass('messageboxerror').fadeTo(900,1);
			});		
          }
				
        });
 		return false; //not to post the  form physically
	});
	//now call the ajax also focus move from 
	$("#password").blur(function()
	{
		$("#login_form").trigger('submit');
	});
});
</script>



    </head>





    <body id="minovate" class="appWrapper">

        <div id="wrap">




            <div class="page page-core page-login">

                <div class="text-center"><h1 class="text-light text-white"><span class="text-lightred"><strong>Ban</span>Kash</strong></h1></div>

                <div class="container w-420 p-15 bg-white mt-40 text-center">


                    <h2 class="text-light text-greensea">Administration</h2>

                 <form method="post" id="login_form"  action="">
<div class="partie_erreur" id="rep">
		   <span id="msgbox" style="display:none">
		   </span></div>
                        <div class="form-group">
                            <input type="text" id="input-username"  class="form-control underline-input" placeholder="Identifiant">
                        </div>

                        <div class="form-group">
                            <input type="password" id="input-password" placeholder="Mot de passe" class="form-control underline-input">
                        </div>

                        <div class="form-group text-left mt-20">
                            <button type="submit" class="btn btn-greensea b-0 br-2 mr-5">Connexion</button>
                            
                        </div>

                    </form>

                    <hr class="b-3x">

                </div>

            </div>



        </div>
       

    </body>

</html>
