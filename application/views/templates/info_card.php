<?php

function skill_info_card($skill, $colWidth) {
    echo '<div class="col-sm-';
    echo $colWidth;
    echo '">';
    echo '<div class="panel panel-default">';
    echo '<div class="panel-heading">';
    echo '<h3 class="panel-title">';
    echo $skill['name'];
    echo '</h3></div>';
    echo '<div class="panel-body">';
    echo $skill['level'];
    echo '</div></div></div>';
}

function project_info_card($project, $colWidth) {
    //colWidth is 4 for welcome page, 3 everywhere else
    echo '<div class="col-sm-';
    echo $colWidth;
    echo '">';
    echo '<div class="panel panel-default">';
    echo '<div class="panel-heading">';
	echo '<h3 class="panel-title">';
    echo $project['name'];
    echo '</h3></div>';
    echo '<div class="panel-body">';
    echo '<div class="panel-image">';
    echo '<img src="';
    echo $project['logo'];
    echo '"/></div>';
    echo '<div class="panel-text">';
    echo 'By Someone';
    echo $project['description'];
    echo '</div></div></div></div>';
}


function user_info_card($user, $colWidth) {
    //colWidth is 4 for welcome page, 3 everywhere else
    echo '<div class="col-sm-';
    echo $colWidth;
    echo '">';
    echo '<div class="panel panel-default">';
    echo '<div class="panel-heading">';
	echo '<h3 class="panel-title">';
    echo $user['firstname'];
    echo ' ';
    echo $user['lastname'];
    echo '</h3></div>';
    echo '<div class="panel-body">';
    echo '<div class="panel-image">';
    echo '<img src="';
    echo $user['avatar'];
    echo '"/></div>';
    echo '<div class="panel-text">';
    if (isset($user['description'])) {
        echo $user['description'];
    }
    echo '</div></div></div></div>';
}

?>
