	
<footer>Edward Riley & The Riley Pizzeria &reg;<br /> 
       <!-- you must include PHP code to aquire the date stamp 
            of the file orderprocess.php     I want this footer to 
            display the last date/time the file orderprocess.php
            was updated.   This must be done using PHP  -->
    <?php
// outputs e.g. 'Last modified: March 04 1998 20:43:59.'
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
?>
    </footer>
</body>
</html>