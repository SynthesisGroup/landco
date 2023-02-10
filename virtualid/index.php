<html>
<head>
<title>Landco Virtual ID Scanner</title>
<script type="text/javascript" src="adapter.min.js"></script>
<script type="text/javascript" src="vue.min.js"></script>
<script type="text/javascript" src="instascan.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Landco Virtual ID</h1>
                    <video id="preview" width="100%"></video>
                </div>
                
            </div>
        </div>

        <script>
           let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
           Instascan.Camera.getCameras().then(function(cameras){
               if(cameras.length > 0 ){
                   scanner.start(cameras[1]);
               } else{
                   alert('No cameras found');
               }

           }).catch(function(e) {
               console.error(e);
           });

           scanner.addListener('scan',function(c){
               //document.getElementById('text').value=c;
               window.location = c+"&visit=1";
           });

        </script>
    </body>
</html>