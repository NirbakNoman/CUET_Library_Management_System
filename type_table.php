<!Doctype>
<html>
<head>
<title> Book Type  Page</title>
<link rel="stylesheet"type="text/css" href="author_table.css">

<style type="text/css">

body {
    background-image: url("image/lib9.jpg");
   
}

</style>

</head>

<body id="body-color">

<div id="author_type_book">

<fieldset>

<table>
<form method="POST" action="type_table_insert.php">
<tr>
<td>Type Id</td><td><input type="text" name="t_id">  </td>



</tr>

<tr>
<td>Type Name</td><td><input type="text" name="t_name">  </td>

        </tr>
               <tr>
           <td>
                      <input id="button" type="submit" name="submit" value="Store">
            </td>

              </tr>
                          </form>

                       </table>

                   </fieldset>

        </div>


   <div id="author_type_book2">

<fieldset>

<table>
<form method="POST" action="type_table_update.php">
<tr>
<td>Select Type Name</td>



                   <td>
					<?php
						$connection=mysql_connect("localhost","root","");
                        $db=mysql_select_db("cuet_library",$connection);
						
						
						$sql=mysql_query("SELECT type_id,type_name FROM type");
					
						$select= '<select name="type_upd">';
						
						 while($rs=mysql_fetch_array($sql)){
							 $select.='<option value="'.$rs['type_id'].'">'.$rs['type_name'].'</option>';
						} 
						$select.='</select>';
						echo $select;
						
						
						
					?>
					
					</td>


</tr>

<tr>
<td>New Type Name</td><td><input type="text" name="t_name">  </td>

</tr>
<tr>
<td>
<input id="button" type="submit" name="submit" value="Update">
</td>

</tr>
</form>

</table>

</fieldset>

</div>

   
   <div id="author_type_book3">

<fieldset>

<table>
<form method="POST" action="type_table_delete.php">
<tr>
<td>Select Type Name</td>


                 <td>
					<?php
						$connection=mysql_connect("localhost","root","");
                        $db=mysql_select_db("cuet_library",$connection);
						
						
						$sql=mysql_query("SELECT type_id,type_name FROM type");
					
						$select= '<select name="type_del">';
						
						 while($rs=mysql_fetch_array($sql)){
							 $select.='<option value="'.$rs['type_id'].'">'.$rs['type_name'].'</option>';
						} 
						$select.='</select>';
						echo $select;
						
						
						
					?>
					
					</td>


</tr>


<tr>
<td>
<input id="button" type="submit" name="submit" value="Delete">
</td>

</tr>
</form>

</table>

</fieldset>

</div>
   
   

</body>







</html>