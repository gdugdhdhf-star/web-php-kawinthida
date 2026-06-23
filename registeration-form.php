<form action="registeration-accept.php" method="POST">
    <label>username</label>
    <input type="text", name="username" required>
    <br>

    <label>email</label>
    <input type="email" name="userEmail" required>
    <br>

    <label>password</label>
    <input type="password" name="userPass" required>
    <br>

    <label>เงินเดือนที่คาดหวัง</label>
    <input type="number" name="userSalary">
    <br>

    <label>วันที่เริ่มงานได้</label>
    <input type="date" name="userStartDate">
    <br>

    <label>เพศ</label>
    <input type="radio" name="userGender" value="ชาย">ชาย
    <input type="radio" name="userGender" value="หญิง">หญิง
    </select>
    <br>

    <label>ตำแหน่งที่สนใจ</label>
    <select name="JobTitle">
        <option value="ไม่ระบุ">-</option>
        <option value="กราฟิกดีไซต์">กราฟิกดีไซต์</option>
        <option value="โปรแกรมเมอร์">โปรแกรมเมอร์</option>
        <option value="การตลาด">การตลาด</option>
    </select>
    <br>

    <label>ทักษะความสามารถพิเศษ</label>
    <input type="checkbox" name="userSkills[]" value="PHP">PHP
    <input type="checkbox" name="userSkills[]" value="HTML">HTML
    <input type="checkbox" name="userSkills[]" value="CSS">CSS
    <input type="checkbox" name="userSkills[]" value="SQL">SQL
    <br>

    <label>แนะนำตัวเพิ่มเติม</label>
    <textarea name="userMsg"></textarea>
    <br>


    <input type="submit" value="ส่งใบสมัคร">
    <input type="reset" value="ล้างข้อมูล">

</form>
