<?php
require_once('include/bittorrent.php');
dbconn();

// Replace 1 with your user ID
$user_id = 1;

// Delete all user-related cache
$mc1->delete_value('MyUser_' . $user_id);
$mc1->delete_value('user' . $user_id);
$mc1->delete_value('userstats_' . $user_id);
$mc1->delete_value('userstats_xbt_' . $user_id);
$mc1->delete_value('userstatus_' . $user_id);
$mc1->delete_value('blocks::' . $user_id);
$mc1->delete_value('user_achievement_points_' . $user_id);

// Flush entire cache
$mc1->flush();

echo "Cache cleared for user ID: $user_id<br>";
echo "Please log out and log back in.";
?>