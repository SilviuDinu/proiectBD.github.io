<html>
<style>
    input {
        width: 12%;
        padding: 12px 20px;
        margin: 5;
        border-radius: 30px;
        box-sizing: border-box;
        border: 5px solid #ccc;
    }
    input[type=text],input[type=password]{
        transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in;
    }
   img {
       width: 20%;
        transition: width 2s;
        -webkit-transition: width 2s; /* Safari 3.1 to 6.0 */
    }

    img:hover{
        width: 30% !important;
        height: auto;
    }
     input[type=text]:focus {
        background-color: lightskyblue;
        width: 15%;
         outline: none;
    }
    input[type=password]:focus {
        background-color: lightskyblue;
        width: 15%;
        outline: none;
    }
    input[type="submit"]:hover {
        background-color: yellow;
    }
    input[type="submit"]:focus{
        outline: none;
    }

    form {
        position:absolute;
        top:30%;
        right:0;
        left:0;
    }
    body, h1 {
        font-family: "Libre Baskerville", Sans-serif;
    }
    img#iphone {
        float: left;
        width: 25%;
        margin-top: 40px;
    }
   img#oneplus {
        float: right;
        width: 25%;
       margin-top: 40px;
        right: 0 !!important;
    }
    .container{
        width: 50%;
        margin: 0 auto;
       background-color: black;
        z-index: 0;
        background-color: rgba(255,255,255,0.6);
    }
    #video {
       position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        z-index: -1;
    }
</style>
<body>
<video autoplay muted loop id="video">
    <source src="tech.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>

<h1 style="position: absolute; text-align: center; font-style: italic; background-color: rgba(255,255,255,0.7); font-weight: bold; font-size: 50px; padding: 15px 0px 0px 10px; margin-left: 30%;">Sistem de licitații online<br> pentru telefoane mobile</h1>
<div class="container" style="text-align:center; vertical-align:middle">
    <form action="login1.php" method="post">
        <label for="name">Username</label>
        <input type="text" id="name" placeholder="Enter Username" name="name"><br>
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter Password" name="password"><br>
        <input type="submit" name="login" value="Login">
        <input type="submit" name="register" value="Register">
    </form>
</div>

<div class="row">
    <div class="column">
        <img src="iphone.png" id="iphone">
    </div>
    <div class="column">
        <img src="oneplus.png" id="oneplus">
    </div>
</div>

</body>
</html>