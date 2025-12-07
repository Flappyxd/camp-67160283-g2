<!--resources/views/html101.blade.php-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Workshop HTML</title>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    </head>
    
    </head>
    <body>
        <style>
            head{
                font-family: "Chakra Petch", sans-serif;
                font-weight: 700;
            }
            body{
                font-family: "Chakra Petch", sans-serif;
                font-weight: 700;
            }
            </style>
            
            <div class="container">
                    <h1 class="text-center my-4">Workshop #HTML - FORM</h1>
                    <form>
                            <div class="row mb-3">
                                    <label for="name" class="col-sm-2 offset-sm-2 col-form-label">ชื่อ</label>
                                    <div class="col-sm-4">
                                            <input type="text" class="form-control" id="name" placeholder="ชื่อของคุณ">
                                    </div>
                            </div>
                            <div class="row mb-3">
                                    <label for="lastname" class="col-sm-2 offset-sm-2 col-form-label">นามสกุล</label>
                                    <div class="col-sm-4">
                                            <input type="text" class="form-control" id="lastname" placeholder="นามสกุลของคุณ">
                                    </div>
                            </div>
                            <div class="row mb-3">
                                    <label for="lastname" class="col-sm-2 offset-sm-2 col-form-label">วัน/เดือน/ปีเกิด</label>
                                    <div class="col-sm-4">
                                            <input type="date" class="form-control" id="birthday" placeholder="dd/mm/yyyy">
                                    </div>
                            </div>
                            <div class="row mb-3">
                                    <label for="lastname" class="col-sm-2 offset-sm-2 col-form-label">อายุ</label>
                                    <div class="col-sm-4">
                                            <input type="text" class="form-control" id="lastname" placeholder="อายุของคุณ">
                                    </div>
                            </div>
                            
                            <div class="row mb-3">
    <label class="col-sm-2 offset-sm-2 col-form-label">เพศ</label>
    
    <div class="col-sm-1">
        
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male">
            <label class="form-check-label" for="genderMale">
                ชาย
            </label>
        </div>
        
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female">
            <label class="form-check-label" for="genderFemale">
                หญิง
            </label>
        </div>
    </div>
</div>
<label class="col-sm-2 offset-sm-2 col-form-label">รูปภาพ</label>
<form action="/upload" method="post" enctype="multipart/form-data">
    <input type="file" id="myFile" name="myFile">
    <br><br>
    <div class="row mb-3">
                                    <label for="address" class="col-sm-2 offset-sm-2 col-form-label">ที่อยู่</label>
                                    <div class="col-sm-4">
                                            <input class= "form-control" id="address" placeholder="ที่อยู่ของคุณ">
                                    </div>
                            </div>
                            <div class="row mb-3e">
                                    <label for="lastname" class="col-sm-2 offset-sm-2 col-form-label">สีที่ชอบ</label>
                            <select class="form-select form-select-sm" aria-label="Small select example">
                                <option selected>สี</option>
                                <option value="1">เเดง</option>
                                <option value="2">ฟ้า</option>
                                <option value="3">เหลือง</option>
                                <option value="1">เขียว</option>
                                <option value="2">ดำ</option>
                                <option value="3">ขาว</option>
                                </select>
                    </form>
    </body>
    
</html>