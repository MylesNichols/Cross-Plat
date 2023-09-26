// function to check if string contains only digits and decimal
function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}
// validate create jar form on submit
function validateCreateJarForm() {
    let element = document.getElementById('new_jar_msg');
    let content;

    // form elements
    let jar_name = document.forms["initNewJar"]["jar_name"].value;
    let jar_pct = document.forms["initNewJar"]["jar_pct"].value;

    // msg if jar name left blank
    if (jar_name == "") {
        content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Jar name must be filled out.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    } // if the jar name is greater than 12 characters, offer 3 character and 4 character shortened alternatives
    else if (jar_name.length >= 12 && !(jar_name.includes(" "))) {
        let three_letters = jar_name.substring(0, 3);
        let four_letters = jar_name.substring(0, 4);
        content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Jar name too long. <br> Try <a class="recommendation_link" style="color: #fff; text-decoration: underline;" href = "index.php?new_jar_name=' + three_letters.toUpperCase() + '_' + jar_pct + '">' + three_letters.toUpperCase() + '</a> or <a class="recommendation_link" style="color: #fff; text-decoration: underline;" href = "index.php?new_jar_name=' + four_letters.toUpperCase() + '_' + jar_pct + '">' + four_letters.toUpperCase() + '</a>.</div > ';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
        // if the jar name includes spaces, offer alternative
    } else if (jar_name.includes(" ")) {
        // loop through and create the alternative with first letter of each word following space
        const myArr = jar_name.trim().split(" ");
        let new_jar = "";
        for (var i = 0; i < myArr.length; i++) {
            new_jar += myArr[i][0];
            if (i != myArr.length - 1) {
                new_jar += ".";
            }
        }

        // msg offering alternative
        content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Jar name cannot contain spaces. <br> Try <a href = "index.php?new_jar_name=' + new_jar.toUpperCase() + '_' + jar_pct + '">' + new_jar.toUpperCase() + '</a>.</div > ';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;

    } else if (jar_name.includes("_")) {
        content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Jar name cannot contain underscores. ';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    } else if (jar_name.includes("|")) {
        content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Jar name cannot contain pipes. ';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    }
    // msg if jar pct left blank
    else if (jar_pct == "") {
        content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Jar percent must be filled out.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    }
    // msg if jar pct includes alphabet characters
    else if (!(isNumeric(jar_pct))) {
        content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Jar percent must be a number and/or decimal.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    }
    // msg if jar pct is greater than 100
    else if (jar_pct > 100) {
        content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Jar percent must be less than or equal to 100 percent.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    }
    // msg if jar pct is less than 1
    else if (jar_pct < 1) {
        content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Jar percent must be greater than or equal to 1 percent.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    }

}

// clear error msgs on form reset
function resetCreateJarHandler() {
    let element = document.getElementById('new_jar_msg');
    element.innerHTML = "";
}

function validatePaystubDepForm() {
    let element = document.getElementById('dep_err_msg');
    let content;
    let paystub_amount = document.forms["paystubDepForm"]["paystub_amt"].value;
    let desc = document.forms["paystubDepForm"]["desc"].value;
    let category = document.forms["paystubDepForm"]["category"].value;

    if (paystub_amount == "") {
        content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Paycheck Amount must be filled out.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    }
    else if (!(isNumeric(paystub_amount))) {
        content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Paycheck Amount must only include numbers and/or a decimal.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false
    }
    else if (desc == "") {
        content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Description must be filled out.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    } if (category == "") {
        content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Category must be filled out.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    }
}
function validateIndivUpdateForm() {
    let element = document.getElementById('indiv_err_msg');
    let content;
    let new_amount = document.forms["indivUpdateForm"]["new_amount"].value;
    let desc = document.forms["indivUpdateForm"]["desc"].value;
    let selection = document.forms["indivUpdateForm"]["tranType"].value;

    if (new_amount == "") {
        content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Update Amount must be filled out.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    }
    else if (!(isNumeric(new_amount))) {
        content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Paycheck Amount must only include numbers and/or a decimal.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false
    }
    else if (desc == "") {
        content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Description must be filled out.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    }
    else if (selection == "undefined") {
        content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Transaction type must be selected.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    }
}

// clear error msgs on form reset
function resetDepHandler() {
    let element = document.getElementById('dep_err_msg');
    element.innerHTML = "";
}

// clear error msgs on form reset
function resetIndivHandler() {
    let element = document.getElementById('indiv_err_msg');
    element.innerHTML = "";
}

// account management
function validateChangePwdForm() {
    let element = document.getElementById('change_msg');
    let content;
    let old_pwd = document.forms["resetPwdForm"]["old_pwd"].value;
    let new_pwd1 = document.forms["resetPwdForm"]["new_pwd1"].value;
    let new_pwd2 = document.forms["resetPwdForm"]["new_pwd2"].value;

    if (old_pwd == "") {
        content = '<div style="width: 85%; margin-left: auto; margin-right: auto;" class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Old Password must be filled out.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    } else if (new_pwd1 == "") {
        content = '<div style="width: 85%;margin-left: auto; margin-right: auto;"  class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> New Password must be filled out.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    } else if (new_pwd2 == "") {
        content = '<div style="width: 85%;margin-left: auto; margin-right: auto;"  class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Confirm New Password must be filled out.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    }
}

function validURL(str) {
    var pattern = new RegExp('^(https?:\\/\\/)?' + // protocol
        '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|' + // domain name
        '((\\d{1,3}\\.){3}\\d{1,3}))' + // OR ip (v4) address
        '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*' + // port and path
        '(\\?[;&a-z\\d%_.~+=-]*)?' + // query string
        '(\\#[-a-z\\d_]*)?$', 'i'); // fragment locator
    return !!pattern.test(str);
}

// validate new item form
function validate_create_item_form() {
    let element = document.getElementById('new_item_msg');
    let content;
    let item_name = document.forms["initNewItem"]["item_name"].value;
    let item_price = document.forms["initNewItem"]["item_price"].value;
    let item_category = document.forms["initNewItem"]["category"].value;
    let item_deadline = document.forms["initNewItem"]["deadline"].value;
    let item_link = document.forms["initNewItem"]["item_link"].value;

    if (item_name == "") {
        content = '<div style="width: 85%; margin-left: auto; margin-right: auto;" class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Item name must be filled out.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    } else if (item_name.length > 16) {
        content = '<div style="width: 85%; margin-left: auto; margin-right: auto;" class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Item name must be 16 characters or less.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;

    } else if (item_price == "") {
        content = '<div style="width: 85%; margin-left: auto; margin-right: auto;" class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Item price must be filled out.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    } else if (!(isNumeric(item_price))) {
        content = '<div style="width: 85%; margin-left: auto; margin-right: auto;" class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Item price must contain numbers and decimals only.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    } else if (item_category == "") {
        content = '<div style="width: 85%; margin-left: auto; margin-right: auto;" class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Item category must be filled out.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    } else if (item_deadline == "") {
        content = '<div style="width: 85%; margin-left: auto; margin-right: auto;" class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Item deadline must be filled out.</div>';
        element.innerHTML = "";
        element.insertAdjacentHTML('afterbegin', content);
        return false;
    }
    if (item_link == "") {
        item_link = item_link.trim();
        // add link validation  
        if (validURL(item_link) || item_link.indexOf(".") > -1) {
            content = '<div style="width: 85%; margin-left: auto; margin-right: auto;" class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Item link must be valid.</div>';
            element.innerHTML = "";
            element.insertAdjacentHTML('afterbegin', content);
            return false;
        }
    }}