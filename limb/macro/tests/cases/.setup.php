<?php
if(!defined('LIMB_VAR_DIR'))
{
  @define('LIMB_VAR_DIR', dirname(__FILE__) . '/../../../var');
  @mkdir(LIMB_VAR_DIR);
}

require_once(dirname(__FILE__) . '/../../common.inc.php');

lmb_require('limb/fs/src/lmbFs.class.php');
lmb_require('limb/core/src/lmbObject.class.php');
lmb_require('limb/macro/src/lmbMacroTemplate.class.php');
lmb_require('limb/macro/src/*.class.php');
lmb_require('limb/macro/src/compiler/*.interface.php');
lmb_require('limb/macro/src/compiler/*.class.php');

require_once(dirname(__FILE__) . '/lmbBaseMacroTest.class.php');


