<?php
if(isset($_GET['nefl']))
$nefl=$_GET['nefl'];
if(isset($_GET['dlt']))
$dlt=$_GET['dlt'];
?>
<?php

	define('DIR_WS_IMAGES','images/');
	define('DIR_WS_CMS','cms/');
	define('HTTP_SERVER','http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
	define('DIR_WS_JS','js/');
	define('DIR_WS_CSS','css/');
	define('FILENAME_CSS_MAIN','stylesheet.css');
	define('FILENAME_JS_FUNCTIONS','functions.js');
	define('FILENAME_JS_CMS','cms.js');
	define('CHARSET','UTF-8');
?>

<script type="text/javascript" src="js/ajax.js"></script>
<script language="javascript"  type="text/javascript">
function removearchphoto(id)
{
    if (confirm('Are you sure want to delete this image ?')) 
        {
			window.location.href = "removedynamiccontentsphoto.php?id=" + id + "&archid=" + "<?php echo $id; ?>"; 
		}
}


</script>

<script language="JavaScript" type="text/javascript">

function validateForm(oForm)
 {
 			oForm.onsubmit = function() //
 	{
	alert("ddd");
	alert(SaveHTMLPage());
		oForm.elements['content'].value=SaveHTMLPage()
		
		//window.location.href = "editproduct_code.php?fldio=1" + "&desc=" + desc ;
		return true;
 }
		
 }
 </script>

<script language="javascript" type="text/javascript">
	function matrimonymore()
	{
	mywindow = window.open ("texteditor/imagepop.php","mywindow","location=0,scrollbars=1,width=650,height=550");
  	mywindow.moveTo(0,0);
	
	}
</script>

	
	<script type="text/javascript" language="javascript">
	function displaycap(div_id,cnn)
	{
	subject_id = div_id;
	var val=1;
	http.open("GET", "cap.php?cp=" + val, true);
	http.onreadystatechange = handleHttpResponse;
	http.send(null);
	}	
	</script>
	
		
	
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="../../css/iframe.css" rel="stylesheet" type="text/css">
	<meta http-equiv="Content-Type" content="text/html" charset="<?php echo CHARSET; ?>"> 
<link href="<?php echo DIR_WS_CSS . FILENAME_CSS_MAIN; ?>" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript">
function setValue()
{
      foo.document.close();
}</script>
<script type="text/JavaScript" language="JavaScript1.2" src="<?php echo DIR_WS_JS . FILENAME_JS_FUNCTIONS; ?>"></script>
<script type="text/JavaScript" language="JavaScript1.2" src="<?php echo DIR_WS_JS . FILENAME_JS_CMS; ?>"></script>

<table cellspacing="0" cellpadding="1" width="41%" border="0">
          <tr>
            <td height="770" colspan="2"><input type="hidden" name="contents" value="&lt;table width=&quot;100%&quot; align=&quot;center&quot; border=&quot;0&quot; cellspacing=&quot;3&quot; cellpadding=&quot;3&quot;&gt;
&lt;tr&gt;
&lt;td valign=&quot;top&quot;&gt;&lt;form name=&quot;article&quot; id=&quot;article&quot; method=&quot;post&quot;&gt;
&lt;table cellSpacing=&quot;0&quot; cellPadding=&quot;1&quot; width=&quot;100%&quot; border=&quot;0&quot;&gt;
&lt;tr&gt;
&lt;td colspan=&quot;2&quot;&gt;
&lt;input type=&quot;hidden&quot; name=&quot;contents&quot; value=&quot;&quot;&gt;
&lt;script language=&quot;JavaScript&quot;&gt;
var base_dir = 'http://localhost/cms_upload/';
var cms_dir = 'http://localhost/cms_upload/cms/';
&lt;/script&gt;
&lt;table cellSpacing=&quot;0&quot; cellPadding=&quot;0&quot; width=&quot;100%&quot; align=&quot;center&quot; border=&quot;0&quot;&gt;
&lt;tr&gt;
&lt;td class=&quot;content_title&quot; height=&quot;57&quot; valign=&quot;middle&quot;&gt;Add / Edit Page&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;table id=&quot;fooContainer&quot; width=&quot;100%&quot; height=&quot;400&quot; border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;0&quot;&gt;
&lt;tr&gt;
&lt;td height=&quot;1&quot;&gt;&lt;table width=&quot;100%&quot; cellspacing=&quot;0&quot; cellpadding=&quot;0&quot; border=&quot;0&quot;&gt;
&lt;tr&gt;
&lt;td height=&quot;22&quot;&gt;&lt;div id=&quot;toolbar_preview&quot;&gt;&lt;/div&gt;
&lt;table width=&quot;100%&quot; border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;0&quot; align=&quot;center&quot; id=&quot;toolbar_code&quot;&gt;
&lt;tr&gt;
&lt;td&gt;&lt;img src=&quot;images/separator.gif&quot; width=&quot;1&quot; height=&quot;1&quot;&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;table width=&quot;100%&quot; border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;0&quot; align=&quot;center&quot; id=&quot;toolbar_full&quot;&gt;
&lt;tr&gt;
&lt;td height=&quot;22&quot;&gt;&lt;table width=&quot;100&quot; border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;3&quot;&gt;
&lt;tr&gt;
&lt;td align=&quot;left&quot; valign=&quot;middle&quot; style=&quot;border-top:1px solid #425D8C;border-bottom:1px solid #425D8C;border-right:1px solid #425D8C;border-left:1px solid #425D8C&quot;&gt;&lt;table border=&quot;0&quot; cellspacing=&quot;3&quot; cellpadding=&quot;3&quot;&gt;
&lt;tr id=&quot;mode&quot;&gt;
&lt;td id=&quot;bCut&quot;&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_cut.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doCommand('Cut');foo.focus();&quot; title=&quot;Cut (Ctrl+X)&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td id=&quot;bCopy&quot;&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_copy.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doCommand('Copy');foo.focus();&quot; title=&quot;Copy (Ctrl+C)&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_paste.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doCommand('Paste');foo.focus();&quot; title=&quot;Paste (Ctrl+V)&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_delete.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doCommand('Delete');foo.focus();&quot; title=&quot;Delete&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img src=&quot;images/separator.gif&quot; width=&quot;2&quot; height=&quot;20&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_undo.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doCommand('Undo');&quot; title=&quot;Undo (Ctrl+Z)&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_redo.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doCommand('Redo');&quot; title=&quot;Redo (Ctrl+Y)&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img src=&quot;images/separator.gif&quot; width=&quot;2&quot; height=&quot;20&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img id=&quot;bold&quot; style=&quot;cursor:hand;&quot; border=&quot;0&quot; src=&quot;images/button_bold.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doCommand('Bold');foo.focus();&quot; title=&quot;Bold (Ctrl+B)&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img id=&quot;underline&quot; border=&quot;0&quot; src=&quot;images/button_underline.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doCommand('Underline');foo.focus();&quot; title=&quot;Underline (Ctrl+U)&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_italic.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doCommand('Italic');foo.focus();&quot; title=&quot;Italic (Ctrl+I)&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img src=&quot;images/separator.gif&quot; width=&quot;2&quot; height=&quot;20&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_numbers.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doCommand('InsertOrderedList');foo.focus();&quot; title=&quot;Insert Numbered List&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_bullets.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doCommand('InsertUnorderedList');foo.focus();&quot; title=&quot;Insert Bullet List&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_decrease_indent.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doCommand('Outdent');foo.focus();&quot; title=&quot;Decrease Indent&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_increase_indent.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doCommand('Indent');foo.focus();&quot; title=&quot;Increase Indent&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img src=&quot;images/separator.gif&quot; width=&quot;2&quot; height=&quot;20&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_align_left.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doCommand('JustifyLeft');foo.focus();&quot; title=&quot;Align Left&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img border=&quot;0&quot; src=&quot;images/button_align_center.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doCommand('JustifyCenter');foo.focus();&quot; title=&quot;Align Center&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_align_right.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doCommand('JustifyRight');foo.focus();&quot; title=&quot;Align Right&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_align_justify.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doCommand('JustifyFull');foo.focus();&quot; title=&quot;Justify&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img src=&quot;images/separator.gif&quot; width=&quot;2&quot; height=&quot;20&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_hr.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doCommand('InsertHorizontalRule');foo.focus();&quot; title=&quot;Insert Horizontal Line&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td id=&quot;bLink&quot;&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_link.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doLink()&quot; title=&quot;Create/Edit Link&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_anchor.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doAnchor()&quot; title=&quot;Insert Anchor&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;td id=&quot;bEmail&quot;&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_email.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;doEmail()&quot; title=&quot;Insert E-Mail&quot; class=&quot;radio&quot;&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td align=&quot;center&quot; valign=&quot;middle&quot;&gt;&lt;img src=&quot;images/blank_separator.gif&quot; width=&quot;5&quot; height=&quot;5&quot; border=&quot;0&quot;&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;table width=&quot;100&quot; border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;3&quot;&gt;
&lt;tr&gt;
&lt;td align=&quot;left&quot; valign=&quot;middle&quot; style=&quot;border-top:1px solid #425D8C;border-bottom:1px solid #425D8C;border-right:1px solid #425D8C;border-left:1px solid #425D8C&quot;&gt;&lt;table border=&quot;0&quot; cellspacing=&quot;3&quot; cellpadding=&quot;3&quot;&gt;
&lt;tr id=&quot;mode&quot;&gt;
&lt;td&gt;&lt;select onChange=&quot;(isAllowed()) ? foo.document.execCommand('FontName',false,this[this.selectedIndex].value) :foo.focus();foo.focus();this.selectedIndex=0&quot; class=&quot;dropdown-menu&quot; unselectable=&quot;on&quot; id=&quot;select1&quot; name=&quot;select1&quot;&gt;
&lt;option selected&gt;Font&lt;/option&gt;
&lt;option value=&quot;Times New Roman&quot;&gt;Default&lt;/option&gt;
&lt;option value=&quot;Arial&quot;&gt;Arial&lt;/option&gt;
&lt;option value=&quot;Verdana&quot;&gt;Verdana&lt;/option&gt;
&lt;option value=&quot;Tahoma&quot;&gt;Tahoma&lt;/option&gt;
&lt;option value=&quot;Courier New&quot;&gt;Courier New&lt;/option&gt;
&lt;option value=&quot;Georgia&quot;&gt;Georgia&lt;/option&gt;
&lt;/select&gt;
&lt;/td&gt;
&lt;td&gt;&lt;select onChange=&quot;(isAllowed()) ? foo.document.execCommand('FontSize',true,this[this.selectedIndex].value) :foo.focus();foo.focus();this.selectedIndex=0&quot; class=&quot;dropdown-menu&quot; unselectable=&quot;on&quot; id=&quot;select2&quot; name=&quot;select2&quot;&gt;
&lt;option selected&gt;Size&lt;/option&gt;
&lt;option value=&quot;1&quot;&gt;1&lt;/option&gt;
&lt;option value=&quot;2&quot;&gt;2&lt;/option&gt;
&lt;option value=&quot;3&quot;&gt;3&lt;/option&gt;
&lt;option value=&quot;4&quot;&gt;4&lt;/option&gt;
&lt;option value=&quot;5&quot;&gt;5&lt;/option&gt;
&lt;option value=&quot;6&quot;&gt;6&lt;/option&gt;
&lt;option value=&quot;7&quot;&gt;7&lt;/option&gt;
&lt;/select&gt;
&lt;/td&gt;
&lt;td&gt;&lt;select onChange=&quot;(isAllowed()) ? doFormat(this[this.selectedIndex].value) : foo.focus();foo.focus();this.selectedIndex=0&quot; class=&quot;dropdown-menu&quot; unselectable=&quot;on&quot; id=&quot;select3&quot; name=&quot;select3&quot;&gt;
&lt;option selected&gt;Format&lt;/option&gt;
&lt;option value=&quot;&lt;P&gt;&quot;&gt;Normal&lt;/option&gt;
&lt;option value=&quot;SuperScript&quot;&gt;SuperScript&lt;/option&gt;
&lt;option value=&quot;SubScript&quot;&gt;SubScript&lt;/option&gt;
&lt;option value=&quot;&lt;H1&gt;&quot;&gt;H1&lt;/option&gt;
&lt;option value=&quot;&lt;H2&gt;&quot;&gt;H2&lt;/option&gt;
&lt;option value=&quot;&lt;H3&gt;&quot;&gt;H3&lt;/option&gt;
&lt;option value=&quot;&lt;H4&gt;&quot;&gt;H4&lt;/option&gt;
&lt;option value=&quot;&lt;H5&gt;&quot;&gt;H5&lt;/option&gt;
&lt;option value=&quot;&lt;H6&gt;&quot;&gt;H6&lt;/option&gt;
&lt;/select&gt;
&lt;/td&gt;
&lt;td&gt;&lt;img src=&quot;images/separator.gif&quot; width=&quot;2&quot; height=&quot;20&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_font_color.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;(isAllowed()) ? showMenu('colorMenu',180,291) : foo.focus()&quot; class=&quot;radio&quot; title=&quot;Font Color&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_highlight.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;(isAllowed()) ? showMenu('colorMenu2',180,291) : foo.focus()&quot; class=&quot;radio&quot; title=&quot;Highlight&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img src=&quot;images/separator.gif&quot; width=&quot;2&quot; height=&quot;20&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img border=&quot;0&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_table_down.gif&quot; width=&quot;21&quot; height=&quot;20&quot; onMouseOver=&quot;button_over(this);&quot; onMouseOut=&quot;button_out(this);&quot; onMouseDown=&quot;button_down(this);&quot; onClick=&quot;(isAllowed()) ? showMenu('tableMenu',160,284) : foo.focus()&quot; class=&quot;radio&quot; title=&quot;Table Functions&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img class=&quot;radio&quot; onMouseDown=&quot;button_down(this);&quot; onMouseOver=&quot;button_over(this);&quot; onClick=&quot;cleanHTMLCode(0)&quot; onMouseOut=&quot;button_out(this);&quot; type=&quot;image&quot; width=&quot;21&quot; height=&quot;20&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_clean_html_code.gif&quot; border=&quot;0&quot; title=&quot;Clean HTML Code&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img class=&quot;radio&quot; onMouseDown=&quot;button_down(this);&quot; onMouseOver=&quot;button_over(this);&quot; onClick=&quot;cleanHTMLCode(1)&quot; onMouseOut=&quot;button_out(this);&quot; type=&quot;image&quot; width=&quot;21&quot; height=&quot;20&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_clean_word_code.gif&quot; border=&quot;0&quot; title=&quot;Clean Word Tags&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img class=&quot;radio&quot; onMouseDown=&quot;button_down(this);&quot; onMouseOver=&quot;button_over(this);&quot; onClick=&quot;cleanCode()&quot; onMouseOut=&quot;button_out(this);&quot; type=&quot;image&quot; width=&quot;21&quot; height=&quot;20&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_clean_code.gif&quot; border=&quot;0&quot; title=&quot;Clean All&quot;&gt;&lt;/td&gt;
&lt;td&gt;&lt;img class=&quot;radio&quot; onMouseDown=&quot;button_down(this);&quot; onMouseOver=&quot;button_over(this);&quot; onClick=&quot;toggleBorders()&quot; onMouseOut=&quot;button_out(this);&quot; type=&quot;image&quot; width=&quot;21&quot; height=&quot;20&quot; style=&quot;cursor:hand;&quot; src=&quot;images/button_show_borders.gif&quot; border=&quot;0&quot; title=&quot;Show / Hide Guidelines&quot; id=&quot;guidelines&quot;&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;table width=&quot;100%&quot; border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;0&quot;&gt;
&lt;tr&gt;
&lt;td align=&quot;center&quot; valign=&quot;middle&quot;&gt;&lt;img src=&quot;images/blank_separator.gif&quot; width=&quot;5&quot; height=&quot;10&quot; border=&quot;0&quot;&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;div id=&quot;tableMenu&quot; style=&quot;display:none&quot;&gt;
&lt;table border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;0&quot; width=&quot;160&quot; style=&quot;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: buttonshadow 2px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: buttonshadow 1px solid;&quot; bgcolor=&quot;threedface&quot;&gt;
&lt;tr onClick=&quot;parent.ShowInsertTable()&quot; title=&quot;Insert Table&quot;&gt;
&lt;td style=&quot;cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.button_out(this);&quot; onMouseDown=&quot;parent.button_down(this)&quot;&gt;&lt;img id=&quot;insertTable1&quot; border=&quot;0&quot; src=&quot;images/button_table.gif&quot; width=&quot;21&quot; height=&quot;20&quot; align=&quot;absmiddle&quot;&gt; Insert Table... &lt;/td&gt;
&lt;/tr&gt;
&lt;tr onClick=&quot;parent.ModifyTable()&quot; title=&quot;Modify Table Properties&quot;&gt;
&lt;td style=&quot;cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.button_out(this);&quot; onMouseDown=&quot;parent.button_down(this)&quot; id=&quot;modifyTable&quot;&gt;&lt;img id=&quot;modifyTable2&quot; width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_modify_table.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Modify Table Properties... &lt;/td&gt;
&lt;/tr&gt;
&lt;tr title=&quot;Modify Cell Properties&quot; onClick=&quot;parent.ModifyCell()&quot;&gt;
&lt;td style=&quot;cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.button_out(this);&quot; onMouseDown=&quot;parent.button_down(this)&quot; id=&quot;modifyCell&quot;&gt;&lt;img id=&quot;modifyCell2&quot; width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_modify_cell.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Modify Cell Properties... &lt;/td&gt;
&lt;/tr&gt;
&lt;tr height=&quot;10&quot;&gt;
&lt;td align=&quot;center&quot;&gt;&lt;img src=&quot;images/vertical_spacer.gif&quot; width=&quot;140&quot; height=&quot;2&quot;&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr title=&quot;Insert Column to the Left&quot; onClick=&quot;parent.InsertColBefore()&quot;&gt;
&lt;td style=&quot;cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.button_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot; id=&quot;colBefore&quot;&gt;&lt;img id=&quot;colBefore2&quot; width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_insert_col_before.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Insert Column to the Left&lt;/td&gt;
&lt;/tr&gt;
&lt;tr title=&quot;Insert Column to the Right&quot; onClick=&quot;parent.InsertColAfter()&quot;&gt;
&lt;td style=&quot;cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.button_out(this);&quot; onMouseDown=&quot;parent.button_down(this)&quot; id=&quot;colAfter&quot;&gt;&lt;img id=&quot;colAfter2&quot; width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_insert_col_after.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Insert Column to the Right&lt;/td&gt;
&lt;/tr&gt;
&lt;tr height=&quot;10&quot;&gt;
&lt;td align=&quot;center&quot;&gt;&lt;img src=&quot;images/vertical_spacer.gif&quot; width=&quot;140&quot; height=&quot;2&quot;&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr title=&quot;Insert Row Above&quot; onClick=&quot;parent.InsertRowAbove()&quot;&gt;
&lt;td style=&quot;cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.button_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot; id=&quot;rowAbove&quot;&gt;&lt;img id=&quot;rowAbove2&quot; width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_insert_row_above.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Insert Row Above&lt;/td&gt;
&lt;/tr&gt;
&lt;tr title=&quot;Insert Row Below&quot; onClick=&quot;parent.InsertRowBelow()&quot;&gt;
&lt;td style=&quot;cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.button_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot; id=&quot;rowBelow&quot;&gt;&lt;img id=&quot;rowBelow2&quot; width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_insert_row_below.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Insert Row Below&lt;/td&gt;
&lt;/tr&gt;
&lt;tr height=&quot;10&quot;&gt;
&lt;td align=&quot;center&quot;&gt;&lt;img src=&quot;images/vertical_spacer.gif&quot; width=&quot;140&quot; height=&quot;2&quot;&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr title=&quot;Delete Row&quot; onClick=&quot;parent.DeleteRow()&quot;&gt;
&lt;td style=&quot;cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.button_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot; id=&quot;deleteRow&quot;&gt;&lt;img id=&quot;deleteRow2&quot; width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_delete_row.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Delete Row&lt;/td&gt;
&lt;/tr&gt;
&lt;tr title=&quot;Delete Column&quot; onClick=&quot;parent.DeleteCol()&quot;&gt;
&lt;td style=&quot;cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.button_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot; id=&quot;deleteCol&quot;&gt;&lt;img id=&quot;deleteCol2&quot; width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_delete_col.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Delete Column&lt;/td&gt;
&lt;/tr&gt;
&lt;tr height=&quot;10&quot;&gt;
&lt;td align=&quot;center&quot;&gt;&lt;img src=&quot;images/vertical_spacer.gif&quot; width=&quot;140&quot; height=&quot;2&quot; tabindex=&quot;1&quot; hideFocus=&quot;true&quot;&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr title=&quot;Increase Column Span&quot; onClick=&quot;parent.IncreaseColspan()&quot;&gt;
&lt;td style=&quot;cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.button_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot; id=&quot;increaseSpan&quot;&gt;&lt;img id=&quot;increaseSpan2&quot; width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_increase_colspan.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Increase Column Span&lt;/td&gt;
&lt;/tr&gt;
&lt;tr title=&quot;Decrease Column Span&quot; onClick=&quot;parent.DecreaseColspan()&quot;&gt;
&lt;td style=&quot;cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.button_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot; id=&quot;decreaseSpan&quot;&gt;&lt;img id=&quot;decreaseSpan2&quot; width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_decrease_colspan.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Decrease Column Span&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div id=&quot;colorMenu&quot; style=&quot;display:none;&quot;&gt;
&lt;table cellpadding=&quot;1&quot; cellspacing=&quot;5&quot; border=&quot;1&quot; bordercolor=&quot;#666666&quot; style=&quot;cursor: hand;font-family: Verdana; font-size: 7px; BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: buttonshadow 2px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: buttonshadow 1px solid;&quot; bgcolor=&quot;threedface&quot;&gt;
&lt;tr&gt;
&lt;td colspan=&quot;10&quot; id=&quot;color&quot; style=&quot;height=20px;font-family: verdana; font-size:12px;&quot;&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FF0000; width=12px&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFFF00; width=12px&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#00FF00; width=12px&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#00FFFF; width=12px&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#0000FF; width=12px&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FF00FF; width=12px&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFFFFF; width=12px&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#F5F5F5; width=12px&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#DCDCDC; width=12px&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFFAFA; width=12px&quot;&gt;&nbsp;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#D3D3D3&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#C0C0C0&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#A9A9A9&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#808080&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#696969&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#000000&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#2F4F4F&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#708090&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#778899&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#4682B4&quot;&gt;&nbsp;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#4169E1&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#6495ED&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#B0C4DE&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#7B68EE&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#6A5ACD&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#483D8B&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#191970&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#000080&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#00008B&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#0000CD&quot;&gt;&nbsp;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#1E90FF&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#00BFFF&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#87CEFA&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#87CEEB&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#ADD8E6&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#B0E0E6&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#F0FFFF&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#E0FFFF&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#AFEEEE&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#00CED1&quot;&gt;&nbsp;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#5F9EA0&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#48D1CC&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#00FFFF&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#40E0D0&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#20B2AA&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#008B8B&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#008080&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#7FFFD4&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#66CDAA&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#8FBC8F&quot;&gt;&nbsp;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#3CB371&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#2E8B57&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#006400&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#008000&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#228B22&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#32CD32&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#00FF00&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#7FFF00&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#7CFC00&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#ADFF2F&quot;&gt;&nbsp;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#98FB98&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#90EE90&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#00FF7F&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#00FA9A&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#556B2F&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#6B8E23&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#808000&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#BDB76B&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#B8860B&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#DAA520&quot;&gt;&nbsp;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFD700&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#F0E68C&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#EEE8AA&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFEBCD&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFE4B5&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#F5DEB3&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFDEAD&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#DEB887&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#D2B48C&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#BC8F8F&quot;&gt;&nbsp;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#A0522D&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#8B4513&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#D2691E&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#CD853F&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#F4A460&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#8B0000&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#800000&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#A52A2A&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#B22222&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#CD5C5C&quot;&gt;&nbsp;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#F08080&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FA8072&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#E9967A&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFA07A&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FF7F50&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FF6347&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FF8C00&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFA500&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FF4500&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#DC143C&quot;&gt;&nbsp;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FF0000&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FF1493&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FF00FF&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FF69B4&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFB6C1&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFC0CB&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#DB7093&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#C71585&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#800080&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#8B008B&quot;&gt;&nbsp;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#9370DB&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#8A2BE2&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#4B0082&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#9400D3&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#9932CC&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#BA55D3&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#DA70D6&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#EE82EE&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#DDA0DD&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#D8BFD8&quot;&gt;&nbsp;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#E6E6FA&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#F8F8FF&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#F0F8FF&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#F5FFFA&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#F0FFF0&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FAFAD2&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFFACD&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFF8DC&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFFFE0&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFFFF0&quot;&gt;&nbsp;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFFAF0&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FAF0E6&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FDF5E6&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FAEBD7&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFE4C4&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFDAB9&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFEFD5&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFF5EE&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFF0F5&quot;&gt;&nbsp;&lt;/td&gt;
&lt;td onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot; style=&quot;background-color:#FFE4E1&quot;&gt;&nbsp;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td colspan=&quot;10&quot; style=&quot;height=15px;font-family: verdana; font-size:10px;&quot; onMouseOver=&quot;parent.showColor(color,this)&quot; onClick=&quot;parent.doColor(color)&quot;&gt; None&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div id=&quot;charMenu&quot; style=&quot;display:none;&quot;&gt;
&lt;table cellpadding=&quot;1&quot; cellspacing=&quot;5&quot; border=&quot;1&quot; bordercolor=&quot;#666666&quot; style=&quot;cursor: hand;font-family: Verdana; font-size: 14px; font-weight: bold; BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: buttonshadow 2px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: buttonshadow 1px solid;&quot; bgcolor=&quot;threedface&quot;&gt;
&lt;tr&gt;
&lt;td style=&quot;width=15px; cursor: hand;&quot; onClick=&quot;parent.insertChar(this)&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.char_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot;&gt;c&lt;/td&gt;
&lt;td style=&quot;width=15px; cursor: hand;&quot; onClick=&quot;parent.insertChar(this)&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.char_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot;&gt;R&lt;/td&gt;
&lt;td style=&quot;width=15px; cursor: hand;&quot; onClick=&quot;parent.insertChar(this)&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.char_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot;&gt;?&lt;/td&gt;
&lt;td style=&quot;width=15px; cursor: hand;&quot; onClick=&quot;parent.insertChar(this)&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.char_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot;&gt;?&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td style=&quot;width=15px; cursor: hand;&quot; onClick=&quot;parent.insertChar(this)&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.char_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot;&gt;?&lt;/td&gt;
&lt;td style=&quot;width=15px; cursor: hand;&quot; onClick=&quot;parent.insertChar(this)&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.char_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot;&gt;?&lt;/td&gt;
&lt;td style=&quot;width=15px; cursor: hand;&quot; onClick=&quot;parent.insertChar(this)&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.char_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot;&gt;?&lt;/td&gt;
&lt;td style=&quot;width=15px; cursor: hand;&quot; onClick=&quot;parent.insertChar(this)&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.char_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot;&gt;&curren;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td style=&quot;width=15px; cursor: hand;&quot; onClick=&quot;parent.insertChar(this)&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.char_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot;&gt;&deg;&lt;/td&gt;
&lt;td style=&quot;width=15px; cursor: hand;&quot; onClick=&quot;parent.insertChar(this)&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.char_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot;&gt;+&lt;/td&gt;
&lt;td style=&quot;width=15px; cursor: hand;&quot; onClick=&quot;parent.insertChar(this)&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.char_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot;&gt;?&lt;/td&gt;
&lt;td style=&quot;width=15px; cursor: hand;&quot; onClick=&quot;parent.insertChar(this)&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.char_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot;&gt;&para;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td style=&quot;width=15px; cursor: hand;&quot; onClick=&quot;parent.insertChar(this)&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.char_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot;&gt;a&lt;/td&gt;
&lt;td style=&quot;width=15px; cursor: hand;&quot; onClick=&quot;parent.insertChar(this)&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.char_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot;&gt;o&lt;/td&gt;
&lt;td style=&quot;width=15px; cursor: hand;&quot; onClick=&quot;parent.insertChar(this)&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.char_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot;&gt;e&lt;/td&gt;
&lt;td style=&quot;width=15px; cursor: hand;&quot; onClick=&quot;parent.insertChar(this)&quot; onMouseOver=&quot;parent.button_over(this);&quot; onMouseOut=&quot;parent.char_out(this);&quot; onMouseDown=&quot;parent.button_down(this);&quot;&gt;u&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div id=&quot;contextMenu&quot; style=&quot;display:none;&quot;&gt;
&lt;table border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;3&quot; width=&quot;160&quot; style=&quot;cursor: hand; font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;&quot; bgcolor=&quot;threedface&quot;&gt;
&lt;tr onClick=&quot;parent.document.execCommand('Cut');parent.oPopup2.hide()&quot;&gt;
&lt;td onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img border=&quot;0&quot; src=&quot;images/button_cut.gif&quot; width=&quot;21&quot; height=&quot;20&quot; align=&quot;absmiddle&quot;&gt; Cut &lt;/td&gt;
&lt;/tr&gt;
&lt;tr onClick=&quot;parent.document.execCommand('Copy');parent.oPopup2.hide()&quot;&gt;
&lt;td onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img border=&quot;0&quot; src=&quot;images/button_copy.gif&quot; width=&quot;21&quot; height=&quot;20&quot; align=&quot;absmiddle&quot;&gt; Copy &lt;/td&gt;
&lt;/tr&gt;
&lt;tr onClick=&quot;parent.document.execCommand('Paste');parent.oPopup2.hide()&quot;&gt;
&lt;td onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img border=&quot;0&quot; src=&quot;images/button_paste.gif&quot; width=&quot;21&quot; height=&quot;20&quot; align=&quot;absmiddle&quot;&gt; Paste &lt;/td&gt;
&lt;/tr&gt;
&lt;tr onClick=&quot;parent.document.execCommand('Delete');parent.oPopup2.hide()&quot;&gt;
&lt;td onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img border=&quot;0&quot; src=&quot;images/button_delete.gif&quot; width=&quot;21&quot; height=&quot;20&quot; align=&quot;absmiddle&quot;&gt; Delete &lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div id=&quot;cmClean&quot; style=&quot;display:none&quot;&gt;
&lt;table border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;3&quot; width=&quot;160&quot; style=&quot;font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;&quot; bgcolor=&quot;threedface&quot;&gt;
&lt;tr onClick=&quot;parent.cleanHTMLCode(0)&quot;&gt;
&lt;td onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_clean_html_code.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Clean HTML Code... &lt;/td&gt;
&lt;/tr&gt;
&lt;tr onClick=&quot;parent.cleanHTMLCode(1)&quot;&gt;
&lt;td onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img id=&quot;insertTable1&quot; border=&quot;0&quot; src=&quot;images/button_clean_word_code.gif&quot; width=&quot;21&quot; height=&quot;20&quot; align=&quot;absmiddle&quot;&gt; Clean Word Tags... &lt;/td&gt;
&lt;/tr&gt;
&lt;tr onClick=&quot;parent.cleanCode()&quot;&gt;
&lt;td onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img id=&quot;insertTable1&quot; border=&quot;0&quot; src=&quot;images/button_clean_code.gif&quot; width=&quot;21&quot; height=&quot;20&quot; align=&quot;absmiddle&quot;&gt; Clean All... &lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div id=&quot;cmTableMenu&quot; style=&quot;display:none&quot;&gt;
&lt;table border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;3&quot; width=&quot;160&quot; style=&quot;font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;&quot; bgcolor=&quot;threedface&quot;&gt;
&lt;tr onClick=&quot;parent.ModifyTable();&quot;&gt;
&lt;td onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_modify_table.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Modify Table Properties... &lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div id=&quot;cmTableFunctions&quot; style=&quot;display:none;&quot;&gt;
&lt;table border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;3&quot; width=&quot;160&quot; style=&quot;font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;&quot; bgcolor=&quot;threedface&quot;&gt;
&lt;tr onClick=&quot;parent.ModifyCell();&quot;&gt;
&lt;td onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_modify_cell.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Modify Cell Properties... &lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;table border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;3&quot; width=&quot;160&quot; style=&quot;font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;&quot; bgcolor=&quot;threedface&quot;&gt;
&lt;tr onClick=&quot;parent.InsertColBefore(); parent.oPopup2.hide();&quot;&gt;
&lt;td onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_insert_col_before.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Insert Column to the Left &lt;/td&gt;
&lt;/tr&gt;
&lt;tr onClick=&quot;parent.InsertColAfter(); parent.oPopup2.hide();&quot;&gt;
&lt;td onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_insert_col_after.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Insert Column to the Right &lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;table border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;3&quot; width=&quot;160&quot; style=&quot;font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;&quot; bgcolor=&quot;threedface&quot;&gt;
&lt;tr onClick=&quot;parent.InsertRowAbove(); parent.oPopup2.hide();&quot;&gt;
&lt;td onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_insert_row_above.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Insert Row Above &lt;/td&gt;
&lt;/tr&gt;
&lt;tr onClick=&quot;parent.InsertRowBelow(); parent.oPopup2.hide();&quot;&gt;
&lt;td onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_insert_row_below.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Insert Row Below &lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;table border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;3&quot; width=&quot;160&quot; style=&quot;font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;&quot; bgcolor=&quot;threedface&quot;&gt;
&lt;tr onClick=&quot;parent.DeleteRow(); parent.oPopup2.hide();&quot;&gt;
&lt;td onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_delete_row.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Delete Row &lt;/td&gt;
&lt;/tr&gt;
&lt;tr onClick=&quot;parent.DeleteCol(); parent.oPopup2.hide();&quot;&gt;
&lt;td onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_delete_col.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Delete Column &lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;table border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;3&quot; width=&quot;160&quot; style=&quot;font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;&quot; bgcolor=&quot;threedface&quot;&gt;
&lt;tr onClick=&quot;parent.IncreaseColspan(); parent.oPopup2.hide();&quot;&gt;
&lt;td onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_increase_colspan.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Increase Column Span &lt;/td&gt;
&lt;/tr&gt;
&lt;tr onClick=&quot;parent.DecreaseColspan(); parent.oPopup2.hide();&quot;&gt;
&lt;td onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_decrease_colspan.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Decrease Column Span &lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div id=&quot;cmImageMenu&quot; style=&quot;display:none&quot;&gt;
&lt;table border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;3&quot; width=&quot;160&quot; style=&quot;font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;&quot; bgcolor=&quot;threedface&quot;&gt;
&lt;tr onClick=&quot;parent.doImage()&quot;&gt;
&lt;td style=&quot;cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;&quot; onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_image.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Modify Image Properties... &lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div id=&quot;cmLinkMenu&quot; style=&quot;display:none&quot;&gt;
&lt;table border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;3&quot; width=&quot;160&quot; style=&quot;font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;&quot; bgcolor=&quot;threedface&quot;&gt;
&lt;tr onClick=&quot;parent.doLink('');&quot;&gt;
&lt;td style=&quot;cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;&quot; onMouseOver=&quot;parent.contextHilite(this);&quot; onMouseOut=&quot;parent.contextDelite(this);&quot;&gt;&lt;img width=&quot;21&quot; height=&quot;20&quot; src=&quot;images/button_link.gif&quot; border=&quot;0&quot; align=&quot;absmiddle&quot;&gt; Create or Modify Link... &lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;/div&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;table height=&quot;100%&quot; width=&quot;100%&quot;&gt;
&lt;tr&gt;
&lt;td height=&quot;1&quot;&gt;&lt;table width=&quot;100%&quot; border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;0&quot;&gt;
&lt;tr&gt;
&lt;td align=&quot;left&quot; valign=&quot;middle&quot;&gt;&lt;ul id=&quot;maintab&quot; class=&quot;shadetabs&quot;&gt;
&lt;li id=&quot;editTab&quot; class=&quot;selected&quot; onClick=&quot;editMe()&quot;&gt;&lt;a href=&quot;#&quot; rel=&quot;tcontent&quot;&gt;&lt;span class=&quot;ap-language-link&quot;&gt;Design&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li id=&quot;sourceTab&quot; class=&quot;selected&quot; onClick=&quot;sourceMe()&quot;&gt;&lt;a href=&quot;#&quot; rel=&quot;tcontent&quot;&gt;&lt;span class=&quot;ap-language-link&quot;&gt;Source&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li id=&quot;previewTab&quot; class=&quot;selected&quot; onClick=&quot;previewMe()&quot;&gt;&lt;a href=&quot;#&quot; rel=&quot;tcontent&quot;&gt;&lt;span class=&quot;ap-language-link&quot;&gt;Preview&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tabcms&quot;&gt;
&lt;div id=&quot;tcontent&quot; class=&quot;shopping-cart&quot; width=&quot;100%&quot;&gt;
&lt;iFrame onBlur=&quot;updateValue()&quot; security=&quot;restricted&quot; contenteditable=&quot;true&quot; height=&quot;100%&quot; id=&quot;foo&quot; style=&quot;width: 100%;&quot;&gt;&lt;/iFrame&gt;
&lt;iframe onBlur=&quot;updateValue()&quot; id=&quot;previewFrame&quot; height=&quot;100%&quot; style=&quot;width=100%; display:none&quot;&gt;&lt;/iframe&gt;
&lt;/div&gt;
&lt;br&gt;
&lt;div class=&quot;step&quot; id=&quot;statusbar&quot;&gt;&lt;/div&gt;
&lt;/div&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;div id=&quot;buffer&quot; style=&quot;display:none&quot;&gt;&lt;/div&gt;
&lt;div id=&quot;undo_buffer&quot; style=&quot;display:none&quot;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td align=&quot;left&quot;&gt;
&lt;input type=&quot;button&quot; class=&quot;button&quot; value=&quot;Save&quot; onClick=&quot;if(isEmptyPage()) {saveValue(); document.article.submit()}&quot;&gt;&nbsp;
&lt;input type=&quot;button&quot; class=&quot;button&quot; value=&quot;Delete&quot; onClick=&quot;if(confirm('Are you sure you want to delete this page?')){document.article.mode.value='del'; document.article.submit()}&quot;&gt;&nbsp;
&lt;input type=&quot;button&quot; class=&quot;button&quot; value=&quot;Close&quot; onClick=&quot;window.close()&quot;&gt;
&lt;input type=&quot;hidden&quot; name=&quot;mode&quot; value=&quot;save&quot;&gt;
&lt;input type=&quot;hidden&quot; name=&quot;lang&quot; value=&quot;en&quot;&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;/form&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;script type=&quot;text/JavaScript&quot; language=&quot;JavaScript1.2&quot;&gt;initializetabcontent(&quot;maintab&quot;);&lt;/script&gt;" />
                <script language="JavaScript" type="text/javascript">
                          </script>
                <textarea id="t" name="t"  rows="1" cols="1" style="visibility:hidden;" disabled="disabled"><?php echo $description;?></textarea>
                <script language="JavaScript" type="text/javascript">var base_dir = '<?php echo HTTP_SERVER; ?>';
  var cms_dir = '<?php echo HTTP_SERVER . DIR_WS_CMS; ?>';
                                </script>
                <table id="fooContainer" height="706" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="540" height="1" align="left" valign="top"><table width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tr>
                          <td height="22"><div id="toolbar_preview"></div><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" id="toolbar_code">
                                <tr>
                                  <td><img src="<?php echo DIR_WS_IMAGES; ?>separator.gif" width="1" height="1" /></td>
                                </tr>
                              </table>
                            <table width="99%" border="0" cellspacing="0" cellpadding="0" align="center" id="toolbar_full">
                                <tr>
                                  <td height="22"><table width="75%" border="0" cellspacing="0" cellpadding="3">
                                      <tr>
                                        <td width="395" align="left" valign="middle" style="border-top:1px solid #425D8C;border-bottom:1px solid #425D8C;border-right:1px solid #425D8C;border-left:1px solid #425D8C"><table width="100%" border="0" cellspacing="3" cellpadding="3">
                                            <tr id="mode">
                                              <td id="bCut"><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_cut.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doCommand('Cut');foo.focus();" title="Cut (Ctrl+X)" class="radio" /></td>
                                              <td id="bCopy"><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_copy.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doCommand('Copy');foo.focus();" title="Copy (Ctrl+C)" class="radio" /></td>
                                              <td><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_paste.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doCommand('Paste');foo.focus();" title="Paste (Ctrl+V)" class="radio" /></td>
                                              <td><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_delete.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doCommand('Delete');foo.focus();" title="Delete" class="radio" /></td>
                                              <td><img src="<?php echo DIR_WS_IMAGES; ?>separator.gif" width="2" height="20" /></td>
                                              <td><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_undo.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doCommand('Undo');" title="Undo (Ctrl+Z)" class="radio" /></td>
                                              <td><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_redo.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doCommand('Redo');" title="Redo (Ctrl+Y)" class="radio" /></td>
                                              <td><img src="<?php echo DIR_WS_IMAGES; ?>separator.gif" width="2" height="20" /></td>
                                              <td><img id="bold" style="cursor:hand;" border="0" src="<?php echo DIR_WS_IMAGES; ?>button_bold.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doCommand('Bold');foo.focus();" title="Bold (Ctrl+B)" class="radio" /></td>
                                              <td><img id="underline" border="0" src="<?php echo DIR_WS_IMAGES; ?>button_underline.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doCommand('Underline');foo.focus();" title="Underline (Ctrl+U)" class="radio" /></td>
                                              <td><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_italic.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doCommand('Italic');foo.focus();" title="Italic (Ctrl+I)" class="radio" /></td>
                                              <td><img src="<?php echo DIR_WS_IMAGES; ?>separator.gif" width="2" height="20" /></td>
                                              <td><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_numbers.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doCommand('InsertOrderedList');foo.focus();" title="Insert Numbered List" class="radio" /></td>
                                              <td><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_bullets.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doCommand('InsertUnorderedList');foo.focus();" title="Insert Bullet List" class="radio" /></td>
                                              <td><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_decrease_indent.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doCommand('Outdent');foo.focus();" title="Decrease Indent" class="radio" /></td>
                                              <td><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_increase_indent.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doCommand('Indent');foo.focus();" title="Increase Indent" class="radio" /></td>
                                              <td><img src="<?php echo DIR_WS_IMAGES; ?>separator.gif" width="2" height="20" /></td>
                                              <td><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_align_left.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doCommand('JustifyLeft');foo.focus();" title="Align Left" class="radio" /></td>
                                            </tr>
                                            <tr id="mode">
                                              <td id="bCut"><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_font_color.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="(isAllowed()) ? showMenu('colorMenu',180,291) : foo.focus()" class="radio" title="Font Color" /></td>
                                              <td id="bCopy"><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_highlight.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="(isAllowed()) ? showMenu('colorMenu2',180,291) : foo.focus()" class="radio" title="Highlight" /></td>
                                              <td><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_table_down.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="(isAllowed()) ? showMenu('tableMenu',160,284) : foo.focus()" class="radio" title="Table Functions" /></td>
                                              <td><img class="radio" onMouseDown="button_down(this);" onMouseOver="button_over(this);" onClick="cleanHTMLCode(0)" onMouseOut="button_out(this);" type="image" width="21" height="20" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_clean_html_code.gif" border="0" title="Clean HTML Code" /></td>
                                              <td>&nbsp;</td>
                                              <td><img class="radio" onMouseDown="button_down(this);" onMouseOver="button_over(this);" onClick="cleanHTMLCode(1)" onMouseOut="button_out(this);" type="image" width="21" height="20" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_clean_word_code.gif" border="0" title="Clean Word Tags" /></td>
                                              <td><img class="radio" onMouseDown="button_down(this);" onMouseOver="button_over(this);" onClick="cleanCode()" onMouseOut="button_out(this);" type="image" width="21" height="20" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_clean_code.gif" border="0" title="Clean All" /></td>
                                              <td>&nbsp;</td>
                                              <td><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_hr.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doCommand('InsertHorizontalRule');foo.focus();" title="Insert Horizontal Line" class="radio" /></td>
                                              <td><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_link.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doLink()" title="Create/Edit Link" class="radio" /></td>
                                              <td><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_anchor.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doAnchor()" title="Insert Anchor" class="radio" /></td>
                                              <td>&nbsp;</td>
                                              <td><img class="radio" onMouseDown="button_down(this);" onMouseOver="button_over(this);" onClick="toggleBorders()" onMouseOut="button_out(this);" type="image" width="21" height="20" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_show_borders.gif" border="0" title="Show / Hide Guidelines" id="guidelines" /></td>
                                              <td>&nbsp;</td>
                                              <td><img border="0" src="<?php echo DIR_WS_IMAGES; ?>button_align_center.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doCommand('JustifyCenter');foo.focus();" title="Align Center" class="radio" /></td>
                                              <td><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_align_right.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doCommand('JustifyRight');foo.focus();" title="Align Right" class="radio" /></td>
                                              <td><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_align_justify.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);" onClick="doCommand('JustifyFull');foo.focus();" title="Justify" class="radio" /></td>
                                              <td><a href="javascript:matrimonymore()"><img border="0" style="cursor:hand;" src="<?php echo DIR_WS_IMAGES; ?>button_image.gif" width="21" height="20" onMouseOver="button_over(this);" onMouseOut="button_out(this);" onMouseDown="button_down(this);"  title="Image Upload" class="radio" /></a></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                  </table></td>
                                </tr>
                                <tr>
                                  <td align="center" valign="middle"><img src="<?php echo DIR_WS_IMAGES; ?>blank_separator.gif" width="5" height="5" border="0" /></td>
                                </tr>
                                <tr>
                                  <td><table width="100" border="0" cellspacing="0" cellpadding="3">
                                      <tr>
                                        <td align="left" valign="middle" style="border-top:1px solid #425D8C;border-bottom:1px solid #425D8C;border-right:1px solid #425D8C;border-left:1px solid #425D8C"><table border="0" cellspacing="3" cellpadding="3">
                                            <tr id="mode">
                                              <td width="109"><select onChange="(isAllowed()) ? foo.document.execCommand('FontName',false,this[this.selectedIndex].value) :foo.focus();foo.focus();this.selectedIndex=0" class="dropdown-menu" unselectable="on" id="select1" name="select1">
                                                  <option selected="selected">Font</option>
                                                  <option value="Times New Roman">Default</option>
                                                  <option value="Arial">Arial</option>
                                                  <option value="Verdana">Verdana</option>
                                                  <option value="Tahoma">Tahoma</option>
                                                  <option value="Courier New">Courier New</option>
                                                  <option value="Georgia">Georgia</option>
                                                </select>
                                              </td>
                                              <td width="62"><select onChange="(isAllowed()) ? foo.document.execCommand('FontSize',true,this[this.selectedIndex].value) :foo.focus();foo.focus();this.selectedIndex=0" class="dropdown-menu" unselectable="on" id="select2" name="select2" >
                                                  <option selected="selected">Size</option>
                                                  <option value="1">8.5 pt</option>
                                                  <option value="2">9pt</option>
                                                  <option value="3">9.5 pt</option>
                                                  <option value="4">10pt</option>
                                                  <option value="5">10.5pt</option>
                                                  <option value="6">11pt</option>
                                                  <option value="7">11.5pt</option>
                                                  <option value="8">12pt</option>
                                                  <option value="9">12.5pt</option>
                                                  <option value="10">13pt</option>
                                                  <option value="11">13.5pt</option>
                                                  <option value="12">14pt</option>
                                                  <option value="13">14.5pt</option>
                                              </select></td>
                                              <td width="105"><select onChange="(isAllowed()) ? doFormat(this[this.selectedIndex].value) : foo.focus();foo.focus();this.selectedIndex=0" class="dropdown-menu" unselectable="on" id="select3" name="select3">
                                                  <option selected="selected">Format</option>
                                                  <option value="&lt;P&gt;">Normal</option>
                                                  <option value="SuperScript">SuperScript</option>
                                                  <option value="SubScript">SubScript</option>
                                                  <option value="&lt;H1&gt;">H1</option>
                                                  <option value="&lt;H2&gt;">H2</option>
                                                  <option value="&lt;H3&gt;">H3</option>
                                                  <option value="&lt;H4&gt;">H4</option>
                                                  <option value="&lt;H5&gt;">H5</option>
                                                  <option value="&lt;H6&gt;">H6</option>
                                                </select>
                                              </td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                  </table></td>
                                </tr>
                            </table>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td align="center" valign="middle"><img src="<?php echo DIR_WS_IMAGES; ?>blank_separator.gif" width="5" height="10" border="0" /></td>
                                </tr>
                            </table></td>
                        </tr>
                      </table>
                        <div id="tableMenu" style="display:none">
                          <table border="0" cellspacing="0" cellpadding="0" width="160" style="BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: buttonshadow 2px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: buttonshadow 1px solid;" bgcolor="threedface">
                            <tr onClick="parent.ShowInsertTable()" title="Insert Table">
                              <td style="cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;" onMouseOver="parent.button_over(this);" onMouseOut="parent.button_out(this);" onMouseDown="parent.button_down(this)"><img id="insertTable1" border="0" src="<?php echo DIR_WS_IMAGES; ?>button_table.gif" width="21" height="20" align="absmiddle" /> Insert Table... </td>
                            </tr>
                            <tr onClick="parent.ModifyTable()" title="Modify Table Properties">
                              <td style="cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;" onMouseOver="parent.button_over(this);" onMouseOut="parent.button_out(this);" onMouseDown="parent.button_down(this)" id="modifyTable"><img id="modifyTable2" width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_modify_table.gif" border="0" align="absmiddle" /> Modify Table Properties... </td>
                            </tr>
                            <tr title="Modify Cell Properties" onClick="parent.ModifyCell()">
                              <td style="cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;" onMouseOver="parent.button_over(this);" onMouseOut="parent.button_out(this);" onMouseDown="parent.button_down(this)" id="modifyCell"><img id="modifyCell2" width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_modify_cell.gif" border="0" align="absmiddle" /> Modify Cell Properties... </td>
                            </tr>
                            <tr height="10">
                              <td align="center"><img src="<?php echo DIR_WS_IMAGES; ?>vertical_spacer.gif" width="140" height="2" /></td>
                            </tr>
                            <tr title="Insert Column to the Left" onClick="parent.InsertColBefore()">
                              <td style="cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;" onMouseOver="parent.button_over(this);" onMouseOut="parent.button_out(this);" onMouseDown="parent.button_down(this);" id="colBefore"><img id="colBefore2" width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_insert_col_before.gif" border="0" align="absmiddle" /> Insert Column to the Left</td>
                            </tr>
                            <tr title="Insert Column to the Right" onClick="parent.InsertColAfter()">
                              <td style="cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;" onMouseOver="parent.button_over(this);" onMouseOut="parent.button_out(this);" onMouseDown="parent.button_down(this)" id="colAfter"><img id="colAfter2" width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_insert_col_after.gif" border="0" align="absmiddle" /> Insert Column to the Right</td>
                            </tr>
                            <tr height="10">
                              <td align="center"><img src="<?php echo DIR_WS_IMAGES; ?>vertical_spacer.gif" width="140" height="2" /></td>
                            </tr>
                            <tr title="Insert Row Above" onClick="parent.InsertRowAbove()">
                              <td style="cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;" onMouseOver="parent.button_over(this);" onMouseOut="parent.button_out(this);" onMouseDown="parent.button_down(this);" id="rowAbove"><img id="rowAbove2" width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_insert_row_above.gif" border="0" align="absmiddle" /> Insert Row Above</td>
                            </tr>
                            <tr title="Insert Row Below" onClick="parent.InsertRowBelow()">
                              <td style="cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;" onMouseOver="parent.button_over(this);" onMouseOut="parent.button_out(this);" onMouseDown="parent.button_down(this);" id="rowBelow"><img id="rowBelow2" width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_insert_row_below.gif" border="0" align="absmiddle" /> Insert Row Below</td>
                            </tr>
                            <tr height="10">
                              <td align="center"><img src="<?php echo DIR_WS_IMAGES; ?>vertical_spacer.gif" width="140" height="2" /></td>
                            </tr>
                            <tr title="Delete Row" onClick="parent.DeleteRow()">
                              <td style="cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;" onMouseOver="parent.button_over(this);" onMouseOut="parent.button_out(this);" onMouseDown="parent.button_down(this);" id="deleteRow"><img id="deleteRow2" width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_delete_row.gif" border="0" align="absmiddle" /> Delete Row</td>
                            </tr>
                            <tr title="Delete Column" onClick="parent.DeleteCol()">
                              <td style="cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;" onMouseOver="parent.button_over(this);" onMouseOut="parent.button_out(this);" onMouseDown="parent.button_down(this);" id="deleteCol"><img id="deleteCol2" width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_delete_col.gif" border="0" align="absmiddle" /> Delete Column</td>
                            </tr>
                            <tr height="10">
                              <td align="center"><img src="<?php echo DIR_WS_IMAGES; ?>vertical_spacer.gif" width="140" height="2" tabindex="1" hidefocus="true" /></td>
                            </tr>
                            <tr title="Increase Column Span" onClick="parent.IncreaseColspan()">
                              <td style="cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;" onMouseOver="parent.button_over(this);" onMouseOut="parent.button_out(this);" onMouseDown="parent.button_down(this);" id="increaseSpan"><img id="increaseSpan2" width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_increase_colspan.gif" border="0" align="absmiddle" /> Increase Column Span</td>
                            </tr>
                            <tr title="Decrease Column Span" onClick="parent.DecreaseColspan()">
                              <td style="cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;" onMouseOver="parent.button_over(this);" onMouseOut="parent.button_out(this);" onMouseDown="parent.button_down(this);" id="decreaseSpan"><img id="decreaseSpan2" width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_decrease_colspan.gif" border="0" align="absmiddle" /> Decrease Column Span</td>
                            </tr>
                          </table>
                        </div>
                      <div id="colorMenu" style="display:none;">
                          <table cellpadding="1" cellspacing="5" border="1" bordercolor="#666666" style="cursor: hand;font-family: Verdana; font-size: 7px; BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: buttonshadow 2px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: buttonshadow 1px solid;" bgcolor="threedface">
                            <tr>
                              <td colspan="10" id="color" style="height=20px;font-family: verdana; font-size:12px;"></td>
                            </tr>
                            <tr>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FF0000; width=12px">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFFF00; width=12px">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#00FF00; width=12px">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#00FFFF; width=12px">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#0000FF; width=12px">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FF00FF; width=12px">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFFFFF; width=12px">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#F5F5F5; width=12px">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#DCDCDC; width=12px">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFFAFA; width=12px">&nbsp;</td>
                            </tr>
                            <tr>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#D3D3D3">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#C0C0C0">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#A9A9A9">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#808080">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#696969">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#000000">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#2F4F4F">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#708090">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#778899">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#4682B4">&nbsp;</td>
                            </tr>
                            <tr>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#4169E1">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#6495ED">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#B0C4DE">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#7B68EE">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#6A5ACD">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#483D8B">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#191970">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#000080">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#00008B">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#0000CD">&nbsp;</td>
                            </tr>
                            <tr>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#1E90FF">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#00BFFF">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#87CEFA">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#87CEEB">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#ADD8E6">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#B0E0E6">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#F0FFFF">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#E0FFFF">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#AFEEEE">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#00CED1">&nbsp;</td>
                            </tr>
                            <tr>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#5F9EA0">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#48D1CC">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#00FFFF">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#40E0D0">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#20B2AA">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#008B8B">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#008080">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#7FFFD4">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#66CDAA">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#8FBC8F">&nbsp;</td>
                            </tr>
                            <tr>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#3CB371">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#2E8B57">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#006400">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#008000">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#228B22">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#32CD32">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#00FF00">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#7FFF00">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#7CFC00">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#ADFF2F">&nbsp;</td>
                            </tr>
                            <tr>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#98FB98">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#90EE90">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#00FF7F">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#00FA9A">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#556B2F">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#6B8E23">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#808000">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#BDB76B">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#B8860B">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#DAA520">&nbsp;</td>
                            </tr>
                            <tr>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFD700">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#F0E68C">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#EEE8AA">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFEBCD">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFE4B5">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#F5DEB3">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFDEAD">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#DEB887">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#D2B48C">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#BC8F8F">&nbsp;</td>
                            </tr>
                            <tr>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#A0522D">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#8B4513">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#D2691E">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#CD853F">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#F4A460">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#8B0000">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#800000">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#A52A2A">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#B22222">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#CD5C5C">&nbsp;</td>
                            </tr>
                            <tr>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#F08080">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FA8072">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#E9967A">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFA07A">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FF7F50">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FF6347">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FF8C00">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFA500">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FF4500">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#DC143C">&nbsp;</td>
                            </tr>
                            <tr>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FF0000">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FF1493">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FF00FF">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FF69B4">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFB6C1">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFC0CB">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#DB7093">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#C71585">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#800080">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#8B008B">&nbsp;</td>
                            </tr>
                            <tr>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#9370DB">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#8A2BE2">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#4B0082">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#9400D3">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#9932CC">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#BA55D3">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#DA70D6">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#EE82EE">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#DDA0DD">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#D8BFD8">&nbsp;</td>
                            </tr>
                            <tr>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#E6E6FA">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#F8F8FF">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#F0F8FF">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#F5FFFA">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#F0FFF0">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FAFAD2">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFFACD">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFF8DC">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFFFE0">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFFFF0">&nbsp;</td>
                            </tr>
                            <tr>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFFAF0">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FAF0E6">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FDF5E6">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FAEBD7">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFE4C4">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFDAB9">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFEFD5">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFF5EE">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFF0F5">&nbsp;</td>
                              <td onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)" style="background-color:#FFE4E1">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="10" style="height=15px;font-family: verdana; font-size:10px;" onMouseOver="parent.showColor(color,this)" onClick="parent.doColor(color)"> None</td>
                            </tr>
                          </table>
                      </div>
                      <div id="charMenu" style="display:none;">
                          <table cellpadding="1" cellspacing="5" border="1" bordercolor="#666666" style="cursor: hand;font-family: Verdana; font-size: 14px; font-weight: bold; BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: buttonshadow 2px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: buttonshadow 1px solid;" bgcolor="threedface">
                            <tr>
                              <td style="width=15px; cursor: hand;" onClick="parent.insertChar(this)" onMouseOver="parent.button_over(this);" onMouseOut="parent.char_out(this);" onMouseDown="parent.button_down(this);">c</td>
                              <td style="width=15px; cursor: hand;" onClick="parent.insertChar(this)" onMouseOver="parent.button_over(this);" onMouseOut="parent.char_out(this);" onMouseDown="parent.button_down(this);">R</td>
                              <td style="width=15px; cursor: hand;" onClick="parent.insertChar(this)" onMouseOver="parent.button_over(this);" onMouseOut="parent.char_out(this);" onMouseDown="parent.button_down(this);">?</td>
                              <td style="width=15px; cursor: hand;" onClick="parent.insertChar(this)" onMouseOver="parent.button_over(this);" onMouseOut="parent.char_out(this);" onMouseDown="parent.button_down(this);">?</td>
                            </tr>
                            <tr>
                              <td style="width=15px; cursor: hand;" onClick="parent.insertChar(this)" onMouseOver="parent.button_over(this);" onMouseOut="parent.char_out(this);" onMouseDown="parent.button_down(this);">?</td>
                              <td style="width=15px; cursor: hand;" onClick="parent.insertChar(this)" onMouseOver="parent.button_over(this);" onMouseOut="parent.char_out(this);" onMouseDown="parent.button_down(this);">?</td>
                              <td style="width=15px; cursor: hand;" onClick="parent.insertChar(this)" onMouseOver="parent.button_over(this);" onMouseOut="parent.char_out(this);" onMouseDown="parent.button_down(this);">?</td>
                              <td style="width=15px; cursor: hand;" onClick="parent.insertChar(this)" onMouseOver="parent.button_over(this);" onMouseOut="parent.char_out(this);" onMouseDown="parent.button_down(this);">&curren;</td>
                            </tr>
                            <tr>
                              <td style="width=15px; cursor: hand;" onClick="parent.insertChar(this)" onMouseOver="parent.button_over(this);" onMouseOut="parent.char_out(this);" onMouseDown="parent.button_down(this);">&deg;</td>
                              <td style="width=15px; cursor: hand;" onClick="parent.insertChar(this)" onMouseOver="parent.button_over(this);" onMouseOut="parent.char_out(this);" onMouseDown="parent.button_down(this);">+</td>
                              <td style="width=15px; cursor: hand;" onClick="parent.insertChar(this)" onMouseOver="parent.button_over(this);" onMouseOut="parent.char_out(this);" onMouseDown="parent.button_down(this);">?</td>
                              <td style="width=15px; cursor: hand;" onClick="parent.insertChar(this)" onMouseOver="parent.button_over(this);" onMouseOut="parent.char_out(this);" onMouseDown="parent.button_down(this);">&para;</td>
                            </tr>
                            <tr>
                              <td style="width=15px; cursor: hand;" onClick="parent.insertChar(this)" onMouseOver="parent.button_over(this);" onMouseOut="parent.char_out(this);" onMouseDown="parent.button_down(this);">a</td>
                              <td style="width=15px; cursor: hand;" onClick="parent.insertChar(this)" onMouseOver="parent.button_over(this);" onMouseOut="parent.char_out(this);" onMouseDown="parent.button_down(this);">o</td>
                              <td style="width=15px; cursor: hand;" onClick="parent.insertChar(this)" onMouseOver="parent.button_over(this);" onMouseOut="parent.char_out(this);" onMouseDown="parent.button_down(this);">e</td>
                              <td style="width=15px; cursor: hand;" onClick="parent.insertChar(this)" onMouseOver="parent.button_over(this);" onMouseOut="parent.char_out(this);" onMouseDown="parent.button_down(this);">u</td>
                            </tr>
                          </table>
                      </div>
                      <div id="contextMenu" style="display:none;">
                          <table border="0" cellspacing="0" cellpadding="3" width="160" style="cursor: hand; font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;" bgcolor="threedface">
                            <tr onClick="parent.document.execCommand('Cut');parent.oPopup2.hide()">
                              <td onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img border="0" src="<?php echo DIR_WS_IMAGES; ?>button_cut.gif" width="21" height="20" align="absmiddle" /> Cut </td>
                            </tr>
                            <tr onClick="parent.document.execCommand('Copy');parent.oPopup2.hide()">
                              <td onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img border="0" src="<?php echo DIR_WS_IMAGES; ?>button_copy.gif" width="21" height="20" align="absmiddle" /> Copy </td>
                            </tr>
                            <tr onClick="parent.document.execCommand('Paste');parent.oPopup2.hide()">
                              <td onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img border="0" src="<?php echo DIR_WS_IMAGES; ?>button_paste.gif" width="21" height="20" align="absmiddle" /> Paste </td>
                            </tr>
                            <tr onClick="parent.document.execCommand('Delete');parent.oPopup2.hide()">
                              <td onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img border="0" src="<?php echo DIR_WS_IMAGES; ?>button_delete.gif" width="21" height="20" align="absmiddle" /> Delete </td>
                            </tr>
                          </table>
                      </div>
                      <div id="cmClean" style="display:none">
                          <table border="0" cellspacing="0" cellpadding="3" width="160" style="font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;" bgcolor="threedface">
                            <tr onClick="parent.cleanHTMLCode(0)">
                              <td onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_clean_html_code.gif" border="0" align="absmiddle" /> Clean HTML Code... </td>
                            </tr>
                            <tr onClick="parent.cleanHTMLCode(1)">
                              <td onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img id="insertTable1" border="0" src="<?php echo DIR_WS_IMAGES; ?>button_clean_word_code.gif" width="21" height="20" align="absmiddle" /> Clean Word Tags... </td>
                            </tr>
                            <tr onClick="parent.cleanCode()">
                              <td onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img id="insertTable1" border="0" src="<?php echo DIR_WS_IMAGES; ?>button_clean_code.gif" width="21" height="20" align="absmiddle" /> Clean All... </td>
                            </tr>
                          </table>
                      </div>
                      <div id="cmTableMenu" style="display:none">
                          <table border="0" cellspacing="0" cellpadding="3" width="160" style="font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;" bgcolor="threedface">
                            <tr onClick="parent.ModifyTable();">
                              <td onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_modify_table.gif" border="0" align="absmiddle" /> Modify Table Properties... </td>
                            </tr>
                          </table>
                      </div>
                      <div id="cmTableFunctions" style="display:none;">
                          <table border="0" cellspacing="0" cellpadding="3" width="160" style="font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;" bgcolor="threedface">
                            <tr onClick="parent.ModifyCell();">
                              <td onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_modify_cell.gif" border="0" align="absmiddle" /> Modify Cell Properties... </td>
                            </tr>
                          </table>
                        <table border="0" cellspacing="0" cellpadding="3" width="160" style="font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;" bgcolor="threedface">
                            <tr onClick="parent.InsertColBefore(); parent.oPopup2.hide();">
                              <td onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_insert_col_before.gif" border="0" align="absmiddle" /> Insert Column to the Left </td>
                            </tr>
                            <tr onClick="parent.InsertColAfter(); parent.oPopup2.hide();">
                              <td onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_insert_col_after.gif" border="0" align="absmiddle" /> Insert Column to the Right </td>
                            </tr>
                        </table>
                        <table border="0" cellspacing="0" cellpadding="3" width="160" style="font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;" bgcolor="threedface">
                            <tr onClick="parent.InsertRowAbove(); parent.oPopup2.hide();">
                              <td onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_insert_row_above.gif" border="0" align="absmiddle" /> Insert Row Above </td>
                            </tr>
                            <tr onClick="parent.InsertRowBelow(); parent.oPopup2.hide();">
                              <td onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_insert_row_below.gif" border="0" align="absmiddle" /> Insert Row Below </td>
                            </tr>
                        </table>
                        <table border="0" cellspacing="0" cellpadding="3" width="160" style="font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;" bgcolor="threedface">
                            <tr onClick="parent.DeleteRow(); parent.oPopup2.hide();">
                              <td onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_delete_row.gif" border="0" align="absmiddle" /> Delete Row </td>
                            </tr>
                            <tr onClick="parent.DeleteCol(); parent.oPopup2.hide();">
                              <td onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_delete_col.gif" border="0" align="absmiddle" /> Delete Column </td>
                            </tr>
                        </table>
                        <table border="0" cellspacing="0" cellpadding="3" width="160" style="font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;" bgcolor="threedface">
                            <tr onClick="parent.IncreaseColspan(); parent.oPopup2.hide();">
                              <td onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_increase_colspan.gif" border="0" align="absmiddle" /> Increase Column Span </td>
                            </tr>
                            <tr onClick="parent.DecreaseColspan(); parent.oPopup2.hide();">
                              <td onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_decrease_colspan.gif" border="0" align="absmiddle" /> Decrease Column Span </td>
                            </tr>
                        </table>
                      </div>
                      <div id="cmImageMenu" style="display:none">
                          <table border="0" cellspacing="0" cellpadding="3" width="160" style="font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;" bgcolor="threedface">
                            <tr onClick="parent.doImage()">
                              <td style="cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;" onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_image.gif" border="0" align="absmiddle" /> Modify Image Properties... </td>
                            </tr>
                          </table>
                      </div>
                      <div id="cmLinkMenu" style="display:none">
                          <table border="0" cellspacing="0" cellpadding="3" width="160" style="font:8pt tahoma;BORDER-LEFT: buttonhighlight 1px solid; BORDER-RIGHT: #808080 1px solid; BORDER-TOP: buttonhighlight 1px solid; BORDER-BOTTOM: #808080 1px solid;" bgcolor="threedface">
                            <tr onClick="parent.doLink('');">
                              <td style="cursor: hand; font:8pt tahoma; BORDER-LEFT: threedface 1px solid; BORDER-RIGHT: threedface 1px solid; BORDER-TOP: threedface 1px solid; BORDER-BOTTOM: threedface 1px solid;" onMouseOver="parent.contextHilite(this);" onMouseOut="parent.contextDelite(this);"><img width="21" height="20" src="<?php echo DIR_WS_IMAGES; ?>button_link.gif" border="0" align="absmiddle" /> Create or Modify Link... </td>
                            </tr>
                          </table>
                      </div></td>
                  </tr>
                  <tr>
                    <td height="565" align="left" valign="top"><table height="73%" width="100%">
                        <tr>
                          <td height="559" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="500" align="left" valign="middle"><ul id="maintab" class="shadetabs">
                                    <li id="editTab" class="selected" onClick="editMe()"><a href="#" rel="tcontent"><span class="ap-language-link">Design</span></a></li>
                                  <li id="previewTab" class="selected" onClick="previewMe()"><a href="#" rel="tcontent"><span class="ap-language-link">Preview</span></a></li>
                                </ul>
                                    <div>
                                      <div id="tcontent" class="shopping-cart" width="100%">
                                        <iframe onblur="updateValue()" security="restricted" contenteditable="true" height="100%" id="foo" style="width: 100%; border:1px;" name="foo" frameborder="1"></iframe>
                                        <iframe onblur="updateValue()" id="previewFrame" height="100%" style="width=100%; display:none"></iframe>
                                      </div>
                                      <br />
                                      <div class="step" id="statusbar"></div>
                                    </div></td>
                              </tr>
                          </table></td>
                        </tr>
                    </table></td>
                  </tr>
                </table>
              <div id="buffer" style="display:none"></div>
              <div id="undo_buffer" style="display:none"></div></td>
          </tr>
          <tr>
            <td align="left">&nbsp;&nbsp;
                <input type="hidden" name="mode" value="save" />
                <input type="hidden" name="lang" value="en" />
                <input type="hidden" name="content" id="content" /></td>
          </tr>
</table>
		
<script language="javascript" type="text/javascript">
foo.document.designMode = "On"
//foo.document.write(frm.elements['t'].value);
</script>

