<html>
<style type="text/css">
  .header {
			  
			   left: 0;
			   bottom: 0;
			   width: 100%;
			   background: #1abc9c;
			   color: white;
			   text-align: center;
			   padding-bottom: 49px;
            }
.auto-style1 {
	text-align: center;
}
.auto-style3 {
	text-align: right;
	font-weight: normal;
}
.footer {
			  
			   left: 0;
			   bottom: 0;
			   width: 100%;
			   background: #1abc9c;
			   color: white;
			   text-align: center;
			   margin-top: 100px
		}
</style>
<head>
<meta name="generator" content="PhpED Version 4.5 (Build 4513)">
<script  type="text/javascript">

function multiply(ip){
 var frm=ip.form,totals=frm['total'],t=0,z0=0;
 while (ip.nodeName.toUpperCase()!='TR'){
  ip=ip.parentNode;
 }
 ip=ip.getElementsByTagName('INPUT');
 ip[3].value=ip[3].value.replace(/\D/g,'')||0;
 ip[4].value=ip[4].value.replace(/\D/g,'')||0;
 ip[5].value=ip[3].value*ip[4].value;
 for (;z0<totals.length;z0++){
  totals[z0].value=totals[z0].value.replace(/\D/g,'')||0;
  t+=totals[z0].value*1;
 }
 frm['ext_total'].value=t;
 
}

</script></head>
<body style="">
<center>
  <div class="header">
		   <h1>Jibon Bima company</h1>
  </div>

<table>
<tr>
	<td style="width: 100px" class="auto-style1">Client Name</td><br><br><br>
	<td style="width: 100px" class="auto-style1">ID</td>
	<td style="width: 200px" class="auto-style1">Month</td>
                   <td style="width: 200px" class="auto-style1">Date</td>
                    <td style="width: 50px" class="auto-style1">Qty</td>
	<td style="width: 200px" class="auto-style1">Amount</td>
	<td style="width: 60px" class="auto-style1">Total</td>
                  <td style="width: 95px" class="auto-style1"> Bima Type</td>

</tr>
</table>
<table>
<tr>
<td><input type="text" name="ClNa_1" class="auto-style1" style= "width: 100px" required></td>
<td><input type="text" name="id_1" style= "width: 100px" required></td>
<td><input type="text" name="month_1" style= "width: 200px" required></td>
<td><input type="text" name="dt_1" style="width: 200px" required></td>
<td><input type="text" name="qty_1" id="1_value1" onkeyup="multiply(this)"style="width: 50px" required></td>
<td><input  type="text" name="amount_1" id="1_value2" onkeyup="multiply(this)" style="width: 200px" required></td>
<td><input  type="text" name="total" id="extend1" style="width: 60px" required></td>
<td><input list="bimalist" style="width:95px" required></td>
<datalist id="bimalist" required>
<option value="For a lifetime">
    <option value="Term">
    <option value="Prograssive term">
    <option value="Expected term">
    <option value="Polygamy insurance">
<option value="Child secure insurance">
<option value="Monthly Pansion">
  </datalist>
</tr>
</table>
<table>
<tr>
<td><input type="submit" id="mySubmit" formaction="/action_page2.php" value="Submit"></td>
</tr>
</table>
</form>
</center>
<div class="footer">
		  <p><i>&copy;Team Nexus</i></p>
		</div>
</body>
</html>