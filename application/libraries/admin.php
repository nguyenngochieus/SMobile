<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class admin{
	
	var $CI;
	
	//Table: Username,
	var $admin = 'tbl_admin';
	
	//Table: Username, 
	var $role = 'tbl_adminrole';
	
	//checkCookie(): un, bm, lg, rl
	function checkCookie()
	{
		$this->CI=&get_instance();
		if(isset($_COOKIE['un'])&&($_COOKIE['un']!=""))
		{
			if($this->CI->input->cookie('un',TRUE)!=$this->CI->input->cookie('un'))
			{
				delete_cookie("un");delete_cookie("bm");delete_cookie("lg");delete_cookie("rl");
				return FALSE;
			}
		}
		
		if(isset($_COOKIE['bm'])&&($_COOKIE['bm']!=""))
		{
			if($this->CI->input->cookie('bm',TRUE)!='lOcPhUsOlUtIoNs')
			{
				delete_cookie("un");delete_cookie("bm");delete_cookie("lg");delete_cookie("rl");
				return FALSE;
			}
		}
		
		if(isset($_COOKIE['lg'])&&($_COOKIE['lg']!=""))
		{
			if($this->CI->input->cookie('lg',TRUE)!=TRUE)
			{
				delete_cookie("un");delete_cookie("bm");delete_cookie("lg");delete_cookie("rl");
				return FALSE;
			}
		}
		
		if(isset($_COOKIE['rl'])&&($_COOKIE['rl']!=""))
		{
			$str = $this->CI->input->cookie('rl',TRUE);
			settype($str,'int');
			if(($str!=77)&&($str!=99)&&($str!=88))
			{
				delete_cookie("un");delete_cookie("bm");delete_cookie("lg");delete_cookie("rl");
				return FALSE;
			}
		}
		
		return TRUE;
	}
	
	//checkSession(): un, bm, lg, rl
	function checkSession()
	{
		$this->CI=&get_instance();
		$arr = $this->CI->session->all_userdata();
		if(isset($arr['un']))
		{
			$str = $this->CI->security->xss_clean($arr['un']);
			if($str!=$arr['un'])
			{
				$this->CI->session->sess_destroy();
				return FALSE;
			}
		}
		
		if(isset($arr['bm']))
		{
			$str = $this->CI->security->xss_clean($arr['bm']);
			if($str!='lOcPhUsOlUtIoNs')
			{
				$this->CI->session->sess_destroy();
				return FALSE;
			}
		}
		
		if(isset($arr['lg']))
		{
			$str = $this->CI->security->xss_clean($arr['lg']);
			if($str!=TRUE)
			{
				$this->CI->session->sess_destroy();
				return FALSE;
			}
		}
		
		if(isset($arr['rl']))
		{
			$str = $this->CI->security->xss_clean($arr['rl']);
			settype($str,'int');
			if(($str!=77)&&($str!=99)&&($str!=88))
			{
				$this->CI->session->sess_destroy();
				return FALSE;
			}
		}
		
		return TRUE;
	}
	
	//checkInput($arr): username, password, newpassword, type, status, gioithieu, huongdan, quydinh, lienhe, quocgia, tinhthanh, quanhuyen, theloai, diadiem, tukhoa, nganluong, tinnhan, taikhoan
	function checkInput($arr)
	{
		$this->CI=&get_instance();
		if(is_array($arr))
		{
			if(isset($arr['username']))
			{
				$str = $this->CI->security->xss_clean($arr['username']);
				if($str!=$arr['username']) return FALSE;
			}			
			if(isset($arr['password']))
			{
				$str = $this->CI->security->xss_clean($arr['password']);
				if($str!=$arr['password']) return FALSE;
			}			
			if(isset($arr['newpassword']))
			{
				$str = $this->CI->security->xss_clean($arr['newpassword']);
				if($str!=$arr['newpassword']) return FALSE;
			}			
			if(isset($arr['type']))
			{
				$str = $this->CI->security->xss_clean($arr['type']);
				if($str!=$arr['type']) return FALSE;
			}			
			if(isset($arr['status']))
			{
				$str = $this->CI->security->xss_clean($arr['status']);
				if($str!=$arr['status']) return FALSE;
				if(!is_numeric($str)) return FALSE;
			}			
			if(isset($arr['LoaiGame']))
			{
				$str = $this->CI->security->xss_clean($arr['LoaiGame']);
				if($str!=$arr['LoaiGame']) return FALSE;
			}			
			if(isset($arr['Store']))
			{
				$str = $this->CI->security->xss_clean($arr['Store']);
				if($str!=$arr['Store']) return FALSE;
			}			
			if(isset($arr['Platform']))
			{
				$str = $this->CI->security->xss_clean($arr['Platform']);
				if($str!=$arr['Platform']) return FALSE;
			}			
			if(isset($arr['Game']))
			{
				$str = $this->CI->security->xss_clean($arr['Game']);
				if($str!=$arr['Game']) return FALSE;
			}
			
			if(isset($arr['SanPham']))
			{
				$str = $this->CI->security->xss_clean($arr['SanPham']);
				if($str!=$arr['SanPham']) return FALSE;
			}			
			if(isset($arr['Setting']))
			{
				$str = $this->CI->security->xss_clean($arr['Setting']);
				if($str!=$arr['Setting']) return FALSE;
			}
			
			if(isset($arr['Blog']))
			{
				$str = $this->CI->security->xss_clean($arr['Blog']);
				if($str!=$arr['Blog']) return FALSE;
			}			
			if(isset($arr['Support']))
			{
				$str = $this->CI->security->xss_clean($arr['Support']);
				if($str!=$arr['Support']) return FALSE;
				if(!is_numeric($str)) return FALSE;
			}			
			if(isset($arr['PromotionCode']))
			{
				$str = $this->CI->security->xss_clean($arr['PromotionCode']);
				if($str!=$arr['PromotionCode']) return FALSE;
				if(!is_numeric($str)) return FALSE;
			}			
			if(isset($arr['FreeStuff']))
			{
				$str = $this->CI->security->xss_clean($arr['FreeStuff']);
				if($str!=$arr['FreeStuff']) return FALSE;
			}			
			if(isset($arr['Image']))
			{
				$str = $this->CI->security->xss_clean($arr['Image']);
				if($str!=$arr['Image']) return FALSE;
			}			
			if(isset($arr['Email']))
			{
				$str = $this->CI->security->xss_clean($arr['Email']);
				if($str!=$arr['Email']) return FALSE;
			}			
			return TRUE;
			if(isset($arr['Library']))
			{
				$str = $this->CI->security->xss_clean($arr['Library']);
				if($str!=$arr['Library']) return FALSE;
			}			
			return TRUE;
			if(isset($arr['VietBlog']))
			{
				$str = $this->CI->security->xss_clean($arr['VietBlog']);
				if($str!=$arr['VietBlog']) return FALSE;
			}			
			return TRUE;
			if(isset($arr['NguoiDung']))
			{
				$str = $this->CI->security->xss_clean($arr['NguoiDung']);
				if($str!=$arr['NguoiDung']) return FALSE;
			}			
			return TRUE;
		}
		
		return FALSE;
	}
	
	//checkUsetname($arr): exist = TRUE
	function checkUsername($arr)
	{
		$this->CI=&get_instance();
		if($this->checkInput($arr))
		{
			if(isset($arr['username'])&&($arr['username']!=NULL))
			{
				$query = $this->CI->db->query('	SELECT a.Status 
												FROM '.$this->admin.' a
												LEFT JOIN '.$this->role.' b
												ON a.Username = b.Username
												WHERE a.Username = ?',
												array($arr['username']));
				if($query->num_rows() > 0)
				{
					return TRUE;
				}
			}
		}
		return FALSE;
	}
	
	//checkStatus($arr): 2 = Đã kích hoạt; 0 = Khóa; -3 = Chưa tạo; -2 = XSS
	function checkStatus($arr)
	{
		$this->CI=&get_instance();
		if($this->checkInput($arr))
		{
			if($this->checkUsername($arr))
			{
				$query = $this->CI->db->query('	SELECT Status 
												FROM '.$this->admin.' 
												WHERE Username = ?',
												array($arr['username']));
				if($query->num_rows() > 0)
				{
					return $query->row()->Status;
				}
				else return 0;
			}
			else return -3;
		}
		else return -2;
	}
	
	//create($arr, $type = 'admin' || $type = 'master'): 1 = Thành công; -1 = Type không đúng; -2 = XSS; -3 = Username đã tồn tại; -4 = Dữ liệu đưa vào không đủ; -5 = Lỗi insert database
	function create($arr, $type = 99)
	{
		$this->CI=&get_instance();
		if($this->checkInput($arr))
		{
			if(!$this->checkUsername($arr))
			{
				if((isset($arr['username'])) && ($arr['username'] != NULL) && (isset($arr['password'])) && ($arr['password'] != NULL))
				{
					if($type==99)
					{
							$this->CI->db->query("	INSERT INTO ".$this->admin."(Username, Password, Type, FullName, NgayTao, Status) 
													VALUES (?, ?, ?, ?, ?, ?)",array($arr['username'], md5($arr['password']), 99,
													 $arr['fullname'], date('Y-m-d H:i:s'), 2));
							$this->CI->db->query("	INSERT INTO ".$this->role."(Username, LoaiGame, Store, Platform, Game, SanPham,
							Setting, Blog, Support, PromotionCode, FreeStuff, Image, Email, Library, VietBlog, NguoiDung)
													VALUES (?, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1)",
													array($arr['username']));
							return 1;
					}
					elseif($type==88)
					{
							$this->CI->db->query("	INSERT INTO ".$this->admin."(Username, Password, Type, FullName, NgayTao, Status) 
													VALUES (?, ?, ?, ?, ?, ?)",array($arr['username'], md5($arr['password']), 88,
													 $arr['fullname'], date('Y-m-d H:i:s'), 2));
							$this->CI->db->query("	INSERT INTO ".$this->role."(Username, LoaiGame, Store, Platform, Game, SanPham,
							Setting, Blog, Support, PromotionCode, FreeStuff, Image, Email, Library, VietBlog, NguoiDung)
													VALUES (?, 1, 1, 1, 1, 1, 1, 7, 1, 1, 1, 1, 1, 1, 1, 1)",
													array($arr['username']));
							return 1;
					}

					elseif($type==77)
					{
							$this->CI->db->query("	INSERT INTO ".$this->admin."(Username, Password, Type, FullName, NgayTao, Status) 
													VALUES (?, ?, ?, ?, ?, ?)",array($arr['username'], md5($arr['password']), 77, 
													$arr['fullname'], date('Y-m-d H:i:s'), 2));
							$this->CI->db->query("	INSERT INTO ".$this->role."(Username, LoaiGame, Store, Platform, Game, SanPham,
							Setting, Blog, Support, PromotionCode, FreeStuff, Image, Email, Library, VietBlog, NguoiDung)
													VALUES (?, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7)",
													array($arr['username']));
							return 1;
					}
					else return -1;
				}
				else return -4;
			}
			else return -3;
		}
		else return -2;
	}
	
	//updatePassword($arr): 1 = Thành công; -2 = XSS; -3 = Username không tồn tại; -4 = Dữ liệu đưa vào không đủ; -5 = Lỗi update database; -6 = Không đúng mật khẩu
	function updatePassword($arr)
	{
		$this->CI=&get_instance();
		if($this->checkInput($arr))
		{
			if($this->checkUsername($arr))
			{
				if((isset($arr['username'])) && ($arr['username'] != NULL) && (isset($arr['password'])) && ($arr['password'] != NULL) 
				&& (isset($arr['newpassword'])) && ($arr['newpassword'] != NULL))
				{
					$query = $this->CI->db->query(" SELECT Status 
													FROM ".$this->admin." 
													WHERE Username = ? AND Password = ?",
													array($arr['username'], md5($arr['password'])));
					if($query->num_rows()>0)
					{
						$this->CI->db->query("	UPDATE ".$this->admin." 
												SET Password = ?
												WHERE Username = ?",
												array(md5($arr['newpassword']), $arr['username']));
						$query = $this->CI->db->query(" SELECT Status 
														FROM ".$this->admin." 
														WHERE Username = ? AND Password = ?",
														array($arr['username'], md5($arr['newpassword'])));
						if($query->num_rows()>0)
						{
							return 1;
						}
						else return -5;
					}
					else return -6;
				}
				else return -4;
			}
			else return -3;
		}
		else return -2;
	}
	
	function updateInfo($arr)
	{
		$this->CI=&get_instance();
		if($this->checkInput($arr))
		{
			if($this->checkUsername($arr))
			{
				if((isset($arr['username'])) && ($arr['username'] != NULL) && (isset($arr['link'])) && ($arr['link'] != NULL) 
				&& (isset($arr['fullname'])) && ($arr['fullname'] != NULL))
				{
						$this->CI->db->query("	UPDATE ".$this->admin." 
												SET FullName = ?, Link = ?
												WHERE Username = ?",
												array($arr['fullname'],$arr['link'], $arr['username']));
						$query = $this->CI->db->query(" SELECT Status 
														FROM ".$this->admin." 
														WHERE Username = ? AND FullName = ? AND Link = ?",
														array($arr['username'], $arr['fullname'],$arr['link']));
						if($query->num_rows()>0)
						{
							return 1;
						}
						else return -5;
				}
				else return -4;
			}
			else return -3;
		}
		else return -2;
	}
	
	//resetPassword($arr): 1 = Thành công; -2 = XSS; -3 = Username không tồn tại; -4 = Dữ liệu đưa vào không đủ; -5 = Lỗi update database;
	function resetPassword($arr)
	{
		$this->CI=&get_instance();
		if($this->checkInput($arr))
		{
			if($this->checkUsername($arr))
			{
				if((isset($arr['username'])) && ($arr['username'] != NULL) && (isset($arr['password'])) && ($arr['password'] != NULL))
				{
					$this->CI->db->query("	UPDATE ".$this->admin." 
											SET Password = ?
											WHERE Username = ?",
											array(md5($arr['password']), $arr['username']));
					$query = $this->CI->db->query(" SELECT Status 
													FROM ".$this->admin." 
													WHERE Username = ? AND Password = ?",
													array($arr['username'], md5($arr['password'])));
					if($query->num_rows()>0)
					{
						return 1;
					}
					else return -5;
				}
				else return -4;
			}
			else return -3;
		}
		else return -2;
	}
	
	//resetPassword($arr): 1 = Thành công; -2 = XSS; -3 = Username không tồn tại; -4 = Dữ liệu đưa vào không đủ; -5 = Lỗi update database;
	function updateRole($arr)
	{
		$this->CI=&get_instance();
		if($this->checkInput($arr))
		{
			if($this->checkUsername($arr))
			{
				if((isset($arr['username'])) && ($arr['username'] != NULL) && (isset($arr['LoaiGame'])) && (isset($arr['Store'])) 
				&& (isset($arr['Platform'])) && (isset($arr['Game'])) && (isset($arr['SanPham'])) && (isset($arr['Setting'])) 
				&& (isset($arr['Blog'])) && (isset($arr['Support'])) && (isset($arr['PromotionCode'])) && (isset($arr['FreeStuff'])) 
				&& (isset($arr['Image'])) && (isset($arr['Email'])) && (isset($arr['Library'])) && (isset($arr['VietBlog'])) 
				&& (isset($arr['NguoiDung'])))
				{
					$LoaiGame	=	$arr['LoaiGame'];	settype($LoaiGame, "int");
					$Store	=	$arr['Store'];	settype($Store, "int");
					$Platform	=	$arr['Platform'];	settype($Platform, "int");
					$Game		=	$arr['Game'];		settype($Game, "int");
					$SanPham	=	$arr['SanPham'];	settype($SanPham, "int");
					$Setting	=	$arr['Setting'];	settype($Setting, "int");
					$Blog	=	$arr['Blog'];	settype($Blog, "int");
					$Support	=	$arr['Support'];	settype($Support, "int");
					$PromotionCode		=	$arr['PromotionCode'];		settype($PromotionCode, "int");
					$FreeStuff	=	$arr['FreeStuff'];	settype($FreeStuff, "int");
					$Image	=	$arr['Image'];	settype($Image, "int");
					$Email	=	$arr['Email'];	settype($Email, "int");
					$Library	=	$arr['Library'];	settype($Library, "int");
					$VietBlog	=	$arr['VietBlog'];	settype($VietBlog, "int");
					$NguoiDung	=	$arr['NguoiDung'];	settype($NguoiDung, "int");
					$this->CI->db->query("	UPDATE ".$this->role." 
											SET LoaiGame = ?, Store = ?, Platform = ?, Game = ?, SanPham = ?, 
											Setting = ?, Blog = ?, Support = ?, PromotionCode = ?, FreeStuff = ?, Image = ?, Email = ?,
											Library = ?, VietBlog = ?, NguoiDung = ?
											WHERE Username = ?",
											array($LoaiGame, $Store, $Platform, $Game, $SanPham,$Setting, $Blog, $Support,
											 $PromotionCode, $FreeStuff, $Image, $Email, $Library, $VietBlog, $NguoiDung, $arr['username']));											
					$query = $this->CI->db->query(" SELECT Username 
													FROM ".$this->role." 
													WHERE Username = ? AND LoaiGame = ? AND Store = ? AND Platform = ? AND Game = ? 
													AND SanPham = ? AND Setting = ? AND Blog = ? AND Support = ? 
													AND PromotionCode = ? AND FreeStuff = ? AND Image = ? AND Email = ? AND Library = ?
													AND VietBlog = ? AND NguoiDung = ?",
													array($arr['username'], $LoaiGame, $Store, $Platform, $Game, $SanPham,$Setting, $Blog,
													$Support,$PromotionCode, $FreeStuff, $Image, $Email, $Library, $VietBlog, $NguoiDung));
					if($query->num_rows()>0)
					{
						return 1;
					}
					else return -5;
				}
				else return -4;
			}
			else return -3;
		}
		else return -2;
	}
	
	//changeStatus($arr): 1 = Thành công; -2 = XSS; -3 = Username không tồn tại; -4 = Dữ liệu đưa vào không đủ; -5 = Lỗi update database;
	function changeStatus($arr)
	{
		$this->CI=&get_instance();
		if($this->checkInput($arr))
		{
			if($this->checkUsername($arr))
			{
				if((isset($arr['username'])) && ($arr['username'] != NULL))
				{
					$query = $this->CI->db->query(" SELECT Status 
													FROM ".$this->admin." 
													WHERE Username = ?",
													array($arr['username']));
					if($query->num_rows()>0)
					{
						$status = $query->row()->Status; settype($status, "int");
						if($status == 0)
						{
							$status = 2;
						}
						else
						{
							$status = 0;
						}
						$this->CI->db->query("	UPDATE ".$this->admin." 
												SET Status = ?
												WHERE Username = ?",
												array($status, $arr['username']));
						$query = $this->CI->db->query(" SELECT Status 
														FROM ".$this->admin." 
														WHERE Username = ? AND Status = ?",
														array($arr['username'], $status));
						if($query->num_rows()>0)
						{
							return 1;
						}
						else return -5;
					}
					else return -3;
				}
				else return -4;
			}
			else return -3;
		}
		else return -2;
	}
	
	//getAdminGrid()
	function getAdminGrid()
	{
		$this->CI=&get_instance();
		$query = $this->CI->db->query(" SELECT * 
										FROM ".$this->admin." 
										WHERE Type = 99 || Type = 88");
		return $query->result();
	}
	
	//getRole($arr)
	function getRole($arr)
	{
		$this->CI=&get_instance();
		if($this->checkInput($arr))
		{
			if($this->checkUsername($arr))
			{
				if((isset($arr['username'])) && ($arr['username'] != NULL))
				{
					$query = $this->CI->db->query(" SELECT * 
													FROM ".$this->role." 
													WHERE Username = ?",
													array($arr['username']));
					return $query->result();
				}
			}
		}
		return NULL;
	}
	
	//login($arr, $remember = FALSE, $baomat = 'lOcPhUsOlUtIoNs'): 1 = Thành công; -2 = XSS; -3 = Username không tồn tại; -4 = Password ko đúng; -6 = Type ko tồn tại; -7 = Tình trạng tài khoản không được hoạt động;
	public function login($arr, $remember = FALSE, $baomat = 'lOcPhUsOlUtIoNs')
	{
		$this->CI=&get_instance();
		if($this->checkInput($arr))
		{
			if($this->checkUsername($arr))
			{
				if(isset($arr['username'])&&($arr['username']!=NULL)&&isset($arr['password'])&&($arr['password']!=NULL))
				{
					$status = $this->checkStatus($arr);
					if($status == 2)
					{
						$query = $this->CI->db->query("	SELECT Type 
														FROM ".$this->admin." 
														WHERE Username = ? AND Status = 2 AND Password = ?",
														array($arr['username'], md5($arr['password'])));
						if($query->num_rows()>0)
						{
							$role = $query->row()->Type;
							if(($role == 77)||($role == 99)||($role == 88))
							{
								$arrUser = array('un' => $arr['username'], 'bm' => $baomat, 'lg' => TRUE, 'rl' => $role);
								if($remember)
								{
									$un = array(
										'name'   => 'un',
										'value'  => $arrUser['un'],
										'expire' => '1296000'
									);
									$this->CI->input->set_cookie($un);
									$bm = array(
										'name'   => 'bm',
										'value'  => $arrUser['bm'],
										'expire' => '1296000'
									);
									$this->CI->input->set_cookie($bm);
									$lg = array(
										'name'   => 'lg',
										'value'  => $arrUser['lg'],
										'expire' => '1296000'
									);
									$this->CI->input->set_cookie($lg);
									$rl = array(
										'name'   => 'rl',
										'value'  => $arrUser['rl'],
										'expire' => '1296000'
									);
									$this->CI->input->set_cookie($rl);
									return 1;
								}
								$this->CI->session->set_userdata($arrUser);
								if(!isset($_SESSION)) 
								{ 
									session_start(); 
								} 
								$_SESSION['bm'] = "lOcPhUsOlUtIoNs";
								$_SESSION['TenDangNhap'] = $arr['username'];
								$_SESSION['VaiTro'] = $role;
								return 1;
							}
							else return -4;
						}
						else return -6;
					}
					else return -7;
				}
				else return -4;
			}
			else return -3;
		}
		else return -2;
	}
	
	//getAdmin($username): Null OR tbl_admin
	function getAdmin($username)
	{
		$this->CI=&get_instance();
		if($username!=NULL)
		{
			$query = $this->CI->db->query('	SELECT * 
											FROM '.$this->admin.' 
											WHERE Username = ?',
											array($username));
			if($query->num_rows()>0)
			{
				return $query->row();
			}
		}
		return NULL;
	}
	
	//getLoginRole($username): 0 = error, 99 = admin, 77 = master
	function getLoginRole($username)
	{
		$this->CI=&get_instance();
		if($username!=NULL)
		{
			$query = $this->CI->db->query('	SELECT * 
											FROM '.$this->admin.' 
											WHERE Username = ? AND Status = 2',
											array($username));
			if($query->num_rows() > 0)
			{
				return $query->row()->Type;
			}
		}
		return 0;
	}
	
	//getLoginUsername(): Null OR Username
	function getLoginUsername()
	{
		$this->CI=&get_instance();
		$arr = array();
		if(isset($_COOKIE['un']) && isset($_COOKIE['lg']) && isset($_COOKIE['bm']) && isset($_COOKIE['rl']))
		{
			if($this->checkCookie())
			{
				$arr['username'] = $this->CI->input->cookie('un',TRUE);
				$arr['role'] = $this->CI->input->cookie('rl',TRUE);
				$query = $this->CI->db->query('	SELECT Type 
												FROM '.$this->admin.' 
												WHERE Username = ? AND Status = 2 AND Type = ?',
												array($arr['username'],$arr['role']));
				if($query->num_rows() > 0)
				{
					return $arr['username'];
				}
				else return NULL;
			}
			else
			{
				$this->logout();
				return NULL;
			}
		}
		elseif(($this->CI->session->userdata('un') != NULL) && ($this->CI->session->userdata('lg') != NULL) 
		&& ($this->CI->session->userdata('bm') != NULL) && ($this->CI->session->userdata('rl') != NULL))
		{
			if($this->checkSession())
			{
				$arr['username'] = $this->CI->session->userdata('un',TRUE);
				$arr['role'] = $this->CI->session->userdata('rl',TRUE);
				$query = $this->CI->db->query('	SELECT Type 
												FROM '.$this->admin.' 
												WHERE Username = ? AND Status = 2 AND Type = ?',
												array($arr['username'], $arr['role']));
				if($query->num_rows()>0)
				{
					return $arr['username'];
				}
				else return NULL;
			}
			else
			{
				$this->logout();
				return NULL;
			}
		}
		else return NULL;
	}
	
	//checkLogin(): 1 = Session; 2 = Cookie; 0 = Không tồn tại Session && Cookie; -1 = XSS; -2 = Role không đúng
	function checkLogin()
	{
		$this->CI=&get_instance();
		$arr = array();
		if(isset($_COOKIE['un']) && isset($_COOKIE['lg']) && isset($_COOKIE['bm']) && isset($_COOKIE['rl']))
		{
			if($this->checkCookie())
			{
				$arr['username'] = $this->CI->input->cookie('un',TRUE);
				$arr['role'] = $this->CI->input->cookie('rl',TRUE);
				$query = $this->CI->db->query('SELECT Username FROM '.$this->admin.' WHERE Username = ? AND Status = 2 AND Type = ?',array($arr['username'],$arr['role']));
				if($query->num_rows()>0)
				{
					return 2;
				}
				else return -2;
			}
			else
			{
				$this->logout();
				return -1;
			}
		}
		elseif(($this->CI->session->userdata('un') != NULL) && ($this->CI->session->userdata('lg') != NULL) 
		&& ($this->CI->session->userdata('bm') != NULL) && ($this->CI->session->userdata('rl') != NULL))
		{
			if($this->checkSession())
			{
				$arr['username'] = $this->CI->session->userdata('un',TRUE);
				$arr['role'] = $this->CI->session->userdata('rl',TRUE);
				$query = $this->CI->db->query('SELECT Username FROM '.$this->admin.' WHERE Username = ? AND Status = 2 AND Type = ?',array($arr['username'],$arr['role']));
				if($query->num_rows()>0)
				{
					return 1;
				}
				else return -2;
			}
			else
			{
				$this->logout();
				return -1;
			}
		}
		else return 0;
	}
	
	//logout()
	function logout()
	{
		$this->CI=&get_instance();
		delete_cookie("un");delete_cookie("bm");delete_cookie("lg");delete_cookie("rl");
		$this->CI->session->sess_destroy();
	}
	
	//checkPage($arr, $page): 1 = Có Quyền; 0 = Không có quyền; -2 = XSS; -1 = Username không tồn tại
	function checkPage($arr, $page)
	{
		$this->CI=&get_instance();
		if($this->checkInput($arr))
		{
			if($this->checkUsername($arr))
			{
				$query = $this->CI->db->query('	SELECT * 
												FROM '.$this->admin.' 
												WHERE Username = ? AND Status = 2',
												array($arr['username']));
				if($query->num_rows() > 0)
				{
					if($query->row()->Type == 77)
					{
						return 1;
					}
					else
					{
						$query = $this->CI->db->query('	SELECT b.*
														FROM '.$this->admin.' a
														LEFT JOIN '.$this->role.' b
														ON a.Username = b.Username 
														WHERE a.Username = ? AND a.Status = 2',
														array($arr['username']));
						if($query->num_rows() > 0)
						{
							switch ($page)
							{
								case "LoaiGame":
									if($query->row()->LoaiGame == 7)
									{
										return TRUE;
									}
									else
									{
										return FALSE;
									}
									break;
								case "Store":
									if($query->row()->Store == 7)
									{
										return TRUE;
									}
									else
									{
										return FALSE;
									}
									break;
								case "Platform":
									if($query->row()->Platform == 7)
									{
										return TRUE;
									}
									else
									{
										return FALSE;
									}
									break;
								case "Game":
									if($query->row()->Game == 7)
									{
										return TRUE;
									}
									else
									{
										return FALSE;
									}
									break;
								case "SanPham":
									if($query->row()->SanPham == 7)
									{
										return TRUE;
									}
									else
									{
										return FALSE;
									}
									break;
								case "Setting":
									if($query->row()->Setting == 7)
									{
										return TRUE;
									}
									else
									{
										return FALSE;
									}
									break;
								case "Blog":
									if($query->row()->Blog == 7)
									{
										return TRUE;
									}
									else
									{
										return FALSE;
									}
									break;
								case "Support":
									if($query->row()->Support == 7)
									{
										return TRUE;
									}
									else
									{
										return FALSE;
									}
									break;
								case "PromotionCode":
									if($query->row()->PromotionCode == 7)
									{
										return TRUE;
									}
									else
									{
										return FALSE;
									}
									break;
								case "FreeStuff":
									if($query->row()->FreeStuff == 7)
									{
										return TRUE;
									}
									else
									{
										return FALSE;
									}
									break;
								case "Image":
									if($query->row()->Image == 7)
									{
										return TRUE;
									}
									else
									{
										return FALSE;
									}
									break;
								case "Email":
									if($query->row()->Email == 7)
									{
										return TRUE;
									}
									else
									{
										return FALSE;
									}
									break;
								case "Libray":
									if($query->row()->Libray == 7)
									{
										return TRUE;
									}
									else
									{
										return FALSE;
									}
									break;
								case "VietBlog":
									if($query->row()->VietBlog == 7)
									{
										return TRUE;
									}
									else
									{
										return FALSE;
									}
									break;
								case "NguoiDung":
									if($query->row()->NguoiDung == 7)
									{
										return TRUE;
									}
									else
									{
										return FALSE;
									}
									break;
							}
						}
						else return -1;
					}
				}
				else return -1;
			}
			else return -1;
		}
		else return -2;
	}
	public function deleteuser($user)
	{
		$this->CI=&get_instance();
		$query=$this->CI->db->query('DELETE a.*, b.* FROM tbl_admin as a, tbl_adminrole as b WHERE a.Username = b.Username AND a.Username = ?',array($user));
		$chk=$this->CI->db->query('Select a.Username,b.Username FROM tbl_admin as a, tbl_adminrole as b where a.Username = b.Username AND a.Username = ?',array($user));
		if($chk->num_rows()==0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	//Get Name theo dang nhap
	function GetName()
	{
		$this->CI=&get_instance();
		$temp = $this->getLoginUsername();
		if(!empty($temp))
		{
			$query = $this->CI->db->get_where($this->admin,array("Username" => $temp));
			$Name = $query->row()->FullName;
			if(!empty($Name))
			{
				return $Name;
			}
			else
			{
				return "";
			}
		}
		return "";
	}
	// Get name theo username
	function GetNameUser($temp)
	{
		$this->CI=&get_instance();
		if(!empty($temp))
		{
			$query = $this->CI->db->get_where($this->admin,array("Username" => $temp));
			$Name = $query->row()->FullName;
			if(!empty($Name))
			{
				return $Name;
			}
			else
			{
				return "";
			}
		}
		return "";
	}
	//Get link theo username
	function GetLink($temp)
	{
		$this->CI=&get_instance();
		if(!empty($temp))
		{
			$query = $this->CI->db->get_where($this->admin,array("Username" => $temp));
			$Link = $query->row()->Link;
			if(!empty($Link))
			{
				return $Link;
			}
			else
			{
				return "";
			}
		}
		return "";
	}
	public function edit($un)
	{
		$query = $this->CI->db->query('SELECT * FROM '.$this->role.' WHERE Username = ?',array($un));
		return $query->result();
	}
}