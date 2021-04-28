<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/stylesignin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="bg-img">
        <div class="content">
            <header>Sign In</header>
            <form action="#">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" placeholder="Email or Phone " required>
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" class="password" required  placeholder="Password">
                    <span class="show">SHOW</span>
                </div>
                <div class="pass">
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="field">
                    <input type="submit" value="Sign In">
                </div>
                <div class="signin">Or signin with</div>
            <div class="link">
                <div class="facebook">
                    <i class="fab fa-facebook-f"><span>Facebook</span></i>
                </div>
                <div class="Google">
                    <i class="fab fa-google"><span>Google</span></i>
                </div>
            </div>
            <div class="signup">Don't have account?
                <a href="#">Signup Now</a>
            </div>
            </form>
        </div>
    </div>
    <script>
        const pass_field=document.querySelector('.password');
        const show_btn=document.querySelector('.show');
        pass_field.addEventListener('click',function(){
              if(pass_field.type==="password"){
                  pass_field.type="text";
                  pass_field.style.color="#3498db";
                  show_btn.textContent="HIDE";
              }
              else{
                  pass_field.type="password";
                  show_btn.style.color="#222";
                  show_btn.textContent="SHOW";
              }
        });
    </script>
</body>
</html>