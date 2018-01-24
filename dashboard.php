<html>
<head>
  <title>Revels' 18 | Dashboard</title>
  <script src="jquery.min.js"></script>
  <script src="https://use.fontawesome.com/ed547843f0.js"></script>
  <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    @import url('https://fonts.googleapis.com/css?family=Questrial');
    @import url('https://fonts.googleapis.com/css?family=Lato');
    @font-face {
  font-family: 'Bebas';
  src: url('BebasNeue.otf'); /* IE9 Compat Modes */
  src: url('BebasNeue.otf') format('otf'), /* Modern Browsers */
       url('BebasNeue.otf')  format('truetype'), /* Safari, Android, iOS */
   }
html {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}
 body{
  color: #444246;
  background:#617d68;
  font-family: 'Open Sans', sans-serif;
  -webkit-font-smoothing: antialiased;
  padding: 0 0 0 0;
  overflow:hidden;
 }

*, *:after, *:before {
  -webkit-box-sizing: inherit;
          box-sizing: inherit;
}

a {
  color: #333;
  text-decoration: none;
}

html {
  width: 100%;
  height: 100%;
}

h1 {
  width: 100%;
}

.open {
  position: fixed;
  top: 40px;
  right: 40px;
  width: 60px;
  height: 60px;
  display: block;
  cursor: pointer;
  -webkit-transition: opacity 0.2s linear;
  transition: opacity 0.2s linear;
}
.open:hover {
  opacity: 0.8;
}
.open span {
  display: block;
  float: left;
  clear: both;
  height: 4px;
  width: 40px;
  border-radius: 40px;
  background-color: #fff;
  position: absolute;
  right: 3px;
  top: 3px;
  overflow: hidden;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.open span:nth-child(1) {
  margin-top: 10px;
  z-index: 9;
}
.open span:nth-child(2) {
  margin-top: 25px;
}
.open span:nth-child(3) {
  margin-top: 40px;
}

.sub-menu {
  -webkit-transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  height: 0;
  width: 0;
  right: 0;
  top: 0;
  position: absolute;
  background-color: rgba(38, 84, 133, 0.54);
  border-radius: 50%;
  z-index: 18;
  overflow: hidden;
}
.sub-menu li {
  display: block;
  float: right;
  clear: both;
  height: auto;
  margin-right: -160px;
  -webkit-transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.sub-menu li:first-child {
  margin-top: 180px;
}
.sub-menu li:nth-child(1) {
  -webkit-transition-delay: 0.05s;
}
.sub-menu li:nth-child(2) {
  -webkit-transition-delay: 0.10s;
}
.sub-menu li:nth-child(3) {
  -webkit-transition-delay: 0.15s;
}
.sub-menu li:nth-child(4) {
  -webkit-transition-delay: 0.20s;
}
.sub-menu li:nth-child(5) {
  -webkit-transition-delay: 0.25s;
}
.sub-menu li a {
  color: #fff;
  font-family: 'Lato', Arial, Helvetica, sans-serif;
  font-size: 30px;
  margin-bottom: 10px;
  width: 100%;
  display: block;
  float: left;
  line-height: 40px;
}

.oppenned .sub-menu {
  opacity: 1;
  height: 500px;
  width: 500px;
}
.oppenned span:nth-child(2) {
  overflow: visible;
}
.oppenned span:nth-child(1), .oppenned span:nth-child(3) {
  z-index: 100;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}
.oppenned span:nth-child(1) {
  -webkit-transform: rotate(45deg) translateY(12px) translateX(12px);
          transform: rotate(45deg) translateY(12px) translateX(12px);
}
.oppenned span:nth-child(2) {
  height: 500px;
  width: 500px;
  right: -160px;
  top: -160px;
  border-radius: 50%;
  background-color: rgba(38, 84, 133, 0.54);
}
.oppenned span:nth-child(3) {
  -webkit-transform: rotate(-45deg) translateY(-10px) translateX(10px);
          transform: rotate(-45deg) translateY(-10px) translateX(10px);
}
.oppenned li {
  margin-right: 168px;
}

.button {
  display: block;
  float: left;
  clear: both;
  padding: 20px 40px;
  background: #fff;
  border-radius: 3px;
  border: 2px solid #9E8BF9;
  overflow: hidden;
  position: relative;
}
.button:after {
  -webkit-transition: -webkit-transform 0.3s ease;
  transition: -webkit-transform 0.3s ease;
  transition: transform 0.3s ease;
  transition: transform 0.3s ease, -webkit-transform 0.3s ease;
  content: "";
  position: absolute;
  height: 200px;
  width: 400px;
  -webkit-transform: rotate(45deg) translateX(-540px) translateY(-100px);
          transform: rotate(45deg) translateX(-540px) translateY(-100px);
  background: #10a1ea;
  z-index: 1;
}
.button:before {
  -webkit-transition: -webkit-transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  transition: -webkit-transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  transition: transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  transition: transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55), -webkit-transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  content: attr(title);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  color: #fff;
  z-index: 2;
  text-align: center;
  padding: 20px 40px;
  -webkit-transform: translateY(200px);
          transform: translateY(200px);
}
.button:hover {
  text-decoration: none;
}
.button:hover:after {
  -webkit-transform: translateX(-300px) translateY(-100px);
          transform: translateX(-300px) translateY(-100px);
}
.button:hover:before {
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
#leftpane{      /*Actually the rightpane*/
  position: absolute;
  height:77%;
  width:30%;
  margin-left: 55%;
  margin-top: 7%;
  background:#e3ba87; 
  font-family: 'Lato', sans-serif;
  transform: scale(1);
  -webkit-transform:scale(1);
  color:#644749;
  
}
#leftpane:hover{
  -webkit-transform:scale(1.05);
  transform: scale(1.05);
  transition: transform 0.5s ease;
  -webkit-transition:-webkit-transform 0.5s ease;
}

