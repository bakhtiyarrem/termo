<h3 class='w'>Форма отправлена</h3>
<!-- Mirrored from xn-----elck2aihhemhlj.xn--p1ai/formdata.php by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 15 Apr 2014 10:03:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<!DOCTYPE html> 
<html>
<head>
<!--[if lte IE 7]>
<meta http-equiv="refresh" content="0; url=ie6/ie6.html">
<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta http-equiv='refresh' content='4; url=index.html' />
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen" />
<!-- Сообщение -->
<style>
.w {
    width: 300px;
    padding: 30px;
    background-color: #000;
    color: #FFF;
    font-size: 24px;
    border-radius: 10px;
    display: none;
    text-align: center;
    position: absolute;
    top: 20%;
    left: 40%;
}
</style>
<!-- Библиотека -->
<script type="text/javascript" src="js/jquery-1.8.3.js"></script>

<title>Обработчик отправки</title>
</head>
<body>
<?php
	$backurl="/order.php";  
	$name=$_POST['NAME'];
	$tel=$_POST['REVIEW'];
	$serinf=$_POST['serinf'];
	$naz=$_POST['naz'];
	$surname=$_POST['feedback_mes'];
		$to .= "<nikitina.k.v@mail.ru>";           
		$subject = "Отзыв";      

		$msg = "\nИмя: ".$name.
		"\nОтзыв: ".$tel.

		$surname;
	

		$headers   = array();
		$headers[] = "Content-type: text/plain; charset=utf-8";
		$headers[] = "From:Отзыв";
		$headers[] = "Reply-To: Отзыв";


	if	(mail($to, $subject, $msg, implode("\r\n", $headers) ))
		


 print "<script language='Javascript'> 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 1); 
</script>";  
exit; 
?>
</body>
</html>