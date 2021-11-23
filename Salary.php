<html>
<head>
  <Style>
     .header {
        
         left: 0;
         bottom: 0;
         width: 100%;
         background: #1abc9c;
         color: white;
         text-align: center;
         padding-bottom: 49px;
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
  </Style>
    <title>Staff Salary </title>
  <script type="text/javascript">
function calc(){
 form=document.getElementById("form1");
     tar=form.tar.value;
      tar=parseFloat(tar);
       mn=form.mn.value;
        mn=parseFloat(mn);
      sal=form.sal.value;
     sal=parseFloat(sal);
     

      form.ho.value=(mn*5/100);
     
      form.he.value=(mn*5/100);

      form.edu.value=(mn*5/100);
     
      d=parseFloat(form.ho.value);
      h=parseFloat(form.he.value);
      p=parseFloat(form.edu.value);
      gs=parseFloat(sal+d+h+p);
      form.gsal.value=parseFloat(gs);
       form.tax.value=(gs*10/100);
      t=parseFloat(form.tax.value);
      form.ns.value=parseFloat(gs-t);
 }
</script>
</head>
<body>
  <div class="header">
      <h1>Jibon Bima Corporation</h1>
    </div>
<body bgcolor="#E6E6FA">
<center>

<form id="form1">
   
<h2><u>Staff Salary Calculation</u></h2>
Name                                                                                                                               :<input type="text" size="20" name="name"/><br/><br/>
ID                                                                                                                                      :<input type="text" size="20" name="id"/><br/><br/>
Post                                                                                                                                  :<input type="text" size="20" name="post"/><br/><br/>
Target                                                                                                                              :<input type="text" size="20" name="tar"/><br/><br/>
Insurance                                                                                                                        :<input type="text" size="20" name="mn"  onkeyup="calc(this)" /><br/><br/>                                                                                                        
B. Salary                                                                                                                           :<input type="text" size="20" name="sal"   onkeyup="calc(this)"/><br/><br/>
E.Home                                                                                                                             :<input type="text" size="20" name="ho"/><br/><br/>
E.Health                                                                                                                            :<input type="text" size="20" name="he"/><br/><br/>
Education                                                                                                                        :<input type="text" size="20" name="edu"/><br/><br/>
Gross Salary                                                                                                                    :<input type="text" size="20" name="gsal"/><br/><br/>
<b>Deductions :</b ><br/><br/>
TAX                                                                                                                                  :<input type="text" size="20" name="tax"/><br/><br/>
                                                                                                                   
<b><i>Total Salary </b></i>                                                                                         : <input type="text" size="20" name="ns" /><br/><br/>

<input type="reset" name="Btn1" value="Save">
<input type="reset" name="Btn2" value="Reset"><br/><br/>

</form>
<center><a href="manager.php">Back to manager page</a></center>
<div class="footer">
          <p><i>Developed By:Team Nexus</i></p>
</body>
</html>




