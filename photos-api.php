<?php
    /**
     * A WTFPLv2 open source img API tools.
     *
     * @Develop：Luoyu Studio
     * @Team Members: Gaisoft/Luoming/Shuaiqi
     *
     * @Name: Luoyu Photos API
     * @Develop Time: 2023.10.5
     * @Version: 1.0
     * @Developer: Gaisoft
     * @Open Source: WTFPLv2
     */
    $img_array = glob("img/*.{gif,jpg,png,webp,jfif,bmp}",GLOB_BRACE);
    $img = array_rand($img_array);
    $dz = $img_array[$img];
    header("Location:".$dz);
?>
