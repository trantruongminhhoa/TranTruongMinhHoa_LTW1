<?php
    $menus=["Trang chủ", "tin tức", "Liên hệ", "Giới thiệu"];

    $subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];

    $students = [
        [
            "id" => "sv001",
            "name" => "Nguyễn Văn A",
            "gender" => "nam",
            "class" => "CNTT1"
        ],
        [
            "id" => "sv002",
            "name" => "Nguyễn Văn B",
            "gender" => "nữ",
            "class" => "CNTT2"

        ],
        [
            "id" => "sv003",
            "name" => "Nguyễn Văn B",
            "gender" => "nữ",
            "class" => "CNTT2"

        ],
        [
            "id" => "sv004",
            "name" => "Nguyễn Văn B",
            "gender" => "nữ",
            "class" => "CNTT2"

        ]
    ];

    $faculties = [
"Công nghệ thông tin",
"Quản trị kinh doanh",
"Kế toán",
"Ngôn ngữ Anh"
];
    $classes = [
"A1" => "CNTT1",
"A2" => "CNTT2",
"A3" => "CNTT3",
"A4" => "CNTT4"
];
    $genders = ["Nam", "Nữ", "Khác"];
   $hobbies = [
"LT" => "Lập trình",
"DS" => "Đọc sách",
"AN" => "Âm nhạc",
"DL" => "Du lịch",
"TT" => "Thể thao"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background: rgb(4, 40, 94);
        }

        nav ul {
            list-style: none;
            display: flex;
        }
        nav a{
            color: white;
            text-decoration: none;
            font-weight: bold;
            display: block;
            padding: 15px;
            text-align: center;
        }
        nav ul li:hover {
            background: #084298;
        }
        nav li {
            flex:1;
        }

        body {
            padding: 20px;
        }
        .s1 {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
        }
        .s1 h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
        }
        .s1 ul {
            list-style: none;
        }
        .s1 li {
            padding: 12px;
            margin-bottom: 10px;
            background: #e7f1ff;
            border-left: 5px solid #0d6efd;
            border-radius: 5px;
            transition: .3s;
        }
        .s1 li:hover {
            background: #cfe2ff;
            transform: translateX(5px);
        }

        .s2 table {
            width: 100%;
            border-collapse: collapse;
        }
        .s2 th, .s2 td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        .s2 th {
            background-color: #0d6efd;
            color: white;
        }
        .s2 tbody tr:nth-child(odd) {
            background-color: #f5f6f7;
        }
        .s2 tbody tr:hover {
            background-color: #d9e7fa;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <?php foreach ($menus as $i) { ?>
            <li><a href="#"./><?= $i ?></a></li>
            <?php } ?>
        </ul>
    </nav>
    <section class="s1">
        <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>
        <ul>
            <?php
            foreach($subjects as $i){
                echo "<li>$i</li>";
            }
            ?>
        </ul>
    </section>
    <section class=s2>
        <h3>Danh sách sinh viên</h3>
        <table>
            <tr>
                <th>STT</th>
                <th>Mã sinh viên</th>
                <th>Họ và tên</th>
                <th>Giới tính</th>
                <th>Lớp</th>
            </tr>
        <?php foreach($students as $i => $s) { ?>
            <tr>
                <td><?= $i+1 ?></td>
                <td><?= $s["id"] ?></td>
                <td><?= $s["name"] ?></td>
                <td><?= $s["gender"] ?></td>
                <td><?= $s["class"] ?></td>
            </tr>
        <?php } ?>
        </table>
    </section>
    <section class=s3>
        <h3>Đăng kí thông tin sinh viên</h3>
        <form action="#" method="post">
            <div>
                <label>Họ và tên</label>
                <input name="studentName">
            </div>
            <div>
                <label>Khoa</label>
                <select name="faculty">
                <?php foreach ($faculties as $faculty) { ?>
                <option><?= $faculty ?></option>
                <?php } ?>
                </select>
            </div>
            <div>
                <label>Lớp</label>
                <select name="class">
                <?php foreach ($classes as $key => $class) { ?>
                <option value="<?= $key ?>">
                <?= $class ?>
                </option>
                <?php } ?>
                </select>
            </div>
            <div>
                <label>Giới tính</label>
                <?php foreach ($genders as $gender) { ?>
                <label>
                <input type="radio" name="gender"
                value="<?= $gender ?>">
                <?= $gender ?>
                </label>
                <?php } ?>
            </div>
            <div>
                <label>Sở thích</label>
                <?php foreach ($hobbies as $key => $hobby) { ?>
                <label>
                <input type="checkbox" name="hobbies[]"
                value="<?= $key ?>">
                <?= $hobby ?>
                </label>
                <?php } ?>
            </div>
            <div>

            </div>
        </form>
    </section>
</body>
</html>