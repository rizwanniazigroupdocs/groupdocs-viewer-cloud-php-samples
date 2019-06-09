<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetInfoApiInstance();
		
		$viewOptions = new GroupDocs\Viewer\Model\ViewOptions();

		$fileInfo = new GroupDocs\Viewer\Model\FileInfo();
		$fileInfo->setFilePath("viewerdocs\\one-page.docx");
		$fileInfo->setPassword("");
		$fileInfo->setStorageName(CommonUtils::$MyStorage);

		$viewOptions->setFileInfo($fileInfo);
		$viewOptions->setViewFormat(GroupDocs\Viewer\Model\ViewOptions::VIEW_FORMAT_JPG);

		$request = new GroupDocs\Viewer\Model\Requests\GetInfoRequest($viewOptions);
		$response = $apiInstance->getInfo($request);
		
		echo "Expected response type is InfoResult: ", $response;
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>