<?php 
// định nghĩa class
class Person{

    // thuộc tính
    // cú pháp: phạm vi (public|protected|private) $tenThuocTinh1, $tenThuocTinh2, ...
    public $name;
    public $age;
    public $email = 'tu09945@gmail.com';

    // Hằng số 
    // Cú pháp: const TEN_HANG_SO
    const MESSAGE = 'Unicode Âcdemy';


    // phương thức
    // Cú pháp: phạm vi(public|protected|private) function tenPhuongThuc(){
        // Nội dung phương thức
    // }
    public function getName(){
        return 'Tune';
    }
}

// Tạo đối tượng
$person = new Person();

// Truy cập vào thuộc tính
echo $person->email .'</br>';
$person->name = 'Văn Tú Unicode';
echo $person->name.'</br>';

// Truy cập vào phương thức
echo $person->getName().'</br>';

// Truy cập vào hằng số
echo $person::MESSAGE.'</br>';

/**
 * Bời vì hằng số không thay đổi => không cần phụ thuộc vào đối tượng => Có thể gọi bằng cách sau:
 * TenClass::TenHangSo
 */
echo Person::MESSAGE.'</br>';
