<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reconnoiter</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.min.js"></script>
<script src="js/jquery.cookie.js" type="text/javascript"></script>
<script src="js/jquery.treeview.js" type="text/javascript"></script>
<script src="js/jquery.treeview.async.js" type="text/javascript"></script>

<!-- color picker -->
<link rel="stylesheet" href="css/colorpicker.css">
<script type="text/javascript" src="js/colorpicker.js"></script>

<!-- Import jQuery and SimpleModal source files -->

<script src='js/jquery.simplemodal.js' type='text/javascript'></script>

<!-- Confirm JS and CSS files -->
<script src='js/confirm.js' type='text/javascript'></script>
<link type='text/css' href='css/confirm.css' rel='stylesheet' media='screen' />

<!-- IE 6 hacks -->
<!--[if lt IE 7]>
<link type='text/css' href='css/confirm_ie.css' rel='stylesheet' media='screen' />
<![endif]-->

<!--accordion-->
<script type="text/javascript">
$(document).ready(function(){
   $(".accordion h3").eq(1).addClass("active");
   $(".accordion span").eq(1).slideUp();
   $(".accordion span:last").slideDown();

   $(".accordion h3").click(function(){
       $(this).next("span").slideToggle("normal")
       .siblings("span:visible").slideUp("normal");
       $(this).toggleClass("active");
       $(this).siblings("h3").removeClass("active");
   });

}); 
</script>

   <script type="text/javascript">
        jQuery(document).ready(function(){
            $("#targets").treeview({
              url: "json/ds/remote_address/target/name/metric_name",
              params: {} // will become hash, indexed by id, of url params
              })
        });
    </script>


<!--accordion 2-->
<script type="text/javascript">
$(document).ready(function(){
   $(".accordion2 h4").eq(1).addClass("active");
   $(".accordion2 div").eq(1).slideUp();
   $(".accordion2 div:last").slideDown();

   $(".accordion2 h4").click(function(){
       $(this).next("div").slideToggle("normal")
       .siblings("div:visible").slideUp("normal");
       $(this).toggleClass("active");
       $(this).siblings("h4").removeClass("active");
   });

}); 
</script>

<!-- search tabs -->
<script type="text/javascript">
	$(function () {
		var tabContainers = $('div.tabs > div');
		tabContainers.hide().filter(':first').show();
		
		$('div.tabs ul.tabNavigation a').click(function () {
			tabContainers.hide();
			tabContainers.filter(this.hash).show();
			$('div.tabs ul.tabNavigation a').removeClass('selected');
			$(this).addClass('selected');
			return false;
		}).filter(':first').click();
	});
</script>

<!-- date range box -->
<script type="text/javascript">
$(document).ready(function(){

	$(".btn-slide").click(function(){
		$("#panel").slideToggle("fast");
		$(this).toggleClass("active"); return false;
	});	
	 
});
</script>

<!-- math box -->

<!-- alert / Remove this when new script is made -->
<script type="text/javascript">
function disp_alert()
{
alert("display the correct graph")
}
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>

</head>

<body>
<div id="header">
	<h1><a href="#">Reconnoiter</a></h1>
	<ul>
		<li><a href="#">Username</a></li>
		<li class="xx"><a href="#">Logout</a></li>
	</ul>
</div><!-- end header -->
<div id="left">
	<div class="accordion">
	<?php include('worksheet_controls.inc') ?>
        <?php include('search_controls.inc') ?>
	</div>
