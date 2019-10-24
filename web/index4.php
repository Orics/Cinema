<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style type="text/css">
	        .container {
	        	width: 80%;
	            margin: auto;
			    border-radius: 5px;
			    background-color: #f2f2f2;
			    padding: 20px;
	        }
          	input[type=text] {
			    width: 100%;
			    padding: 12px;
			    border: 1px solid #ccc;
			    border-radius: 4px;
			    box-sizing: border-box;
			    margin-top: 6px;
			    margin-bottom: 16px;
			    resize: vertical;
			}

			input[type=submit] {
			    background-color: #4CAF50;
			    color: white;
			    padding: 12px 20px;
			    border: none;
			    border-radius: 4px;
			    cursor: pointer;
			}

			input[type=submit]:hover {
			    background-color: #45a049;
			}
        </style>
    </head>
    <body> 
		<div class="container">
			<h2>Đăng nhập</h2>
		    <form action="/action_page.php">
			    
			    <label for="country">Số Điện Thoại</label>
			    <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại...">

                <label for="address">Mật khẩu</label>
			    <input type="text" id="pass" name="pass" placeholder="Nhập mật khẩu...">

			    <input type="submit" value="Submit">
			</form>
		</div>
    </body>
</html>