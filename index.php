<!doctype>
<html>
<head>
    <title>Html to Multi Page PDF using jsPDF</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
    @CHARSET "UTF-8";
    .page-break {
      page-break-after: always;
      page-break-inside: avoid;
      clear:both;
    }
    .page-break-before {
      page-break-before: always;
      page-break-inside: avoid;
      clear:both;
    }
    #html-2-pdfwrapper{
      position: absolute; 
      left: 20px; 
      top: 50px; 
      bottom: 0; 
      overflow: auto; 
      width: 600px;
    }
  </style>
  <script>
//Global Variable Declaration
var base64Img = null;
margins = {
  top: 70,
  bottom: 40,
  left: 30,
  width: 550
};

/* append other function below: */

</script>

 </head>
<body>
  <button onclick="generate()">Generate PDF</button>
  <div id="html-2-pdfwrapper">
    <!-- html content goes here -->
  </div>
  <script src='dist/jspdf.min.js'></script>
</body>
</html>