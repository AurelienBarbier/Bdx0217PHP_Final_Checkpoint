<?php

namespace Marmiwild\CoreBundle\Services;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageUploader
{
    private $targetDir;

    public function __construct()
    {
        // Il m'a été impossible de passer un paramètre en argument de la méthode __construct()
        $this->targetDir = '/home/jeanmarie/www/Checkpoints/Bdx0217PHP_Final_Checkpoint/marmiwild/web/uploads/';
    }

    public function upload(UploadedFile $file)
    {
        $fileName = md5(uniqid()).'.'.$file->guessExtension();

        $file->move($this->getTargetDir(), $fileName);

        return $fileName;
    }

    public function getTargetDir()
    {
        return $this->targetDir;
    }
}