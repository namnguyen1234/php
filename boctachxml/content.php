<!-- require_once 'student.xml'; -->
<?php
    $document = new DOMdocument();
    $document -> load('student.xml');
    $root = $document -> documentElement;
    $content = $root -> textContent;
    echo 'root ='. $content; 
    $listchilds = $root -> childsNodes;
    foreach ($listchilds as $child){
        if ($child->nodeType == XML_ELEMENT_NODE);
            echo '<br>' . $child -> nodeValue;
    }
    $liststudents = $root->getElementsByTagName('students');
    foreach($liststudents as $stu){
        if ($stu->nodeType == XML_ELEMENT_NODE);
            echo '<br>' . $stu -> nodeValue;
    }
?>