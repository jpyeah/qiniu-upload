<?php
header("Content-type: text/html; charset=utf-8");

require './qiniu/autoload.php';

  use Qiniu\Auth;
  use Qiniu\Storage\UploadManager;

  $accessKey = 'jbgFBkeiDvEjxEDzZ7xNPmYgmtwA4-ZAAsFqxwRP';
  $secretKey = 'T5KaORk2w-rCXyDyhEb-44BD5y9w_8LnIg6_ep7C';
  $auth = new Auth($accessKey, $secretKey);

  // 空间名  http://developer.qiniu.com/docs/v6/api/overview/concepts.html#bucket
  $bucket = 'picture';

  // 生成上传Token
  $token = $auth->uploadToken($bucket);

  /*
  // 要上传文件的本地路径
  $filePath = $_FILES['File']['tmp_name'];

  // 上传到七牛后保存的文件名
  $key = $_FILES['File']['name'];

   // 初始化 UploadManager 对象并进行文件的上传
   $uploadMgr = new UploadManager();

   // 调用 UploadManager 的 putFile 方法进行文件的上传
   list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
   print_r($ret);
   print_r($_FILES);
  */
  $arr=array(
    'uptoken'=> $token,
  	);
  echo json_encode($arr);

?>
