<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Cinema On Stage</title>
	<style>
		.body {
			/* font-family: Verdana, Arial, Helvetica, sans-serif; */
			font-size: 12px;
			line-height: 18px;
		}

		.Intext {
			padding: 7px;
			width: 100%;
			margin-bottom: 10px;
		}

		.Intext1 {
			padding: 7px;
			width: 100%;
			margin-bottom: 10px;
			border: 1px solid #ccc;
		}

		.Submitbutton {
			background-color: #f44336;
			border: 0px;
			padding: 5px 15px;
			color: #fff;
			margin-top: 0px;
			width: 100px;
			border-radius: 10px;
		}

		h2 {
			font-size: 16px;
			color: #FFF;
			/* border-bottom: 1px solid #202020; */
			line-height: 35px;
			margin-bottom: 0px;
			/* font-family: Arial, Helvetica, sans-serif; */
			font-weight: 100;
			text-align: center;
			text-transform: uppercase;
			background-color: #a98922;
			padding: 5px 0px 0px;
			margin-top: -5px;
		}

		.t {
			font-size: 12px;
			color: #FFCC00;
			padding: 5px;
			margin-bottom: 15px;
			text-align: center;
			/* font-family: Arial, Helvetica, sans-serif; */
			line-height: 22px;
		}

		.area {
			padding: 7px 7px 8px 4px;
			color: #6f6e6e;
			width: 99.5%;
			margin-bottom: 10px;
			border: 1px solid #ccc;
		}

		.area1 {
			padding: 7px;
			width: 94.5%;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			color: #6b6b6b;
		}

		.inl {
			width: 24%;
			float: left;
			padding: 0px;
			margin-left: 30px;
		}

		.inr {
			width: 70%;
			float: left;
		}

		#T a:link {
			color: #fff;
			text-decoration: none;
		}

		#T a:visited {
			color: #fff;
			text-decoration: none;
		}

		#T a:hover {
			color: #fff;
			text-decoration: none;
		}


		.BookNow {
			background-color: #e10a7e;
			padding: 5px 10px;
			width: 210px;
			border-radius: 20px;
			font-size: 20px;
			text-decoration: none;
		}
		.anchor_tag{
			color: #fff !important;
			text-decoration: unset;
		}
		.anchor_tag:hover{
			color: #fff !important;
			text-decoration: underline;

		}

		@media only screen and (max-width: 480px) {
			h2 {
				font-size: 12px !important;
				margin-bottom: 5px;
			}

			.t {
				font-size: 12px;
				color: #FFCC00;
				padding: 5px;
				margin-bottom: 15px;
				text-align: center;
				/* font-family: Arial, Helvetica, sans-serif; */
				line-height: 18px;
			}
		}

		@media only screen and (max-width: 768px) {
			h2 {
				font-size: 22px !important;
				margin-bottom: 10px;
				text-transform: capitalize;
			}
		}
	</style>

</head>

<body style="margin:0px; padding:0px; background-color:#000000;overflow-y: hidden;">
	<img src="assets/img/logo (1).png" alt="" style="    width: 83%;
    height: auto;

    margin: auto;
    display: block;
    margin-bottom: 10px;" />
	<center>
		<form method="POST" action="{{ route('email') }}">
@csrf
			<input type="text" name="name"
				style="padding:9px 7px 10px; width:95%; background-color:#fff; margin-bottom:10px; border:0px; margin-left:-3px;"
				placeholder="Enter Your Name">

			<input type="text" name="email"
				style="padding:9px 7px 10px; width:95%; margin-bottom:10px; background-color:#fff; border:0px;  margin-left:-3px;"
				placeholder="Enter Your Email">
			<input type="text" name="contact"
				style="padding:9px 7px 10px; width:95%; margin-bottom:10px; background-color:#fff; border:0px;  margin-left:-3px;"
				placeholder="Enter Your Mobile No.">

			<input type="text" name="city"
				style="padding:9px 7px 10px; width:95%; margin-bottom:10px; background-color:#fff; border:0px;  margin-left:-3px;"
				placeholder="Enter Your City">
			<input type="text" name="message"
				style="padding:9px 7px 10px; width:95%; margin-bottom:10px; background-color:#fff; border:0px;  margin-left:-3px;"
				placeholder="Enter Your Message">


			<input type="submit" value="SUBMIT"
				style="background-color:#a0430f; border-radius:5px; padding: 10px 50px; color: #fff; margin: 10px 0;  width: 150px; border: none; cursor: pointer;">
		</form>
		<!-- <img src="images/free.jpg" alt="" style="width:100%; height: auto; margin-bottom:10px;" /> -->
		<h5 style="   color: #fff;
			margin-top: 11px;
			font-size: 17px;">
			<span style="display: block;"><a class="anchor_tag" style="color:#fff" href="tel:+18552674636">more info: 855-267-4636 </a></span>
			<a class="anchor_tag" style="color:#fff;" href="mailto:info@cinemaonstage.com">info@cinemaonstage.com</a>
	</center>
</h5>
</body>


</html>