.avatar{
  position: absolute;
  /*border-bottom: 4px solid black;*/
  width:100%;
  height:20%;
  left:-15%;

}
.usern{
  margin-top: 10%;

}
#userinfo{
  margin-top:80%;
  font-family: 'Questrial', sans-serif;
  font-size:20px;
}
#div2{
  position: absolute;
  margin-left: 17%;
  /*border:2px solid #592727;*/
  width:35%;
  height:20%;
  margin-top: 7%;
  font-family: 'Bebas',sans-serif;
  background:#e3ba87;
  color:white;
  
}
#div2:hover{
  -webkit-transform:scale(1.05);
  transform: scale(1.05);
  transition: transform 0.5s ease;
  -webkit-transition:-webkit-transform 0.5s ease;
}
.anim0{
  position: absolute;
  margin-left: 17%;
  /*border:2px solid #592727;*/
  width:35%;
  height:20%;
  margin-top:18%;
  font-family: 'Bebas',sans-serif;
  background:#dc9964;
  color:white;
 -webkit-transition: height 2s;
  transition: height 2s;
}
.anim{
	  position: absolute;
  margin-left: 17%;
  /*border:2px solid #592727;*/
  width:35%;
  margin-top:18%;
  font-family: 'Bebas',sans-serif;
  background:#dc9964;
  color:white;
  height:50%;
  -webkit-transition: height 2s;
  transition: height 2s;
  z-index:100000;
  transform: scale(1.05);
}
#div3:hover{
  -webkit-transform:scale(1.05);
  transform: scale(1.05);
  transition: transform 0.5s ease;
  -webkit-transition:-webkit-transform 0.5s ease;
}
#div4{
  position: absolute;
  margin-left: 17%;
  /*border:2px solid #592727;*/
  width:35%;
  height:20%;
  margin-top:29%;
  font-family: 'Bebas',sans-serif;
  background:#b1695a;
  color:white;
  

}
#div4:hover{
  -webkit-transform:scale(1.05);
  transform: scale(1.05);
  transition: transform 0.5s ease;
  -webkit-transition:-webkit-transform 0.5s ease;
}
#div5{
  position: absolute;
  margin-left: 17%;
  /*border:2px solid #592727;*/
  width:35%;
  height:20%;
  margin-top:40.5%;
  font-family: 'Bebas',sans-serif;
  background:#644749;
  color:white;
}
#div5:hover{
  -webkit-transform:scale(1.05);
  transform: scale(1.05);
  transition: transform 0.5s ease;
  -webkit-transition:-webkit-transform 0.5s ease;
}
#details{
  width:100%;
  margin-top:15%;
}
#delandqr{
  width:100%;
  font-size: 40px;
}
#labels{
  width:50%;
  float:left;
  border-right:2px solid #a80808;
}
#info{
  width:50%;
  float:right;
}
#div3 h1, #div4 h1, #div5 h1{
	margin-left: 10%;
	margin-top: 6%;
}
#div2 h1{
	margin-left:10%;
	font-size: 6em;
	margin-top: 6%;
}
#delava{
	width:60%;
	margin-top: 10%;
	height:20%;
	background:rgb(244,232,210);
	border-radius:80px;
	margin-left:20%;
}
#delnum{
	z-index:10000;
	padding-top: 15%;
	margin-left:56%;
	font-size:3em;
}

