<?php
// database connectionection code goes here
require 'config/database.php';



// determine the total number of entries in the database
$count_query = "SELECT COUNT(*) FROM your_table";
$count_result = mysqli_query($connection, $count_query);
$count_row = mysqli_fetch_row($count_result);
$total_entries = $count_row[0];

// calculate the total number of pages based on the number of entries per page
$entries_per_page = 25;
$total_pages = ceil($total_entries / $entries_per_page);

// determine the current page based on the "page" query parameter
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// calculate the starting entry for the current page
$start_index = ($current_page - 1) * $entries_per_page;

// retrieve the entries for the current page
$query = "SELECT * FROM your_table LIMIT $start_index, $entries_per_page";
$result = mysqli_query($connection, $query);

// display the entries on the current page
while ($row = mysqli_fetch_assoc($result)) {
    // display the entry details
    
    echo '<div>' . $row['field1'] . ' - ' . $row['field2'] . '</div>';
}

// display pagination links
if ($total_pages > 1) {
    echo '<div>';
    if ($current_page > 1) {
        echo '<a href="?page=' . ($current_page - 1) . '">Previous</a>';
    }
    for ($i = 1; $i <= $total_pages; $i++) {
        if ($i == $current_page) {
            echo '<span>' . $i . '</span>';
        } else {
            echo '<a href="?page=' . $i . '">' . $i . '</a>';
        }
    }
    if ($current_page < $total_pages) {
        echo '<a href="?page=' . ($current_page + 1) . '">Next</a>';
    }
    echo '</div>';
}

// close the database connection
mysqli_close($connection);
?>
