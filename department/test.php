

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form id="form1" runat="server">
        <asp:TextBox ID="TextBox1" onkeyup="calc()" runat="server"></asp:TextBox>
        <asp:TextBox ID="TextBox2" onkeyup="calc()" runat="server"></asp:TextBox>
        <asp:TextBox ID="TextBox3" runat="server"></asp:TextBox>
    </form>
</body>
<script type="text/javascript">
function calc() {
  var txt1 = eval(document.getElementById('<%=TextBox1.ClientID %>').value);
  var txt2 = eval(document.getElementById('<%=TextBox2.ClientID %>').value);
  document.getElementById('<%=TextBox3.ClientID %>').value = txt1 + txt2;
}


</script>
</html>










