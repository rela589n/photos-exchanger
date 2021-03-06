<?php


namespace App\ValueObjects\FileLocation;


use App\Exceptions\CouldNotPersistFileException;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

final class FileLocation
{
    private string $storage;
    private string $fileName;

    private FilesFolderLocator $folderLocator;

    private function __construct(string $storage, string $fileName)
    {
        $this->storage = $storage;
        $this->fileName = $fileName;
        $this->folderLocator = new FilesFolderLocator();
    }

    public static function in(string $storage, string $fileName): self
    {
        return new static($storage, $fileName);
    }

    /**
     * @param  FilesystemAdapter  $disk
     * @param  UploadedFile  $file
     * @return $this
     */
    public function saveTo(FilesystemAdapter $disk, UploadedFile $file): self
    {
        $saveResult = (bool)$disk->putFileAs(
            $this->folder(),
            $file,
            $this->fileName()
        );

        if (!$saveResult) {
            throw new CouldNotPersistFileException('Could not save file to '.$this->fullPath());
        }

        return $this;
    }

    public function storage(): string
    {
        return $this->storage;
    }

    public function fileName(): string
    {
        return $this->fileName;
    }

    public function destroy(FilesystemManager $filesystemManager): bool
    {
        return $filesystemManager
            ->disk($this->storage())
            ->delete($this->fullPath());
    }

    public function folder(): string
    {
        return $this->folderLocator->locate($this->storage());
    }

    public function fullPath(): string
    {
        return Str::finish($this->folderLocator->locate($this->storage()), '/').$this->fileName();
    }

    public function url(): string
    {
        return $this->folderLocator->link($this->storage(), $this->fullPath());
    }
}
