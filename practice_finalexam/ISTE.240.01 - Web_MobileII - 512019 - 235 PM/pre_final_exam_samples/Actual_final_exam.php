<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link href="assets/animation.css" rel="stylesheet">
	<?php
	$page='Final_Practical';
		$path='./';
     ?>
	     <link href="assets/animation.css" rel="stylesheet">

	<?php
	 require $path.'../../../../../dbConnect.inc';
	?>
<title><?php echo $page; ?></title>
<style>
#wrapper {
   margin-left:auto;
   margin-right:auto;
    width:95vw;
}
header {
        width:95vw;
        margin: 0 auto;
        height:6em;
        border: solid  1px;
        padding-bottom:10px;
        padding: 1.75em;
        }

.BoldAndUnderlineText{
    font-weight:bold;
    text-decoration:underline;
    font-size:1.16em;
}
.BoldUnderlineItalicText {
    font-weight: bold;
    font-size: 22px;
    font-style: italic;
    color: purple;
}

/*  https://www.w3schools.com/cssref/css3_pr_animation-keyframes.asp  */
/* CSS #2 */
/* animate the header tag so it slides in from left to right on load of the page */
/* animation should happen over 3 seconds, be linear, start at time 0 and only happen once */
/* think CSS animation using @keyframes */

#column1 {width:50vw;
          display: table-cell;
		  height:46em;
          overflow: auto;
          border:solid 2px purple;
          padding:1.75em
          }
#column2 {width:50vw;
          display: table-cell;
          height:46em;
          overflow: auto;
          border:solid 2px green;
          padding:1.75em;
          }

.astric {color:Red;
         font-size:36px;
         position:relative;
         top:11px;}


</style>
<script>
function validateForm(){
   "use strict";
   var isvalid=true;
   console.log("Some Feedback");
   return isvalid;

}//end of javascript function validateForm

</script>
</head>
<body>
<div id="wrapper">

  	<header class="BoldUnderlineItalicText"><h2>Lorem Ipsum</h2>(CSS Animation)</header>

<div id="column1">
<h2><i>What is Lorem Ipsum?</i></h2>
<p><span class="BoldAndUnderlineText">Lorem Ipsum</span> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
scrambled it to make a type specimen book. It has
survived not only five centuries, but
also the leap into electronic typesetting,
remaining essentially unchanged. It was popularised in the
1960s with the release of Letraset sheets containing Lorem
Ipsum passages, and more recently with desktop publishing software
like Aldus PageMaker including versions of Lorem Ipsum</p>


</div><!-- end of column 1 -->
<div id="column2">

<!--   students finish this form tag
<form action = "" method = ""
                onsubmit="return >   -->
<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu molestie magna, sed pellentesque ipsum. Aliquam id tincidunt erat, at ultricies velit. Donec convallis ultricies nibh at venenatis. Quisque et tellus non quam ultrices sollicitudin. Fusce suscipit tempor scelerisque. Pellentesque ut ante vitae lectus gravida faucibus. Morbi tincidunt mauris a ornare faucibus. Maecenas dignissim nec lectus eu molestie. Donec a magna commodo, interdum nunc quis, ultricies leo. Nam dictum augue eget cursus viverra. Fusce at tortor suscipit, ultricies felis sed, imperdiet erat.</p>
    <div class="textAnimation">
        <div class="text1">Final Exam practice</div>
        <div class="text2">Creating Forms and validate them with JS</div>
    </div>


</div><!-- end of column2 -->
</div><!-- end of wrapper -->


</body>
</html>
