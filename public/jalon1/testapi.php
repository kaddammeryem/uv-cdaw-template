
<html>
<body>
<?php
function retrieveData(){
$url = 'https://imdb-api.com/en/API/Top250Movies/k_fuxbwlin';
$options = array(
    'https' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'GET',
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url);
$obj=json_decode($result,true,512,JSON_OBJECT_AS_ARRAY);
if ($result === FALSE) { /* Handle error */ }
return $obj;
}
?>
<button id="btn" >get</button>
<!--
<table table style="width:100%"; table class="data-table">
   <tr>
       <th>title</th>
       <th>fullTitle</th>
       <th>year</th>
   </tr>
       <?php for($i=0;$i<count($obj["items"]);$i=$i+1) {?>
        <tr>
       <td><?php echo $obj["items"][$i]["title"]; ?></td>
       <td><?php echo $obj["items"][$i]["fullTitle"]; ?></td>
       <td><?php echo $obj["items"][$i]["year"]."\n"; ?></td>
       </tr>
<?php } ?>-->
</table>
</body>
</html>


