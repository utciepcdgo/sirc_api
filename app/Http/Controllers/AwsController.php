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
        // Validamos...
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

        // Creamos el nombre del archivo con ruta completa.
        $key = 'SIRC25/'.$partyAcronym.'/'.$municipality.'/'.$postulation.'/'.$position.'/'.$formatId.'_'.$candidacy.'_'.time().'.'.$fileFormat;

        $s3Client = new S3Client([
            'region' => config('filesystems.disks.s3.region'),
            'version' => 'latest',
            'credentials' => [
                'key' => config('filesystems.disks.s3.key'),
                'secret' => config('filesystems.disks.s3.secret'),
            ],
        ]);

        // Usamos el comando PutObject para generar un URL firmada.
        $command = $s3Client->getCommand('PutObject', [
            'Bucket' => config('filesystems.disks.s3.bucket'),
            'Key' => $key,
            'ContentType' => $contentType,
        ]);

        // Generamos la URL firmada con una duración de 5 minutos (es suficiente timepo xd).
        $presignedRequest = $s3Client->createPresignedRequest($command, '+5 minutes');
        $signedUrl = (string) $presignedRequest->getUri();

        // Retornamos la URL firmada y la ruta del archivo.
        return response()->json([
            'url' => $signedUrl,
            'key' => $key,
        ]);
    }
}
