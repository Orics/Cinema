<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Rạp Chiếu phim </title>
    <link rel='stylesheet' type='text/css' href='./CSS/style.css'>
    <link rel='stylesheet' type='text/css' href='./CSS/menu.css'>
    <link rel='stylesheet' type='text/css' href='./CSS/slider.css'>
    <link rel='stylesheet' type='text/css' href='./CSS/film.css'>
    <link rel='stylesheet' type='text/css' href='./CSS/comment.css'>
    <link rel='stylesheet' type='text/css' href='./CSS/ticket.css'>
    <link rel='stylesheet' type='text/css' href='./CSS/footer.css'>
    <link rel='stylesheet' type='text/css' href='./CSS/login.css'>
</head>
<body>
    
    <div class="login">
        <h2>Đăng nhập</h2>
        <form action="/action_page.php">
            <label for="country">Số Điện Thoại</label>
            <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại...">

            <label for="address">Mật khẩu</label>
            <input type="text" id="pass" name="pass" placeholder="Nhập mật khẩu...">

            <input type="submit" value="Submit">
        </form>
    </div>
    
    <div id = 'top'>
        <img  class="logo" src="https://www.galaxycine.vn/website/images/galaxy-logo.png">
        <button id ="login_btn" > Đăng nhập </button>
        <input type="text"   class="search_text" placeholder="Tìm tên phim, diễn viên...">
        <button class = "search_btn" >tìm kiếm </button>  

    </div>

    <div class = 'menu'>
        <div class="dropdown" style="float: left;margin-left: 15%">
            <button class = "menu_btn"> MUA VÉ </button>
            <div class="dropdown-content" style="left:0"></div>  
        </div>
        <div class="dropdown" style="float: left">
            <button class = "menu_btn"> PHIM  ▼  </button>
            <div class="dropdown-content" style="left:0">
                <a href="">ĐANG CHIẾU</a>
                <a href="">SẮP CHIẾU</a>
            </div>  
        </div>
        <div class="dropdown" style="float: left">
            <button class = "menu_btn"> GÓC ĐIỆN ẢNH ▼ </button>
            <div class="dropdown-content" style="left:0">
                <a href="">THỂ LOẠI PHIM</a>
                <a href="">DIỄN VIÊN</a>
                <a href="">ĐẠO DIỄN</a>
            </div>  
        </div>
        <div class="dropdown" style="float: left">
            <button class = "menu_btn"> SỰ KIỆN ▼ </button>
            <div class="dropdown-content" style="left:0">
                <a href="">ƯU ĐÃI TUẦN</a>
                <a href="">ƯU ĐÃI THÁNG</a> 
            </div>  
        </div>
        <div class="dropdown" style="float: left">
            <button class = "menu_btn">RẠP/GIÁ VÉ </button>
            <div class="dropdown-content"></div>  
        </div>
        <div class="dropdown" style="float: left">
            <button class = "menu_btn">HỖ TRỢ </button>
            <div class="dropdown-content"></div>  
        </div>
        <div class="dropdown" style="float: left">
            <button class = "menu_btn">THÀNH VIÊN </button>
            <div class="dropdown-content"></div>  
        </div>
    </div>

    <div class="slider">
         <img class="slide1" src= "https://galaxycine.vn/media/2019/9/30/joker-ss-2048x682_1569834215011.jpg">
         <img class="slide1" src= "https://galaxycine.vn/media/2019/10/3/banner-2048x682_1570093030254.jpg">
         <img class="slide1" src= "https://galaxycine.vn/media/2019/10/1/banner-galaxy-2048x6821_1569922322475.png">
         <script>//chạy hình ảnh 
            var myIndex = 0;
            carousel();

            function carousel() {
            var i;
            var x = document.getElementsByClassName("slide1");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 5000); // Change image every 2 seconds
                }
            </script>
    </div>  

    <div class="ticket">
        <div><h1><center>MUA VÉ NHANH<center> </h1></div>
        <div class="combobox">
            <select>
                <option value="0">chọn phim :</option>
                <option value="1">MALEFICENT MISTRESS OF EVIL</option>
                <option value="2">ĐÀN ÔNG SONG TỬ</option>
                <option value="3">THẤT SƠN TÂM LINH</option>
                <option value="4">CHUYỆN NGÀY MƯA Ở NEW YORK</option>
                <option value="5">BIỆT ĐỘI BẤT HẢO</option>
                <option value="6">JOKER</option>
                <option value="7">LỜI TỪ BIỆT</option>
            </select><BR><BR>
            <select>
                <option value="0">chọn RẠP :</option>
                <option value="1">Rạp galaxy quận thủ đức</option>
                <option value="2">Rạp galaxy quận tân bình </option>
                <option value="3">Rạp galaxy quận gò vấp</option>
                <option value="4">Rạp galaxy quận 1</option>
                <option value="5">Rạp galaxy quận 2</option>
                <option value="6">Rạp galaxy quận 3</option>
                <option value="7">Rạp galaxy quận 4</option>
                <option value="8">Rạp galaxy quận 5</option>
                <option value="9">Rạp galaxy quận 6</option>
                <option value="10">Rạp galaxy quận 7</option>
                <option value="11">Rạp galaxy quận 8</option>
                <option value="12">Rạp galaxy quận 9</option>
                <option value="13">Rạp galaxy quận 10</option>
                <option value="14">Rạp galaxy quận 11</option>
                <option value="15">Rạp galaxy quận 12</option>

            </select><BR><BR>
            <select>
                <option value="0">chọn ngày chiếu :</option>
                <option value="1">ngày 1-12-2019</option>
                <option value="2">ngày 2-12-2019</option>
                <option value="3">ngày 3-12-2019</option>
                <option value="4">ngày 4-12-2019</option>
                <option value="5">ngày 5-12-2019</option>
                <option value="6">ngày 6-12-2019</option>
                <option value="7">ngày 7-12-2019</option>
                <option value="8">ngày 8-12-2019</option>
                <option value="9">ngày 9-12-2019</option>
                <option value="10">ngày 10-12-2019</option>
            </select><BR><BR>
            <select>
                <option value="0">chọn suất chiếu :</option>
                <option value="1">8 giờ 30 phút </option>
                <option value="2">10 giờ 30 phút</option>
                <option value="3">12 giờ 30 phút</option>
                <option value="4">14 giờ 30 phút</option>
                <option value="5">16 giờ 30 phút</option>
                <option value="6">18 giờ 30 phút</option>
                <option value="7">20 giờ 30 phút</option>
                <option value="8">22 giờ 30 phút</option>

            </select><BR><BR><BR>
        </div>
        <button class="btn_ticket">MUA VÉ</button>
    </div>

    <div id="film">
     <div><h1>PHIM HAY ĐANG KHỞI CHIẾU</h1></div>
        <div class =img_film style = "background-image: url('./image/img1.jpg'); float : left">
            <div class = "cover"></div>
            <button class="btn_film">MUA VÉ</button>
        </div>
        <div class =img_film style = "background-image: url('./image/img2.jpg'); float : left">
            <div class = "cover"></div>
            <button class="btn_film">MUA VÉ</button>
        </div>
        <div class =img_film style = "background-image: url('./image/img3.jpg'); float : left">
            <div class = "cover"></div>
            <button class="btn_film">MUA VÉ</button>
        </div>
        <div class =img_film style = "background-image: url('./image/img4.jpg'); float : left">
            <div class = "cover"></div>
            <button class="btn_film">MUA VÉ</button>
        </div>
        <div class =img_film style = "background-image: url('./image/img5.jpg'); float : left">
            <div class = "cover"></div>
            <button class="btn_film">MUA VÉ</button>
        </div>
        <div class =img_film style = "background-image: url('./image/img6.jpg'); float : left">
            <div class = "cover"></div>
            <button class="btn_film">MUA VÉ</button>
        </div>
        <div class =img_film style = "background-image: url('./image/img7.jpg'); float : left">
            <div class = "cover"></div>
            <button class="btn_film">MUA VÉ</button>
        </div>
        <div class =img_film style = "background-image: url('./image/img8.jpg'); float : left">
            <div class = "cover"></div>
            <button class="btn_film">MUA VÉ</button>
        </div>
        <div class =img_film style = "background-image: url('./image/img9.jpg'); float : left">
            <div class = "cover">  </div>
            <button class="btn_film">MUA VÉ</button>
        </div>
        <div class =img_film style = "background-image: url('./image/img10.jpg'); float : left">
            <div class = "cover"></div>
            <button class="btn_film">MUA VÉ</button>
        </div>
        <div class =img_film style = "background-image: url('./image/img11.jpg'); float : left">
            <div class = "cover"></div>
            <button class="btn_film">MUA VÉ</button>
        </div>
        <div class =img_film style = "background-image: url('./image/img12.jpg'); float : left">
            <div class = "cover"></div>
            <button class="btn_film">MUA VÉ</button>
        </div>
    </div> 

    <div id="comment">
        <div><h1>TIN KHUYẾN MÃI</h1></div>
        <div class =KM style = "background-image: url('./image/km1.jpg'); float : left">
            <div class = "cover">Điều kiện áp dụng:<br><BR>
                - Áp dụng cho tất cả các suất chiếu từ Thứ 2 đến Thứ 6 <br>
                - Áp dụng trực tiếp tại quầy (Không áp dụng cho đặt vé online)<br>
                - Giá vé không áp dụng cho các suất chiếu sớm, suất chiếu đặc biệt và Lễ Tết.<br>
                - Giá vé không áp dụng cho định dạng 3D và các phòng chiếu đặc biệt <br>
                - Không áp dụng đồng thời với các chương trình khuyến mãi khác của GALAXY và đối tác<br>
                (*) Ưu đãi 55.000 VND/ 1 vé 2D áp dụng tại các rạp còn lại.
            </div>
            <button class="BTNKM">Đã hiểu</button>
        </div>
        <div class =KM style = "background-image: url('./image/km2.jpg'); float : left">
            <div class = "cover">Điều kiện áp dụng:<br><BR>
                - Áp dụng cho tất cả các suất chiếu từ Thứ 2 đến Thứ 6 <br>
                - Áp dụng trực tiếp tại quầy (Không áp dụng cho đặt vé online)<br>
                - Giá vé không áp dụng cho các suất chiếu sớm, suất chiếu đặc biệt và Lễ Tết.<br>
                - Giá vé không áp dụng cho định dạng 3D và các phòng chiếu đặc biệt <br>
                - Không áp dụng đồng thời với các chương trình khuyến mãi khác của GALAXY và đối tác<br>
                (*) Ưu đãi 55.000 VND/ 1 vé 2D áp dụng tại các rạp còn lại.
            </div>
            <button class="BTNKM">Đã hiểu</button>
        </div>
        <div class =KM style = "background-image: url('./image/km3.jpg'); float : left">
            <div class = "cover">Điều kiện áp dụng:<br><BR>
                - Áp dụng cho tất cả các suất chiếu từ Thứ 2 đến Thứ 6 <br>
                - Áp dụng trực tiếp tại quầy (Không áp dụng cho đặt vé online)<br>
                - Giá vé không áp dụng cho các suất chiếu sớm, suất chiếu đặc biệt và Lễ Tết.<br>
                - Giá vé không áp dụng cho định dạng 3D và các phòng chiếu đặc biệt <br>
                - Không áp dụng đồng thời với các chương trình khuyến mãi khác của GALAXY và đối tác<br>
                (*) Ưu đãi 55.000 VND/ 1 vé 2D áp dụng tại các rạp còn lại.
            </div>
            <button class="BTNKM">Đã hiểu </button>
        </div>
        <div class =KM style = "background-image: url('./image/km4.jpg'); float : left">
            <div class = "cover">Điều kiện áp dụng:<br><BR>
                - Áp dụng cho tất cả các suất chiếu từ Thứ 2 đến Thứ 6 <br>
                - Áp dụng trực tiếp tại quầy (Không áp dụng cho đặt vé online)<br>
                - Giá vé không áp dụng cho các suất chiếu sớm, suất chiếu đặc biệt và Lễ Tết.<br>
                - Giá vé không áp dụng cho định dạng 3D và các phòng chiếu đặc biệt <br>
                - Không áp dụng đồng thời với các chương trình khuyến mãi khác của GALAXY và đối tác<br>
                (*) Ưu đãi 55.000 VND/ 1 vé 2D áp dụng tại các rạp còn lại.
            </div>
            <button class="BTNKM">Đã hiểu</button>
        </div>
        <div class =KM style = "background-image: url('./image/km5.jpg'); float : left">
            <div class = "cover">Điều kiện áp dụng:<br><BR>
                - Áp dụng cho tất cả các suất chiếu từ Thứ 2 đến Thứ 6 <br>
                - Áp dụng trực tiếp tại quầy (Không áp dụng cho đặt vé online)<br>
                - Giá vé không áp dụng cho các suất chiếu sớm, suất chiếu đặc biệt và Lễ Tết.<br>
                - Giá vé không áp dụng cho định dạng 3D và các phòng chiếu đặc biệt <br>
                - Không áp dụng đồng thời với các chương trình khuyến mãi khác của GALAXY và đối tác<br>
                (*) Ưu đãi 55.000 VND/ 1 vé 2D áp dụng tại các rạp còn lại.
            </div>    
            <button class="BTNKM">Đã hiểu</button>
        </div>
        <div class =KM style = "background-image: url('./image/km6.jpg'); float : left"> 
            <div class = "cover">Điều kiện áp dụng:<br><BR>
                - Áp dụng cho tất cả các suất chiếu từ Thứ 2 đến Thứ 6 <br>
                - Áp dụng trực tiếp tại quầy (Không áp dụng cho đặt vé online)<br>
                - Giá vé không áp dụng cho các suất chiếu sớm, suất chiếu đặc biệt và Lễ Tết.<br>
                - Giá vé không áp dụng cho định dạng 3D và các phòng chiếu đặc biệt <br>
                - Không áp dụng đồng thời với các chương trình khuyến mãi khác của GALAXY và đối tác<br>
                (*) Ưu đãi 55.000 VND/ 1 vé 2D áp dụng tại các rạp còn lại.
            </div>
            <button class="BTNKM">Đã hiểu </button>
        </div>
    </div>

    <div class =tuss>
        <center><h1>GALAXY CINEMA</h1></center><br>
        <div class =tuss1><h4>GALAXY CINEMA Galaxy Cinema là một trong những công ty tư nhân đầu tiên về điện ảnh được thành lập từ năm 2003, đã khẳng định thương hiệu là 1 trong 10 địa điểm vui chơi giải trí được yêu thích nhất. Ngoài hệ thống rạp chiếu phim hiện đại, thu hút hàng triệu lượt người đến xem, Galaxy Cinema còn hấp dẫn khán giả bởi không khí thân thiện cũng như chất lượng dịch vụ hàng đầu. Đến website galaxycine.vn, quý khách sẽ được cập nhật nhanh chóng các phim hay nhất phim mới nhất đang chiếu hoặc sắp chiếu. Lịch chiếu tại mọi hệ thống rạp chiếu phim của Galaxy Cinema cũng được cập nhật đầy đủ hàng ngày hàng giờ trên trang chủ. Đặt vé tại Galaxy Cinema dễ dàng chỉ sau vài thao tác vô cùng đơn giản. Để mua vé, hãy vào tab Mua vé. Quý khách có thể chọn Mua vé theo phim, theo rạp, theo ngày tùy cách nào tiện lợi nhất cho bản thân.Sau đó, tiến hành mua vé theo các bước hướng dẫn. Chỉ trong vài phút, quý khách sẽ nhận được tin nhắn và email phản hồi Đặt vé thành công của Galaxy Cinema. Quý khách có thể dùng tin nhắn lấy vé tại quầy vé của Galaxy Cinema hoặc quét mã QR để một bước vào rạp mà không cần tốn thêm bất kỳ công đoạn nào nữa. Nếu bạn đã chọn được phim hay để xem, hãy đặt vé cực nhanh bằng box Mua Vé Nhanh ngay từ Trang Chủ. Chỉ cần một phút, tin nhắn và email phản hồi của Galaxy Cinema sẽ gửi ngay vào điện thoại và hộp mail của bạn. Nếu chưa quyết định sẽ xem phim mới nào, hãy tham khảo các bộ phim hay trong mục Phim Đang Chiếu cũng như Phim Sắp Chiếu tại rạp chiếu phim bằng cách vào mục Bình Luận Phim ở Góc Điện Ảnh để đọc những bài bình luận chân thật nhất, tham khảo và cân nhắc. Sau đó, quý khách hãy đặt vé bằng box Mua Vé Nhanh ngay ở đầu trang để chọn được suất chiếu và chỗ ngồi vừa ý nhất.   Galaxy Cinema luôn có những chương trình khuyến mãi, ưu đãi, quà tặng vô cùng hấp dẫn như giảm giá vé, tặng vé xem phim miễn phí, tặng Combo, tặng quà phim…  dành cho quý khách. Trang web galaxycine.vn còn có mục Góc Điện Ảnh - sở hữu lượng dữ liệu về phim, diễn viên và đạo diễn, giúp quý khách dễ dàng chọn được phim mình yêu thích và nâng cao kiến thức về điện ảnh của bản thân. Ngoài ra, vào mỗi tháng, Galaxy Cinema cũng giới thiệu các phim sắp chiếu hot nhất trong mục Phim Hay Tháng để quý khách sớm có sự tính toán. Hiện nay, Galaxy Cinema đang ngày càng phát triển hơn nữa với các chương trình đặc sắc, các khuyến mãi hấp dẫn, đem đến cho khán giả những bộ phim bom tấn của thế giới và Việt Nam nhanh chóng và sớm nhất.</h4><br><br>
    </div>

    <div id="footer">
        <div class =GT style = "float : left"> GIỚI THIỆU  
            <div>➤VỀ CHÚNG TÔI</div>
            <div>➤THỎA THUẬN SỬ DỤNG</div>
            <div>➤QUY CHẾ HOẠT ĐỘNG</div>
            <div>➤CHÍNH SÁCH BẢO MẬT</div>
        </div>
        <div class =GT  style = "float : left">  GÓC ĐIỆN ẢNH 
            <div>➤THỂ LOẠI PHIM</div>
            <div>➤BÌNH LUẬN PHIM</div>
            <div>➤BLOG ĐIỆN ẢNH</div>
            <div>➤PHIM HAY THÁNG</div>
        </div>	
        <div class =GT  style = "float : left"> HỖ TRỢ 
            <div>➤GÓP Ý</div>
            <div>➤RẠP/GIÁ VÉ</div>
            <div>➤TUYỂN DỤNG</div>
            <div>➤KẾT NỐI Galaxy cinema</div>
        </div>				
        <div class =GT  style = "float : left"> LIÊN HỆ
            <div>➤instagram: galaxy_cinema</div>
            <div>➤Facebook: galaxy_cinema</div>
            <div>➤hotline:19001234</div>
            <div>➤Xem thêm tại: https://www.galaxycine.vn/</div>
        </div>					
    </div>
</body>
</html>


