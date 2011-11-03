<?php
function get_go_back_button($label = 'Go Back', $num = 1)
{
  $num = $num * -1;

  return button_to($label, sfRequestHistory::goUrl($num));
}
