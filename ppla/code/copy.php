<?php
If (!file_exists("../endfile.txt")){
	copy("start.txt","../endfile.txt");
}
?>