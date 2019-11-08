<?php
/****
 * 1.建立資料庫及資料表
 * 2.建立上傳圖案機制
 * 3.取得圖檔資源
 * 4.進行圖形處理
 *   ->圖形縮放
 *   ->圖形加邊框
 *   ->圖形驗證碼
 * 5.輸出檔案
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文字檔案匯入</title>
    <link rel="stylesheet" href="style.css">
    <style>
        a{
        display: inline-block;
        border: 1px solid #ccc;
        padding: 5px 15px;
        border-radius: 20px;
        box-shadow: 1px 1px 3px #ccc;
    }
    </style>
</head>
<body>
<h1 class="header">圖形處理練習</h1>
<!---建立檔案上傳機制--->



<!----縮放圖形----->
<?php
    $imgSrc="縮放測試.png";
    $imgInfo=getimagesize("$imgSrc");
    $rate=0.3;
    // 計算縮放後大小
    $dst_w=$imgInfo[0]*$rate;
    $dst_h=$imgInfo[1]*$rate;
    // print_r(getimagesize("test.png"));

    $thm=imagecreatetruecolor($dst_w,$dst_h);
    $src=imagecreatefrompng("$imgSrc");
    imagecopyresampled($thm,$src,0,0,0,0,$dst_w,$dst_h,$imgInfo[0],$imgInfo[1]);
    
    /*$thm=imagecreatetruecolor(50,50);
    $src=imagecreatefrompng("test.png");
    imagecopyresampled($thm,$src,0,0,0,0,50,50,100,100);*/

    // $img=imagecreatetruecolor(100,100);
    // $bg=imagecreatetruecolor(50,50);

    // $background = imagecolorallocate($bg,255,0,0);
    // imagefill($bg,0,0,$background);

    // imagecopymerge($img,$bg,25,25,0,0,50,50,100);


    imagepng($thm,"thm.png");
    // imagepng($img,"test.png");
    // // imagepng($bg,"bg.png");
    
    /*<img src="縮放測試.png">
    <img src="thm.png">*/
?>


<!----圖形加邊框----->


<!----產生圖形驗證碼----->



</body>
</html>