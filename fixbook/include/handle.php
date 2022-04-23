<?php 

extract($_POST);

// echo '<pre>';
// echo print_r($_POST); 
// echo '<pre/>';

$errors = [] ;


// check firstname  & lastname
if(empty($firstName) || empty($lastName)){
    $errors[] = "first name and last name must be not empty";
}else if(is_numeric($firstName) || is_numeric($lastName)){
    $errors[] = "first name and last name must be string";
}else if(strlen($firstName) > 30 || strlen($lastName) > 30){
    $errors[] = "first name and last name must be less than 30 charecter";
}


// check email
if(empty($email)){
    $errors[] = "email or phone number must be not empty";
}else if(is_numeric($email)){
    $rgx = "/^(\+96309)(9|8|7)[0-9]{7}$/";

    if(!filter_var($email, FILTER_VALIDATE_REGEXP, array(
        "options" => array("regexp"=>$rgx)
    ))) {
        $errors[] = "phone number should be syrian number =>  start with +96309[9 or 8] then 7 digit";
    }
    
    
}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors[] =  "email is not valid";
}


//check password 

if(empty($password) || empty($confirmPassword)){
    $errors[] = "Password and confirmPassword must be not empty";
}
else{
    if($confirmPassword!==$password){
        $errors[] = "Password and confirmPassword must be identical";
    }else{
        if(!is_numeric($password) && !is_numeric($confirmPassword)){
            $errors[] = "Password and confirmPassword must be number";
        }else if(!(strlen($password) >= 10)){
            $errors[] = "Password must be more than 10 digit";
        }
    }
}

//specialize
if(!isset($specialize)){
    $errors[] = "specialize  must be selected at least one";
}


//interest 

if(empty($interest)){
    $errors[] = "interesting  must be not empty";
}


//image
// echo '<pre>';
// echo print_r($_FILES['image']); 
// echo '<pre/>';

$size = $_FILES['image']['size']/(1024*1024);
$actEXT = ['png','jpg'];
$name =  $_FILES['image']['name'];
$ext = pathinfo($name, PATHINFO_EXTENSION) ;

if(empty($_FILES['image']["name"])){
    $errors[] = "image is required";
}else if($size > 1){
    $errors[] = "image is must be less than 1 mb";
}else if(!in_array($ext, $actEXT)){
    $errors[] = "image is must be png or jpg";
}else{
    $string = md5(hexdec(uniqid()));
    $typeName = $_FILES['image']['tmp_name'];
    $newName = $string.".".$ext;
    move_uploaded_file($typeName, "../upload/$newName");
}

// echo  getimagesize( $filename, $image_info );

echo '<pre>';
echo print_r($errors); 
echo '<pre/>';




// $arr = http_build_query($errors, '', '&amp;');

// echo '<pre>';
// echo print_r($arr); 
// echo '<pre/>';

// header("location: ../signUp.php?errors=$arr");

?>

