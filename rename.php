<?php
class File {
    private function forceRename($oldfile, $newfile) {
        if (!rename($oldfile,$newfile)) {
            if (copy ($oldfile,$newfile)) {
                unlink($oldfile);
                return TRUE;
            }
            return FALSE;
        }
        return TRUE;
    }

    public function changeExtentions_hierarchy($parent_folder,$old_ext,$new_ext){

        $folders = scandir($parent_folder);
        $count = 0;
        foreach($folders as $dir){
            if($count == 0 || $count == 1 || is_file($dir)){
                $count++;
                continue;
            }

            $folder = $parent_folder . $dir . '\\' ;

            $files = scandir($folder);
            for($i=2; $i < sizeof($files); $i++) {
                $org_file_name = $folder . $files[$i];
                $new_file_name = str_replace($old_ext,$new_ext,$org_file_name);

                $this->forceRename($org_file_name,$new_file_name);
            }
            $count++;
        }
        print("Execution completed");
    }

    public function changeExtentions_withInFolder($folder,$old_ext,$new_ext){

            $files = scandir($folder);
            for($i=2; $i < sizeof($files); $i++) {
                $org_file_name = $folder . $files[$i];
                $new_file_name = str_replace($old_ext,$new_ext,$org_file_name);

                $this->forceRename($org_file_name,$new_file_name);
            }

        print("Execution completed");
    }

}
