/**
 * Created by sharky on 12.07.17.
 */
$(document).ready(function () {

    var url = "/auth/getUserInfo";

    //display modal form for task editing


    $.get(url, function (data) {
        if(data==""){
            $('#userinfo').innerHTML = "Я не знаю, кто ты.\n";
        }
        var uInfTab = "";
        $('#userinfojson').val("FFFFFFFFFFFFFFFFFFFFFFFFFFFFFss");
        var JData = JSON.parse(data);
        var ui = document.getElementById('userinfo');//.innerHTML;// = "FFFFFFFFFFFFFFFFOOOOOOOOOOOOO";//'#userinfo');
        //ui.innerHTML = "FFFFFFFFFFFFFffffuuuuuuuuuuuuuuuuu";
        //ui = "ААААААААААААААААААААА";
        uInfTab += "<div class=\" uInfTabStr\"><div class=\"uInfTabCell uInfTabIndex\">Логин</div><div class=\"uInfTabCell\">" + JData.name + "</div></div>";
        uInfTab += "<div class=\" uInfTabStr\"><div class=\"uInfTabCell uInfTabIndex\">Электронная почта</div><div class=\"uInfTabCell\">" + JData.email + "</div></div>";
        uInfTab += "<div class=\" uInfTabStr\"><div class=\"uInfTabCell uInfTabIndex\">Дата регистрации</div><div class=\"uInfTabCell\">" + JData.created_at + "</div></div>";
        ui.innerHTML = uInfTab;
        //alert(uInfTab);

    });

});
