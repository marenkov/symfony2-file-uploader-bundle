<?php

namespace PunkAve\FileUploaderBundle\Services;

use PunkAve\FileUploaderBundle\BlueImp\UploadHandler as BaseClass;

/**
 * @author mavik
 */
class UploadHandler extends BaseClass {
    
    protected function trim_file_name($name, $type, $index)
    {
        $info = pathinfo($name);
        $name = \Gedmo\Sluggable\Util\Urlizer::transliterate($info['filename']).(@$info['extension'] ? '.'.$info['extension'] : '');
        return parent::trim_file_name($name, $type, $index);
    }
    
}

?>
