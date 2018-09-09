<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Run for ตุ๊ดตู่</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Style the header */
        header {
            background-color: #666;
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: white;
        }

        /* Create two columns/boxes that floats next to each other */
        nav {
            float: left;
            width: 20%;
            height: 1150px; /* only for demonstration, should be removed */
            background: #ccc;
            padding: 20px;
        }

        /* Style the list inside the menu */
        nav ul {
            list-style-type: none;
            padding: 0;
        }

        article {
            float: left;
            padding: 20px;
            width: 80%;
            background-color: #f1f1f1;
            height: 1150px; /* only for demonstration, should be removed */
        }

        /* Clear floats after the columns */
        section:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the footer */
        footer {
            background-color: #777;
            padding: 10px;
            text-align: center;
            color: white;
        }

        /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
        @media (max-width: 600px) {
            nav, article {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>
<body>
<header>
    <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
</header>

<section>
    <nav>
        <ul>
            <li><a href="#">สมัครสมาชิก</a></li>
            <li><a href="#">เช็คสถานะการสมัคร</a></li>
            <li><a href="#">กำหนดการ</a></li>
        </ul>
    </nav>

    <article>
        <form method="POST" action="myresult.php">  
        <h3>ลงทะเบียน Run for ตุ๊ดตู่</h3>
        
            ชื่อ(ภาษาอังกฤษ):
            <input type="text" name="firstname"><br><br>
            นามสกุล(ภาษาอังกฤษ):
            <input type="text" name="lastname"><br><br>
            
            เลขประจำตัวประชาชน / เลขประจำตัวหนังสือเดินทาง :
            <input type="text" name="ID"><br><br>
            
            
                <p>เพศ</p>
                <input type="radio" name="gender" value="male" checked> ชาย
                <input type="radio" name="gender" value="female"> หญิง<br><br>
            
            อายุ :
            <input type="text" name="age"><br><br>

                <p>กรุ๊ปเลือด</p>
                <input type="radio" name="Blood" value="A" checked> A
                <input type="radio" name="Blood" value="B"> B
                <input type="radio" name="Blood" value="AB"> AB
                <input type="radio" name="Blood" value="O"> O
            <br>
            ที่อยู่ไปรษณีย์: <input type="text" name="Adress" value="">
            <br>

            
                <p>จังหวัด</p>
                <select name="cars">

                    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                    <option value="ขอนแก่น">ขอนแก่น</option>
                    <option value="นครปฐม">นครปฐม</option>
                    <option value="ราชบุรี">ราชบุรี</option>
                </select>
                <br><br>
                ประเทศ: <input type="text" name="country" value="">
                <br><br>
                รหัสไปรษณีย์: <input type="text" name="postcode" value="">
                <br><br>
                โทรศัพท์มือถือ: <input type="text" name="phone" value="">
                
                <br><br>
                E-mail Adress :
                <input type="text" name="Email"><br><br>
                
                    <input type="radio" name="size" value="XS36" checked>XS 36"
                    <input type="radio" name="size" value="S38">S 38"
                    <input type="radio" name="size" value="M40"> M 40"
                    <input type="radio" name="size" value="L42"> L 42"
                    <input type="radio" name="size" value="XL44"> XL 44"
                    <input type="radio" name="size" value="XXL46"> XXL 46"<br><br>
                    <input type="submit">
                
            </form>
    </article>
</section>

<footer>
    <p>Footer</p>
</footer>

</body>
</html>