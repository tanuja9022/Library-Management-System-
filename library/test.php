<html>
	<head>
		<script type="text/javascript">
		function empty(td1,td2)
		{	
		if(document.getElementById(td1).value=="")
				{	
					
					document.getElementById(td2).innerHTML="<font color='#FF7A7A'>your field is empty!</font>";
				}
		}
		
		</script>
		</head>
		<body>
		<table>
		<tr>
			<td>
				<form action="#" method="post">
				<input type="text" id="test" onBlur="empty(this.id,'un')" />
				</td>
				<td id="un">
				
				
				</td>
				</tr>
				</table>
				</form>
				</body>
				</html>

		