<?php
  $spam_score = (float) $Collector->getSpamScore();

  if ($spam_score == 0)
  {
    echo '<span class="label">', sprintf('%01.2f', $Collector->getSpamScore()), '</span>';
  }
  else if ($spam_score < 0.3)
  {
    echo '<span class="label success">', sprintf('%01.2f', $Collector->getSpamScore()), '</span>';
  }
  else if ($spam_score < 0.5)
  {
    echo '<span class="label warning">', sprintf('%01.2f', $Collector->getSpamScore()), '</span>';
  }
  else if ($spam_score > 0.5)
  {
    echo '<span class="label important">', sprintf('%01.2f', $Collector->getSpamScore()), '</span>';
  }
?>
