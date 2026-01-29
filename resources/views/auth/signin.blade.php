<h2>Đăng ký tài khoản</h2>
<form action="/check-signin" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="password" name="repass" placeholder="Re-password" required><br>
    <input type="text" name="mssv" placeholder="MSSV" required><br>
    <input type="text" name="lopmonhoc" placeholder="Lớp môn học" required><br>
    <select name="gioitinh">
        <option value="nam">Nam</option>
        <option value="nu">Nữ</option>
    </select><br>
    <button type="submit">Sign In</button>
</form>