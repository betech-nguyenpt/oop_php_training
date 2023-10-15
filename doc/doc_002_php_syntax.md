# Viết các dòng chú thích (comment)
- Công dụng của comment là dùng để diển giải về logic, ý tưởng, cách hoạt động của biến, hàm, class, và tất cả mọi thứ cần sự mô tả.
- Cũng như các ngôn ngữ khác, thường sẽ có 2 loại comment trong source code PHP.
```php
/* This is a block comment (single line) */
/*
This is a block comment (multi-line)
This is a block comment (multi-line)
This is a block comment (multi-line)
*/
// This is a single line comment
```

Ví dụ: một vài cách sử dụng
```php
    //-----------------------------------------------------
    // Constants
    //-----------------------------------------------------
    /** Public page */
    const VISIBILITY_PUBLIC           = '1';
    /** Protected page */
    const VISIBILITY_PROTECTED        = '2';
    /** Private page */
    const VISIBILITY_PRIVATE          = '3';

    //-----------------------------------------------------
    // Properties
    //-----------------------------------------------------
    public $password_confirm, $currentpassword, $newpassword; /* for change pass in admin */
    /**
     * Avatar file
     * @var UploadedFile
     */
    public $avatar;

    /**
     * Get view url
     * @return String Url of view
     */
    public function getViewLink() {
        return Yii::$app->urlManager->createAbsoluteUrl('admin/admin-pages/view?id=' . $this->id);
    }
```

# Khai báo biến
- Biến là một định danh, nó dùng để lưu trữ các giá trị và nó có thể dùng phép gán để thay đổi giá trị.
- Cú pháp của biến bắt đầu bằng dấu đô la $ và tiếp theo là các chữ, số, dấu gạch dưới.
- Ký tự đầu tiên của tên biến phải là chữ hoặc là dấu gạch dưới, không được là số.
- PHP là một ngôn ngữ có phân biệt chữ hoa chữ thường.
> Ví dụ: $point khác $Point
- PHP là ngôn ngữ kiểu động hay dynamic type. Điều này cho phép giá trị của biến có thể thay đổi kiểu dữ liệu ví dụ từ kiểu số sang kiểu chuỗi:
```php
    $myVariable = 100;
    echo $myVar . "<br>";       // Print 100
    $myVariable = "Hello";
    echo $myVar;                // Print Hello
```
Với các ngôn ngữ kiểu tĩnh hay static type thì chúng ta không thể làm được điều này và một biến khi được khai báo với kiểu dữ liệu là chuỗi thì chỉ có thể thay đổi sang một giá trị khác cũng phải là chuỗi.

# Toán tử ép kiểu

# Hằng có kiểu

# Kiểu dữ liệu
- Kiểu Chuỗi (String): Kiểu dữ liệu chuỗi (hay string) trong PHP bao gồm tất cả các ký tự kể cả ký tự trắng và được đặt bên trong cặp dấu nháy kép " " hoặc cặp dấu nháy đơn ' '
   ```php
   $my_string = "Xin chào";
   ```
- Kiểu Số Nguyên (Integer): Kiểu dữ liệu số nguyên (hay integer) trong PHP dùng để biểu diễn các số nguyên trong toán học
   ```php
   $my_integer  = 100;
   $my_integer = "100";
   ```
- Kiểu Số thập phân (Float): Kiểu dữ liệu float trong PHP dùng để biểu diễn các số thập phân (vô hạn hoặc hữu hạn) và số thực trong toán học nhưng không phải là số nguyên.
   ```php
   $my_float = 10.365;
   $my_float = 10/3;
   $my_real_number = sqrt(2);
   ```
- Kiểu Mảng (Array): Kiểu mảng (array) trong PHP là một kiểu dữ liệu đặc biệt có thể lưu trữ một hoặc nhiều giá trị bên trong nó bao gồm cả mảng. Mảng bao gồm các phần từ khác nhau bên trong nó. Mỗi phần tử lưu trữ một giá trị và được đánh một khoá duy nhất để phân biệt với các phần tử khác trong cùng mảng.
   ```php
   $top_car_brands = ["Toyota", "Honda", "BMW", "Ford", "Hyundai"];
   ```
   Ví dụ trên biến `$top_car_brands` có giá trị là một mảng gồm 5 phần tử khác nhau. Mỗi phần tử được đánh số thứ tự từ 0 cho tới 4. Các số thứ tự này cũng chính là khoá của phần tử.
   
   Để truy cập giá trị của phần tử chúng ta sử dụng tới khoá của phần tử đó đặt bên trong cặp dấu ngoặc vuông []:
   ```php
   echo $top_car_brands[0], "<br>";
   echo $top_car_brands[2], "<br>";
   echo $top_car_brands[3], "<br>";
   echo $top_car_brands[4], "<br>";
   ```
# Function - Biến tham chiếu
Trước khi nói đến biến tham chiếu, chúng ta nhắc lại 2 loại biến gặp trong lập trình là:
- Biến giá trị dùng để chứa dữ liệu (nguyên, thực, ký tự, ...)
- Biến con trỏ dùng để chứa địa chỉ bộ nhớ.
Các biến này đều được cung cấp bộ nhớ và có địa chỉ bộ nhớ. Ví dụ câu lệnh khai báo:
```php
$a = 1;
$b = $a + 2;
$c = 
```

# Function - Truyền giá trị cho hàm theo tham chiếu

# Function - Hàm trả về các tham chiếu

# Function - Đối có giá trị mặc định

# Function - Định nghĩa chồng các hàm (Overloading)

# Function - Định nghĩa chồng các toán tử