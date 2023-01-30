<?php



if (!function_exists('is_rtl')) {
    function is_rtl(): string
    {
        $directions =array ('ar','dv','fa','ha','he','ks','ku','ps','ur','yi');
        if (in_array(substr(app()->getLocale(), 0, 2), $directions)) {
            return true;
        }
        return false;
    }
}
if (! function_exists('includeFilesInFolder')) {
    /**
     * Loops through a folder and requires all ext files
     * Searches sub-directories as well.
     *
     * @param $folder
     */
    function includeFilesInFolder($folder, $ext): array
    {
        $array = array();
        try {
            $rdi = new RecursiveDirectoryIterator($folder);
            $it = new RecursiveIteratorIterator($rdi);
            while ($it->valid()) {
                if (! $it->isDot() && $it->isFile() && $it->isReadable() && $it->current()->getExtension() === $ext) {
                    $array[] = basename($it->key(), ".json");
                }
                $it->next();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $array;
    }
}
