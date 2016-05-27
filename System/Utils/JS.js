CHECK = {
    val: function(chkob) //ค่าว่าง
    {
        if (chkob.value == '')
        {
            chkob.focus();
            return false;
        } else {
            return true;
        }
    },
    min: function(chkob, lng) //ค่าต่ำ
    {
        if (chkob.value.length < lng)
        {
            chkob.focus();
            return false;
        } else {
            return true;
        }
    },
    is: function(chkob1, chkob2) {
        if (chkob1.value != chkob2.value) {
            chkob1.focus();
            chkob1.value = "";
            chkob2.value = "";
            return false;
        } else {
            return true;
        }
    },
    equ: function(chkob, lng) //ค่าเท่ากับ
    {
        if (chkob.value.length != lng)
        {
            chkob.focus();
            return false;
        } else {
            return true;
        }
    },
    is: function(chkob1, chkob2) {
        if (chkob1.value != chkob2.value) {
            chkob1.focus();
            chkob1.value = "";
            chkob2.value = "";
            return false;
        } else {
            return true;
        }
    }
    , eda: function(chkob1, chkob2) {
        if (chkob1.value != chkob2.value) {
            return false;
        } else {
            return true;
        }
    }
    ,
    txt: function(chkob) {
        if (chkob.innerHTML == "" && chkob.value == "")
        {
            return false;
        } else {
            return true;
        }
    },
    num: function(chkob) {
        if (/^[0-9]+$/.test(chkob.value)) {
            return true;
        } else {
            chkob.value = "";
            chkob.focus();
            return false;
        }
    },
    chr: function(chkob) {
        if (/^[0-9]+$/.test(chkob.value)) {
            chkob.value = "";
            chkob.focus();
            return false;
        } else {
            return true;
        }
    },
    mail: function(chkob) {
        if (/^.+@.+\..{2,3}$/.test(chkob.value)) {
            return (true);
        } else {
            chkob.focus();
            return (false);
        }
    }

};


MSG = {
    
    enter: function(msg) {
        alert('กรุณากรอก'+msg+'ด้วยค่ะ');
        return false;
    },
    select: function(msg) {
        alert('กรุณาเลือก'+msg+'ด้วยค่ะ');
        return false;
    },
    confirm: function(msg) {
        alert('กรุณายืนยัน'+msg+'ให้ตรงกันด้วยค่ะ');
        return false;
    }
    
}