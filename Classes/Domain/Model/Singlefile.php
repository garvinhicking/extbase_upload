<?php

declare(strict_types=1);

namespace Garvinhicking\ExtbaseUpload\Domain\Model;

use TYPO3\CMS\Extbase\Annotation\FileUpload;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Singlefile extends AbstractEntity
{
    // This below is the only code needed:
    #[FileUpload([
        'validation' => [
            'maxFiles' => 1,
        ],
        'uploadFolder' => '1:/user_upload/',
    ])]
    protected ?FileReference $file = null;

    public function getFile(): ?FileReference
    {
        return $this->file;
    }

    public function setFile(?FileReference $file): void
    {
        $this->file = $file;
    }
}
