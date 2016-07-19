# User Manager
## Hướng dẫn sử dụng
Hãy chắc chắn là bạn đã cài Git, Composer, Database trên máy
### Cài đặt
Đầu tiên dùng lệnh sau để clone repo này về máy:
`git clone https://github.com/qtvhao/user-manager.git user_manager`
Mở thư mục vừa clone
`cd user_manager`
Chạy lệnh sau để composer cài đặt các dependencies
`composer install`
### Cấu hình
Tạo một tệp .env
`copy .env.example .env`
Tạo APP_KEY trong .env
`php artisan key:generate`
Bây giờ hãy điền đúng thông tin kết nối Database vào file .env nhé
### Chạy
Cài đặt vào cấu hình đã xong
Thêm bảng và dữ liệu giả vào database bằng lệnh
`php artisan migrate --seed`
Giờ, chỉ cần chạy lệnh
`php artisan serve`
Bạn có thể truy cập vào ứng dụng bằng link http://localhost:8000/
