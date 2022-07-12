<?php declare(strict_types = 1);

namespace turbopixel;

use DateTime;

/**
 * Datr - Created for simple date conversion with predefined date formats.
 *
 * @author Nico Hemkes
 *
 * @license MIT
 */
final class Datr {

  /**
   * Convert date to a english date format
   *
   * @param string $date
   *
   * @return string|null
   */
  public static function toEnglishDate(string $date) : ?string {

    return self::dateConvert($date, "Y-m-d");
  }

  /**
   * Convert date to a english datetime format
   *
   * @param string $date
   *
   * @return string|null
   */
  public static function toEnglishDateTime(string $date) : ?string {

    return self::dateConvert($date, "Y-m-d H:i:s");
  }

  /**
   * Convert date to a german date format
   *
   * @param string $date
   *
   * @return string|null
   */
  public static function toGermanDate(string $date) : ?string {

    return self::dateConvert($date, "d.m.Y");
  }

  /**
   * Convert date to a german datetime format
   *
   * @param string $date
   *
   * @return string|null
   */
  public static function toGermanDateTime(string $date) : ?string {

    return self::dateConvert($date, "d.m.Y H:i:s");
  }

  /**
   * Convert date to a sql datetime format
   *
   * @param string $date
   *
   * @return string|null
   */
  public static function toSql(string $date) : ?string {

    return self::dateConvert($date, "Y-m-d H:i:s");
  }

  /**
   * Date validation
   *
   * @param string $date
   * @param string $format
   *
   * @return bool
   */
  public static function isValid(string $date, string $format = 'd.m.Y') : bool {
    $d = DateTime::createFromFormat($format, $date);

    return $d && $d->format($format) === $date;
  }

  /**
   * Convert the date to a specified format.
   *
   * @param string $date
   * @param string $default
   *
   * @return string|null
   */
  public static function dateConvert(string $date, string $default = "Ymd") : ?string {

    if (empty($date) || $date == "0000-00-00" || $date == "0000-00-00 00:00:00") {
      return NULL;
    }

    $DateObj = new DateTime();
    $DateObj->setTimestamp(strtotime($date));

    return $DateObj->format($default);
  }

}