<?php

namespace Framework;

class Session
{
  /**
   * Start session
   * @return void
   */
  public static function start()
  {
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }


  }

  /**
   * Set the session
   * @param string $key
   * @param mixed $param
   * @return void
   */

  public static function set($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  /**
   * Get session value by key
   * 
   * @param string $key
   * @param mixed $default
   * @return mixed
   */

  public static function get($key, $defaut = null)
  {
    return isset($_SESSION[$key]) ? $_SESSION[$key] : $defaut;
  }

  /**
   * Check if session exits
   * @param mixed $key
   * @return bool
   */
  public static function has($key)
  {
    return isset($_SESSION[$key]);
  }

  /**
   * Clear session by key
   * @param string $key
   * @return void
   */
  public static function clear($key)
  {
    if (isset($_SESSION[$key])) {
      unset($_SESSION[$key]);
    }
  }

  /**
   * Clear all session data
   * @return void
   */
  public static function clearAll()
  {
    session_unset();
    session_destroy();
  }
}