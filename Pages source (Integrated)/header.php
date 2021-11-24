<style>
:root{
    --orange:#ff7800;
    --red:#922B21;
    --pearl: #FFEFD5;
    --green:#00ff00;
    --black:#130f40;
    --light-color:#666;
    --box-shadow:.0 .5rem 1rem rgba(0,0,0,.1);
    --border: .2rem solid rgba(0,0,0,.1);
    --outline: .1rem solid rgba(0,0,0,.1);
    --outline-hover: .2rem solid var(--black);
}

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0%; 
    box-sizing: border-box;
    outline: none; border: none;
    text-transform: capitalize;
    text-decoration: none;
    transition: all .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 7rem;
}

.header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    background: #fff;
    -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    padding: 2rem 5%;
  }
  
  .header .logo {
    font-size: 2.5rem;
    font-weight: bolder;
    color: #222;
  }
  
  .header .logo i {
    color: var(--red);
    padding-right: .5rem;
  }
  
  .header .navbar a {
    font-size: 1.7rem;
    color: #666;
    margin: 0 1rem;
  }
  
  .header .navbar a:hover {
    color: var(--red);
  }
  
  .header .icons div {
    font-size: 2.5rem;
    margin-left: 1.7rem;
    cursor: pointer;
    color: #666;
  }

  .header .icons div .badge {
    position: absolute;
    top: 40px;
    right: 170px;
    padding: 5px 10px;
    border-radius: 50%;
    background-color: red;
    color: white;
    width: 25px;
    height: 25px;
    font-size: 16px;   
  }
  
  .header .icons div:hover {
    color: var(--red);
  }

  .header .icons div button{
    font-size: 2.5rem;
    margin-left: 1.7rem;
    cursor: pointer;
    color: #666;
    right: 0;
  }
  
  .header .icons div button:hover {
    color: var(--red);
  }  

  .header .login-form {
    position: absolute;
    top: 115%;
    right: -105%;
    background: #fff;
    border-radius: .5rem;
    -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    width: 35rem;
    padding: 2rem;
  }
  
  .header .login-form.active {
    right: 2rem;
    -webkit-transition: .4s linear;
    transition: .4s linear;
  }
  
  .header .login-form h3 {
    color: #222;
    text-transform: uppercase;
    font-size: 2.2rem;
    text-align: center;
    margin-bottom: .7rem;
  }
  
  .header .login-form .box {
    margin: .7rem 0;
    border: 0.1rem solid rgba(0, 0, 0, 0.1);
    padding: 1rem 1.2rem;
    font-size: 1.5rem;
    color: #222;
    text-transform: none;
    width: 100%;
  }
  
  .header .login-form .remember {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    gap: .5rem;
    margin: .7rem 0;
  }
  
  .header .login-form .remember label {
    font-size: 1.5rem;
    color: #666;
    cursor: pointer;
  }
  
  .header .login-form .btn {
    margin: 1rem 0;
    width: 100%;
    text-align: center;
  }
  
  .header .login-form p {
    color: #666;
    padding-top: .7rem;
    font-size: 1.4rem;
  }
  
  .header .login-form p a {
    color: var(--red);
  }
  
  .header .login-form p a:hover {
    text-decoration: underline;
  }

  #menu-btn {
    display: none;
  }

  #search-btn {
    display: none;
  }

  #login-btn{
    position: relative;
  }  

</style>
<header class="header">
    
    <a href="Home.php" class="logo"> <img src="../Assets/Images/Web/MLDS LOGO.png" height="100px" width="180px"></a>
    <!--fas fa-shopping-basket-->
    <nav class="navbar">
        <a href="Home.php">Home</a>
        <a href="TroupeList.php">Troupes</a>
        <a href="Aboutus.php">About Us</a>
        <a href="TroupeWithUs.php">Troupe With Us</a>
        <a href="ContactUs.php">Contact Us</a>
    </nav>
    <!-- <span class="badge">3</span> -->
            <div class="icons">
                <div class="fas fa-search" id="search-btn"></div>                
                <div class="fas fa-user" id="login-btn"></div>
            </div>

            <form action="" class="login-form" id="login-form">
                <h3>login now</h3>
                <input type="email" id="email" placeholder="Enter your email" class="box">
                <span class="login-fail" id="email-wrong"></span>
                <input type="password" id="passw" placeholder="Enter your password" class="box">
                <span class="login-fail" id="passw-wrong"></span>
                <div class="remember">
                    <input type="checkbox" name="" id="remember-me">
                    <label for="remember-me">remember me</label>
                </div>
                <input type="submit" value="login now" class="btn">
                <p>forget your password <a href="">click here</a></p>
                <p>don't have an account <a href="Register.php">create one</a></p>
                
            </form>

</header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    const emailRegx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    $(document).ready(function(){
        $(".login-form").submit(function(e){
            e.preventDefault();
            
            if($("#email").val() == ""){
            $("#email-wrong").html("<i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Please enter the email");
            $("#email-wrong").show();
            $("#passw-wrong").hide();
            }
            else if(!emailRegx.test($("#email").val())){
            $("#email-wrong").html("<i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Invalid email");
            $("#email-wrong").show();
            $("#passw-wrong").hide();
            }
            else{
            $(".login-fail").hide();
             var xmlhttp=new XMLHttpRequest();
                xmlhttp.onreadystatechange=function() {
                    if (this.readyState==4 && this.status==200) {
                    document.getElementById("login-form").innerHTML=this.responseText;
                    }
                }
                xmlhttp.open("GET","ajaxLogin.php?email="+$("#email").val()+"&passw="+$("#passw").val()+"",false);
                xmlhttp.send();
                if(xmlhttp.responseText == "<h1 style='text-align:center;color:#09e32d'>Troupe Login success !</h1><br>")
                window.location.href = "TroupeHome.php";
                else if(xmlhttp.responseText == "<h1 style='text-align:center;color:#09e32d'>Inviter Login success !</h1><br>")
                window.location.href = "Home.php";
            }
        });
    });

function redirectPage(){
    setInterval(function(){
        var count = document.getElementById("count").innerHTML;
        count = count - 1;
        document.getElementById("count").innerHTML = count;
        if(count == 0)
        window.location.href = "https://www.youtube.com";
        },1000);
    }
    
    function please(){
    window.location.href = "https://www.facebook.com";
  }
</script>
