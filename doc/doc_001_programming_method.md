# Phương pháp lập trình cấu trúc
- Tư tưởng chính của lập trình cấu trúc là tổ chức chương trình thành các chương trình con (hàm).
- Hàm là một đơn vị chương trình độc lập dùng để thực hiện một phần việc nào đó như: Nhập số liệu, in kết quả hay thực hiện một số tính toán. Hàm cần có đối và các biến, mảng cục bộ dùng riêng cho hàm.
- Việc trao đổi dữ liệu giữa các hàm thực hiện thông qua các đối số và các biến toàn cục.
- Một chương trình cấu trúc gồm các cấu trúc dữ liệu (như biến, mảng, bản ghi) và các hàm, thủ tục.
Nhiệm vụ chính của việc tổ chức thiết kế chương trình cấu trúc là tổ chức chương trình thành các hàm, thủ tục: Chương trình sẽ bao gồm các hàm, thủ tục nào.

**Ví dụ xét yêu cầu sau**: Viết chương trình nhập toạ độ (x,y) của một dãy điểm, sau đó tìm một cặp điểm cách xa nhau nhất.
Trên tư tưởng của lập trình cấu trúc có thể tổ chức chương trình như sau:
- Sử dụng 2 mảng thực toàn bộ x và y để chứa toạ độ dãy điểm.
- Xây dựng 2 hàm:
> Hàm **inputPoints** dùng để nhập toạ độ n điểm, hàm này được khai báo như sau:
```php
function inputPoints() {
    global $arrX, $arrY;
    $arrX = [1, 3, 5, 7, 9];
    $arrY = [2, 4, 6, 8, 10];
}
```

> Hàm **distance** dùng để tính độ dài đoạn thẳng đi qua 2 điểm có chỉ số là i và j , nó được khai báo như sau:
```php
function distance($i, $j) {
    global $arrX, $arrY;
    return sqrt(pow($arrX[$i] - $arrX[$j], 2) + pow($arrY[$i] - $arrY[$j], 2));
}
```

> Hàm **getMaxDistance** để tìm 2 điểm xa nhau nhất:
```php
function getMaxDistance() {
    global $arrX, $arrY;
    inputPoints();
    $max = distance(0, 0);
    $iMax = 0;
    $jMax = 0;
    for ($ii = 0; $ii < 4; $ii++) {
        for ($jj = $ii + 1; $jj < 5; $jj++) {
            $temp = distance($ii, $jj);
            if ($temp > $max) {
                $max = $temp;
                $iMax = $ii;
                $jMax = $jj;
            }
        }
    }
    return 'Longest line with length: ' . $max . ''
            . ' throught points: (' . $arrX[$iMax] . ', ' . $arrY[$iMax] . ')'
            . ' - (' . $arrX[$jMax] . ', ' . $arrY[$jMax] . ')';
}
```

Khi thực thi, chỉ cần gọi hàm;
```php
getMaxDistance();
```

Thì sẽ cho ra kết quả:
> Longest line with length: 11.313708498985 throught points: (1, 2) - (9, 10)

# Phương pháp lập trình hướng đối tượng
- Khái niệm trung tâm của lập trình hướng đối tượng là lớp (class). Có thể xem lớp là sự kết hợp các thành phần dữ liệu và các hàm. Một lớp được định nghĩa như sau:
```php
class issue_001 {
    public $data;
    public function echoData() {
        return 'abc';
    }
}
```

- Một chương trình hướng đối tượng sẽ bao gồm các lớp có quan hệ với nhau.
- Việc phân tích, thiết kế chương trình theo phương pháp hướng đối tượng nhằm thiết kế, xây dựng các lớp.
- Từ khái niệm lớp nảy sinh hàng loạt khái niệm khác như: Thành phần dữ liệu, phương thức, phạm vi, sự đóng gói, hàm tạo, hàm huỷ, sự thừa kế, lớp cơ sở, lớp dẫn xuất, tương ứng bội, phương thức ảo, ...
- Ưu điểm của việc thiết kế hướng đối tượng là tập trung xác định các lớp để mô tả các thực thể của bài toán. Mỗi lớp đưa vào các thành phần dữ liệu của thực thể và xây dựng luôn các phương thức để xử lý dữ liệu. Như vậy việc thiết kế chương trình xuất phát từ các nội dung, các vấn đề của bài toán.

Để minh hoạ các khái niệm vừa nêu về lập trình hướng đối tượng ta trở lại xét bài toán tìm độ dài lớn nhất đi qua 2 điểm. 

Trong bài toán này ta gặp hai thực thể là Điểm (Point) và Dãy điểm (ListPoints). 

Khai báo Class của đối tượng Point gồm 2 giá trị số thực Tung độ và Hoành độ của Point.
```php
class Point {
    public $x;
    public $y;
    function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
}
```

Khai báo Class của đối tượng ListPoints bao gồm:
- Một mảng các đối tượng Point.
- Phương thức tính khoảng cách giữa 2 điểm.
- Phương thức tính khoảng cách lớn nhất giữa các điểm trong mảng đối tượng Point.
```php
class ListPoints {
    /**
     *
     * @var Point
     */
    public $points = [];
    
    function __construct() {
        $arrX = [1, 3, 5, 7, 9];
        $arrY = [2, 4, 6, 8, 10];
        for ($ii = 0; $ii < count($arrX); $ii++) {
            $this->points[] = new Point($arrX[$ii], $arrY[$ii]);
        }
    }
    
    function distance($i, $j) {
        return sqrt(pow($this->points[$i]->x - $this->points[$j]->x, 2)
                + pow($this->points[$i]->y - $this->points[$j]->y, 2));
    }
    
    function getMaxDistance() {
        $max = $this->distance(0, 0);
        $iMax = 0;
        $jMax = 0;
        for ($ii = 0; $ii < 4; $ii++) {
            for ($jj = $ii + 1; $jj < 5; $jj++) {
                $temp = $this->distance($ii, $jj);
                if ($temp > $max) {
                    $max = $temp;
                    $iMax = $ii;
                    $jMax = $jj;
                }
            }
        }
        return 'Longest line with length: ' . $max . ''
                . ' throught points: (' . $this->points[$iMax]->x . ', ' . $this->points[$iMax]->y . ')'
                . ' - (' . $this->points[$jMax]->x . ', ' . $this->points[$jMax]->y . ')';
    }
}
```

Khi thực thi, chỉ cần gọi hàm;
```php
$listPoint = new ListPoints();
echo $listPoint->getMaxDistance();
```

Thì sẽ cho ra kết quả:
> Longest line with length: 11.313708498985 throught points: (1, 2) - (9, 10)