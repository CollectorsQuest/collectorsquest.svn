<?php

/**
 * @author Yanko Simeonoff
 * @since $Date$
 * @version $Id$
 */
class cqValidatorTags extends sfValidatorBase
{
  public function clean($value)
  {
    return $this->doClean($value);
  }

  protected function doClean($value)
  {
    $values = array();
    
    if (!empty($value)) {
      $values = array_combine($value, $value);
    }
    
    return $values;
  }

}