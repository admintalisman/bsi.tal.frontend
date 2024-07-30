<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;



//	onscreen events
		$this->events["TEMPBSICILE_snippet"] = true;
		$this->events["v1_snippet2"] = true;
		$this->events["report_upload_file_snippet"] = true;
		$this->events["hasil_proses_api1_snippet"] = true;
		$this->events["_global__snippet"] = true;
		$this->events["v2_snippet"] = true;
		$this->events["v1_snippet6"] = true;



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		$_SESSION["IdExt"]=$data["id_ext"];
$_SESSION["fullName"] = $data["fullname"];

$userData = Security::getUserGroup();
echo $userData;

if ($userData=='CILEM')
{
//**********  Redirect to another page  ************
header("Location: v1_dashboard.php");
exit();

}
else if ($userData=='CIT' || $userData=='CIT-APP')
{

//**********  Redirect to another page  ************
header("Location: v3_dashboard.php");
exit();
}

else
{

//**********  Redirect to another page  ************
header("Location: v2_dashboard.php");
exit();
}



    
;
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_TEMPBSICILE_snippet(&$params)
	{
	$data2="<div class='alert alert-danger alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
   <p>Fitur ini digunakan untuk mengelola dan memantau berbagai aktivitas sistem yang terkait dengan upload data. Diantara berisi informasi terkait upload data berisi : Nomor Loan Disburse, Nama Terjamin, Pokok Pembiayaan, Jangka Waktu, Tanggal Akad, Tanggal Jatuh Tempo, Kode Bank Cabang dan Nama Bank Cabang. Sistem akan memproses data pada jam 24.00 WIB dalam setiap hari nya</p></div>";
echo $data2;
	;
}
	function event_v1_snippet2(&$params)
	{
	$userData = Security::getUserGroup();
$username = Security::getUserName();


$data2="<div class='alert alert-success alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Selamat Datang !</strong> ".$username.
  "<br><p>Dashboard merupakan halaman khusus yang berisi ringkasan data berupa grafik atau tabel yang mudah dipahami. Fitur ini bertujuan untuk membantu melihat kondisi secara umum, menganalisa, dan mengambil keputusan berdasarkan data transaksi maupun aktivitas yang telah terjadi</p></div>";
echo $data2;
	;
}
	function event_report_upload_file_snippet(&$params)
	{
	$data2="<div class='alert alert-danger alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
   <p>Laporan ini berisi data yang berhasil di upload dan di proses oleh sistem. Silahkan lakukan pencarian data terlebih dahulu.</p></div>";
echo $data2;
	;
}
	function event_hasil_proses_api1_snippet(&$params)
	{
	$data2="<div class='alert alert-danger alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
   <p>Laporan ini berisi data yang berhasil di upload dan di proses oleh sistem. Silahkan lakukan pencarian data terlebih dahulu.</p></div>";
echo $data2;
	;
}
	function event__global__snippet(&$params)
	{
	$userData = Security::getUserGroup();
echo $userData;

if ($userData=='CILEM')
{
header("Location: v1_dashboard.php");


}
else
if ($userData=='CIS')
{
header("Location: v2_dashboard.php");


}
else
if ($userData=='CIT')
{
header("Location: v3_dashboard.php");


}
else
{
header("Location: menu.php");


}

	;
}
	function event_v2_snippet(&$params)
	{
	$userData = Security::getUserGroup();
$username = Security::getUserName();


$data2="<div class='alert alert-success alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Selamat Datang !</strong> ".$username.
  "<br><p>Dashboard merupakan halaman khusus yang berisi ringkasan data berupa grafik atau tabel yang mudah dipahami. Fitur ini bertujuan untuk membantu melihat kondisi secara umum, menganalisa, dan mengambil keputusan berdasarkan data transaksi maupun aktivitas yang telah terjadi</p></div>";
echo $data2;
	;
}
	function event_v1_snippet6(&$params)
	{
	// Put your code here.
echo "Manual Book";
	;
}




}
?>