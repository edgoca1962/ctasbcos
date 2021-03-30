<?php
class Resize extends BaseLibreria
{
   private $image;
   private $width;
   private $height;
   private $imageResized;
   private $fileName;

   private $vista;
   private $descripcion;
   private $titulo;
   private $palabras_claves;
   private $sesion;
   private $rutas;
   private $ruta_dominio;
   private $conexion;

   function __construct()
   {
      $this->fileName = "./vistas/img/usuarios/prueba_original.jpg";

      $this->image    = $this->openImage($this->fileName);
      $this->width    = imagesx($this->image);
      $this->height   = imagesy($this->image);
      $this->resizeImage(400, 400, "crop9");
      $this->saveImage('vistas/img/usuarios/prueba_salida.jpg', 100);


      $this->vista = "Pruebas.php";
      $this->descripcion = "Pruebas";
      $this->titulo = "Pruebas";
      $this->palabras_claves = "Pruebas";
      $this->sesion = new Sesion;
      $this->id_sesion = session_id();
   }
   public function inicio()
   {
      $this->sesion->set_atributo("id_sesion", $this->id_sesion);
      if ($this->sesion->get_datos_sesion()) {
         if ($this->sesion->get_atributo("estado_sesion") == 0) {
            $this->rutas = new Rutas;
            $this->ruta_dominio = $this->rutas->get_atributo("ruta_dominio");
            $this->conexion = null;
            header("Location: " . $this->ruta_dominio . "Ingreso");
            exit();
         } else {
            $this->nombre_usuario = $this->sesion->get_atributo("nombre_usuario");
            $this->tipo_usuario = $this->sesion->get_atributo("tipo_usuario");
            $this->foto_usuario = $this->sesion->get_atributo("foto_usuario");
            $this->conexion = null;
         }
      }
   }
   public function get_atributo($atributo)
   {
      return $this->$atributo;
   }
   public function set_atributo($atributo, $valor)
   {
      $this->$atributo = $valor;
   }

   private function openImage($file)
   {
      if (!is_file($file)) {
         throw new Exception("File {$file} doesn't exists");
      }

      switch (pathinfo($file, PATHINFO_EXTENSION)) {
         case 'jpg':
         case 'jpeg':
            return imagecreatefromjpeg($file);
         case 'gif':
            return imagecreatefromgif($file);
         case 'png':
            return imagecreatefrompng($file);
      }

      throw new Exception("Invalid image extension for {$file}. Acceptable image types are jpg,jpeg,gif,png");
   }

   public function resizeImage($newWidth, $newHeight, $option)
   {
      list($width, $height) = $this->getDimensions($newWidth, $newHeight, $option);

      $this->imageResized = imagecreatetruecolor($width, $height);
      imagecopyresampled($this->imageResized, $this->image, 0, 0, 0, 0, $width, $height, $this->width, $this->height);

      if ($option == 'crop') {
         $this->crop($width, $height, $newWidth, $newHeight);
      }
   }

   private function getDimensions($width, $height, $option)
   {
      switch ($option) {
         case 'portrait':
            return array($this->getSizeByFixedHeight($height),  $height);
         case 'landscape':
            return array($width, $this->getSizeByFixedWidth($width));
         case 'auto':
            return $this->getSizeByAuto($width, $height);
         case 'crop':
            return $this->getOptimalCrop($width, $height);
         case 'exact':
         default:
            return array($width, $height);
      }
   }

   private function getSizeByFixedHeight($height)
   {
      return ($this->width / $this->height) * $height;
   }

   private function getSizeByFixedWidth($width)
   {
      return ($this->height / $this->width) * $width;
   }

   private function getSizeByAuto($width, $height)
   {
      if ($this->height < $this->width) {
         return array($width, $this->getSizeByFixedWidth($width));
      }

      if ($this->height > $this->width) {
         return array($this->getSizeByFixedHeight($height), $height);
      }

      if ($height < $width) {
         return array($width, $this->getSizeByFixedWidth($width));
      }

      if ($height > $width) {
         return array($this->getSizeByFixedHeight($height), $height);
      }

      return array($width, $height);
   }

   private function getOptimalCrop($width, $height)
   {
      $ratio = min($this->height / $height, $this->width /  $width);
      return array(
         $this->width  / $ratio,
         $this->height / $ratio
      );
   }

   private function crop($optimalWidth, $optimalHeight, $width, $height)
   {
      $x = ($optimalWidth  / 2) - ($width  / 2);
      $y = ($optimalHeight / 2) - ($height / 2);

      $crop = $this->imageResized;

      $this->imageResized = imagecreatetruecolor($width, $height);
      imagecopyresampled($this->imageResized, $crop, 0, 0, $x, $y, $width, $height, $width, $height);
   }

   public function saveImage($savePath, $imageQuality = "100")
   {
      switch (pathinfo($savePath, PATHINFO_EXTENSION)) {
         case 'jpg':
         case 'jpeg':
            if (imagetypes() & IMG_JPG) {
               imagejpeg($this->imageResized, $savePath, $imageQuality);
            }
            break;

         case 'gif':
            if (imagetypes() & IMG_GIF) {
               imagegif($this->imageResized, $savePath);
            }
            break;

         case 'png':
            if (imagetypes() & IMG_PNG) {
               // Scale quality from 0-100 to 0-9
               // Invert quality setting as 0 is best, not 9
               $invertScaleQuality = 9 - round(($imageQuality / 100) * 9);
               imagepng($this->imageResized, $savePath, $invertScaleQuality);
            }
            break;
      }

      imagedestroy($this->imageResized);
   }
}
