<!Doctype>
<html>
<head>
<title> Stuff Book Search Page</title>
<link rel="stylesheet"type="text/css" href="main_page.css">

</head>

<style type="text/css">

body {
    background-image: url("image/lib7.jpg");

}

</style>


<body id="body-color">

<section>
  
<div id="Home-Page">
	<fieldset>
		<table>
			<form method="POST" action="search_by_book_name.php">
				<tr>
				
					<td>Search By Book Name</td><td><input type="text" name="b_id">  </td>
					
					<td><input id="button" type="submit" name="submit" value="Search"></td>
					
				</tr>
				
				
				
			</form>
			</table>
	
<table>	
<tr>

<form method="POST" action="search_by_type.php">
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
					<td>
<input id="button" type="submit" name="submit" value="Search">
</td>


</tr>
        </form>
         </table>




          <table>

      <form method="POST" action="search_by_author_name.php">
               <tr>
             
               <td>Select Author Name</td>
                   <td>
					<?php
						$connection=mysql_connect("localhost","root","");
                        $db=mysql_select_db("cuet_library",$connection);
						
						
						$sql=mysql_query("SELECT author_id,author_name FROM author");
					
						$select= '<select name="author_upd">';

						 while($rs=mysql_fetch_array($sql)){
							 $select.='<option value="'.$rs['author_id'].'">'.$rs['author_name'].'</option>';
						} 
						$select.='</select>';
						echo $select;
						
						
						
					?>
					
					</td>
					
					<td>
                 <input id="button" type="submit" name="submit" value="Search">
              </td>
         
		 

             </tr>
			  </form>

		               </table>




  



	           </fieldset>
           </div>







</section>



</body>







</html>