<!DOCTYPE html>
<html>
	<head>
		<title>Cross Site Request Forgery Protection</title>
	</head>
	<body>

    <link rel="stylesheet" type="text/css" href="theme.css">


    <h1>Cross-Site Request Forgery <br/> 1<sup>st</sup> method</h1>

    <div class="login-page" action="result.php" method="post">
        <div class="form">

            <form class="login-form" action="result.php" method="post">

                <input type="text" placeholder="username" name="username"/>
                <input type="password" placeholder="password" name="password"/>
                <input type="Submit" value="Login" class="loginbtn">

            </form>

        </div>
    </div>
	</body> 
</html>

