<?php
$multiply_number = 0;
$num1 = 0;
$num2 = 0;
$sum = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['multiply_submit'])) {
        $multiply_number = isset($_POST['multiply_number']) ? (int)$_POST['multiply_number'] : 0;
    }

    if (isset($_POST['add_submit'])) {
        $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
        $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 0;
        $sum = $num1 + $num2;
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 4 - PHP Functions</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #e0f2fe, #f8fafc);
            color: #0f172a;
            margin: 0;
            padding: 24px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.12);
            padding: 24px;
        }

        h1, h2 {
            color: #1d4ed8;
        }

        .card {
            border: 1px solid #dbeafe;
            border-radius: 14px;
            padding: 18px;
            margin-bottom: 18px;
            background: #f8fbff;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #bfdbfe;
            border-radius: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        button {
            background: #2563eb;
            color: #fff;
            border: none;
            padding: 10px 16px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #1d4ed8;
        }

        .result {
            margin-top: 12px;
            padding: 12px;
            background: #eff6ff;
            border-left: 4px solid #3b82f6;
            border-radius: 8px;
        }

        .small {
            font-size: 14px;
            color: #475569;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>เว็บไซต์ PHP สำหรับฟังก์ชันพื้นฐาน</h1>
        <p class="small">ตัวอย่างการใช้ PHP: แสดงสูตรคูณและการบวกเลข</p>

        <div class="card">
            <h2>ป้อนตัวเลขแล้วแสดง loop สูตรคูณ</h2>
            <form method="post">
                <label for="multiply_number">ป้อนตัวเลข</label>
                <input type="number" id="multiply_number" name="multiply_number" value="<?= htmlspecialchars($multiply_number) ?>" required>
                <button type="submit" name="multiply_submit" value="1">แสดงสูตรคูณ</button>
            </form>

            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['multiply_submit'])): ?>
                <div class="result">
                    <strong>ตารางสูตรคูณของตัวเลข <?= htmlspecialchars($multiply_number) ?></strong><br>
                    <?php for ($i = 1; $i <= 12; $i++): ?>
                        <?= htmlspecialchars($multiply_number) ?> x <?= $i ?> = <?= $multiply_number * $i ?><br>
                    <?php endfor; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="card">
            <h2>ป้อนตัวเลข 2 ตัวเพื่อนำไปบวกกัน</h2>
            <form method="post">
                <label for="num1">จำนวนที่ 1</label>
                <input type="number" step="any" id="num1" name="num1" value="<?= htmlspecialchars($num1) ?>" required>

                <label for="num2">จำนวนที่ 2</label>
                <input type="number" step="any" id="num2" name="num2" value="<?= htmlspecialchars($num2) ?>" required>

                <button type="submit" name="add_submit" value="1">บวกเลข</button>
            </form>

            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_submit'])): ?>
                <div class="result">
                    <strong>ผลบวก:</strong> <?= htmlspecialchars($num1) ?> + <?= htmlspecialchars($num2) ?> = <strong><?= number_format($sum, 2) ?></strong>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
