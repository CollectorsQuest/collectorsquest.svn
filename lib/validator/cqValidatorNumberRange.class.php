<?php

/**
 * cqValidatorNumberRange valinumbers a range of number. It also converts the input values to valid numbers.
 * 
 * @package    symfony
 * @subpackage validator
 * @author Yanko Simeonoff
 * @since $Date$
 * @version $Id$
 */
class cqValidatorNumberRange extends sfValidatorBase
{
  /**
   * Configures the current validator.
   *
   * Available options:
   *
   *  * from_number:   The from number validator (required)
   *  * to_number:     The to number validator (required)
   *
   * @param array $options    An array of options
   * @param array $messages   An array of error messages
   *
   * @see sfValidatorBase
   */
  protected function configure($options = array(), $messages = array())
  {
    $this->addMessage('invalid', 'The "from" number must be less than the "to" number.');

    $this->addRequiredOption('from');
    $this->addRequiredOption('to');
  }

  /**
   * @see sfValidatorBase
   */
  protected function doClean($value)
  {
    $value['from'] = $this->getOption('from')->clean(isset($value['from']) ? $value['from'] : null);
    $value['to'] = $this->getOption('to')->clean(isset($value['to']) ? $value['to'] : null);

    if ($value['from'] && $value['to'])
    {
      $v = new sfValidatorSchemaCompare(
          'from', sfValidatorSchemaCompare::LESS_THAN_EQUAL,
          'to', array('throw_global_error' => true),
          array('invalid' => $this->getMessage('invalid'))
      );
      $v->clean($value);
    }

    return $value;
  }

}
