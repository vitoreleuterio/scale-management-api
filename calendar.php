<?PHP

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
include ("conexao.php");

$aba = isset($_GET["aba"]) ? $_GET["aba"] : null;
$method = isset($_GET["method"]) ? $_GET["method"] : null;
$route = [$aba, $method];

if(!empty($_GET)) {
	
	echo dataResponse($route);
} else {
	
	$content =file_get_contents("appointment/index.php");
	echo $content;
	
}

function dataResponse($route){
	include ("./backend/index.php");
	$request = file_get_contents('php://input');

	$data = [];
	
	if (isset($_GET["request"])) return json_encode($data);
	else return routes($route, $data);
}


?>