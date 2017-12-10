<?php
$testFile = "test.log";
if($_GET['mode'] == "0"){
//$user = htmlspecialchars($_GET['user'], ENT_QUOTES, "utf-8");
$message = htmlspecialchars($_GET['message'], ENT_QUOTES, "utf-8");
$inputValue = "<div class='user'>user</div><div class='left_balloon2'>".$message."</div>";
// ファイルにデータを書き込み
if($inputValue){
	// ファイルをオープンできたか
	if(!$fp = fopen($testFile, "a")){
		echo "could not open";
		exit;
	}
	// 書き込みできたか
	if(fwrite($fp, $inputValue) === false) {
		echo "could not write";
		exit;
	}//else{
		//$systemFile = "system.log";
		//$inputValue2 = file_get_contents($systemFile);
		//fwrite($fp, $inputValue2);
	//}
	// 終了処理
	fclose($fp);
} else {
	echo "not writable";
	exit;
}

// ファイルからデータを読み込み

$outputValue = file_get_contents($testFile);
echo $outputValue;

}else if($_GET['mode'] == "3"){
sleep(1);
$testFile = "test.log";
$fp = fopen($testFile, "a");
$systemFile = "system.log";
                $inputValue2 = file_get_contents($systemFile);
                fwrite($fp, $inputValue2);

fclose($fp);
$outputValue = file_get_contents($testFile);
echo $outputValue;

}else if($_GET['mode'] == "2"){
        if(!$fp = fopen($testFile, "w")){
                echo "could not open";
                exit;
        }
        // 書き込みできたか
        if(fwrite($fp, "<div class='user'>System</div><div class='left_balloon'>単語を二つ入力してください</div>") === false) {
                echo "could not write";
                exit;
        }
	$outputValue = file_get_contents($testFile);
	echo $outputValue;
}else{
	$outputValue = file_get_contents($testFile);
	echo $outputValue;
}