<?php
	// session_start(); s
	$mod = isset($_GET['mod'])?$_GET['mod']:"";
	$act = isset($_GET['act'])?$_GET['act']:"";
	switch ($mod) {
		case 'nhanvien':
						require_once("Controllers/NhanVienController.php");
						$nhanvien_controller = new NhanVienController();
					switch ($act) {
						case 'hienthi':
							$nhanvien_controller->hienthi();
							break;
						case 'them':
							$nhanvien_controller->them();
							break;
						case 'themact':
							$nhanvien_controller->themact();
							break;
						case 'sua':
							$nhanvien_controller->sua();
							break;
						case 'suaact':
							$nhanvien_controller->suaact();
							break;
						case 'thongtin':
							$nhanvien_controller->thongtin();
							break;
						case 'xoa':
							$nhanvien_controller->xoa();
							break;
						case 'suathongtin':
							$nhanvien_controller ->suathongtin();
							break;
						case 'suathongtinact':
							$nhanvien_controller ->suathongtinact();
							break;
						case 'info':
							$nhanvien_controller ->info();
							break;
						default:
							break;
					}
			// break;
		case 'khachhang':
			require_once("Controllers/KhachHangController.php");
			$khachhang_controller = new KhachHangController();
			switch ($act) {
						case 'dangnhap':
							$khachhang_controller->dangnhap();
							break;
						case 'dangxuat':
							$khachhang_controller->dangxuat();
							break;
						case 'dangki':
							$khachhang_controller->dangki();
							break;
						case 'sua':
							$khachhang_controller->sua();
							break;
						case 'xoa':
							$khachhang_controller->xoa();
							break;
						case 'hienthi':
							$khachhang_controller->hienthi();
							break;
						default:
							break;
					}
			break;
		case 'sanpham':
			require_once("Controllers/SanPhamController.php");
						$nhanvien_controller = new SanPhamController();
					switch ($act) {
						case 'hienthi':
							$nhanvien_controller->hienthi();
							break;
						case 'them':
							$nhanvien_controller->them();
							break;
						case 'themact':
							$nhanvien_controller->themact();
							break;
						case 'sua':
							$nhanvien_controller->sua();
							break;
						case 'suaact':
							$nhanvien_controller->suaact();
							break;
						case 'xoa':
							$nhanvien_controller->xoa();
							break;
						case 'info':
							$nhanvien_controller->info();
							break;
						default:
							break;
					}
			break;
		case 'giohang':
			require_once("Controllers/GioHangController.php");
						$giohang_controller = new GioHangController();
					switch ($act) {
						case 'them':
							$giohang_controller->them();
							break;
						case 'hienthi':
							$giohang_controller->hienthi();
							break;
						case 'remove':
							$giohang_controller->remove();
							break;
						case 'pricechange':
							$giohang_controller->pricechange();
							break;
						case 'thanhtoan':
							$giohang_controller->thanhtoan();
							break;
						default:
							break;
					}
			break;
		case 'loaisanpham':
			require_once("Controllers/LoaiSanPhamController.php");
						$loaisanpham_controller = new LoaiSanPhamController();
					switch ($act) {
						case 'hienthi':
							$loaisanpham_controller->hienthi();
							break;
						case 'them':
							$loaisanpham_controller->them();
							break;
						case 'themact':
							$loaisanpham_controller->themact();
							break;
						case 'sua':
							$loaisanpham_controller->sua();
							break;
						case 'suaact':
							$loaisanpham_controller->suaact();
							break;
						case 'xoa':
							$loaisanpham_controller->xoa();
							break;
						default:
							break;
					}
			break;	
		case 'hoadon':
			require_once("Controllers/HoaDonController.php");
						$hoadon_controller = new HoaDonController();
					switch ($act) {
						case 'hienthi':
							$hoadon_controller->hienthi();
							break;
						case 'them':
							$hoadon_controller->them();
							break;
						case 'themact':
							$hoadon_controller->themact();
							break;
						case 'sua':
							$hoadon_controller->sua();
							break;
						case 'suaact':
							$hoadon_controller->suaact();
							break;
						case 'xoa':
							$hoadon_controller->xoa();
							break;
						case 'xemchitiet':
							$hoadon_controller->xemchitiet();
							break;
						case 'completecart':
							$hoadon_controller->completeCart();
							break;
						default:
							break;
					}
			break;
		case 'dangnhap':
			require_once("Controllers/LoginController.php");
			$login_controller = new LoginController();
			switch ($act) {
				case 'dangnhap':
					$login_controller -> dangnhap();
					break;
				case 'dangnhapact':
					$login_controller -> dangnhapact();
					break;
				case 'logoutact':
					$login_controller -> logoutact();
					break;
				default:
					# code...
					break;
			}
		case 'chucvu':
			require_once("Controllers/ChucVuController.php");
			$chucvu_controller = new ChucVuController();
			switch ($act) {
			 	case 'hienthi':
			 		$chucvu_controller -> hienthi();
			 		# code...
			 		break;
			 	case 'them':
			 		$chucvu_controller -> them();
			 		break;
			 	case 'themact':
			 		$chucvu_controller -> themact();
			 		break;
			 	case 'sua':
			 		$chucvu_controller -> sua();
			 		break;
			 	case 'sua':
			 		$chucvu_controller -> suaact();
			 		break;
			 	case 'xoa':
			 		$chucvu_controller -> xoa();
			 		break;
			 	default:
			 		# code...
			 		break;
			 } 
			# code...
			break;
		case 'user':
			require_once("Controllers/UserController.php");
			$user_controller = new UserController();
			switch ($act) {
			 	case 'trangchu':
			 		$user_controller -> trangchu();
			 		# code...
			 		break;
			 	case 'sanpham':
			 		$user_controller ->	sanpham();
			 		break;
			 	case 'chitietsanpham':
			 		$user_controller ->	chitietsanpham();
			 		break;
			 	case 'dangnhap':
			 		$user_controller ->	dangnhap();
			 		break;
			 	case 'test':
			 		$user_controller ->	test();
			 		break;
			 	case 'phanloai':
			 		$user_controller ->	phanloai();
			 		break;
			 	case 'dichvu':
			 		$user_controller ->	dichvu();
			 		break;
			 	case 'deal':
			 		$user_controller ->	deal();
			 		break;
			 	case 'timkiem':
			 		$user_controller ->	timkiem();
			 		break;
			 	case 'support':
			 		$user_controller ->	support();
			 		break;
			 	break;

			 	default:
			 		# code...
			 		break;
			 } 
			break;
		default: 
			echo"<a href='?mod=sanpham&act=hienthi'>Xem thông tin sản phẩm</a>";
			# code...
			break;
	}

?>