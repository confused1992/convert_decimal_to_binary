<!doctype html>
<html dir="rtl"> 
    <head>
        <meta charset="UTF-8"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/upload_bootstrap.css"/>
        <link rel="stylesheet" href="css/style.css"/><!--bootstrap اقوي من ملف css حتي يكون ملف  bootstrap اسفل ملف css وضعنا ملف-->
        <title>تحويل</title>	
    </head>
    <body>
        <div class="container grid-container">
            <img class="log" src="1.png" alt="convert">         
            <div class="center">
                <h3>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" style="margin-bottom:5px;">
                        <div class="form-group">
                            <input type="number" name="number"  placeholder="number" maxlength="9" style="display:block; font-weight: 700;" required>
                            <input type="submit" value="تفقيط" name="str"> 
                        </div>
                    </form>
                    <?php
                        @$s = $_POST['str'];
                        @$num = $_POST['number'];
                        if($s){
                            require_once "Arabic_numerals.php";
                            echo numtoarb ($num) . "<br>";
                            require_once "English_numerals.php"; 
                            $class_obj = new numbertowordconvertsconver();
                            echo $class_obj->convert_number($num);             
                        }
                    ?> 
                </h3>                   
            </div> 
            <footer>
                <h2> س : ما هي عملية التفقيط ؟</h2> 
                <h3>
                    هي عملية تحويل الارقام الي احرف و ذلك لمنع التلاعب بالارقام 
                    نحتاج هذه العملية كثيرا عند عمل فاتورة وكتابة اجمالى مبلغ الفاتورة بالأرقام والحروف و عند عمل شيك وكتابة مبلغ الشيك بالأرقام والحروف 
                </h3>
            </footer>                        
        </div>
    </body>
</html>    