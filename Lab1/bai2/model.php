<?php
// model
function get_courses(){
    global $course;
    return array_values($course);
}

function find_by_semester($semester){
    include 'data.php';
    return (array_key_exists($semester,$course)? $course[$semester]:'Invalid cousrse');
}

?>