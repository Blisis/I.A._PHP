<html>
<head>
    <title>
        Teme
    </title>
</head>
<body>
<p>Va prezint urmatoarele teme:</p>
<?php

function prettyNames($uglyName) {
    $names = [
        'tema_1.php' => 'Tema 1',
        'tema_2.php' => 'Tema 2',
        'tema_3.php' => 'Tema 3',
        'tema_4.php' => 'Tema 4',
    ];

    return isset($names[$uglyName]) ? $names[$uglyName] : 'No abla espanol';
}

function listFiles() {
    $shouldExclude = 'index.php';
    $allFilesInFolder = glob('*.php');

    $allFilesInFolder = array_filter($allFilesInFolder, function($item) use ($shouldExclude){
        return $item !== $shouldExclude ? $item : null;
    });

    return $allFilesInFolder;
}

$files = listFiles();

foreach($files as $file) {
    echo prettyNames($file)."<br>";
//    include $file;
}
?>




</body>
</html>