</style>
</head>
<body>
  <h1 width="100%;" style="margin:0 auto;position: absolute;font-family: 'Questrial',sans-serif;" align="center">DASHBOARD</h1>
  
  <div id="leftpane">
  	<div id="delava">
    <img src="a.svg" class="avatar">
    <h1 id="delnum">777</h1>
</div>
    <h1 width="100%" align="center" class="usern"><b>ARCHIT</b></h1>
    <div id="details">
        <h2 width="100%" align="center">9709076149</h2>
        <h2 width="100%" align="center">archit010@gmail.com</h2>
        <h2 width="100%" align="center">Manipal Institute of Technology</h2>
        <h2 width="100%" align="center">Manipal</h2>
        <h2 width="100%" align="center">Karnataka</h2>
  </div>
  </div>
  <div id="div2">
      <h1 width="100%">DELEGATE ID</h2>
  </div>
  <div id="div3" class="anim0">
    <h1 width="100%" style="font-size:6em;"><b>EVENTS</b></h1>
    <h1 style="right:5%;" ><b>x</b></h1>
  </div>
  <div id="div4">
    <h1 width="100%" style="font-size:6em;"><b>RESULTS</b></h1>
  </div>
  <div id="div5">
  	<h1 width="100%" style="font-size:6em;"><b>FEEDBACK</b></h1>
  </div>
<div  class="open">
  <span class="cls"></span>
  <span>
    <ul class="sub-menu ">
      <li>
        <a href="#about" title="about">Home</a>
      </li>
      <li>
        <a href="#skills" title="skills">Register for Events</a>
      </li>
      <li>
        <a href="#jobs" title="jobs">Results</a>
      </li>
      <li>
        <a href="#contact" title="contact">Contact Us</a>
      </li>
      <li>
        <a href="feedback.php" title="contact">Feedback</a>
      </li>
    </ul>
  </span>
  <span class="cls"></span>
</div>

<script>
  $(document).ready(function() {
    $(document).delegate('.open', 'click', function(event){
      $(this).addClass('oppenned');
      event.stopPropagation();
    })
    $(document).delegate('body', 'click', function(event) {
      $('.open').removeClass('oppenned');
    })
    $(document).delegate('.cls', 'click', function(event){
      $('.open').removeClass('oppenned');
      event.stopPropagation();
    });

    $('#div3').on('click', function(){

    	$(this).removeClass('anim0');
  	setTimeout(function(){$('#div3').addClass('anim')}, 50)

    })
  });

  // function my_func(){
  // 	// $('#div3').removeClass('anim0');
  // 	// $('#div3').addClass('anim')
  // 	document.getElementById("div3").classList.remove("anim0");
  // 	document.getElementById("div3").classList.add("anim");
  // }
  </script>

</body>
</html>