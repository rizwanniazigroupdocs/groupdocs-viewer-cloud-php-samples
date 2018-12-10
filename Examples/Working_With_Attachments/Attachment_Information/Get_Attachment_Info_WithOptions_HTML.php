<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "with-attachment.msg";
    $attachmentName = "TestAttachment-File.docx";
    $folder = "viewerdocs";
    $password = null;
    $attachmentPassword = null;
    $storage = null;

    $options = new \GroupDocs\Viewer\Model\DocumentInfoOptions();
    $options->setAttachmentPassword($attachmentPassword);

    $request = new Requests\HtmlGetAttachmentInfoWithOptionsRequest($fileName, $attachmentName, $options, $folder);

    $response = $viewerApi->htmlGetAttachmentInfoWithOptions($request);

    echo "Attachment Count: ", count($response->getPages());
    echo "<br>";
    echo "Attachment Extension Name: ", $response->getExtension();
    echo "<br>";
    echo "Attachment Name: ", $response->getFileName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}