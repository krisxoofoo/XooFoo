<?php
/**
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code 
 which is considered copyrighted (c) material of the original comment or credit authors.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Xoops Editor usage guide
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      core
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @author          John Neill <catzwolf@xoops.org>
 * @version         $Id$
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

/**
 * base class
 */
include_once XOOPS_ROOT_PATH . '/class/downloader.php';
/**
 * Class to handle tar files
 */
include_once XOOPS_ROOT_PATH . '/class/class.tar.php';

/**
 * Send tar files through a http socket
 *
 * @package kernel
 * @subpackage core
 * @author Kazumi Ono <onokazu@xoops.org>
 * @copyright (c) 2000-2003 The Xoops Project - www.xoops.org
 */
class XoopsTarDownloader extends XoopsDownloader
{
    /**
     * Constructor
     *
     * @param string $ext file extension
     * @param string $mimyType Mimetype
     */
    function XoopsTarDownloader($ext = '.tar.gz', $mimyType = 'application/x-gzip')
    {
        $this->archiver = new tar();
        $this->ext = trim($ext);
        $this->mimeType = trim($mimyType);
    }
    
    /**
     * Add a file to the archive
     *
     * @param string $filepath Full path to the file
     * @param string $newfilename Filename (if you don't want to use the original)
     */
    function addFile($filepath, $newfilename = null)
    {
        $this->archiver->addFile($filepath);
        if (isset($newfilename)) {
            // dirty, but no other way
            for($i = 0; $i < $this->archiver->numFiles; $i ++) {
                if ($this->archiver->files[$i]['name'] == $filepath) {
                    $this->archiver->files[$i]['name'] = trim($newfilename);
                    break;
                }
            }
        }
    }
    
    /**
     * Add a binary file to the archive
     *
     * @param string $filepath Full path to the file
     * @param string $newfilename Filename (if you don't want to use the original)
     */
    function addBinaryFile($filepath, $newfilename = null)
    {
        $this->archiver->addFile($filepath, true);
        if (isset($newfilename)) {
            // dirty, but no other way
            for($i = 0; $i < $this->archiver->numFiles; $i ++) {
                if ($this->archiver->files[$i]['name'] == $filepath) {
                    $this->archiver->files[$i]['name'] = trim($newfilename);
                    break;
                }
            }
        }
    }
    
    /**
     * Add a dummy file to the archive
     *
     * @param string $data Data to write
     * @param string $filename Name for the file in the archive
     * @param integer $time
     */
    function addFileData(&$data, $filename, $time = 0)
    {
        $dummyfile = XOOPS_CACHE_PATH . '/dummy_' . time() . '.html';
        $fp = fopen($dummyfile, 'w');
        fwrite($fp, $data);
        fclose($fp);
        $this->archiver->addFile($dummyfile);
        unlink($dummyfile);
        // dirty, but no other way
        for($i = 0; $i < $this->archiver->numFiles; $i ++) {
            if ($this->archiver->files[$i]['name'] == $dummyfile) {
                $this->archiver->files[$i]['name'] = $filename;
                if ($time != 0) {
                    $this->archiver->files[$i]['time'] = $time;
                }
                break;
            }
        }
    }
    
    /**
     * Add a binary dummy file to the archive
     *
     * @param string $data Data to write
     * @param string $filename Name for the file in the archive
     * @param integer $time
     */
    function addBinaryFileData(&$data, $filename, $time = 0)
    {
        $dummyfile = XOOPS_CACHE_PATH . '/dummy_' . time() . '.html';
        $fp = fopen($dummyfile, 'wb');
        fwrite($fp, $data);
        fclose($fp);
        $this->archiver->addFile($dummyfile, true);
        unlink($dummyfile);
        // dirty, but no other way
        for($i = 0; $i < $this->archiver->numFiles; $i ++) {
            if ($this->archiver->files[$i]['name'] == $dummyfile) {
                $this->archiver->files[$i]['name'] = $filename;
                if ($time != 0) {
                    $this->archiver->files[$i]['time'] = $time;
                }
                break;
            }
        }
    }
    
    /**
     * Send the file to the client
     *
     * @param string $name Filename
     * @param boolean $gzip Use GZ compression
     */
    function download($name, $gzip = true)
    {
        $this->_header($name . $this->ext);
        echo $this->archiver->toTarOutput($name . $this->ext, $gzip);
    }
}

?>