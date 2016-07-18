<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Ajax upload using plugin</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="js/jquery.form.js"></script>
    
  <style>
    #form_upload_ajax { padding: 10px; background: #A5CCFF; border-radius: 5px;}
    #progress { border: 1px solid #ccc; width: 500px; height: 20px; margin-top: 10px;text-align: center;position: relative;}
    #progressbar { background: #F39A3A; height: 20px; width: 0px;}
    #percent { position: absolute; left: 50%; top: 0px;}
  </style>
</head>

<body>
  <h1>Upload nhiều file sử dụng ajax và Progress </h1>
  
  <form id="form_upload_ajax" method="post" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="img[]" multiple/>
    <input type="submit" value="Upload" id="upload"/>
  </form>
  
  <div id="progress">
    <div id="progressbar"></div>
    <div id="percent">0%</div>
  </div>
  
  <div id="result">
  </div>

<script>
  var progressbar = $('#progressbar');
  var percent = $('#percent');
  var result = $('#result');
  var percentValue = "0%";
  
  $('#form_upload_ajax').ajaxForm({
      // Do something before uploading
      beforeUpload: function() {
        result.empty();
        percentValue = "0%";
        progressbar.width = percentValue;
        percent.html(percentValue);
      },
      
      // Do somthing while uploading
      uploadProgress: function(event, position, total, percentComplete) {
        var percentValue = percentComplete + '%';
        progressbar.width(percentValue)
        percent.html(percentValue);
      },
      
      // Do something while uploading file finish
      success: function() {
        var percentValue = '100%';
        progressbar.width(percentValue)
        percent.html(percentValue);
      },
      
      // Add response text to div #result when uploading complete
      complete: function(xhr) {      
        $('#result').html(xhr.responseText);
      }
  });
</script>
</body>
</html>
