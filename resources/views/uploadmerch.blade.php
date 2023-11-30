<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Merch</title>
    <link rel="stylesheet"href="./Assets/adminmerchstyle.css">
    <script src = "./js/merch.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="box">
            <div class="inpot-bx">
                <h2 class="upload-area-title">Upload File</h2>
                <form action="">
                    <input type="file" id="upload" accept=".doc,.docx,.png,video/*" hidden>
                    <label for="upload" class="uploadlabel">
                        <span><i class="fa fa-cloud-upload"></i></span>
                        <p>Click To Upload</p>
                    </label>    
                </form>
            </div>

            <div id="filewrapper">
                <h3 class="uploaded">Uploaded Document</h3>
                <div class="showfilbox">
                    <!--div class="left">
                        <span class="filetype">Pdf</span>
                        <h3>A-YOH Web.pdf</h3>
                    </div>
                    <div class="right">
                        <span>&#215;</span>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
    
</body>
</html>