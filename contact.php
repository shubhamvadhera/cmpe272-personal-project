
    <?php

    $title = "Contact";
    $file = file_get_contents('./files/contacts.txt');
    $array1 = explode("\n", $file);
    $fromFile = "";
    foreach ($array1 as $val) {
        $fromFile.=$val . '<br/>';
    }
    $content = '<p>
       Here is the dedicated team at DextrouS:
       </p>' . $fromFile;

    include 'template.php';
    ?>
