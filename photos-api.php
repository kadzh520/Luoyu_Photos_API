<?php
    /**
     * A WTFPLv2 open source img API tools.
     *
     * @Name: Luoyu Photos API
     * @Develop Time: 2023.10.5
     * @Version: 1.0.2
     * @Developer: Gaisoft & Riseforever
     * @Open Source: WTFPL v2
     */
    // 获取"img/"目录下格式所有格式为gif,jpg,png,webp,jfif,bmp的图片文件
    $img_array = glob("img/*.{gif,jpg,png,webp,jfif,bmp}",GLOB_BRACE);
    // 从上面的数组中随机选择一个索引
    $img = array_rand($img_array);
    // 获取随机图片的文件路径
    $dz = $img_array[$img];
    // 通过HTTP头重定向到随机图片地址
    header("Location:".$dz);
?>
