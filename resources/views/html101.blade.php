@extends('template.default')
@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Workshop HTML</title>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    </head>

    <body>
        <style>

            body {
                font-family: "Chakra Petch", sans-serif;
                font-weight: 700;
                background-color: #dbe5e5;
                background-image: url("data:image/svg+xml,%3Csvg width='42' height='44' viewBox='0 0 42 44' xmlns='http://www.w3.org/2000/svg'%3E%3Cg id='Page-1' fill='none' fill-rule='evenodd'%3E%3Cg id='brick-wall' fill='%2377bbbb' fill-opacity='0.29'%3E%3Cpath d='M0 0h42v44H0V0zm1 1h40v20H1V1zM0 23h20v20H0V23zm22 0h20v20H22V23z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            }
            h1 {

                text-shadow: 4px 4px 8px #646161ff;
            }
        </style>

        <div class="container">
            <h1 class="text-center my-4"><strong>Workshop #HTML - FORM</strong></h1>
            <form>

                <div class="row mb-3">
                    <label for="name" class="col-sm-2 offset-sm-2 col-form-label">ชื่อ</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="name" placeholder="ชื่อของคุณ">
                        <div class="invalid-feedback">
                            กรุณากรอกชื่อของคุณ
                        </div>
                        <div class="valid-feedback">
                            ข้อมูลถูกต้อง
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="lastname" class="col-sm-2 offset-sm-2 col-form-label">นามสกุล</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="lastname" placeholder="นามสกุลของคุณ">
                        <div class="invalid-feedback">
                            กรุณากรอกนามสกุลของคุณ
                        </div>
                        <div class="valid-feedback">
                            ข้อมูลถูกต้อง
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="birthday" class="col-sm-2 offset-sm-2 col-form-label">วัน/เดือน/ปีเกิด</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="birthday" placeholder="dd/mm/yyyy">
                        <div class="invalid-feedback">
                            กรุณากรอกวัน/เดือน/ปีเกิดของคุณ
                        </div>
                        <div class="valid-feedback">
                            ข้อมูลถูกต้อง
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="age" class="col-sm-2 offset-sm-2 col-form-label">อายุ</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="age" placeholder="อายุของคุณ">
                        <div class="invalid-feedback">
                            กรุณากรอกอายุของคุณ
                        </div>
                        <div class="valid-feedback">
                            ข้อมูลถูกต้อง
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 offset-sm-2 col-form-label">เพศ</label>
                    <div class="col-sm-4 d-flex align-items-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male">
                            <label class="form-check-label" for="genderMale">ชาย</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female">
                            <label class="form-check-label" for="genderFemale">หญิง</label>
                        </div>
                        </div>
                </div>

                <div class="row mb-3">
                    <label for="myFile" class="col-sm-2 offset-sm-2 col-form-label">รูปภาพ</label>
                    <div class="col-sm-4">
                        <input type="file" id="myFile" name="myFile" class="form-control"> <div class="invalid-feedback">
                            กรุณาเลือกไฟล์รูปภาพ
                        </div>
                        <div class="valid-feedback">
                            เลือกไฟล์แล้ว
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="address" class="col-sm-2 offset-sm-2 col-form-label">ที่อยู่</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="address" placeholder="ที่อยู่ของคุณ">
                        <div class="invalid-feedback">
                            กรุณากรอกที่อยู่ของคุณ
                        </div>
                        <div class="valid-feedback">
                            ข้อมูลถูกต้อง
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="favoriteColor" class="col-sm-2 offset-sm-2 col-form-label">สีที่ชอบ</label>
                    <div class="col-sm-4">
                        <select class="form-select" id="favoriteColor">
                            <option selected value="-">-</option>
                            <option value="1">เเดง</option>
                            <option value="2">ฟ้า</option>
                            <option value="3">เหลือง</option>
                            <option value="4">เขียว</option>
                            <option value="5">ดำ</option>
                            <option value="6">ขาว</option>
                        </select>
                        <div class="invalid-feedback">
                            กรุณาเลือกสีที่คุณชอบ
                        </div>
                        <div class="valid-feedback">
                            เลือกสีแล้ว
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 offset-sm-2 col-form-label">เพลงที่ชอบ</label>
                    <div class="col-sm-4 d-flex align-items-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="music" id="music1" value="1">
                            <label class="form-check-label" for="music1">ลูกทุ่ง</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="music" id="music2" value="2">
                            <label class="form-check-label" for="music2">ป็อป</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="music" id="music3" value="3">
                            <label class="form-check-label" for="music3">ฮิบฮอป</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="music" id="music4" value="4">
                            <label class="form-check-label" for="music4">คลาสสิก</label>
                        </div>
                    </div>
                </div>

                <br><br>

                <div class="row mb-3">
                    <div class="col-sm-4 offset-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                            <label class="form-check-label" for="checkDefault">
                                ยินยอมให้เก็บข้อมูล
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3"> <div class="col-sm-2 offset-sm-2"> <button type="reset" class="btn btn-light">reset</button>
                        <button type="button" onclick="checkValidate()" class="btn btn-success">submit</button>
                    </div>
                </div>

            </form>

        </div>

    </body>
    @endsection
    @push("scripts")
    <script>

        console.log("Hello Form HTML");
        function checkValidate() {
            //ตัวเเปรเก็บสถานะการตรวจสอบว่าถูกต้องไหม
            let isValid = true;

            // ฟังก์ชันช่วยจัดการ class (เพื่อความกระชับ)
            const toggleClass = (element, condition) => {
                if (condition) {
                    element.classList.remove("is-invalid");
                    element.classList.add("is-valid");
                } else {
                    element.classList.remove("is-valid");
                    element.classList.add("is-invalid");
                    isValid = false;
                }
            };

            // 1. ตรวจสอบชื่อ
            let nameField = document.getElementById('name');
            toggleClass(nameField, nameField.value.trim() !== "");

            // 2. ตรวจสอบนามสกุล
            let lastnameField = document.getElementById('lastname');
            toggleClass(lastnameField, lastnameField.value.trim() !== "");

            // 3. ตรวจสอบวันเกิด
            let birthdayField = document.getElementById('birthday');
            toggleClass(birthdayField, birthdayField.value !== "");

            // 4. ตรวจสอบอายุ
            let ageField = document.getElementById('age');
            let ageCondition = ageField.value.trim() !== "" && !isNaN(ageField.value) && parseInt(ageField.value) >= 0;
            toggleClass(ageField, ageCondition);

            // 5. ตรวจสอบเพศ (ต้องเลือกอย่างน้อย 1 ตัวเลือก)
            let genderMale = document.getElementById('genderMale');
            let genderFemale = document.getElementById('genderFemale');
            if (!genderMale.checked && !genderFemale.checked) {
                alert('กรุณาเลือกเพศ');
                isValid = false;
            }

            // 6. ตรวจสอบรูปภาพ
            let fileField = document.getElementById('myFile');
            toggleClass(fileField, fileField.files.length > 0);

            // 7. ตรวจสอบที่อยู่
            let addressField = document.getElementById('address');
            toggleClass(addressField, addressField.value.trim() !== "");

            // 8. ตรวจสอบสีที่ชอบ (ต้องไม่เป็น '-')
            let colorSelect = document.getElementById('favoriteColor');
            toggleClass(colorSelect, colorSelect.value !== "-");

            // 9. ตรวจสอบเพลงที่ชอบ (ต้องเลือกอย่างน้อย 1 ตัวเลือก)
            let music1 = document.getElementById('music1');
            let music2 = document.getElementById('music2');
            let music3 = document.getElementById('music3');
            let music4 = document.getElementById('music4');
            if (!music1.checked && !music2.checked && !music3.checked && !music4.checked) {
                alert('กรุณาเลือกเพลงที่ชอบ');
                isValid = false;
            }

            // 10. ตรวจสอบยินยอมให้เก็บข้อมูล
            let agreement = document.getElementById('checkDefault');
            if (!agreement.checked) {
                alert('กรุณากดยินยอมให้เก็บข้อมูล');
                isValid = false;
            }
            // คืนค่าสถานะ Validation
            return isValid;
        }

    </script>
    @endpush
