
// Returns the filter ID belonging to a named filter
<?php 
$filters = filter_list(); 
foreach($filters as $filter_name) { 
    echo $filter_name .": ".filter_id($filter_name) ."<br>"; 
} 
?>
