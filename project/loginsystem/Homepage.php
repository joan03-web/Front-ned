<html>
    <head>
        <title> W A T</title>

    </head>
<style>
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css");

body{
    margin:0;
    padding:0;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-variant: small-caps;
}
.homepage {
  background: url('foto_login_signup/view.jpg') no-repeat center center fixed;
  background-size: cover;
  height: 100%;
  overflow: hidden;
}

.logo{
    display: block;
    padding-top: 10px;
    height: 80px;
    width: 85px;
    margin-left: auto;
    margin-right: auto;
    cursor: pointer;
}
.Wat{
    text-align: center;
    font-size: 14px;
    color: #f0932b;
    font-variant: small-caps;

}
.Wat2{
    text-align: center;
    font-size: 16px;
    color: #f53b57;
    font-variant: small-caps;
    padding-bottom: 5px;
}
ul{
    margin:0px;
    padding:0px;
    list-style: none;
    color: black;
    margin-left: 145px;
    position: absolute;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, .3);
}
ul li{
    float:left;
    width: 200px;
    height: 65px;
    background-color: #fad390;
    opacity: .8;
    line-height: 10px;
    text-align: center;
    font-size: 20px;
    border-right: 1px solid rgba(0, 0, 0, 0.2);
}
ul li a{
    text-decoration: none;
    color: black;
    display: block;
    padding: 10 20px;
}
ul li a:hover{
    color: #d63031;
    cursor: pointer;
}
ul li ul li{
    display: none;
}
ul li:hover ul li{
    display: block;
}
ul li .icon{
    width: 30px;
    height: 30px;
    text-align: center;
    overflow: hidden;
    margin: 0 auto 5px;
}
ul li .icon .fa{
    width: 100%;
    height: 100%;
    line-height: 30px;
    transition: 0.4s;
    color: #000 ;
    font-size: 25px;
}
ul li:hover .icon .fa{
    transform: translateY(-100%);

}
ul li .icon .fa:last-child{
    color: #d63031;
}
.scrolldown{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%, -50%);
    padding-top: 300px;
}
.scrolldown span{
    display: block;
    width: 30px;
    height: 30px;
    border-bottom: 3px solid #fff;
    border-right: 3px solid #fff;
    transform: rotate(45deg);
    margin: -10px;
    animation: animate 2s infinite;
}
.box span:nth-child(2){
    animation-delay: -0.2s;
}
.box span:nth-child(3){
    animation-delay: -0.4s;
}
@keyframes animate{
    0%{
        opacity: 0;
        transform: rotate(45deg) translate(-20px, -20px);
    }
    50%{
        opacity: 1;
    }
    100%{
        opacity: 0;
        transform: rotate(45deg) translate(20px, 20px);
    }
}
.tiranaInfo{
  background: url('foto_login_signup/trr.jpg') no-repeat center center fixed;
  background-size: cover;
  height: 100%;
  overflow: hidden;
  opacity: 90%;
  animation: slide 20s infinite;
}
@keyframes slide {
    0%{
        background-image: url('foto_login_signup/grafiti.jpg');
    }
    25%{
        background-image: url('foto_login_signup/tr at night.jpg');
    }
    50%{
        background-image: url('foto_login_signup/downtown1.jpg');
    }
    75%{
        background-image: url('foto_login_signup/4evergreen.jpg');
    }
    100%{
        background-image: url('foto_login_signup/tr2.jpg');
    }
}
.paragrafTr{
    height: 150px;
    font-size: 25px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    margin-top: 300px;
    padding:30px 80px;
    text-align: justify;
    color: #34495e;
}
#textTr{
  border-radius: 10px;
  background: #FFFFFF;
  width: 100%;
  height: 200px;
  margin: 0 auto;
  position: relative;

}
</style>
<body>
    <div class = "homepage">
            <img class="logo" src="foto_login_signup/logo transparente.png" alt="Wander Around Tirana">
        <p class="Wat"> Wander Around Tirana</p>
        <p class="Wat2">In Tirana there is always more than what meets the eye</p>
        <div class="list">
            <ul>
                <li> <a href="#">
                    <div class="icon">
                        <i class="fa fa-home"></i>
                        <i class="fa fa-home"></i>
                    </div>
                    Home </a>
                </li>
                <li> <a href="#">
                    <div class="icon">
                        <i class="fa fa-users"></i>
                        <i class="fa fa-users"></i>
                    </div>
                    About us </a>
                </li>
                <li> <a href="#">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                        <i class="fa fa-map-marker"></i>
                    </div>
                    Explore Tirana </a>
                </li>
                <li> <a href="/project/contact_us/fq_contact.php">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                        <i class="fa fa-envelope"></i>
                    </div>
                    Contact us</a>
                </li>
                <li> <a href="#">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                        <i class="fa fa-user"></i>
                    </div>
                    Profile </a>
                 </li>
                <li> <a href="#">
                    <div class="icon">
                        <i class="fa fa-user-plus"></i>
                        <i class="fa fa-user-plus"></i>
                    </div>
                    Be a member </a>
                    <ul>
                        <li> <a href="signup.php"> Sign Up </a></li>
                        <li> <a href="login.php"> Login </a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="scrolldown">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
      </div>
<div class="tiranaInfo">
    <form id="textTr" action="">
             <p class="paragrafTr">Nuk është e lehtë të përshkruash Tiranën me pak fjalë. Përshkrimet si një
            ‘qytet i gjallë’, ‘me ngjyra’ janë thjesht shprehje për të dhënë idenë e kulturës, pasionit
            dhe optimizmit që ndihet në qytetin tonë. Teksa vizitoni një nga atraksionet, muzeumet,
            kështjellat përreth, apo klubet e natës dhe baret në pjesët më moderne të qytetit,
            lejoni që t’ju përfshijë emocioni dhe kënaqësia që ju pret në Tiranë. Shpresojmë që të kaloni
            një kohë të mrekullueshme në kryeqytetin e Shqipërisë, në Tiranë. </p>
    </form>
</div>
</body>
</html>
