<?php
?>
<html>
	<head>
		<title>Rent</title>
	</head>
	
	<body bgcolor="#00303d" height="768" width="1366">
		<font face="arial">
			<table>    <!--Header-->
				<tr>
					<td><a href="user_home.php"><img src="image/ghorbari.png"/></a></td>
					<td valign="bottom" align="center" width="100"><a href="user_home.php"><button><b><font color="black" size="3">Home</font></b></button></a></td>
					<td valign="bottom" align="center" width="90"><a href="user_buy.php"><button><b><font color="black" size="3">Buy</font></b></button></a></td>
					<td valign="bottom" align="center" width="90"><a href="user_rent.php"><button><b><font color="black" size="3">Rent</font></b></button></a></td>
					<td valign="bottom" align="right" width="950"><a href="saved_homes.php"><button><b><font color="black" size="3">Saved Homes</font></b></button></a></td>
					<td valign="bottom" align="right" width="120">
						<a href="user_profile.php">
							<p align="center"><img src="image/user.png" height="25" width="25"/></p>
							<p align="center"><b><font color="white" size="3">User</font></b></button></p>
						</a>
					</td>
				</tr>
				<tr>
					<td colspan="6"><hr></td>
				</tr>
			</table>
			
			<table align="center"> 			<!--Search-->
				<tr>
					<td> <br/> </td>
				</tr>
				<tr valign="center" height="30">
					<td align="center" >
						<input list="category" name="category" placeholder="Select category" size="15"/>
							<datalist id="category">
								<option value="Commercial" name="rommercial">
								<option value="Residential" name="residential">
							</datalist>
						&nbsp
						<input list="area" name="area" placeholder="Search area" size="25"/>
							<datalist id="area">
								<option value="Banani" name="banani">
								<option value="Bashundhara" name="bashundhara">
								<option value="Dhanmondi" name="dhanmondi">
								<option value="Gulshan" name="gulshan">
								<option value="Mirpur" name="mirpur">
								<option value="Uttara" name="uttara">
							</datalist>
						<a href="search.php"><button name="search"><b><font color="black" size="3">Search</font></b></button></a>	
					</td>
				</tr>
				
				<tr valign="center" height="30">
					<td align="center">
						<input type="text" name="min_price" placeholder="Min price" size="16"/>
						<font color="white" size="3"> - <font>
						<input type="text" name="max_price" placeholder="Max price" size="16"/>
						&nbsp
						<input list="bathroom" name="bathroom" placeholder="Bathroom" size="15"/>
							<datalist id="bathroom">
								<option value="1" name="1">
								<option value="2" name="2">
								<option value="3" name="3">
								<option value="4" name="4">
								<option value="5" name="5">
							</datalist>
					</td>
				<tr>
				
				<tr valign="center" height="30">
					<td align="center">
						<input type="text" name="min_square_feet" placeholder="Min Square Feet" size="20"/>
						<font color="white" size="3"> - <font>
						<input type="text" name="max_square_feet" placeholder="Max Square Feet" size="20"/>
						&nbsp
						<input list="bed" name="bed" placeholder="Bed" size="7"/>
							<datalist id="bed">
								<option value="1" name="1">
								<option value="2" name="2">
								<option value="3" name="3">
								<option value="4" name="4">
								<option value="5" name="5">
							</datalist>
					</td>
				</tr>
			</table>
			
			<p align="center"><b><font color="FF7D00" size="6">Rent Homes<font></b></p>       <!--buy homes-->
			
			<table>       <!--buy homes box-->
				<tr bgcolor="black">
					<td bgcolor="#00303d">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>
				
					<td bgcolor="black" width="300">
						<img src="image/flat/mirpur1.png">
						<p><img src="image/taka.png"><b><font color="white" size="4">: 21000 Taka</font></b></p>
						<p><b><font color="white" size="3">Type: Rent &nbsp &nbsp &nbsp &nbsp Category: Residential</font></b></p>
						<p><b><font color="white" size="3">Flat# A/1, House# 9, Road# 5, Section# 6, Mirpur</font></b></p>
						<p align="center"><a href="mirpur1.php"><b><font color="white" size="3"> See more detalis</font></b></a></p>
					</td>
					
					<td bgcolor="#00303d">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>
					
					<td bgcolor="black" width="300">
						<img src="image/flat/bashundhara1.png">
						<p><img src="image/taka.png"><b><font color="white" size="4">: 120000 Taka</font></b></p>
						<p><b><font color="white" size="3">Type: Rent &nbsp &nbsp &nbsp &nbsp Category: Commercial</font></b></p>
						<p><b><font color="white" size="3">Flat# B/2, House# 5, Road# 1, Bashundhara</font></b></p>
						<p align="center"><a href="bashundhara1.php"><b><font color="white" size="3"> See more detalis</font></b></a></p>
					</td>
					
					<td bgcolor="#00303d">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>
					
					<td bgcolor="black" width="300">
						<img src="image/flat/gulshan1.png">
						<p><img src="image/taka.png"><b><font color="white" size="4">: 39000 Taka</font></b></p>
						<p><b><font color="white" size="3">Type: Rent &nbsp &nbsp &nbsp &nbsp Category: Residential</font></b></p>
						<p><b><font color="white" size="3">Flat# C/2, House# 7, Road# 10, Section# 1, Gulshan</font></b></p>
						<p align="center"><a href="gulshan1.php"><b><font color="white" size="3"> See more detalis</font></b></a></p>
					</td>

					<td bgcolor="#00303d">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>
				
				</tr>
				
				<tr>
					<td> <br/> </td>
				</tr>
					
				<tr bgcolor="black">
					<td bgcolor="#00303d">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>
					
					<td bgcolor="black" width="300">
						<img src="image/flat/dhanmondi1.png">
						<p><img src="image/taka.png"><b><font color="white" size="4">: 80000 Taka</font></b></p>
						<p><b><font color="white" size="3">Type: Rent &nbsp &nbsp &nbsp &nbsp Category: Commercial</font></b></p>
						<p><b><font color="white" size="3">Flat# B/3, House# 33, Road# 16, Sector# 7, Uttara</font></b></p>
						<p align="center"><a href="uttara1.php"><b><font color="white" size="3"> See more detalis</font></b></a></p>
					</td>
					
					<td bgcolor="#00303d">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>
					
					<td bgcolor="black" width="300">
						<img src="image/flat/gulshan1.png">
						<p><img src="image/taka.png"><b><font color="white" size="4">: 150000 Taka</font></b></p>
						<p><b><font color="white" size="3">Type: Rent &nbsp &nbsp &nbsp &nbsp Category: Commercial</font></b></p>
						<p><b><font color="white" size="3">Flat# B/3, House# 53, Road# 6, Block# B, Banani</font></b></p>
						<p align="center"><a href="banani1.php"><b><font color="white" size="3"> See more detalis</font></b></a></p>
					</td>
					
					<td bgcolor="#00303d">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>
					
					<td bgcolor="black" width="300">
						<img src="image/flat/bashundhara1.png">
						<p><img src="image/taka.png"><b><font color="white" size="4">: 1100000 Taka</font></b></p>
						<p><b><font color="white" size="3">Type: Rent &nbsp &nbsp &nbsp &nbsp Category: Commercial</font></b></p>
						<p><b><font color="white" size="3">Flat# A/2, House# 46, Road# 19, Dhanmondi</font></b></p>
						<p align="center"><a href="dhanmondi2.php"><b><font color="white" size="3"> See more detalis</font></b></a></p>
					</td>
					
					<td bgcolor="#00303d">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>
				</tr>
			
				<tr>
					<td> <br/> </td>
				</tr>
			</table>

			<?php 
				include 'footer.php';
			?>
		</font>	
	</body>	
</html>