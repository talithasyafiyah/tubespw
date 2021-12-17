    // CHECK PASSWORD STRENGTH
    var text = document.getElementById("validator");
    var password = document.getElementById("new-password")
    let regExpWeak = /[a-z]/;
    let regExpMedium = /\d+/;
    let regExpStrong = /.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/;

    function trigger()
    {
        if(password.value.length != "")
        {
            text.style.display = "flex";

            if(password.value.length <= 5 && (password.value.match(regExpWeak) || password.value.match(regExpMedium) || password.value.match(regExpStrong)))no=1;
            if(password.value.length >= 6 && ((password.value.match(regExpWeak) && password.value.match(regExpMedium)) || (password.value.match(regExpMedium) && password.value.match(regExpStrong)) || (password.value.match(regExpWeak) && password.value.match(regExpStrong))))no=2;
            if(password.value.length >= 6 && password.value.match(regExpWeak) && password.value.match(regExpMedium) && password.value.match(regExpStrong))no=3;

            if(no==1)
            {
                text.style.display = "block";
                text.textContent = "Your password is too weak (use symbol or number)";
                text.style.color = "red";
            }

            if(no==2)
            {
                text.textContent = "Your password is medium";
                text.style.color = "orange";
            }
            else
            {
                if(no==1)
                {
                    text.textContent = "Your password is too weak (use symbol or number)";
                    text.style.color = "red";
                }
                else if(no==3)
                {
                    text.textContent = "Your password is strong";
                    text.style.color = "green";
                }
            }

            if(no==3)
            {
                text.textContent = "Your password is strong";
                text.style.color = "green";
            }
            else
            {
                
            }
        }
        else
        {
            text.style.display = "block";
            text.innerHTML = '<br>';
            showBtn.style.display = "none";
        }
    }