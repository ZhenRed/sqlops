<?php
$id = $_GET['id'];
$login_user = $_GET['login_user'];
$prvi = $_GET['prvi'];
if($prvi == 2){
	echo "你是内审和安全组的人，没有权限审批工单！</br>";
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<body>
<script>
function ss(){
var slt=document.getElementById("aa");
if(slt.value==""){
alert("你还没批准呢！选择是或者否！");
return false;
}
return true;
}
</script>
<form action="update_status.php" method="get"> 
    <select name="q" id="aa">
    <option value="">是否审批？</option>
    <option value="是">是</option>
    <option value="否">否</option>
    <input type="hidden" name="update_id" value="<?php echo $id ?>">
    <input type="hidden" name="login_admin_user" value="<?php echo $login_user ?>">
    </select>
    <input type="submit" value="审批">
    </form>
</body>
</html>

