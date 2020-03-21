# bulkFileExtentionChanging
Simple functions containing the class File helps to change plenty of files' extensions easily.

The class contain simple two functionalities

01. changeExtentions_hierarchy()
    - This is for changing extention of files which are being parent folder > sub folders > files hierarchy
```markdown


 programming --|
               |---subfolder_1 | --- file1.ext
                               | --- file2.ext
                               | --- file3.ext
               |---subfolder_2 | --- file1.ext
                               | --- file2.ext
                               | --- file3.ext
```
 Method of using:
 
 ```php
$parent_folder = 'D:\donwloaded_contents\programming\\';
$old_ext = '.fdmdownload';
$new_ext = '';

$file = new File();
$file->changeExtentions_hierarchy($parent_folder,$old_ext,$new_ext);
```
 
 02. changeExtentions_withInFolder()
    - This is for changing files' extention within particular folder
```markdown
  programming --|
                | --- file1.ext
                | --- file2.ext
                | --- file3.ext
                | --- file4.ext
                | --- file5.ext
                | --- file6.ext
   ```          
 Method of using :
 ```php
$folder = 'D:\donwloaded_contents\programming\subfolder_1\\';
$old_ext = '.fdmdownload';
$new_ext = '';

$file = new File();
$file->changeExtentions_withInFolder($parent_folder,$old_ext,$new_ext);
```
    