</div><!-- end left -->
<div id="container">
	<div id="content">
		<div id="tab_content">
			<ul>
				<li><a href="#" class="selected">Graph Panel</a></li>
				<li><a href="#">Worksheet</a></li>
			</ul><div style="clear:both;"></div>
		</div>
		<!-- buttons -->
		<div id="buttons">
		<input name="Save" type="button" value="New Graph" /> <input name="Save" type="button" value="Save" /> <input name="Save" type="button" value="Save as" /> <input name="Save" type="button" value="Delete" /> 
		</div>
		<!-- graph and controls -->
		<div id="main">
			<p><a href="">username</a> / <a href="#">worksheet</a></p>
			<h2>NGM - My shot disk usage</h2>
			
			<div id="datetool">
				<div id="zoom">
					<dl>
						<dt>Zoom:</dt>
						<dd><a href="" class="first" onclick="disp_alert()">2d</a></dd>
						<dd><a href="" onclick="disp_alert()">1w</a></dd>
						<dd><a href="" class="selected" onclick="disp_alert()">2w</a></dd>
						<dd><a href="" onclick="disp_alert()">1m</a></dd>
						<dd><a href="" onclick="disp_alert()">1y</a></dd>
					</dl>
				</div>
				<div id="range">
					<dl>
						<dt>Date Range:</dt>
						<dd><a href="" class="btn-slide">YYYY/MM/DD - YYYY/MM/DD</a></dd>
					</dl>
				</div>
				<div id="panel">calendar here</div>
			</div>
			
			<!-- confirm box -->
			<div id="confirm" style="display:none">
				<a href="#" title="Close" class="modalCloseX modalClose">x</a>
				<div class="header"><span>Confirm</span></div>
				<p class="message"></p>
				<div class="buttons">
					<div class="no modalClose">No</div><div class="yes">Yes</div>
				</div>
			</div>
			
			<div>
				<script type="text/javascript" src="http://postgres83dev.office.omniti.com/reconnoiter/js/swfobject.js"></script>
				<div id="flashcontent">
					<strong>You need to upgrade your Flash Player</strong>
				</div>
				<script type="text/javascript">
					// <![CDATA[		
					var so = new SWFObject("http://postgres83dev.office.omniti.com/reconnoiter/amcharts/amline/amline.swf", "amline", "697", "400", "8", "#FFFFFF");
					so.addVariable("path", "amcharts/amline/");
					so.addVariable("settings_file", escape("http://postgres83dev.office.omniti.com/reconnoiter/generic_settings.php?metric=nl-c53b16b9-39cf-4bcc-8e0a-9367a8501098-FREELOTTO_DB`flezwin_subs_processed`message&start=&end=&cnt=1400"));
					so.addVariable("preloader_color", "#999999");
					so.addParam('wmode','transparent');//added for confirm box
					so.write("flashcontent");
					// ]]>
				</script>
				<form action="#" name="form4" id="form4" style="margin:1em 0;text-align:center;">
				<fieldset>
				<legend style="display:none;">View</legend>
				<label for="std_view"><input type="radio" name="std_view" id="std_view" value="Standard View" checked="checked" /> Standard View</label> &nbsp;&nbsp;&nbsp;
				<label for="stacked_view"><input type="radio" name="stacked_vieww" id="stacked_view" value="Stacked View" /> Stacked View</label>
				</fieldset>
				</form>
				
			</div>
			
			<table id="gtool">
				<tr>
					<th></th>
					
					<th class="data">Data Points</th>
					<th>Color</th>
					<th>Derivative</th>
					<th>Axis</th>
					<th></th>
					<th></th>
				</tr>
				<tbody>
				<tr>
					<td><input name="" type="checkbox" value="view" checked /></td>
					<td class="data">sample data point 1</td>
					<td><script type="text/javascript">drawCP('cp1');</script></td>
					<td><input name="" type="checkbox" value="view" checked /></td>
					<td><span class="axisoff"><a href="">L</a></span> <span class="axison"><a href="">R</a></span></td>
					<td><a href="#" id="delete"><span>delete</span></a></td>
					<td class="math">math</td>
				</tr>
				<tr class="mathbox">
					<td colspan="7">
					<div>
						<label for="math">Math 1 (Units conversion)</label> <input type="text" id="keyword2" value="no math" style="width:320px;" /> <input type="submit" value="Apply" /> <input type="submit" value="Edit Math" disabled="disabled" /><br />
					</div>
					<div>	
						<label for="math">Math 2</label> <input type="text" id="keyword2" value="no math" style="width:320px;" /> <input type="submit" value="Apply" /> <input type="submit" value="Edit Math" disabled="disabled" />
					</div>
					</td>
				</tr>
				<tr>
					<td><input name="" type="checkbox" value="view" checked /></td>
					<td class="data">sample data point 2</td>
					<td><script type="text/javascript">drawCP('cp2');</script></td>
					<td><input name="" type="checkbox" value="view" checked /></td>
					<td><span class="axison"><a href="">L</a></span> <span class="axisoff"><a href="">R</a></span></td>
					<td><a href="#" id="delete"><span>delete</span></a></td>
					<td class="math">math</td>
				</tr>
				<tr class="mathbox">
					<td colspan="7">
					<div>
						<label for="math">Math 1 (Units conversion)</label> <input type="text" id="keyword2" value="no math" style="width:320px;" /> <input type="submit" value="Apply" /> <input type="submit" value="Edit Math" disabled="disabled" /><br />
					</div>
					<div>	
						<label for="math">Math 2</label> <input type="text" id="keyword2" value="no math" style="width:320px;" /> <input type="submit" value="Apply" /> <input type="submit" value="Edit Math" disabled="disabled" />
					</div>
					</td>
				</tr>
				<tr>
					<td><input name="" type="checkbox" value="view" checked /></td>
					<td class="data">sample data point 3</td>
					<td><script type="text/javascript">drawCP('cp3');</script></td>
					<td><input name="" type="checkbox" value="view" checked /></td>
					<td><span class="axison"><a href="">L</a></span> <span class="axisoff"><a href="">R</a></span></td>
					<td><a href="#" id="delete"><span>delete</span></a></td>
					<td class="math">math</td>
				</tr>
				<tr class="mathbox">
					<td colspan="7">
					<div>
						<label for="math">Math 1 (Units conversion)</label> <input type="text" id="keyword2" value="no math" style="width:320px;" /> <input type="submit" value="Apply" /> <input type="submit" value="Edit Math" disabled="disabled" /><br />
					</div>
					<div>	
						<label for="math">Math 2</label> <input type="text" id="keyword2" value="no math" style="width:320px;" /> <input type="submit" value="Apply" /> <input type="submit" value="Edit Math" disabled="disabled" />
					</div>
					</td>
				</tr>
				</tbody>
			</table>
			
			
		</div><!-- end main -->
	</div><!-- end content -->
</div><!-- end container -->
</body>
</html>