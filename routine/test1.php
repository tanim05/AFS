<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>

<style>
/*Table theme 1*/
.demotbl {
    border-collapse: collapse;
    border: 1px solid #69899F;
  }
.demotbl th{
    border: 2px solid #69899F;
    color: #fff;
    padding:10px;
    background-color:#4F6677;
  }
.demotbl td{
    border: 1px dotted black;
    color: #002F5E;
    padding:15px;
    width:100px;
    background-color:#D6DEE4;
  }
  
/* Class two*/
.demotbl2 {
    border: 0px solid #69899F;
  }
.demotbl2 th{
    padding:15px;
    color:#fff;
    text-shadow:1px 1px 1px #568F23;
    border-bottom:3px solid #9ED929;
    background-color:#9DD929;
    background:-webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(0.02, rgb(123,192,67)),
        color-stop(0.51, rgb(139,198,66)),
        color-stop(0.87, rgb(158,217,41))
        );
    background: -moz-linear-gradient(
        center bottom,
        rgb(123,192,67) 3%,
        rgb(139,198,66) 52%,
        rgb(158,217,41) 88%
        );
    -webkit-border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-radius:5px 5px 0px 0px;
    border-top-left-radius:5px;
    border-top-right-radius:5px;
  }
.demotbl2 td{
    width:100px;
    padding:10px;
    text-align:center;
    vertical-align: top;
    background-color:#DEF3CA;
    border: 1px solid #BED3AB;
    -moz-border-radius:2px;
    -webkit-border-radius:2px;
    border-radius:2px;
    color:#666;
    text-shadow:1px 1px 1px #fff;

  }  

.demotbl3 {
    border-collapse: collapse;
    border: 1px solid #A40000;
  }
.demotbl3 th{
    border: 1px solid #A40000;
    color: #fff;
    padding:10px;
    background-color:#FF2F2F;
  }
.demotbl3 td{
    border: 1px dotted black;
    color: #002F5E;
    padding:15px;
    width:100px;
    background-color:#FFE1E1;
  }

.divcls {
  background: #8B8B8B;
  width:350px;
  border-radius: 15px;
  padding:20px;
  font-size:22px;
  color:#fff;
}
</style>
</head>
<body>

<div class="divcls">
<label>Select Table Theme: </label><select id="selecttheme">
    <option value="demotbl">Table Theme 1</option>
    <option value="demotbl2">Table Theme 2</option>
    <option value="demotbl3">Table Theme 3</option>
    <option value="demotbl">Default Theme</option>
    
</select>
</div>
<p>
<table class="demotbl" id="tbl">
  <tr>
      <th>Product ID</th>
      <th>Product Name</th>
      <th>Product Quality</th>
      <th>Product Quantity</th>
  </tr>
  <tr>
      <td>1</td>
      <td>Wheat</td>
      <td>Good</td>
      <td>200 Bags</td>
  </tr>
  <tr>
      <td>2</td>
      <td>Rice</td>
      <td>Good</td>
      <td>250 Bags</td>
  <tr>
      <td>3</td>
      <td>Sugar</td>
      <td>Good</td>
      <td>200 Bags</td>
  </tr>  
</table>
</p>

<script>

  $("#selecttheme").change(function(){
   var themetbl = $('#selecttheme').val();
    $("#tbl").removeClass( ).addClass( themetbl );
 
});

</script>
</body>
</html>

