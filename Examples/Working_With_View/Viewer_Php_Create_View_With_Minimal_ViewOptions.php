<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetViewApiInstance();
		
		$viewOptions = new GroupDocs\Viewer\Model\ViewOptions();

		$fileInfo = new GroupDocs\Viewer\Model\FileInfo();
		$fileInfo->setFilePath("viewerdocs\\password-protected.docx");
		$fileInfo->setPassword("password");
		$fileInfo->setStorageName(CommonUtils::$MyStorage);

		$viewOptions->setFileInfo($fileInfo);

		$request = new GroupDocs\Viewer\Model\Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "Expected response type is ViewResult: ", $response;
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>