<?php

class FileUploader {
    private $target_dir;
    private $allowed_types;
    private $max_size;

    public function __construct($target_dir = "uploads/", $allowed_types = ["jpg", "jpeg", "png", "gif", "avif", "webp"], $max_size = 500000) {
        $this->target_dir = $target_dir;
        $this->allowed_types = $allowed_types;
        $this->max_size = $max_size;
    }

    public function upload($file) {
        $target_file = $this->target_dir . basename($file["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (!$this->isImage($file)) {
            return "El archivo no es una imagen.";
        }

        if ($this->fileExists($target_file)) {
            return "Lo siento, el archivo ya existe.";
        }

        if ($this->isTooLarge($file)) {
            return "Lo siento, tu archivo es demasiado grande.";
        }

        if (!$this->isAllowedType($imageFileType)) {
            return "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
        }

        if (!file_exists('uploads')) {
            mkdir('uploads', 0777, true);
        }

        if ($this->moveFile($file, $target_file)) {
            return $target_file;
        } else {
            return "Lo siento, hubo un error al subir tu archivo.";
        }
    }

    private function isImage($file) {
        $check = getimagesize($file["tmp_name"]);
        return $check !== false;
    }

    private function fileExists($target_file) {
        return file_exists($target_file);
    }

    private function isTooLarge($file) {
        return $file["size"] > $this->max_size;
    }

    private function isAllowedType($imageFileType) {
        return in_array($imageFileType, $this->allowed_types);
    }

    private function moveFile($file, $target_file) {
        return move_uploaded_file($file["tmp_name"], $target_file);
    }
}
?>