<?php
function dateityp($path)
{
    $typ = filetype($path);
    if($typ == "dir"){
        $end = "Verzeichnis";
        $icon = "fa-folder-o";
        $typ = "folder";
    }else{
        $typ = explode(".", $path);
        $typ = array_pop($typ);
        $end = $typ;
        $typ = strtolower($typ);
    }
    
    $movie = array("3gp", "mp4", "flv", "mpeg", "ogg", "wmv", "avi", "mov", "m4v");
    $image = array("jpg", "png", "gif", "bmp", "svg", "ico", "tiff", "3ds");
    $code = array("php", "htm", "html", "css", "c", "a", "jar", "xhtml", "ihtml", "phtml", "r", "cgi", "shtm", "shtml", "json", "xml", "yaml", "ini", "bak", "txt", "bat", "cmd", "exe", "vb", "vbs", "y", "go", "ged");
    $word = array("doc", "docx", "docm", "dot", "mcw", "dotx", "pap");
    $excel = array("xls", "xlk", "xlsb", "csv", "xlsx", "xlr", "xlt", "xltm", "xlw");
    $point = array("pot", "pps", "ppt", "thmx", "odp", "otp", "pptx", "sdd");
    $pdf = array("pdf");
    $archive = array("7z", "zip", "rar", "bzip2", "par", "par2", "paf", "tar", "gz");
    $sound = array("mp3", "flac", "la", "pac", "m4a", "ape", "ofr", "ofs", "off", "rka", "shn", "tak", "tta", "wv", "wma", "brstm", "ast", "ots", "mid", "sfl");

if(in_array($typ, $movie)){
        $typ = "movie";
        $icon = "fa-file-video-o";
    }
if(in_array($typ, $image)){
        $typ = "image";
        $icon = "fa-file-image-o";
    }
if(in_array($typ, $code)){
        $typ = "code";
        $icon = "fa-file-code-o";
    }
if(in_array($typ, $word)){
        $typ = "word";
        $icon = "fa-file-word-o";
    }
if(in_array($typ, $excel)){
        $typ = "excel";
        $icon = "fa-file-excel-o";
    }
if(in_array($typ, $point)){
        $typ = "point";
        $icon = "fa-file-powerpoint-o";
    }
if(in_array($typ, $pdf)){
        $typ = "pdf";
        $icon = "fa-file-pdf-o";
    }
if(in_array($typ, $archive)){
        $typ = "archive";
        $icon = "fa-file-archive-o";
    }
if(in_array($typ, $sound)){
        $typ = "sound";
        $icon = "fa-file-audio-o";
    }


if($icon == ""){
$typ = "unknown";
$icon = "fa-file-o";
}

$array = array("end" => $end, "typ" => $typ, "icon" => $icon);
return $array;
}
?>