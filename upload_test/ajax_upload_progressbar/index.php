<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="js/jquery.form.js"></script>
</head>

<body>
  
  <form id="form_upload_ajax" method="post" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="img[]" multiple/>
    <input type="submit" value="Upload" id="upload"/>
  </form>
  
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
