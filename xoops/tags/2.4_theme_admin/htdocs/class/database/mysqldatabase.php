<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Factory Class for Xoops Database
 *
 * @copyright       The XOOPS project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      database
 * @since           1.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id$
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

/**
 *
 * @package kernel
 * @subpackage database
 * @author Kazumi Ono <onokazu@xoops.org>
 * @copyright copyright (c) 2000-2003 XOOPS.org
 */

/**
 * base class
 */
include_once XOOPS_ROOT_PATH . '/class/database/database.php';
// xoops_load( 'xoopsdatabase' );
/**
 * connection to a mysql database
 *
 * @abstract
 * @author Kazumi Ono <onokazu@xoops.org>
 * @copyright copyright (c) 2000-2003 XOOPS.org
 * @package kernel
 * @subpackage database
 */
class XoopsMySQLDatabase extends XoopsDatabase
{
    /**
     * Database connection
     *
     * @var resource
     */
    var $conn;

    /**
     * connect to the database
     *
     * @param bool $selectdb select the database now?
     * @return bool successful?
     */
    function connect($selectdb = true)
    {
        static $db_charset_set;

        if (!extension_loaded('mysql')) {
            trigger_error('notrace:mysql extension not loaded', E_USER_ERROR);
            return false;
        }

        $this->allowWebChanges = ($_SERVER['REQUEST_METHOD'] != 'GET');

        if (XOOPS_DB_PCONNECT == 1) {
            $this->conn = @mysql_pconnect(XOOPS_DB_HOST, XOOPS_DB_USER, XOOPS_DB_PASS);
        } else {
            $this->conn = @mysql_connect(XOOPS_DB_HOST, XOOPS_DB_USER, XOOPS_DB_PASS);
        }

        if (!$this->conn) {
            $this->logger->addQuery('', $this->error(), $this->errno());
            return false;
        }
        if ($selectdb != false) {
            if (!mysql_select_db(XOOPS_DB_NAME)) {
                $this->logger->addQuery('', $this->error(), $this->errno());
                return false;
            }
        }
        if (!isset($db_charset_set) && defined('XOOPS_DB_CHARSET') && XOOPS_DB_CHARSET) {
            $this->queryF("SET NAMES '" . XOOPS_DB_CHARSET . "'");
        }
        $db_charset_set = 1;
        $this->queryF("SET SQL_BIG_SELECTS = 1");
        return true;
    }

    /**
     * generate an ID for a new row
     *
     * This is for compatibility only. Will always return 0, because MySQL supports
     * autoincrement for primary keys.
     *
     * @param string $sequence name of the sequence from which to get the next ID
     * @return int always 0, because mysql has support for autoincrement
     */
    function genId($sequence)
    {
        return 0; // will use auto_increment
    }

    /**
     * Get a result row as an enumerated array
     *
     * @param resource $result
     * @return array
     */
    function fetchRow($result)
    {
        return @mysql_fetch_row($result);
    }

    /**
     * Fetch a result row as an associative array
     *
     * @return array
     */
    function fetchArray($result)
    {
        return @mysql_fetch_assoc($result);
    }

    /**
     * Fetch a result row as an associative array
     *
     * @return array
     */
    function fetchBoth($result)
    {
        return @mysql_fetch_array($result, MYSQL_BOTH);
    }

    /**
     * XoopsMySQLDatabase::fetchObjected()
     *
     * @param mixed $result
     * @return
     */
    function fetchObject($result)
    {
        return @mysql_fetch_object($result);
    }

    /**
     * Get the ID generated from the previous INSERT operation
     *
     * @return int
     */
    function getInsertId()
    {
        return mysql_insert_id($this->conn);
    }

    /**
     * Get number of rows in result
     *
     * @param resource $ query result
     * @return int
     */
    function getRowsNum($result)
    {
        return @mysql_num_rows($result);
    }

    /**
     * Get number of affected rows
     *
     * @return int
     */
    function getAffectedRows()
    {
        return mysql_affected_rows($this->conn);
    }

    /**
     * Close MySQL connection
     */
    function close()
    {
        mysql_close($this->conn);
    }

    /**
     * will free all memory associated with the result identifier result.
     *
     * @param resource $ query result
     * @return bool TRUE on success or FALSE on failure.
     */
    function freeRecordSet($result)
    {
        return mysql_free_result($result);
    }

    /**
     * Returns the text of the error message from previous MySQL operation
     *
     * @return bool Returns the error text from the last MySQL function, or '' (the empty string) if no error occurred.
     */
    function error()
    {
        return @mysql_error();
    }

    /**
     * Returns the numerical value of the error message from previous MySQL operation
     *
     * @return int Returns the error number from the last MySQL function, or 0 (zero) if no error occurred.
     */
    function errno()
    {
        return @mysql_errno();
    }

