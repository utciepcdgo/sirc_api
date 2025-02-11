<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Aws\S3\S3Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AwsController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        // Validate incoming data
        $request->validate([
            'document' => 'required|string',
            'fileName' => 'required|string',
            'contentType' => 'required|string',
        ]);

        $document = $request->input('document');
        $fileName = $request->input('fileName');
        $formatId = $request->input('formatId');
        $partyAcronym = $request->input('partyAcronym');
        $municipality = $request->input('municipality');
        $postulation = $request->input('postulation');
        $position = $request->input('position');
        $candidacy = $request->input('candidacy');
        $fileFormat = $request->input('fileFormat');
        $contentType = $request->input('contentType');

        //        dd($document, $fileName, $contentType, $request->all());

        // Generate a unique key for storing the file in S3.
        // You can adjust the naming convention as needed.
        $key = 'SIRC25/'.$partyAcronym.'/'.$municipality.'/'.$postulation.'/'.$position.'/'.$formatId.'_'.$candidacy.'_'.time().'.'.$fileFormat;

        // Instantiate the S3 client using your configuration.
        // Ensure that your config/filesystems.php is properly set up with your S3 credentials.
        $s3Client = new S3Client([
            'region' => config('filesystems.disks.s3.region'),
            'version' => 'latest',
            'credentials' => [
                'key' => config('filesystems.disks.s3.key'),
                'secret' => config('filesystems.disks.s3.secret'),
            ],
        ]);

        // Prepare the command for a PutObject operation.
        $command = $s3Client->getCommand('PutObject', [
            'Bucket' => config('filesystems.disks.s3.bucket'),
            'Key' => $key,
            'ContentType' => $contentType,
        ]);

        // Generate a pre-signed URL valid for 5 minutes.
        $presignedRequest = $s3Client->createPresignedRequest($command, '+5 minutes');
        $signedUrl = (string) $presignedRequest->getUri();

        // Return the signed URL and the key (to associate the file later in your application)
        return response()->json([
            'url' => $signedUrl,
            'key' => $key,
        ]);
    }
}
