<!DOCTYPE html>
<html >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
</head>

<body>
    <div class="content">
        <div>
            <img src="draw2.svg" alt="" width="700vh">
        </div>
        <div class="logo" style="margin:180px 0px">
        <div onclick="facebook_call()">
            <img src=" vecteezy_facebook-png-icon_16716447.png" class="mx-2" alt="" width="45px" height="45px">
            <button class="btn" > <h3>Login with Facebook</h3></button>
        </div>
        <div onclick="gmailCall()">
        <img src="vecteezy_gmail-png-icon_16716465.png" class="mx-2" alt="" width="45px" height="45px">
            <button class="btn"> <h3>Login with Gmail</h3></button>
        </div>
        </div>
    </div>
    <p id="profile"></p>
    <p id="profile"></p>

    <div class="hidden">
        <form method="post" action="profile.php">
            <input type="text" name="CustomerName" id="name">
            <input type="text" name="email" id="email">
            <input type="text" name="gender" id="gender">
            <input type="text" name="profile" id="picture">
            <input type="text" name="friends" id="friends">
            <button id="btn">Submit</button>

        </form>
    </div>
    

      <script>
  
        <!-- Add the Facebook SDK for Javascript -->
  
        (function(d, s, id){
                              var js, fjs = d.getElementsByTagName(s)[0];
                              if (d.getElementById(id)) {return;}
                              js = d.createElement(s); js.id = id;
                              js.src = "https://connect.facebook.net/en_US/sdk.js";
                              fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk')
        );


        let facebook_call = function() {
            <!-- Initialize the SDK with your app and the Graph API version for your app -->
            FB.init({
                      appId            : '750165093897655',
                      xfbml            : true,
                      version          : 'v19.0'
                    });
            <!-- If you are logged in, automatically get your name and email adress, your public profile information -->
            FB.login(function(response) {
                      if (response.authResponse) {
                           console.log('Welcome!  Fetching your information.... ');
                           FB.api('/me', {fields: 'id,name,email,gender,picture,friends'}, function(response) {
                                    console.log(response);
                                    document.getElementById("name").value=response.name;
                                    document.getElementById("email").value=response.email;
                                    document.getElementById("gender").value=response.gender;
                                    document.getElementById("picture").value=response.picture.data.url;
                                    console.log(response.picture.data.url);
                                    document.getElementById("friends").value=response.friends.summary.total_count;
                                    document.getElementById("btn").click();
                            //    document.getElementById("profile").innerHTML = "Good to see you, " + response.name + ". i see your email address is " + response.email
                           });
                      } else { 
                           <!-- If you are not logged in, the login dialog will open for you to login asking for permission to get your public profile and email -->
                           console.log('User cancelled login or did not fully authorize.'); }
            });
        };

        let gmailCall=function(){
            window.location.href = "gmail_profile.html";

        }
      </script>

</body>

</html>