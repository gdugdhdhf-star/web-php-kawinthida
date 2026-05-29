<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติส่วนตัว - กวินธิดา คชรัตน์</title>
    <style>
        body { margin: 0; font-family: "Sarabun", Arial, sans-serif; background: #f3f4f6; color: #111827; }
        .profile { max-width: 720px; margin: 3rem auto; padding: 2rem 2.5rem; background: #ffffff; border-radius: 18px; box-shadow: 0 14px 36px rgba(15,23,42,0.12); }
        h1 { margin-top: 0; color: #0f172a; }
        .detail { display: grid; grid-template-columns: 180px 1fr; gap: 0.75rem 1rem; align-items: start; }
        .label { font-weight: 700; color: #334155; }
        .value { color: #0f172a; }
        .summary { margin-top: 1.5rem; line-height: 1.8; color: #1f2937; }
    </style>
</head>
<body>
    <div class="profile">
        <?php
            $name = "กวินธิดา คชรัตน์";
            $studentId = "69319010002";
            $major = "เทคโนโลยีสารสนเทศ";
            $level = "ปวส.1";
            $age = 18;
            $intro = "ฉันกำลังศึกษาในระดับ ปวส.1 สาขาเทคโนโลยีสารสนเทศ และชอบการพัฒนาเว็บด้วย PHP";
        ?>
        <h1>ประวัติส่วนตัว</h1>
        <div class="detail">
            <div class="label">ชื่อ:</div>
            <div class="value"><?php echo $name; ?></div>
            <div class="label">รหัสนักศึกษา:</div>
            <div class="value"><?php echo $studentId; ?></div>
            <div class="label">สาขา:</div>
            <div class="value"><?php echo $major; ?></div>
            <div class="label">ระดับ:</div>
            <div class="value"><?php echo $level; ?></div>
            <div class="label">อายุ:</div>
            <div class="value"><?php echo $age; ?> ปี</div>
        </div>
        <p class="summary"><?php echo $intro; ?></p>
    </div>
</body>
</html>
