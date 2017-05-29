



<html>
  <head>
    <link href="../../public/assets/multiSelect/css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
  </head>
  <body>
    <select multiple="multiple" id="my-select" name="my-select[]">
      <option value='elem_1'>elem 1</option>
      <option value='elem_2'>elem 2</option>
      <option value='elem_3'>elem 3</option>
      <option value='elem_4'>elem 4</option>
      ...
      <option value='elem_100'>elem 100</option>
    </select>
        <script src="../../public/assets/multiSelect/test/src/jquery.js"></script>
    <script src="../../public/assets/multiSelect/js/jquery.multi-select.js" type="text/javascript"></script>

    <script type="text/javascript">

        $(document).ready(function(){
$('#my-select').multiSelect();

        )};
    </script>
  </body>
</html>




