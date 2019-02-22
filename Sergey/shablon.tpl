<!DOCTYPE HTML">
<html>
    <head>
        <title>{page_title}</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="imagine/iconka.ico" type="image/x-icon">
        <link rel="stylesheet" href="style/mystyle.css" type="text/css">
        <link rel="stylesheet" href="style/style.css" type="text/css">
    </head>
    <body>  
        <div id="obertka">
            <div id="top">
                <a href="index1.php">
                    <div id="topname">
                        {page_title}
                    </div>
                </a>
            </div>
            <div id="middle">
                <div id="menu">
                    <ul>
                        <a href="index1.php">
                            <li>
                                {button_1}
                            </li>    
                        </a>    
                        <a href="index2.php">
                            <li>
                                {button_2}
                            </li>
                        </a>
                        <a href="index3.php">
                            <li>
                                {button_3}
                            </li>
                        </a>
                        <a href="index4.php">
                            <li>
                                {button_4}
                            </li>
                        </a>
                    </ul>
                </div>
                <div id="mainpart" class="onleft">
					{page_text}
                </div>
            </div>        
            <div id="bottom">
                {bottom_text}
            </div>
        </div>
    </body>
</html>
