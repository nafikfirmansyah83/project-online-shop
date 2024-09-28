<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hai User</title>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: white;
}
.wrapper{
  display: flex;
}
.wrapper .statis{
  color: black;
  font-size: 60px;
  font-weight: 400;
}
.wrapper .bergerak{
  margin-left: 15px;
  height: 90px;
  line-height: 90px;
  overflow: hidden;
}
.bergerak li{
  list-style: none;
  color: #FC6D6D;
  font-size: 60px;
  font-weight: 500;
  position: relative;
  top: 0;
  animation: slide 12s steps(4);
}
@keyframes slide {
  100%{
    top: -360px;
  }
}
.bergerak li span{
  position: relative;
  margin: 5px 0;
  line-height: 80px;
}
.bergerak li span::after{
  content: "";
  position: absolute;
  left: 0;
  height: 100%;
  width: 100%;
  background: white;
  border-left: 2px solid #FC6D6D;
  animation: typing 3s steps(10);
  animation-iteration-count: 4;
}
@keyframes typing {
  40%, 60%{
    left: calc(100% + 20px);
  }
  100%{
    left: 0;
  }
}
  </style>
</head>
<body>
	<div class="wrapper">
		<div class="statis">Selamat</div>
		<ul class="bergerak">
			<li><span>Datang</span></li>
		</ul>
	</div>
</body>
<?php
	echo '<meta http-equiv="refresh" content="4; url=./beranda.php"/>';
?>
</html>
