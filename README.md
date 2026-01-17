# Bài tập php buổi 2
## Thông tin
- Họ Tên: Trịnh Duy Nam
- Mã Sinh Viên: 23810310255

---

## Các chức năng đã hoàn thành

### 1. Form GET (`form_get.php`)
- Tạo form tìm kiếm
- Nhận dữ liệu bằng phương thức GET
- Hiển thị từ khóa tìm kiếm
- Quan sát URL thay đổi

### 2. Form POST (`form_post.php`)
- Tạo form đăng ký
- Nhận dữ liệu bằng phương thức POST
- URL không hiển thị dữ liệu nhạy cảm

### 3. Kết nối Database (`db_connect.php`)
- Kết nối CSDL `buoi2_php` bằng PDO
- Sử dụng try...catch để bắt lỗi
- Hiển thị thông báo thân thiện khi lỗi xảy ra

### 4. Thêm sinh viên (`add_student.php`)
- Form nhập: Họ tên, Mã sinh viên, Email
- Thêm dữ liệu vào bảng `students`
- Sử dụng Prepared Statement

### 5. Danh sách sinh viên (`list_students.php`)
- Lấy dữ liệu từ database
- Sử dụng fetchAll(PDO::FETCH_ASSOC)
- Hiển thị dữ liệu bằng bảng HTML
- Có cột Hành động (Sửa / Xóa – link giả)

---