    /**
     * Returns escaped string text with single quotes around it to be safely stored in database
     *
     * @param string $str unescaped string text
     * @return string escaped string text with single quotes around
     */
    function quoteString($str)
    {
        return $this->quote($str);
    }

    /**
     * Quotes a string for use in a query.
     */
    function quote($string)
    {
        return "'" . str_replace("\\\"", '"', str_replace("\\&quot;", '&quot;', mysql_real_escape_string($string, $this->conn))) . "'";
    }

    /**
     * perform a query on the database
     *
     * @param string $sql a valid MySQL query
     * @param int $limit number of records to return
     * @param int $start offset of first record to return
     * @return resource query result or FALSE if successful
     * or TRUE if successful and no result
     */
    function queryF($sql, $limit = 0, $start = 0)
    {
        if (!empty($limit)) {
            if (empty($start)) {
                $start = 0;
            }
            $sql = $sql . ' LIMIT ' . (int) $start . ', ' . (int) $limit;
        }
        $this->logger->startTime('query_time');
        $result = mysql_query($sql, $this->conn);
        $this->logger->stopTime('query_time');
        $query_time = $this->logger->dumpTime('query_time', true);
        if ($result) {
            $this->logger->addQuery($sql, null, null, $query_time);
            return $result;
        } else {
            $this->logger->addQuery($sql, $this->error(), $this->errno(), $query_time);
            return false;
        }
    }

    /**
     * perform a query
     *
     * This method is empty and does nothing! It should therefore only be
     * used if nothing is exactly what you want done! ;-)
     *
     * @param string $sql a valid MySQL query
     * @param int $limit number of records to return
     * @param int $start offset of first record to return
     * @abstract
     */
    function query($sql, $limit = 0, $start = 0)
    {
    }

    /**
     * perform queries from SQL dump file in a batch
     *
     * @param string $file file path to an SQL dump file
     * @return bool FALSE if failed reading SQL file or TRUE if the file has been read and queries executed
     */
    function queryFromFile($file)
    {
        if (false !== ($fp = fopen($file, 'r'))) {
            include_once XOOPS_ROOT_PATH . '/class/database/sqlutility.php';
            $sql_queries = trim(fread($fp, filesize($file)));
            SqlUtility::splitMySqlFile($pieces, $sql_queries);
            foreach ($pieces as $query) {
                // [0] contains the prefixed query
                // [4] contains unprefixed table name
                $prefixed_query = SqlUtility::prefixQuery(trim($query), $this->prefix());
                if ($prefixed_query != false) {
                    $this->query($prefixed_query[0]);
                }
            }
            return true;
        }
        return false;
    }

    /**
     * Get field name
     *
     * @param resource $result query result
     * @param int $ numerical field index
     * @return string
     */
    function getFieldName($result, $offset)
    {
        return mysql_field_name($result, $offset);
    }

    /**
     * Get field type
     *
     * @param resource $result query result
     * @param int $offset numerical field index
     * @return string
     */
    function getFieldType($result, $offset)
    {
        return mysql_field_type($result, $offset);
    }

    /**
     * Get number of fields in result
     *
     * @param resource $result query result
     * @return int
     */
    function getFieldsNum($result)
    {
        return mysql_num_fields($result);
    }
}

/**
 * Safe Connection to a MySQL database.
 *
 * @author Kazumi Ono <onokazu@xoops.org>
 * @copyright copyright (c) 2000-2003 XOOPS.org
 * @package kernel
 * @subpackage database
 */
class XoopsMySQLDatabaseSafe extends XoopsMySQLDatabase
{
    /**
     * perform a query on the database
     *
     * @param string $sql a valid MySQL query
     * @param int $limit number of records to return
     * @param int $start offset of first record to return
     * @return resource query result or FALSE if successful
     * or TRUE if successful and no result
     */
    function query($sql, $limit = 0, $start = 0)
    {
        return $this->queryF($sql, $limit, $start);
    }
}

/**
 * Read-Only connection to a MySQL database.
 *
 * This class allows only SELECT queries to be performed through its
 * {@link query()} method for security reasons.
 *
 * @author Kazumi Ono <onokazu@xoops.org>
 * @copyright copyright (c) 2000-2003 XOOPS.org
 * @package kernel
 * @subpackage database
 */
class XoopsMySQLDatabaseProxy extends XoopsMySQLDatabase
{
    /**
     * perform a query on the database
     *
     * this method allows only SELECT queries for safety.
     *
     * @param string $sql a valid MySQL query
     * @param int $limit number of records to return
     * @param int $start offset of first record to return
     * @return resource query result or FALSE if unsuccessful
     */
    function query($sql, $limit = 0, $start = 0)
    {
        $sql = ltrim($sql);
        if (!$this->allowWebChanges && strtolower(substr($sql, 0, 6)) != 'select') {
            trigger_error('Database updates are not allowed during processing of a GET request', E_USER_WARNING);
            return false;
        }

        return $this->queryF($sql, $limit, $start);
    }
}

?>