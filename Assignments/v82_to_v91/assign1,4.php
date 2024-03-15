<?php
//assign 1
$total = (disk_total_space("c:")+disk_total_space("d:")+disk_total_space(("e:"))) / (1024 * 1024 * 1024 * 1024);
echo round($total,2)." Terabyte <br>";


//assign 2
$file = "E:\Pictures\The.Family.Plan.mp4";
echo "Size In Megabyte Is " . round(filesize($file)/1024/1024);
echo "<br>";
echo "Size In Kilbyte Is " . round(filesize($file)/1024);
echo "<br>";


//assign 3
//mkdir("Programming", 0700);
//mkdir("Programming/PHP", 0700);
function removeDirectory(){
    if (file_exists("Programming/PHP")) {
        rmdir("Programming/PHP");
        echo "Directory Programming/PHP Removed<br>";
    }
    if (file_exists("Programming")) {
        rmdir("Programming");
        echo "Directory Programming Removed<br>";
    }
}
removeDirectory();


//assign 4
function change_permissions($file){
    if (is_dir($file)) {
        return "This Is Directory And Only Files Allowed <br>";
    }
    else{
        if(pathinfo($file, PATHINFO_EXTENSION)!="txt"){
            return "File Extension Is Not Txt <br>";
        }
        else{
            chmod($file,0644);
            //echo fileperms($file)."<br>";;
            return" Permissions Changed <br>";
        }
    }
}
echo change_permissions("Elzero");
echo change_permissions("Work.docx");
echo change_permissions("Result.txt");