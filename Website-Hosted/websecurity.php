<!Doctype>

<html>
	
<head>
	<meta charset="UTF-8">
	<title>Webtech Finals</title>
	<link rel="stylesheet" type="text/css" href="css/topics.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script src="js/selection.js" async></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
</head>
	
<body>
	<div class="container-a">
		<div class="header">
			<div class="header-left">
				<a href="index.php">
				<img id="header-img" src="images/header.png" alt="website header">
				</a>
			</div>
			<ul class="nav-a">
                <?php
                    include('php/login.php');
                    if(!isset($_SESSION['login_user'])){
                        echo "<li><button type='button' class='top-btn' data-toggle='modal' data-target='#login-modal'>Log In</button></li>
                        <li><button type='button' class='top-btn' data-toggle='modal' data-target='#signup-modal'>Sign Up</button></li>";
                    } else {
                        $username = $_SESSION['login_user'];
                       echo '
							<li class="dropdown">
								<span class="dropdown-toggle" data-toggle="dropdown" href="#">'.$username.'&nbsp;<span class="caret"></span></span>
								<ul class="dropdown-menu dropdown-menu-right">
									<div class="dropdown-divider"></div>
									<li class="logout"><a href="php/logout.php">Logout</a></li>
								</ul>
							</li>
							';
                    }
				?>
			</ul>
		</div>
		<div id="login-modal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Log In</h4>
					</div>
					<div class="modal-body">
						<div class="board">
                            <form method="post" action="php/login.php">
								<label>Username</label>
								<input class="login-field" type="text" name="username" required>
								<label>Password</label>
								<input class="login-field" type=password name="password" required>
								<input type="submit" value="Login" id="submit-form" style="display: none;"/>
                            </form>
						</div>
					</div>
					<div class="modal-footer">
						<label class="btn btn-success" for="submit-form" tabindex="0" class="q-btn" id="submit">Login</label>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		<div id="signup-modal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Sign Up</h4>
					</div>
					<div class="modal-body">
						<div class="board">
                            <form method="post" action = "php/register.php">
                                <label>Name</label>
                                <input class="login-field" type="text" name="name" required>
                                <label>Username</label><br>
                                <input class="login-field" type="text" name="username" required>
                                <label>Password</label><br>
                                <input class="login-field" type=password name="password" required>
								<input type="submit" value="register" id="submit-form-a" style="display: none;"/>
                            </form>			
						</div>
					</div>
					<div class="modal-footer">
						<label class="btn btn-success" for="submit-form-a" tabindex="0" class="q-btn" id="submit">Register</label>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="body">
			
			<div class="container">
				<div class="jumbotron banner">
					<img class="nav-img" src="images/web-security-logo.png">
				</div>
			</div>
			
			<div class="nav-custom">
				<ul class="nav-a">
					<li class="dropdown">
						<a class="dropdown-toggle cus-dropdown" data-toggle="dropdown" href="#">Topics</a>
						<ul class="dropdown-menu cus-dropdown-menu">
							<li><a class="tablinks" onclick="openTab(event, 't1')">Web Security</a></li>
							<li><a class="tablinks" onclick="openTab(event, 't2')">OWASP Top 10 Security Risks 2017</a></li>
						</ul>
				  </li>
				</ul>
				<ul class="nav-a">
					<li><a href="quizzes/websec-quizlet.php" class="custom-a">Take Quiz</a></li>
				</ul>
			</div>
			
			<div class="container container-1">
				<div class="t-container">
					
					<div id="t1" class="tabcontent">
                        <h2>Web Security</h2>
                        <p>- A lot of people use the internet for a plethora of things, may it be e-commerce, communication, or for entertainment, they will in one or more instances input their personnal information when utilizing such services. Web security exist to protect users of websites or even the website itself from hackers who might utilize what they got from the website for unlawful act.</p>
                    </div>
                    <div id="t2" class="tabcontent">
                        <h2>Top Ten AApplication Security Risks for 2017 from OWASP</h2>
                        <ol type="1">
                            <li>Injection
                                <ul>
                                     <li>Occurs usually for SQL when malicious SQL statements are sent to an input within an web application that is inside of an SQL query and the malicious SQL statements will be run alongside the the SQL query.</li>
                                    <li>To prevent injection, data should be separate from SQL queries in other words don't construct queries with user inputs</li>
                                </ul>
                            </li>
                            <li>Broken Authentication
                                <ul>
                                    <li>Broken authentication is due to the incorrect or lacking design and implementation of the identity and access controls. Attackers detect broken authentication with the use of automated tools that could send attacks like credential stuffing or use default administrative accounts.</li>
                                    <li>Create a strong implementation of authentication to prevent attacks like brute force or credential stuffing along with strong implementation of session management are some ways to prevent broken authentication. </li>
                                </ul>
                            </li>
                            <li> Sensitive Data Exposure
                                <ul>
                                    <li>Sensitive data exposure vulnerabilities can occur when a web application does not provide adequate protection for sensitive information from being disclosed or gained access to by attackers. </li>
                                    <li>One way to prevent sensitive data exposure would be to utilize encryption for sensitive data such as paswords but one thing to look out for would be not to utilize already compromised encryption.</li>
                                </ul>
                            </li>
                            <li> XML External Entities (XXE)
                                <ul>
                                    <li>XML External Entities occrt wherein an attacker can utilize Denial of Service and find access to files and services, by exploiting an easily accesible, seldom used feature in XML parsers(to access and manipulate XML).</li>
                                    <li>One method of prevention from XML External Entities would be disable unecessary features from the XML parser configurations. </li>
                                </ul>
                            </li>
                            <li>Broken Access Control
                                <ul>
                                    <li>Broken access control refers to unauthorized access to a system functionality and resources has created exploitable weaknesses that could expose your web application to malicious attackers.</li>
                                    <li>Prevention of broken access control stems from application of correct control rules within a web application.</li>
                                </ul>
                            </li>  
                            <li>Security Misconfiguration
                                <ul>
                                    <li> Security misconfiguration occurs when attackers discover access or retrieve data from the system by accessing default accounts, unprotected files and directories or misconfigured security setting for their own benefit which then gives a business impact depending on the level of protection of data in any level of an application stack which includes databases,storages, platforms and codes that could be configured.</li>
                                    <li>Simpliest prevention mechanism wouldd to implement a web application with minimalistic features and components.</li>
                                </ul>
                            </li>  
                            <li>Cross-Site Scripting (XSS)
                                <ul>
                                    <li>Cross-Site Scripting (XSS) occurs when attackers utilize a web application that is vulnerable, once a user visits or uses the web application, a malicious script is delivered to the users web browser thus compromising it.</li>
                                    <li>Prevention for Cross-Site Scripting simply boils down to never inputting of untrusted data into the HTML input unless its HTML encoded at the very least secure.</li>
                                </ul>
                            </li>  
                            <li> Insecure Deserialization
                                <ul>
                                    <li>Insecure Deserialization occurs when malicious code is injected and executed within the application server through insecure deserialization resulting to access and control of the web application.</li>
                                    <li>One way of preventing insecure deserialization is to not accept serialized objects from unknown or untrusted sources.</li>
                                </ul>
                            </li>  
                            <li>Using Components with Known Vulnerabilities
                                <ul>
                                    <li>As the name suggests, using components with known vulnerabilities, sofware modules such as libraries, can result in attackers gaining access private information or control of the web application.</li>
                                    <li>One way of preventing usage of components with known vulnerabilites is to searching the net for components if there are know vulnerabilities from it since there are a lot of websites that offer information on compromised and safe components.</li>
                                </ul>
                            </li>  
                            <li>Insufficient Logging and Monitoring
                                <ul>
                                    <li>Insufficient logging and monitoring occurs when secui=rity events aren't tracked properly and events aren't also monitored.This can result in in worse outcome from attackers or malicious acripts and softwares.</li>
                                    <li>Prevention of insufficient logging and monitoring requires that inputs and interations with web application are properly loggedand monitored.</li>
                                </ul>
                            </li>  
                        </ol>
                    </div>
				</div>
			</div>
            <div class="breaker"></div>
		</div>
		
		<div class="footer">Saint Louis University &copy; 2018</div>
		
		<script src="js/topics.js"></script>
	</div>
</body>
	
</html>