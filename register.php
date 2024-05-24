<?php 
include ("includes/header.php");
?>
<script type="text/javascript">
    function cheacker(){
        var username = '';
        username = document.getElementById('username').value;
        if (username==''){
            alert("  وارد کردی لغت الزامیست");
        }   
        else{
            var r = confirm("ایا از صحت اطلاعات وارد شده اطمینان دارید؟");
            if (r == true)
                document.register.submit();
        }
    }
</script>
<br>
<form name = "register" action="action_register.php" method="post">
    <table style="width: 50%;" border="0" style="margin-left:auto ; margin-right:auto;">
        <tr>
            <td style="width: 40%;">لغت<span style="color: red;">*</span></td>
            <td style="width: 40%;"><input type="text" id="realname" name="word"></td>
        </tr>
        <tr>
            <td>معنی  <span style="color: red;">*</span></td>
            <td><input type="text" style="text-align: left;" id="username" name="mean"></td>
        </tr>
        <tr>
            <td> نوع<span style="color: red;">*</span></td>
            <td><input type="text" style="text-align: left;" id="text" name="type"></td>
        </tr>
        
        <tr>
            <td><br><br></td>
            <td><input type="button" value="ثبت  " onclick = "cheacker()" >&nbsp;&nbsp;&nbsp;<input type="reset" value="جدید"></td>
        </tr>
    </table>
</form>

<?php 
include ("includes/footer.php");
?>

