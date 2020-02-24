<?php
    /** Getting the image name generated from the Javascript */
    $image = $_POST['image'];

    /** Define the location on the server where to save the generated image */
    $location = "upload/";

    /** Since the generated code is in base64, we will use explode it */
    $image_parts = explode(";base64,", $image);

    /** after removing the unnecessary characters, we will use decode to extract the main info */
    $image_base64 = base64_decode($image_parts[1]);

    /** defining the file name of the image to be stored in the server including the file type */
    $filename = "project_dapo" . uniqid() . '.png';


    $file = $location . $filename;

    file_put_contents($file, $image_base64);

