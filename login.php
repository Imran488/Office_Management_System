

<html>
<head>
    <style>
	       .header {
			  
			   left: 0;
			   bottom: 0;
			   width: 100%;
			   background: #1abc9c;
			   color: white;
			   text-align: center;
			   padding-bottom: 49px;
            }
	        body{
				text-align: center;
				background-image:url(ip.jpg);
				background-repeat: no-repeat;
				background-size: 1370px 700px;
    
			}
		.btn {
				  background-color: #4CAF50;
				  color: white;
				  padding: 16px;
				  font-size: 16px;
				  border: none;
				  border-radius: 5px;
				  cursor: pointer;
				  margin-top: 120px				  
                  
				}
		.dropdown {
                 position: relative;
                 display: inline-block;
                 }
        .dropdown-content {
                 display: none;
                 position: absolute;
                 background-color: #f1f1f1;
                 min-width: 160px;
                 box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                 z-index: 1;
		
                 }
        .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                }
		.dropdown-content a:hover {background-color: #ddd;}

		.dropdown:hover .dropdown-content {display: block;}

		.dropdown:hover .dropbtn {background-color: #3e8e41;}
		.footer {
			  
			   left: 0;
			   bottom: 0;
			   width: 100%;
			   background: #1abc9c;
			   color: white;
			   text-align: center;
			   margin-top: 280px
		}
	</style>
</head>
<body>
        <div class="header">
		  <h1>Jibon Bima company</h1>
		</div>
        <nav>
           
		   <div class="dropdown">
            <button class="btn">Log in </button>
            <div class="dropdown-content">
                <a href="manager-sign login.php">Manager</a>
                <a href="staff-login.php">Staff</a>
            </div>
			<button class="btn">About us</button>
		   </div>
		</nav>

	    <div class="footer">
	        <p><i>&copy;Team Nexus</i></p>
	    </div>
    </body>		
</body>
