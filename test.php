<?php
/**
 * Simple PHP Ajax Response Framework
 *
 * Test file
 *
 * WARNING: use only on development environment!
 *
 * @author Caspius Labs
 * @link https://github.com/caspius/SPARF
 * @version 0.1.7
 * @package Utils
 *
 */


require_once 'config.php'; // must run as first
require_once 'common.php'; // must run as second

setReporting();
removeMagicQuotes();
unregisterGlobals();

/********************************************************/

// test code here

session_start();

debug($_SESSION);