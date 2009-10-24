<?php
/**
 * Xoops checksum plugin class file
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code 
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         upgrader
 * @since           2.4.0
 * @author          Simon Roberts <simon@xoops.org>
 **/

if (!class_exists('xoopsFLA_enumerator'))
{
	
	
	class xoopsFLA_enumerator extends xoopsFLA
	{
	
		var $elekey;
		var $base;
		var $len;
		
		function __construct ($base, $len)
		{
			@$this->len = $len;
			@$this->setElements($base);
		}
	
		private function setElements($base)
		{
			@$this->base = $base;
			@$this->elekey = array();

			foreach ($base->base as $key => $data)
			{
				if (strlen((string)$data)==1)
				{
					if (strlen(bindec(ord($data)))==5)
					{
						$offset = array("xoc" => (int)substr(decbin(ord($data)),3,1),
										"xoe" => (int)substr(decbin(ord($data)),2,1),
										"xob" => (int)substr(decbin(ord($data)),4,1),
										"xod" => (int)substr(decbin(ord($data)),5,1),
										"xoa" => (int)substr(decbin(ord($data)),1,1));							
						if (substr(decbin(ord($data)),5,1)==1)
						{
							$offset['xof'] = 0;
						} else {
							$offset['xof'] = 1;
						}
					} elseif (strlen(decbin(ord($data)))==6) 
					{
						$offset = array("xoe" => (int)substr(decbin(ord($data)),6,1),
										"xod" => (int)substr(decbin(ord($data)),1,1),
										"xob" => (int)substr(decbin(ord($data)),2,1),
										"xof" => (int)substr(decbin(ord($data)),5,1),
										"xoa" => (int)substr(decbin(ord($data)),3,1),
										"xoc" => (int)substr(decbin(ord($data)),4,1));				
					} elseif (strlen(decbin(ord($data)))==7) 
					{
						$offset = array("xoc" => (int)substr(decbin(ord($data)),1,1),
										"xod" => (int)substr(decbin(ord($data)),3,1),
										"xob" => (int)substr(decbin(ord($data)),4,1),
										"xoe" => (int)substr(decbin(ord($data)),6,1),
										"xof" => (int)substr(decbin(ord($data)),5,1),
										"xoa" => (int)substr(decbin(ord($data)),2,1));
					}			
				} else {
					$offset = array("xob" => (int)substr(decbin(ord(substr($key,strlen($key)-1,1))),1,1),
									"xoe" => (int)substr(decbin(ord(substr($key,strlen($key)-1,1))),5,1),
									"xod" => (int)substr(decbin(ord(substr($key,strlen($key)-1,1))),4,1),
									"xof" => (int)substr(decbin(ord(substr($key,strlen($key)-1,1))),3,1),
									"xoa" => (int)substr(decbin(ord(substr($key,strlen($key)-1,1))),2,1),
									"xoc" => (int)substr(decbin(ord(substr($key,strlen($key)-1,1))),6,1));
				
				}
				
				if (strlen(decbin(ord($data)))==7)
				{
					if (strlen($data)==1)
					{
						$cycle = array("xof", "xoe", "xod", "xoc", "xob", "xoa");
						foreach ($cycle as $element)
						{
							if ($done==false)
							{
								if ($offset[$element]=='1')
								{
									if ($prev_ele!='')
									{
										if ($offset[$prev_ele] == '0')
										{
											$offset[$prev_ele] = '0';
										} else {
											$offset[$prev_ele] = '1';
										}
									}
									$offset[$element]= '0';
									$done=true;
								}
							}
						}
						
					} else {
						$cycle = array("xoa", "xob", "xoc", "xod", "xoe", "xof");
						foreach ($cycle as $element)
						{
							if ($done==false)
							{
								if ($offset[$element]=='1')
								{
									if ($prev_ele!='')
									{
										if ($offset[$prev_ele] == '0')
										{
											$offset[$prev_ele] = '0';
										} else {
											$offset[$prev_ele] = '1';
										}
									}
									$offset[$element]= '0';
									$done=true;
								}
							}
						}
					} 
				}
				$done=false;
				if (strlen($data)==1)
				{
					@$this->elekey[$key] = array("key" => $data,
												 "bin" => decbin(ord($data)),
												 "offset" => $offset,
												 "flip" => 0);
				} else {
					@$this->elekey[$key] = array("key" => $data,
												 "bin" => decbin(ord($data)),
												 "offset" => $offset,
												 "flip" => 1);
				}
			}			
		
		}
	
		private function getBytePos($char)
		{
			return floor((ord($char)+1)/4);
		}
		
		function enum_calc ($char, $enum_calc, $debug=false)
		{
			static $flip;
			
			foreach ($enum_calc as $key => $value)
			{
				${$key} = $value;
			}
			
			static $charnum;
			$charnum++;
			if ($charnum>3)
			{
				$charnum=1;
			}
			
			$nx_key.= $char;
			
			if ($this->len>15)
			{
				if (strlen($nx_key)>$this->len)
				{
					$nx_key = substr($nx_key, strlen($nx_key)/($charnum+1), strlen($nx_key) - (strlen($nx_key)/($charnum+1))).substr($nx_key, 1, strlen($nx_key)-(strlen($nx_key) - (strlen($nx_key)/($charnum+1))));
				}				
			} else {
				if (strlen($nx_key)>32)
				{
					$nx_key = substr($nx_key, strlen($nx_key)/($charnum+1), strlen($nx_key) - (strlen($nx_key)/($charnum+1))).substr($nx_key, 1, strlen($nx_key)-(strlen($nx_key) - (strlen($nx_key)/($charnum+1))));
				}
			}
			
			if ($this->elekey[$this->getBytePos($char)]['flip']==0)
			{
				$xoa = $this->elekey[$this->getBytePos($char)]['offset']['xoa'];
				$xob = $this->elekey[$this->getBytePos($char)]['offset']['xob'];
				$xoc = $this->elekey[$this->getBytePos($char)]['offset']['xoc'];
				$xod = $this->elekey[$this->getBytePos($char)]['offset']['xod'];
				$xoe = $this->elekey[$this->getBytePos($char)]['offset']['xoe'];
				$xof = $this->elekey[$this->getBytePos($char)]['offset']['xof'];
			} else {
				if ($charnum==1)
				{
					$xof = $this->elekey[$this->getBytePos($char)]['offset']['xoa'];
					$xoe = $this->elekey[$this->getBytePos($char)]['offset']['xob'];
					$xod = $this->elekey[$this->getBytePos($char)]['offset']['xoc'];
					$xoc = $this->elekey[$this->getBytePos($char)]['offset']['xod'];
					$xob = $this->elekey[$this->getBytePos($char)]['offset']['xoe'];
					$xoa = $this->elekey[$this->getBytePos($char)]['offset']['xof'];
				} elseif ($charnum==2)
				{
					$xof = $this->elekey[$this->getBytePos($char)]['offset']['xoa'];
					$xoe = $this->elekey[$this->getBytePos($char)]['offset']['xob'];
					$xod = $this->elekey[$this->getBytePos($char)]['offset']['xoc'];
					$xoc = $this->elekey[$this->getBytePos($char)]['offset']['xof'];
					$xob = $this->elekey[$this->getBytePos($char)]['offset']['xoe'];
					$xoa = $this->elekey[$this->getBytePos($char)]['offset']['xod'];
				} else
				{
					$xof = $this->elekey[$this->getBytePos($char)]['offset']['xoc'];
					$xoe = $this->elekey[$this->getBytePos($char)]['offset']['xob'];
					$xod = $this->elekey[$this->getBytePos($char)]['offset']['xoa'];
					$xoc = $this->elekey[$this->getBytePos($char)]['offset']['xod'];
					$xob = $this->elekey[$this->getBytePos($char)]['offset']['xoe'];
					$xoa = $this->elekey[$this->getBytePos($char)]['offset']['xof'];
				}
			}
			for ($xoount=1; $xoount<65; $xoount++)
			{
				if ($this->elekey[$xoount]['offset']['xoa'] == $xob && $this->elekey[$xoount]['offset']['xob'] == $xoc && $this->elekey[$xoount]['offset']['xoc'] == $xod) {            
					$nuclear .=  '10';
					if ($xob = $this->elekey[$xoount]['flip']) {                
						$nuclear .=  '0';
					} else {
						$nuclear .=  '1';
					}
					if ($xoc = $this->elekey[$xoount]['flip']) {                
						$nuclear .=  '0';
					} else {
						$nuclear .=  '1';
					}
					if ($xod = $this->elekey[$xoount]['flip']) {                
						$nuclear .=  '0';
					} else {
						$nuclear .=  '1';
					}
				}
				
				if ($this->elekey[$xoount]['offset']['xoa'] == $xoc && $this->elekey[$xoount]['offset']['xob'] == $xod && $this->elekey[$xoount]['offset']['xoc'] == $xoe) {           
					$nuclear .=  '01';
					if ($xob = $this->elekey[$xoount]['flip']) {                
						$nuclear .=  '0';
					} else {
						$nuclear .=  '1';
					}
					if ($xoc = $this->elekey[$xoount]['flip']) {                
						$nuclear .=  '0';
					} else {
						$nuclear .=  '1';
					}
					if ($xod = $this->elekey[$xoount]['flip']) {                
						$nuclear .=  '0';
					} else {
						$nuclear .=  '1';
					}           		
				}
			}

			// Change in version 1.6.4
			if (strlen($nuclear)>32768)
				$nuclear = substr($nuclear,strlen($nuclear)-32768,32768);

			$result = $result + $xoa;               
			$prince = $prince + $xob;               
			$karma = $karma + $xoc;                 
			$motivation = $motivation + $xod;       
			$offical = $offical + $xoe;           
			$outsidecause = $outsidecause + $xof;   
			
			if ($xoa == '0') {$yang = $yang + 1;} else {$yin = $yin + 1;}
			if ($xob == '0') {$yang = yang + 1;} else {$yin = $yin + 1;}
			if ($xoc == '0') {$yang = $yang+ 1;} else {$yin = $yin + 1;}
			if ($xod == '0') {$yang = $yang + 1;} else {$yin = $yin + 1;}
			if ($xoe == '0') {$yang = yang + 1;} else {$yin = $yin + 1;}
			if ($xof == '0') {$yang = $yang+ 1;} else {$yin = $yin + 1;}
			
			if ($debug==true)
			{
					
			   $data[sizeof($data)+1] = array("pos" => $this->getBytePos($char),
										 	  "elements" => $this->elekey);
								
			   $result = array("result" => $result,
						 "prince" => $prince,
						 "karma" => $karma,
						 "motivation" => $motivation,
						 "offical" => $offical,
						 "outsidecause" => $outsidecause,
						 "nuclear" => $nuclear,
						 "yin" => $yin,
						 "yang" => $yang,
						 "nx_key" => $nx_key,
						 "data"=> $data);
			} else {
			   $result = array("result" => $result,
						 "prince" => $prince,
						 "karma" => $karma,
						 "motivation" => $motivation,
						 "offical" => $offical,
						 "outsidecause" => $outsidecause,
						 "nuclear" => $nuclear,
						 "yin" => $yin,
						 "yang" => $yang,
						 "nx_key" => $nx_key);

			}
			
			return $result;
		}
	}
}