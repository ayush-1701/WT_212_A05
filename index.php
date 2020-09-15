<!DOCTYPE HTML>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styler.css" >

    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="script.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">

    <script>
        function switchVisible() 
        {
            if (document.getElementById('RegForm')) {

                if (document.getElementById('RegForm').style.display == 'none') 
                {
                    document.getElementById('RegForm').style.display = 'block';
                    document.getElementById('fullpg').style.display = 'none';
                    document.getElementById('showTable').style.display = 'none';
                }

                else 
                {
                    document.getElementById('RegForm').style.display = 'none';
                    document.getElementById('showTable').style.display = 'none';
                    document.getElementById('fullpg').style.display = 'block';
                }
            }
        }


        function switchVisible1() {
            if (document.getElementById('showTable')) 
            {

                if (document.getElementById('showTable').style.display == 'none') 
                {
                    document.getElementById('showTable').style.display = 'block';
                    document.getElementById('RegForm').style.display = 'none';
                    document.getElementById('fullpg').style.display = 'none';
                }
                else {
                    document.getElementById('showTable').style.display = 'none';
                    document.getElementById('fullpg').style.display = 'none';
                    document.getElementById('RegForm').style.display = 'block';
                }
            }
        }       
    </script>


<style>
.Laptop {width:100%; height:0px; padding-bottom:40%; overflow:hidden; position:relative; }
.Laptop img{ position:absolute; animation:Laptop 15s infinite; opacity:0; width: 100%; height: auto;}
@keyframes Laptop {25%{opacity:1;} 40%{opacity:0;}}
.Laptop img:nth-child(1){animation-delay:0s;}
.Laptop img:nth-child(2){animation-delay:5s;}
.Laptop img:nth-child(3){animation-delay:10s;}

</style>
</head>

<body>
    <div class="header">
            <h1 style="text-align:center; color: royalblue; font-family:Montserrat; font-size:300%;"> </a> 
            Mobile World Congress 2021 </h1>
            <a href="index.html"><img class="img1"; src="MWC.jpg"></a>
    </div>

 <div id="fullpg">   
    <div class="topnavbtn ">
        <a class="active" href="index.html" >Home</a>
        <a href="#" onclick="javascript:switchVisible();">Register Now!</a>
        <a href="#" onclick="javascript:switchVisible1();">Registrations</a>
        <a href="#foot" >About</a>
    </div>

<div style="display: block;">
<div class="Laptop">
  <img src="MWCabout.png" alt="Slide 1" />
  <img src="director.png" alt="Slide 2" />
  <img src="sponsors.png" alt="Slide 3" />
</div>

<hr>
<div class="mainHome">
    <div>
        <h1 style="font-size: 230%"><i> Mobile World Congress </i></h1>
        <img class="img2" src="MWC.jpg">
        <p class="hmpg">MWC Barcelona (formerly but still commonly referred to as Mobile World Congress) is an annual trade show organized by GSMA (formerly the GSM Association), dedicated primarily to the mobile communications industry.

        The event, cancelled for 2020 due to the coronavirus pandemic, had been held in Barcelona, Catalonia, Spain at the Fira de Barcelona Gran Via, usually in February or early-March. It is attended primarily by device manufacturers, network equipment providers, representatives of wireless carriers, and the press, among others. Its annual attendance is generally around 100,000 people, while mobile phone manufacturers often use the conference to unveil upcoming devices.</p>
    </div>

    <br>

    <div>
        <h1 style="font-size: 230%"><i> About the Event </i></h1>
        <img class= "img3" src="2020.png">
        <p class="hmpg">MWC Barcelona (formerly but still commonly referred to as Mobile World Congress) is an annual trade show organized by GSMA (formerly the GSM Association), dedicated primarily to the mobile communications industry.

        The event, cancelled for 2020 due to the coronavirus pandemic, had been held in Barcelona, Catalonia, Spain at the Fira de Barcelona Gran Via, usually in February or early-March. It is attended primarily by device manufacturers, network equipment providers, representatives of wireless carriers, and the press, among others. Its annual attendance is generally around 100,000 people, while mobile phone manufacturers often use the conference to unveil upcoming devices.</p>

    
    <p> <h3>Event Location</h3>
        The 2021 event will be held at Fira Gran Via with selected events, including 4YFN, taking place at Fira Montjuïc.<br><br>

        Fira Gran Via<br>
        Av. Joan Carles<br> I
        64 08908 L’Hospitalet de Llobregat<br>
        Barcelona, Spain<br>
    </p>

    </div>
</div>
</div>
</div>

<div id="RegForm" style="display: none;">
    <div class="topnavbtn">
        <a href="index.html" >Home</a>
        <a class="active" href="#" >Register Now!</a>
        <a href="#" onclick="javascript:switchVisible1();">Registrations</a>
        <a href="#foot" >About</a>
    </div>

<div class="form">
<h1>Register yourself</h1>
    <title>Register</title>
        <form method="POST" name="form_1" class="regForm">
            <p><label for="Name">Name:</label></p>
            <p><input type="text" id="name" placeholder="ABC"></p>
            <p><label for="email">Email ID:</label></p>
            <p><input type="text" id="email" placeholder="abc@gmail.com"></p>
            <p><label for="num">Contact Number:</label></p>
            <p><input type="Number" id="number" placeholder="+91"></p>
            <p>Gender:&emsp;
                <select style="padding-left: 30dp border-radius: 10px;" name="gender" id="gender">
                    <option value="Not Specified">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </p>

            <div id="ag">
                <p>Age:&emsp;</p>
                <input type="radio" name="age" id="age_1" value="abv">
                <label for="age">Above 24</label><br>
                <input type="radio" name="age" id="age_2" value="blw">
                <label for="age">Below 24</label><br>
            </div>
            <br>
            <div>
                Interested in:
                <select style="padding-left: 5px; border-radius: 10px;" name="choice" id="choice" >
                    <option value="Gadgets">Gadgets</option>
                    <option value="Appliances">Appliances</option>
                    <option value="Innovation">Innovation</option>
                    <option value="Firmwares">Firmwares</option>
                </select>
                
            </div>

            <p>
                <br><br>
                <input name="terms" type="checkbox" id="terms" value="accept">
                <label for="terms">I accept terms and condition.</label> 
            </p>
            <p><textarea placeholder="How did you know about this Event?" id="about"></textarea></p>
            <button class="btn-3" type="submit">Submit</button>
        </form>
        <h4 id="showon">Form Submitted Successfully.</h4>
</div>
</div>


<div id="showTable" style="display: none;">
    <title>Registrations Done</title>
    <div class="topnavbtn">
        <a href="index.html" >Home</a>
        <a href="#" onclick="javascript:switchVisible();">Register Now!</a>
        <a class="active" href="#" onclick="javascript:switchVisible1();">Registrations</a>
        <a href="#foot" >About</a>
    </div>
<div id="table">
    <h1 style="text-align: center;">Registered Members</h1>
    <h4 style="text-align: center;" id="memberS">No Member Registered</h4>
    <div class="tble">
        <table id="regData">
            <thead>
                <td>Name</td>
                <td>Email</td>
                <td>Gender</td>
                
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</div>
</div>



<hr>
<br>
  <footer id="foot">
  <p style="font-family: Verdana">Project by: Ayush Kumar<br><br>
  <a href="https://www.gmail.com" style="color: red">ansingh@mitaoe.ac.in</a></p>
  <p>Ayush Kumar | 2020 | © GSMA MWC </p>
</footer>
</body>
</html>