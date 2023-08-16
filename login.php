<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form action="loginupload.php"method="post"method="post" method="post" enctype="multipart/form-data">
            <table border="1">

                <tr>
                    <th colspan="2"><hN align="center">Đăng nhập Hệ Thống</hN></th> 
                </tr>

                <tr>
                    <td>Full name</td>
                    <td><input type="text" name="fullname"placeholder="Nhập fullname"></td>
                </tr>

                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"placeholder="Nhập lại username"></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"placeholder="Nhập password"></td>
                </tr>

                <tr>
                    <td>Nhập lại Password</td>
                    <td><input type="password" name="repassword"placeholder="Nhập lại password"></td>
                </tr>

                
                    <td>Giới tính</td>
                <td>
                    <input type="radio" name="gioitinh"value='Nam'>Nam
                    <input type="radio" name="gioitinh"value='Nữ'>Nữ
                </td>

                <tr>
                    <td>Ngày sinh</td>
                    <td><input type="date" name="ngaysinh"></td>
                </tr>

                <tr>
                    <td>Địa chỉ</td>
                    <td>
                        <textarea name="diachi" id="" cols="30" rows="10"></textarea>
                    </td>
                </tr>

                <tr>
                    <td>Ảnh avatar</td>

                    <td><input type="file" name="fileToUpload"></td>
                </tr>

                <tr>
                    <td>Sở thích</td>
                    <td>
                        <input type="checkbox" name="sothich[]"value="Thể Thao"> Thể thao
                        <input type="checkbox" name="sothich[]"value="nghe nhac"> Nghe nhạc
                        <input type="checkbox" name="sothich[]"value="Web">web

                    </td>
                </tr>
                    
                <tr>
                    <td> </td>
                    <td><input type="checkbox" name="remember"> Remember password</td>
                </tr>
                <tr>
                    <th colspan="2">
                        <input type="submit" value="Login">
                        <input type="reset" value="Cancel"> 
                    </th>
                </tr>

            </table>
    </form>
</body>
</html>