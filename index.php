<!DOCTYPE html>
<html>
<head>
	<title>Javascript Validation</title>


</head>
<body>
		<script type="text/javascript">
  function IsEmpty() {
  if (document.forms['frm'].question.value === "") {
    alert("empty");
    return false;
  }
  return true;
}
</script>


<form name="frm">
  Question: <input name="question" /> <br />
  <input id="insert" onclick="return IsEmpty();" type="submit" value="Add Question" />
</form>
</body>
</html>