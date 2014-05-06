<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Mobile Shop</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
	<link rel="stylesheet" type="text/css" href="css/slicebox-custom.css" />
    
	<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
	<script type="text/javascript" src="js/tooltip.js"></script>
    
    <?php require_once('db.php'); ?>
</head>

<body>
	<div class="top">
    	<div class="top-content">
        	<a href="./" target="_parent">
            	<img class="logo" src="images/logo.png" alt="logo" />
            </a>
            
			<form id="frmSearch" name="frmSearch" method="get" action="timkiem/index.php">
          		<input type="text" name="keyword" id="keyword"
                	onfocus="if(this.value == 'Mời nhập từ khóa cần tìm...') { this.value = ''; }"
                    onblur="if(this.value == '') { this.value = 'Mời nhập từ khóa cần tìm...'; }"
                    value='Mời nhập từ khóa cần tìm...' />
			</form>
            
            <div class="dashboard">
                <?php
					if(isset($_SESSION['$userid']))
					{
						echo "Xin chào Admin!";
					}
					else
					{
						echo '<span id="login">Đăng Nhập / Đăng Ký</span>' . "\n";
					}
				?>
                <script type="text/javascript" src="js/library.js"></script>
				<script type="text/javascript">
					$(function(){
						var pop = function(){$('#screen').css({"display": "block", opacity: 0.7, "width":$(document).width(),"height":$(document).height()});
							$('#screen').click(function(){$(this).css("display", "none");$('#frmLogin').css("display", "none");});
							$('#frmLogin').css({"display": "block"});
						};
						
						$('#login').click(pop);
					
						$(window).resize(function(){$('#frmLogin').css("display") == 'block'?pop.call($('#login')):"";});
					});
				</script>
            </div>
    	</div>
    </div>
    <!-- End TOP -->
    
    <div id="frmLogin">
        <h2>ĐĂNG NHẬP</h2>
        <table>
        	<tr>
            	<td width="100" style="padding-left:10px;">
                	Tài khoản:
                </td>
                <td>
		            <input type="text" id="txtTaiKhoan" style="width:210px;" />
                </td>
            </tr>
            <tr>
            	<td style="padding-left:10px;">
                	Mật khẩu:
                </td>
                <td>
		            <input type="password" id="txtMatKhau" style="width:210px;" />
                </td>
            </tr>
            <tr>
            	<td></td>
                <td>
                	<button>Đăng nhập</button>
                </td>
            </tr>
        </table>
	</div>
    
    <div id="pos-ad-01">
        <img alt="ads" src="ads/pos1.jpg" />
    </div>
    
    <div id="pos-ad-03">
    	<img id="close-button" alt="close" src="ads/close.png" onclick='$("#pos-ad-03").css({"display": "none"});' />
    	<img id="ad3" alt="ads" src="ads/pos3.jpg" />
    </div>
    
    <div id="screen"></div>
    
    <div class="container">
		<!-- Nguồn: http://tympanus.net/codrops/2011/09/05/slicebox-3d-image-slider/ -->
        <div class="slider">
            <ul id="sb-slider" class="sb-slider">
                <li>
                    <a href="http://www.flickr.com/photos/strupler/2969141180" target="_blank"><img src="images/1.jpg" alt="image1"/></a>
                    <div class="sb-description">
                        <h3>Thỏa chí mua sắm với nhiều mặt hàng giảm giá mạnh<br />Chương trình diễn ra từ 30/4 đến 7/5</h3>
                    </div>
                </li>
                <li>
                    <a href="http://www.flickr.com/photos/strupler/2968268187" target="_blank"><img src="images/2.jpg" alt="image2"/></a>
                    <div class="sb-description">
                        <h3>Iphone 5S đã có hàng<br />Nhanh chân để trở thành những người đầu tiên sở hữu</h3>
                    </div>
                </li>
                <li>
                    <a href="http://www.flickr.com/photos/strupler/2968114825" target="_blank"><img src="images/3.jpg" alt="image1"/></a>
                    <div class="sb-description">
                        <h3>Nokia Lumia 1520</h3>
                    </div>
                </li>
                <li>
                    <a href="http://www.flickr.com/photos/strupler/2968122059" target="_blank"><img src="images/4.jpg" alt="image1"/></a>
                    <div class="sb-description">
                        <h3>Sony</h3>
                    </div>
                </li>
                <li>
                    <a href="http://www.flickr.com/photos/strupler/2969119944" target="_blank"><img src="images/5.jpg" alt="image1"/></a>
                    <div class="sb-description">
                        <h3>Faithful Investor</h3>
                    </div>
                </li>
                <li>
                    <a href="http://www.flickr.com/photos/strupler/2968126177" target="_blank"><img src="images/6.jpg" alt="image1"/></a>
                    <div class="sb-description">
                        <h3>Groundbreaking Artist</h3>
                    </div>
                </li>
                <li>
                    <a href="http://www.flickr.com/photos/strupler/2968945158" target="_blank"><img src="images/7.jpg" alt="image1"/></a>
                    <div class="sb-description">
                        <h3>Selfless Philantropist</h3>
                    </div>
                </li>
            </ul>
    
            <div id="shadow" class="shadow"></div>
    
            <div id="nav-arrows" class="nav-arrows">
                <a href="#">Next</a>
                <a href="#">Previous</a>
            </div>
    
            <div id="nav-dots" class="nav-dots">
                <span class="nav-dot-current"></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <script type="text/javascript" src="js/jquery.min.js"></script>
            <script type="text/javascript" src="js/jquery.slicebox.js"></script>
            <script type="text/javascript" src="js/slicebox.js"></script>
        </div>
        <!-- END -->

		<br /><hr /><br />
        
		<div id="pos-ad-02" style="text-align:center">
	        <img alt="ads" src="ads/pos2.jpg" />
		</div>

		<div class="content">
        	<br /><hr />
            
        	<h2 class="title">SẢN PHẨM MỚI</h2>
        	<?php
				$result = Database::Get10NewProducts();
				
				if(mysql_num_rows($result) > 0)
				{
					$id = 0;
					while($row = mysql_fetch_row($result))
					{
						echo '<div class="product" onmousemove="showTooltip(\''."nProduct".$id.'\');" onmouseout="hideTooltip(\''."nProduct".$id.'\');"><img alt="'.$row[1].'" src="./dtdd/images/'.$row[6].'/thumbnail.jpg" /><div class="description">'.$row[1].'</div></div>';
							
						echo '<div id="nProduct'.$id.'" class="tooltip"><div class="tt-product-name">'.$row[1].'</div><div class="tt-price">Giá: '.number_format($row[5], 0, ',', '.').' VNĐ</div><div class="tt-general-decription">'.str_replace("\n", "<br />", $row[7]).'</div></div>';
						$id++;
					}
				}
			?>
            
            <hr />
            
            <h2 class="title">SẢN PHẨM BÁN CHẠY</h2>
            <?php
				$result = Database::Get10BestSellingProducts();
				
				if(mysql_num_rows($result) > 0)
				{
					$id = 0;
					while($row = mysql_fetch_row($result))
					{
						echo '<div class="product" onmousemove="showTooltip(\''."bsProduct".$id.'\');" onmouseout="hideTooltip(\''."bsProduct".$id.'\');"><img alt="' . $row[1] . '" src="./dtdd/images/' . $row[6] . '/thumbnail.jpg" /><div class="description">' . $row[1] . '</div></div>';
							
						echo '<div id="bsProduct'.$id.'" class="tooltip"><div class="tt-product-name">'.$row[1].'</div><div class="tt-price">Giá: '.number_format($row[5], 0, ',', '.').' VNĐ</div><div class="tt-general-decription">'.str_replace("\n", "<br />", $row[7]).'</div></div>';
						$id++;
					}
				}
			?>
            
            <hr /><br /><br />
        </div>
    </div>
    
    <div class="bottom"></div>
    
    <!-- Nguồn: http://www.codeproject.com/Articles/540858/Smooth-Scroll-to-the-Top-of-the-Page-jQuery -->
    <a href="#" ID="backToTop"></a>
    <script type="text/javascript" src="js/back-to-top.js"></script>
    <!-- END -->
    
    <?php
		session_start();
		if(!isset($_SESSION['the-first-time']))
		{
			$_SESSION['the-first-time'] = 1;
	?>
		<script type="text/javascript">
            // Để cuối tài liệu vì trang web phải load hết thì #screen mới phủ đầy tài liệu
            setTimeout
            (
                function()
                {
                    $('#pos-ad-01').css({"display": "block"});
                    $('#screen').css({"display": "block", "opacity": 0.7, "width":$(document).width(),"height":$(document).height()});
                }, 1000
            );
            $('#screen').click(function(){$(this).css("display", "none");$('#pos-ad-01').css("display", "none");});
        </script>
    <?php
		}
	?>
     
    <!-- AddThis Smart Layers BEGIN -->
    <!-- Go to http://www.addthis.com/get/smart-layers to customize -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5365de0a607ded8c"></script>
    <script type="text/javascript">
		addthis.layers({
			'theme' : 'transparent',
			'domain' : 'www.mysite.com',
			'linkFilter' : function(link, layer) {
				console.log(link.title + ' - ' + link.url + " - " + layer);
				return link;
			},
			'responsive' : {
			  'maxWidth' : '979px',
			  'minWidth' : '0px'
			},
			'share' : {
				'position' : 'left',
				'services' : 'facebook,twitter,google_plusone_share,zingme,email,print,more',
				//'numPreferredServices' : 6,
				'postShareTitle' : 'Thanks for sharing!',
				'postShareFollowMsg' : 'Follow us',
				'postShareRecommendedMsg' : 'Recommended for you',
				'desktop' : true,
				'mobile' : true,
				'theme' : 'transparent'
			},
			'follow' : {
				'services' : [
					{'service' : 'facebook', 'id' : 'AddThis'},
					{'service' : 'twitter', 'id' : 'AddThis'}
				],
				'title' : 'Follow',
				'postFollowTitle' : 'Thanks for following!',
				'postFollowRecommendedMsg' : 'Recommended for you',
				'mobile' : true,
				'desktop' : true,
				'theme' : 'transparent'
			},
			'mobile' : {
				'buttonBarPosition' : 'top',
				'buttonBarTheme' : 'transparent',
				'mobile' : true
			}
		});
    </script>
    <!-- AddThis Smart Layers END -->
</body>
</html>