<style>
footer 
{
    text-align:center;
    width:100%;
    position:relative:
    left:0px;
    top: 2em;
    border-top:solid orange 2px;
    margin-top:1.5em;
    padding-top: 0.5em;
    font-size:0.80em;
}
</style>

	<footer>
	<p>RochesterColleges - that are inputed in the database table.
    <b><u> collegeinfo</u></b></p>
<?php


$filename = 'dbSelectCollege.php';
if (file_exists($filename)) {
    echo "Last modified: " . date ("l, F d Y h:ia", filemtime($filename));
}
?>
	
 </footer>
</div> <!-- end of wrapper --> 
</body>
</html>