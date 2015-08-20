<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>QA Test</title>
</head>

<body>


  <table width="808" border="1">
    <tr>
      <td width="399"><a href="index.php?module=numbers&test=twonumbers">
      <label>2 Numbers</label></a></td>
      <td width="393"><?php
			if($_REQUEST['test'] =='twonumbers')
			{
			include('urltest.php');
			}?>	</td>
    </tr>
    <tr>
      <td><a href="index.php?module=numbers&test=oneblanknegative"><label>one blank negative</label></a></td>
      <td><?php
			if($_REQUEST['test'] =='oneblanknegative')
			{
			include('urltest.php');
			}?>
	</td>
    </tr>
    <tr>
      <td><a href="index.php?module=numbers&test=oneblankpositive"><label>one blank positive</label></a></td>
      <td><?php
			if($_REQUEST['test'] =='oneblankpositive')
			{
			include('urltest.php');
			}?>
	</td>
    </tr>
	<tr>
      <td><a href="index.php?module=numbers&test=positivenegative"><label>positive and negative for positive answer</label></a></td>
      <td><?php
			if($_REQUEST['test'] =='positivenegative')
			{
			include('urltest.php');
			}?>
	</td>
    </tr>
	<tr>
      <td><a href="index.php?module=numbers&test=negativepositive"><label>positive and negative for negative answer</label></a></td>
      <td><?php
			if($_REQUEST['test'] =='negativepositive')
			{
			include('urltest.php');
			}?>
	</td>
    </tr>
	<tr>
      <td><a href="index.php?module=numbers&test=samenegative"><label>Same negative numbers</label></a></td>
      <td><?php
			if($_REQUEST['test'] =='samenegative')
			{
			include('urltest.php');
			}?>
	</td>
    </tr>
	<tr>
      <td><a href="index.php?module=numbers&test=diffnegative"><label>Different negative numbers</label></a></td>
      <td><?php
			if($_REQUEST['test'] =='diffnegative')
			{
			include('urltest.php');
			}?>
	</td>
    </tr>
	<tr>
      <td><a href="index.php?module=numbers&test=negativechar"><label>negative and character</label></a></td>
      <td><?php
			if($_REQUEST['test'] =='negativechar')
			{
			include('urltest.php');
			}?>
	</td>
    </tr>
	<tr>
      <td><a href="index.php?module=numbers&test=positivechar"><label>Positive Number and character</label></a></td>
      <td><?php
			if($_REQUEST['test'] =='positivechar')
			{
			include('urltest.php');
			}?>
	</td>
    </tr>
	<tr>
      <td><a href="index.php?module=numbers&test=nosalpha"><label>combination of numbers and alphabets</label></a></td>
      <td><?php
			if($_REQUEST['test'] =='nosalpha')
			{
			include('urltest.php');
			}?>
	</td>
    </tr>
	<tr>
      <td><a href="index.php?module=numbers&test=noschr"><label>combination of numbers and special char</label></a></td>
      <td><?php
			if($_REQUEST['test'] =='noschr')
			{
			include('urltest.php');
			}?>
	</td>
    </tr>
	<tr>
      <td><a href="index.php?module=numbers&test=chr"><label>Both Characters</label></a></td>
      <td><?php
			if($_REQUEST['test'] =='chr')
			{
			include('urltest.php');
			}?>
	</td>
    </tr>
	<tr>
      <td><a href="index.php?module=numbers&test=alno"><label>combination of alphabet and number</label></a></td>
      <td><?php
			if($_REQUEST['test'] =='alno')
			{
			include('urltest.php');
			}?>
	</td>
    </tr>
  </table>
</body>
</html>
