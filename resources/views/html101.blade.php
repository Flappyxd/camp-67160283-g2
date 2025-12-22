<h1 class="text-center my-4"><strong>Workshop #HTML - FORM</strong></h1>

<form action="/mycontroller" method="POST" onsubmit="return checkValidate()" enctype="multipart/form-data" novalidate>
    @csrf

    <div class="row mb-3">
        <label for="name" class="col-sm-2 offset-sm-2 col-form-label">ชื่อ</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อของคุณ">
            <div class="invalid-feedback">กรุณากรอกชื่อของคุณ</div>
            <div class="valid-feedback">ข้อมูลถูกต้อง</div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="lastname" class="col-sm-2 offset-sm-2 col-form-label">นามสกุล</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="นามสกุลของคุณ">
            <div class="invalid-feedback">กรุณากรอกนามสกุลของคุณ</div>
            <div class="valid-feedback">ข้อมูลถูกต้อง</div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="birthday" class="col-sm-2 offset-sm-2 col-form-label">วัน/เดือน/ปีเกิด</label>
        <div class="col-sm-4">
            <input type="date" class="form-control" id="birthday" name="birthday">
            <div class="invalid-feedback">กรุณากรอกวัน/เดือน/ปีเกิดของคุณ</div>
            <div class="valid-feedback">ข้อมูลถูกต้อง</div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="age" class="col-sm-2 offset-sm-2 col-form-label">อายุ</label>
        <div class="col-sm-4">
            <input type="number" class="form-control" id="age" name="age" placeholder="อายุของคุณ">
            <div class="invalid-feedback">กรุณากรอกอายุของคุณ (ตัวเลขเท่านั้น)</div>
            <div class="valid-feedback">ข้อมูลถูกต้อง</div>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 offset-sm-2 col-form-label">เพศ</label>
        <div class="col-sm-4 d-flex align-items-center">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="genderMale" value="ชาย">
                <label class="form-check-label" for="genderMale">ชาย</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="หญิง">
                <label class="form-check-label" for="genderFemale">หญิง</label>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="myFile" class="col-sm-2 offset-sm-2 col-form-label">รูปภาพ</label>
        <div class="col-sm-4">
            <input type="file" id="myFile" name="myFile" class="form-control">
            <div class="invalid-feedback">กรุณาเลือกไฟล์รูปภาพ</div>
            <div class="valid-feedback">เลือกไฟล์แล้ว</div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="address" class="col-sm-2 offset-sm-2 col-form-label">ที่อยู่</label>
        <div class="col-sm-4">
            <input class="form-control" id="address" name="address" placeholder="ที่อยู่ของคุณ">
            <div class="invalid-feedback">กรุณากรอกที่อยู่ของคุณ</div>
            <div class="valid-feedback">ข้อมูลถูกต้อง</div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="favoriteColor" class="col-sm-2 offset-sm-2 col-form-label">สีที่ชอบ</label>
        <div class="col-sm-4">
            <select class="form-select" id="favoriteColor" name="favoriteColor">
                <option selected value="-">-</option>
                <option value="สีแดง">แดง</option>
                <option value="สีฟ้า">ฟ้า</option>
                <option value="สีเหลือง">เหลือง</option>
                <option value="สีเขียว">เขียว</option>
                <option value="สีดำ">ดำ</option>
                <option value="สีขาว">ขาว</option>
            </select>
            <div class="invalid-feedback">กรุณาเลือกสีที่คุณชอบ</div>
            <div class="valid-feedback">เลือกสีแล้ว</div>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 offset-sm-2 col-form-label">เพลงที่ชอบ</label>
        <div class="col-sm-4 d-flex align-items-center flex-wrap">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="music" id="music1" value="ลูกทุ่ง">
                <label class="form-check-label" for="music1">ลูกทุ่ง</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="music" id="music2" value="ป็อป">
                <label class="form-check-label" for="music2">ป็อป</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="music" id="music3" value="ฮิบฮอป">
                <label class="form-check-label" for="music3">ฮิบฮอป</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="music" id="music4" value="คลาสสิก">
                <label class="form-check-label" for="music4">คลาสสิก</label>
            </div>
        </div>
    </div>

    <br><br>

    <div class="row mb-3">
        <div class="col-sm-4 offset-sm-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="checkDefault" name="agreement">
                <label class="form-check-label" for="checkDefault">
                    ยินยอมให้เก็บข้อมูล
                </label>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-2 offset-sm-2">
            <button type="reset" class="btn btn-light">reset</button>
            <button type="submit" class="btn btn-success">submit</button>
        </div>
    </div>
</form>

<script>
    console.log("Script working...");
    function checkValidate() {
        let isValid = true;

        // Helper Function
        const toggleClass = (element, condition) => {
            if (!element) return;
            if (condition) {
                element.classList.remove("is-invalid");
                element.classList.add("is-valid");
            } else {
                element.classList.remove("is-valid");
                element.classList.add("is-invalid");
                isValid = false;
            }
        };

        // 1-4 Input พื้นฐาน
        let nameField = document.getElementById('name');
        toggleClass(nameField, nameField.value.trim() !== "");

        let lastnameField = document.getElementById('lastname');
        toggleClass(lastnameField, lastnameField.value.trim() !== "");

        let birthdayField = document.getElementById('birthday');
        toggleClass(birthdayField, birthdayField.value !== "");

        let ageField = document.getElementById('age');
        toggleClass(ageField, ageField.value.trim() !== "" && !isNaN(ageField.value) && parseInt(ageField.value) > 0);

        // 5. เพศ (Radio)
        let genderMale = document.getElementById('genderMale');
        let genderFemale = document.getElementById('genderFemale');
        if (!genderMale.checked && !genderFemale.checked) {
            alert('กรุณาเลือกเพศ');
            isValid = false;
        }

        // 6. ไฟล์
        let fileField = document.getElementById('myFile');
        toggleClass(fileField, fileField.files.length > 0);

        // 7. ที่อยู่
        let addressField = document.getElementById('address');
        toggleClass(addressField, addressField.value.trim() !== "");

        // 8. สี
        let favoriteColorField = document.getElementById('favoriteColor');
        toggleClass(favoriteColorField, favoriteColorField.value !== "-");

        // 9. เพลง (Radio)
        let isMusicChecked = false;
        ['music1', 'music2', 'music3', 'music4'].forEach(id => {
            if(document.getElementById(id).checked) isMusicChecked = true;
        });
        if (!isMusicChecked) {
            alert('กรุณาเลือกเพลงที่ชอบ');
            isValid = false;
        }

        // 10. ยินยอม (Checkbox)
        let checkDefault = document.getElementById('checkDefault');
        if(!checkDefault.checked) {
            alert('กรุณากดยินยอม');
            isValid = false;
        }

        return isValid;
    }
</script>
