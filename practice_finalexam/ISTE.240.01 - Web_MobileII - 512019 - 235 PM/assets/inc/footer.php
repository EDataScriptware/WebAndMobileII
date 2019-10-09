			</div> 
		</div> 
	</div> 
</div> 
<style>
    #bottomtext {
        color:white;
        font-size: 0.85em;
    }
</style>
<div id="bottom"> 

	<div id="bottomtext">
<?php  
    $filename = 'index.php';
if (file_exists($filename)) {
    echo "Updated: " . date ("l, F d Y h:ia", filemtime($filename));
}
?>
&nbsp;&nbsp;&nbsp;&nbsp;  &copy; Us, some important information here... 
		<a href="./citations.html" style="color:#b4c1d1;">Citations</a> 

	</div> 
</div> 
</body> 
</html> 